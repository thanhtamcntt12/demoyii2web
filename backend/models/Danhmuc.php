<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "danhmuc".
 *
 * @property integer $idCate
 * @property string $Icon
 * @property string $CateName
 * @property integer $Parentid
 * @property string $Keywords
 * @property string $Description
 * @property string $Order
 * @property integer $Groupsid
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 */
class Danhmuc extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'danhmuc';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CateName', 'Order', 'created_at', 'updated_at'], 'required', 'message' => '{attribute} không được để trống'],
            [['Parentid', 'Groupsid', 'status', 'created_at', 'updated_at'], 'integer'],
            [['Icon', 'Keywords', 'Description', 'Order'], 'string', 'max' => 255],
            [['CateName'], 'string', 'max' => 150],
            [['CateName'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idCate' => 'Id Cate',
            'Icon' => 'Ảnh',
            'CateName' => 'Tên danh mục',
            'Parentid' => 'Danh mục cha',
            'Keywords' => 'Từ khóa',
            'Description' => 'Mô tả',
            'Order' => 'Thứ tự hiển thị',
            'Groupsid' => 'Nhóm danh mục',
            'status' => 'Trạng thái',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public $data;
    public function getCategoryParent($parent = 0, $level =""){
        $result = Danhmuc::find()->asArray()
        ->where('Parentid = :parent', ['parent'=>$parent])
        ->all();
        $level .= "-";
        foreach ($result as $key => $value) {
            if($parent==0){
                $level ="";
            }
            $this->data[$value["idCate"]] = $level.$value["CateName"];
            // de quy : goi lai chinh no
            self::getCategoryParent($value["idCate"], $level);
        }

        return $this->data;
    }
}
