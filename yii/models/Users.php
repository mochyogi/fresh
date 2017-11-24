<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property integer $id_user
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $nama
 * @property string $alamat
 * @property integer $no_hp
 * @property string $level
 * @property string $created_by
 * @property string $created_at
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'password', 'email', 'nama', 'alamat', 'no_hp', 'level', 'created_by', 'created_at'], 'required'],
            [['no_hp'], 'integer'],
            [['created_at'], 'safe'],
            [['username', 'password', 'email', 'nama', 'alamat'], 'string', 'max' => 100],
            [['level', 'created_by'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_user' => 'Id User',
            'username' => 'Username',
            'password' => 'Password',
            'email' => 'Email',
            'nama' => 'Nama',
            'alamat' => 'Alamat',
            'no_hp' => 'No Hp',
            'level' => 'Level',
            'created_by' => 'Created By',
            'created_at' => 'Created At',
        ];
    }
}
