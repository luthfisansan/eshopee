<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;


/**
 * UrlHelpers controller
 */
class CryptController extends Controller
{
    public function actionIndex()
    {
        echo '<h1>Cryptography</h1>';

        echo Yii::$app->getSecurity()->generateRandomString(200);
        echo '<br>';
        echo '<br>';
        echo Yii::$app->getSecurity()->generatePasswordHash('password');

        echo '<br>';
        echo '<br>';
        echo '<h1>Enc & Dec</h1>';
        echo $encrypt = Yii::$app->getSecurity()->encryptByPassword('My name is femi','f123');
        echo '<br>';
        echo '<br>';
        echo $decrypt = Yii::$app->getSecurity()->decryptByPassword($encrypt,'f123');


        echo '<br>';
        echo '<br>';
        echo '<h1>Data integrity</h1>';
        echo $data = Yii::$app->getSecurity()->hashData('My name is femi','qwerty');

        echo '<br>';
        echo '<br>';
        echo Yii::$app->getSecurity()->validateData($data,'qwerty');

    }


}
