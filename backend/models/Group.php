<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbls_group".
 *
 * @property integer $idGroups
 * @property string $groupsName
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 */
class Group extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbls_group';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['groupsName', 'created_at', 'updated_at'], 'required'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['groupsName'], 'string', 'max' => 255],
            [['groupsName'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idGroups' => 'Id Groups',
            'groupsName' => 'Groups Name',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
