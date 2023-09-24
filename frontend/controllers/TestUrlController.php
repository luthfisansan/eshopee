<?php
namespace frontend\controllers;

use Yii;
use yii\helpers\Url;
use yii\web\Controller;


/**
 * UrlHelpers controller
 */
class TestUrlController extends Controller
{

    public function actionTest($param1=null, $param2=null)
    {
        echo Url::previous().'<br>';
        echo Url::previous('rem1').'<br>';
        echo Url::previous('rem2').'<br>';
        echo $param1.' You are here '.$param2;
    }

}
