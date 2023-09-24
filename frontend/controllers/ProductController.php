<?php
namespace frontend\controllers;

use backend\models\Products;
use Yii;
use yii\base\InvalidParamException;
use yii\data\ActiveDataProvider;
use yii\web\BadRequestHttpException;
use yii\web\Controller;


/**
 * Site controller
 */
class ProductController extends Controller
{
    public function actionIndex($id)
    {
        //$product = Products::findOne($id);
        $product = Products::find()->where(['id'=>$id,'status'=>1])->one();
        return $this->render('index',['product'=>$product]);
    }

}
