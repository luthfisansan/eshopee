<?php
namespace frontend\controllers;

use backend\models\Blog;
use Yii;
use yii\web\Controller;


/**
 * UrlHelpers controller
 */
class BlogController extends Controller
{
    public function actionIndex()
    {
       $blogs = Blog::find()->all();
        return $this->render('index',['blogs'=>$blogs]);

    }

    public function actionView($id)
    {
       $blog = Blog::find()->where(['slug'=>$id])->one();
        return $this->render('view',['blog'=>$blog]);

    }


}
