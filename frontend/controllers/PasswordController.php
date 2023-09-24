<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;


/**
 * UrlHelpers controller
 */
class PasswordController extends Controller
{
    public function actionIndex()
    {
        echo $password = Yii::$app->getSecurity()->generatePasswordHash('qwerty');
    }

    public function actionPassword()
    {
        //$hash = '$2y$13$K1Y6roeoCSLlTnyf3UAm6uv8Yi6veukIppgpXRcXSNEput/bxfUc.';
        $hash = '$2y$13$P6n0YQbpsnuYZmHNwrBplOt.GHO2mD70xCC.jeZfkJuoShW8uxX0y';
        if(Yii::$app->getSecurity()->validatePassword('qwerty',$hash)){
            echo 'password is correct';
        }else {
            echo 'not correct';
        }
    }

}
