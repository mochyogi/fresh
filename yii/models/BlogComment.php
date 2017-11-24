<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "blog_comment".
 *
 * @property integer $id_comment
 * @property integer $post_id
 * @property integer $reply_to_id
 * @property string $comment
 * @property integer $user_id
 */
class BlogComment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'blog_comment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['post_id', 'reply_to_id', 'comment', 'user_id'], 'required'],
            [['post_id', 'reply_to_id', 'user_id'], 'integer'],
            [['comment'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_comment' => 'Id Comment',
            'post_id' => 'Post ID',
            'reply_to_id' => 'Reply To ID',
            'comment' => 'Comment',
            'user_id' => 'User ID',
        ];
    }
}
