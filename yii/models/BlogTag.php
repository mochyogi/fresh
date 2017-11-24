<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "blog_tag".
 *
 * @property integer $id_tag
 * @property integer $post_id
 * @property string $tag
 */
class BlogTag extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'blog_tag';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['post_id', 'tag'], 'required'],
            [['post_id'], 'integer'],
            [['tag'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_tag' => 'Id Tag',
            'post_id' => 'Post ID',
            'tag' => 'Tag',
        ];
    }
}
