<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "blog_post".
 *
 * @property integer $id_blog
 * @property string $title
 * @property string $article
 * @property string $date_published
 * @property integer $comment_id
 * @property string $image
 * @property integer $view
 * @property integer $tag
 * @property integer $category
 * @property integer $author
 */
class BlogPost extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'blog_post';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date_published'], 'safe'],
            [['comment_id', 'view', 'tag', 'category', 'author'], 'integer'],
            [['title', 'article', 'image'], 'string', 'max' => 50],
            [['foto'], 'file', 'skipOnEmpty'=>false, 'extensions'=>'png, jpg'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_blog' => 'Id Blog',
            'title' => 'Title',
            'article' => 'Article',
            'date_published' => 'Date Published',
            'comment_id' => 'Comment ID',
            'image' => 'Image',
            'view' => 'View',
            'tag' => 'Tag',
            'category'=>'Category',
            'author' => 'Author',
        ];
    }
}
