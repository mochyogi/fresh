<?php

namespace app\controllers;

use Yii;
use app\models\BlogPost;
use app\models\BlogCategory;
use app\models\BlogComment;
use app\components\CustomHelper;
use yii\web\ForbiddenHttpException;
use yii\web\NotFoundHttpException;
use app\components\SeoHelper;
use yii\web\Controller;

class BlogController extends Controller {

    public function beforeAction($action) {
        date_default_timezone_set('Asia/Jakarta');
        return parent::beforeAction($action);
    }

    public function actionIndex($page = 1) {
        
        
        if (($page = intval($page)) < 1){
            $page = 1;
        }

        $offset = ($page-1) * 4;

        $sql = '';

        if (Yii::$app->user->isGuest){
            Yii::$app->view->theme = new \yii\base\Theme([
                'pathMap' => ['@app/views' => '@app/themes/canvas'],
                'baseUrl' => '@web/themes/canvas',
            ]);
            $this->layout = "tamu";
            $sql = "SELECT bp.*, bc.category, u.UserID, u.nama, u.position, u.profile FROM blog_post bp INNER JOIN users u ON bp.username = u.Username INNER JOIN blog_category bc ON bp.id_category = bc.id WHERE type_post = 1 AND access = 'public' ORDER BY bp.`date` DESC LIMIT $offset, 4";
            $sql2 = BlogPost::find()->where(['access' => 'public'])->count();

            $posts = \Yii::$app->db->createCommand($sql)->queryAll();
            $count = $sql2;

            return $this->render('index_guest', [
                'posts' => $posts,
                'page' => $page,
                'count' => $count,
            ]);
        }
        else {
            $sql = "SELECT bp.*, bc.category, u.UserID, u.nama, u.position, u.profile FROM blog_post bp INNER JOIN users u ON bp.username = u.Username INNER JOIN blog_category bc ON bp.id_category = bc.id WHERE type_post = 1 ORDER BY bp.`date` DESC LIMIT $offset, 4";
            $sql2 = BlogPost::find()->count();

        $posts = \Yii::$app->db->createCommand($sql)->queryAll();
        $count = $sql2;

        return $this->render('index', [
            'posts' => $posts,
            'page' => $page,
            'count' => $count,
        ]);
        }
    }

    public function actionCategory($id, $page = 1) {
        if (Yii::$app->user->identity == null) {
            Yii::$app->view->theme = new \yii\base\Theme([
                'pathMap' => ['@app/views' => '@app/themes/canvas'],
                'baseUrl' => '@web/themes/canvas',
            ]);

            $this->layout = "tamu";
        }
        
        $id = intval($id);
        
        if (($page = intval($page)) < 1){
            $page = 1;
        }

        $offset = ($page-1) * 4;

        $category = \Yii::$app->db->createCommand("SELECT * FROM blog_category WHERE id = $id ORDER BY category")->queryOne();

        $posts = [];
        $sql2 = 0;
        if (\Yii::$app->user->isGuest){
            Yii::$app->view->theme = new \yii\base\Theme([
                'pathMap' => ['@app/views' => '@app/themes/canvas'],
                'baseUrl' => '@web/themes/canvas',
            ]);

            $this->layout = "tamu";

            $posts = \Yii::$app->db->createCommand("SELECT bp.*, bc.category, u.UserID, u.nama, u.position, u.profile FROM blog_post bp INNER JOIN users u ON bp.username = u.Username INNER JOIN blog_category bc ON bp.id_category = bc.id WHERE bc.id = $id AND bp.access = 'public' ORDER BY `date` DESC LIMIT $offset, 4")->queryAll();
            $sql2 = BlogPost::find()->where(['access' => 'public', 'id_category' => $id])->count();

            $count = $sql2;
            return $this->render('category_guest', [
                'posts' => $posts,
                'category' => $category,
                'count' => $count,
                'page' => $page,
                'id' => $id,
            ]);

        }
        else {
            $posts = \Yii::$app->db->createCommand("SELECT bp.*, bc.category, u.UserID, u.nama, u.position, u.profile FROM blog_post bp INNER JOIN users u ON bp.username = u.Username INNER JOIN blog_category bc ON bp.id_category = bc.id WHERE bc.id = $id ORDER BY `date` DESC LIMIT $offset, 4")->queryAll();
            $sql2 = BlogPost::find()->where(['id_category' => $id])->count();
        }

        $count = $sql2;
        return $this->render('category', [
            'posts' => $posts,
            'category' => $category,
            'count' => $count,
            'page' => $page,
            'id' => $id,
        ]);
    }

    public function actionSearch($q, $page = 1){
        if (Yii::$app->user->identity == null) {
            
            Yii::$app->view->theme = new \yii\base\Theme([
                'pathMap' => ['@app/views' => '@app/themes/canvas'],
                'baseUrl' => '@web/themes/canvas',
            ]);

            $this->layout = "tamu";
        }

        if (($page = intval($page)) < 1){
            $page = 1;
        }
        $offset = ($page-1) * 4;

        $q = addslashes($q);
        $posts = [];
        $sql2 = 0;
        if (\Yii::$app->user->isGuest){
            Yii::$app->view->theme = new \yii\base\Theme([
                'pathMap' => ['@app/views' => '@app/themes/canvas'],
                'baseUrl' => '@web/themes/canvas',
            ]);

            $this->layout = "tamu";
            $posts = \Yii::$app->db->createCommand("SELECT bp.*, bc.category, u.UserID, u.nama, u.position, u.profile FROM blog_post bp INNER JOIN users u ON bp.username = u.Username INNER JOIN blog_category bc ON bp.id_category = bc.id  WHERE bp.title LIKE '%$q%' OR bp.content LIKE '%$q%' AND bp.access = 'public' ORDER BY `date` DESC LIMIT $offset, 4;")->queryAll();
            $sql2 = \Yii::$app->db->createCommand("SELECT COUNT(*) FROM blog_post WHERE access = 'public' AND (title LIKE '%$q%' OR content LIKE '%$q%')")->queryScalar();

            $count = $sql2;

            if (count($posts) === 0){
                return "ga ketemu";
            }
            
            return $this->render('search_guest', [
                'posts' => $posts,
                'page' => $page,
                'count' => $count,
                'q' => $q,
            ]);
        }
        else {
            $posts = \Yii::$app->db->createCommand("SELECT bp.*, bc.category, u.UserID, u.nama, u.position, u.profile FROM blog_post bp INNER JOIN users u ON bp.username = u.Username INNER JOIN blog_category bc ON bp.id_category = bc.id  WHERE bp.title LIKE '%$q%' OR bp.content LIKE '%$q%' ORDER BY `date` DESC LIMIT $offset, 4;")->queryAll();
            $sql2 = \Yii::$app->db->createCommand("SELECT COUNT(*) FROM blog_post WHERE title LIKE '%$q%' OR content LIKE '%$q%'")->queryScalar();
        }

        $count = $sql2;

        if (count($posts) === 0){
            return "ga ketemu";
        }
        
        return $this->render('search', [
            'posts' => $posts,
            'page' => $page,
            'count' => $count,
            'q' => $q,
        ]);
    }

    public function actionTag($id, $page = 1) {
        if (Yii::$app->user->identity == null) {
            
            Yii::$app->view->theme = new \yii\base\Theme([
                'pathMap' => ['@app/views' => '@app/themes/canvas'],
                'baseUrl' => '@web/themes/canvas',
            ]);

            $this->layout = "tamu";
        }
        
        $id = addslashes($id);
        
        if (($page = intval($page)) < 1){
            $page = 1;
        }

        $offset = ($page-1) * 4;
        $posts = [];

        if (\YIi::$app->user->isGuest){
            Yii::$app->view->theme = new \yii\base\Theme([
                'pathMap' => ['@app/views' => '@app/themes/canvas'],
                'baseUrl' => '@web/themes/canvas',
            ]);

            $this->layout = "tamu";
            $posts = \Yii::$app->db->createCommand("SELECT bp.*, bc.category, u.UserID, u.nama, u.position, u.profile FROM blog_post bp INNER JOIN users u ON bp.username = u.Username INNER JOIN blog_category bc ON bp.id_category = bc.id WHERE bp.tag LIKE '%$id%' AND bp.access = 'public' ORDER BY `date` DESC LIMIT $offset, 4")->queryAll();
            $sql2 = \Yii::$app->db->createCommand("SELECT COUNT(*) FROM blog_post WHERE tag LIKE '%$id%' AND access = 'public'")->queryScalar();

            $count = $sql2;

            return $this->render('tag_guest', [
                'posts' => $posts,
                'count' => $count,
                'page' => $page,
                'id' => $id
            ]);
        }
        else {
            $posts = \Yii::$app->db->createCommand("SELECT bp.*, bc.category, u.UserID, u.nama, u.position, u.profile FROM blog_post bp INNER JOIN users u ON bp.username = u.Username INNER JOIN blog_category bc ON bp.id_category = bc.id WHERE bp.tag LIKE '%$id%' ORDER BY `date` DESC LIMIT $offset, 4")->queryAll();
            $sql2 = \Yii::$app->db->createCommand("SELECT COUNT(*) FROM blog_post WHERE tag LIKE '%$id%'")->queryScalar();
        }

        $count = $sql2;

        return $this->render('tag', [
            'posts' => $posts,
            'count' => $count,
            'page' => $page,
            'id' => $id
        ]);
    }

    public function actionPost(){
        $slug = isset($_GET['slug']) ? addslashes($_GET['slug']) : '';

        $post = \yii::$app->db->createCommand("SELECT bp.id AS post_id, bp.*, bc.*, u.UserID, u.nama, u.position, u.profile FROM blog_post bp INNER JOIN users u ON bp.username = u.Username INNER JOIN blog_category bc ON bp.id_category = bc.id WHERE bp.slug = '$slug'")->queryOne();

        if (!isset($slug) || empty($slug) || $post == NULL){
            throw new NotFoundHttpException('The requested page does not exist.');
            exit;
        }

        if (Yii::$app->user->identity == null) {

            if ($post['access'] == 'private'){
                throw new ForbiddenHttpException('You dont have permission to access this page.');
                exit;
            }

            Yii::$app->view->theme = new \yii\base\Theme([
                'pathMap' => ['@app/views' => '@app/themes/canvas'],
                'baseUrl' => '@web/themes/canvas',
            ]);
            $this->layout = "tamu";
        }


        $author = \yii::$app->db->createCommand("SELECT UserID, Username, nama, position, profile FROM users WHERE Username = '".$post['username']."'")->queryOne();
        $comments = \yii::$app->db->createCommand("SELECT bc.*, u.UserID, u.nama FROM blog_comment bc INNER JOIN users u ON bc.username = u.Username WHERE bc.id_blog_post = ".$post['post_id'])->queryAll();

        $increment_view = \yii::$app->db->createCommand("UPDATE blog_post SET view = view + 1 WHERE slug = '$slug'");

        try {
            $increment_view->execute();
        }
        catch(\Exception $e){
            CustomHelper::report($e->getMessage());
        }

        \Yii::$app->view->registerMetaTag([
            'name' => 'keywords',
            'content' => SeoHelper::generate_keywords(strip_tags($post['title'] . ' ' . $post['content'])),
        ]);

        \Yii::$app->view->registerMetaTag([
            'name' => 'description',
            'content' => SeoHelper::generate_description($post['content']),
        ]);

        if (Yii::$app->user->identity == null) {
            return $this->render('post_guest', [
                'post' => $post,
                'author' => $author,
                'comments' => $comments,
            ]);   
        }
        return $this->render('post', [
            'post' => $post,
            'author' => $author,
            'comments' => $comments,
        ]);
    }

    public function actionSavecomment(){
        if (Yii::$app->user->isGuest) {
            return $this->redirect(['index']);
        }

        $req = \yii::$app->request;
        if ($req->isPost){
            $post_id = $req->post('post_id');
            $comment = $req->post('comment');
            
            $bc = new BlogComment;
            $bc->id_blog_post = $post_id;
            $bc->username = \yii::$app->user->identity->Username;
            $bc->comment = htmlentities($comment);
            $bc->date = date("Y-m-d H:i:s");
            $bc->user_update = \yii::$app->user->identity->Username;
            $bc->last_update = date("Y-m-d H:i:s");
            return ($bc->save()) ? json_encode(['date' => $bc->date]) : '';
        }
    }

    public function actionGallery($page = 1){
        if (($page = intval($page)) < 1){
            $page = 1;
        }
        $offset = ($page-1) * 9;

        $obj_list_gallery = "SELECT bp.*, u.UserID, u.nama, u.position, u.profile FROM blog_post bp INNER JOIN users u ON bp.username = u.Username WHERE type_post = 0 ORDER BY bp.`date` DESC LIMIT $offset, 9";
        //BlogPost::find()->leftJoin('users','users.Username=blog_post.username')->where(['type_post' => 0])->orderBy(['last_update' => SORT_DESC])->offset($offset)->limit(9)->all();
        $count = BlogPost::find()->where(['type_post' => 0])->orderBy(['last_update' => SORT_DESC])->count();

        return $this->render('gallery', [
            'obj_list_gallery' => $obj_list_gallery,
            'page' => $page,
            'count' => $count
        ]);
    }

    public function actionGalleryDetail($slug){
        $obj_gallery = BlogPost::find()->where(['slug' => $slug])->one();
        $obj_gallery_detail = \app\models\GalleryDetail::find()->where(['id_post' => $obj_gallery->id])->all();

        $author = \yii::$app->db->createCommand("SELECT UserID, Username, nama, position, profile FROM users WHERE Username = '".$obj_gallery['username']."'")->queryOne();
        $comments = \yii::$app->db->createCommand("SELECT bc.*, u.UserID, u.nama FROM blog_comment bc INNER JOIN users u ON bc.username = u.Username WHERE bc.id_blog_post = ".$obj_gallery['id'])->queryAll();

        return $this->render('gallery_detail', [
            'author' => $author,
            'comments' => $comments,
            'obj_gallery' => $obj_gallery,
            'obj_gallery_detail' => $obj_gallery_detail,
        ]);
    }

}
