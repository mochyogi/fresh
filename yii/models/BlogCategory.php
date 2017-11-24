<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "blog_category".
 *
 * @property integer $id_category
 * @property string $name_category
 * @property string $date_created
 * @property string $user_created
 */
class BlogCategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'blog_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name_category', 'date_created', 'user_created'], 'required'],
            [['date_created'], 'safe'],
            [['name_category', 'user_created'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_category' => 'Id Category',
            'name_category' => 'Name Category',
            'date_created' => 'Date Created',
            'user_created' => 'User Created',
        ];
    }
}
