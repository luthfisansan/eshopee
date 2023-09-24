<?php

namespace backend\models;

use Yii;
use yii\base\Model;

/**
 * This is the model class for table "pictures".
 *
 * @property integer $id
 * @property integer $product_id
 * @property string $image
 * @property string $created_at
 */
class UploadMultiple extends Model
{

    public $files;
    public $product_id;
    public function rules()
    {
        return [
            [['product_id'],'string'],
            [['files'], 'file', 'extensions'=>'jpg,png,gif','maxFiles'=>5,'skipOnEmpty'=>false],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'product_id' => 'Product ID',
            'image' => 'Image',
        ];
    }
}
