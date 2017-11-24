<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "blog_author".
 *
 * @property integer $id_autrhor
 * @property string $display_name
 * @property string $first_name
 * @property string $last_name
 */
class BlogAuthor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'blog_author';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['display_name', 'first_name', 'last_name'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_autrhor' => 'Id Autrhor',
            'display_name' => 'Display Name',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
        ];
    }
}
