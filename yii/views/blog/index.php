<?php 
use yii\helpers\Url;
use app\components\CustomHelper;

$this->title = "Blog";
$this->params['breadcrumbs'][] = ['label' => 'Blog', 'url' => ['index']];
$this->registerCssFile(\yii::$app->view->theme->baseUrl.'/assets/pages/css/blog.min.css');

$c = $this->context->id;
$a = $this->context->action->id;

$css = <<<css
.blog-single-head-title a {
    color:#333;
}

.blog-single-head-title a:hover {
    color:orange;
    text-decoration:none;
}
css;

$this->registerCss($css);
?>

<div class="blog-page blog-content-2">
    <div class="row">
        <div class="col-lg-9">

            <?php if ($a == 'category'): ?>
            <div class="alert alert-info" style="margin-top:20px">Post Category : <?= htmlentities($category['category']) ?></div>
            <?php elseif ($a == 'tag'): ?>
            <div class="alert alert-info" style="margin-top:20px">Post Tag : <?= htmlentities(isset($_GET['id']) ? $_GET['id'] : '') ?></div>
            <?php elseif ($a == 'search'): ?>
            <div class="alert alert-info" style="margin-top:20px">Search result for <strong><?= htmlentities(isset($_GET['q']) ? $_GET['q'] : '') ?></strong></div>
            <?php endif; ?>

			<!-- BEGIN POST -->
            <?php if (isset($posts) && count($posts) > 0): ?>
                <?php $x = 1; $y = 1;?>
                <?php foreach ($posts as $v): ?>
                    <?php if($x%2 == 1): ?>
                        <div class="row">
                    <?php endif; ?>
                <div class="col-lg-6">
                    <div class="blog-single-content bordered blog-container">
                        <div class="blog-single-head">
                            <h1 class="blog-single-head-title"><a href="<?= Url::to(['blog/post', 'slug' => $v['slug']]) ?>"><?= htmlentities($v['title']) ?></a></h1>
                            <div class="blog-single-head-date">
                                <i class="icon-calendar font-blue"></i>
                                <span style="color:#9aa5b2"><?= CustomHelper::formatDatetime($v['date']) ?></span>
                            </div>
                        </div>
                        <?php if (isset($v['picture']) && strlen($v['picture']) > 0): ?>
                        <div class="blog-single-img" style="text-align:center">
                            <img src="<?= Url::base().'/'.$v['picture'] ?>" style="max-width:640px;max-height:480px;display:inline"> 
                        </div>
                        <?php endif; ?>
                        <div class="blog-single-desc">
                            
                            <div class="row" style="margin-bottom:20px">
                                <div class="col-md-12 text-right">
                                    <i class="icon-user font-blue"></i>
                                    <span style="color:#9aa5b2"><?= htmlentities($v['nama']) ?> | </span>
                                    <i class="icon-list font-blue"></i>
                                    <span style="color:#9aa5b2"><?= htmlentities($v['category']) ?></span> 
                                </div>
                            </div>
                            <div class="row" style="margin-bottom:20px">
                                <div class="col-md-12">
                                    <a href="<?= Url::to(['blog/post', 'slug' => $v['slug']]) ?>" class="btn btn-primary"><span class="fa fa-list"></span> Read More</a>
                                </div>                                
                            </div>
                        </div>
                        <div class="blog-single-foot">
                            
                            <ul class="blog-post-tags">
                                <?php 
                                $post_tags = (isset($v['tag']) && strlen($v['tag']) > 0) ? explode(",", $v['tag']) : [];
                                foreach ($post_tags as $v2):
                                ?>
                                <li class="uppercase">
                                    <a href="<?= Url::to(['blog/tag', 'id' => $v2]) ?>"><?= htmlentities($v2) ?></a>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        
                    </div>
                </div>
                <?php if($y%2 == 0): ?>
                    </div>
                <?php endif; ?>
                <?php $x++; $y++; ?>
            <?php endforeach; ?>
            <?php if(count($posts)%2 == 1): ?>
                </div>
                <?php endif; ?>
            <?php else: ?>
            <div class="alert alert-warning">No post found</div>
            <?php endif; ?>
			<!-- END POST -->

            <div class="row">
                
                <div class="col-md-6">
                    &nbsp;
                <?php if ($count > 0 && $page > 1): ?>
                    <a href="<?= Url::to(['blog/index', 'page' => ($page-1)]) ?>" class="btn green"><span class="fa fa-step-backward"></span> Newer Post</a>
                <?php endif; ?>
                </div>
                
                <div class="col-md-6 text-right">
                    &nbsp;
                <?php if (count($posts) > 0 && $page < ceil($count / 4)): ?>
                    <a href="<?= Url::to(['blog/index', 'page' => ($page+1)]) ?>" class="btn green">Older Post <span class="fa fa-step-forward"></span></a>
                <?php endif; ?>
                </div>
                
            </div>
        </div>
        <div class="col-lg-3">
            <?= $this->render('sidebar') ?>
        </div>
    </div>
</div>