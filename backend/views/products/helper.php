
<?php
/**
 * Created by PhpStorm.
 * User: Femiparadise
 * Date: 6/30/2017
 * Time: 12:01 PM
 */

use yii\helpers\Html;



echo Html::tag('p','This is testing of html helper',['class'=>'well']);
echo Html::tag('div','This is div',['id'=>'div1']);
echo Html::tag('h1','This header 1');
echo Html::tag('h2','This header 2');
echo Html::tag('h3','This header 3');
echo Html::tag('h4','This header 4');
echo Html::tag('span','This is for span');
echo Html::tag('br');
echo Html::decode(Html::tag('i','',['class'=>'fa fa-user']));
echo Html::tag('hr');

echo Html::button('Submit',['class'=>'btn btn-lg btn-success']);
echo Html::resetButton('Submit',['class'=>'btn btn-lg btn-primary']);
echo Html::submitButton('Submit',['class'=>'btn btn-lg btn-warning']);

echo Html::tag('br');
echo Html::tag('br');
echo Html::label('Surname','surname');
echo Html::input('text','surname',null,['class'=>'form-control','placeholder'=>'Surname']);
echo Html::radio('sex',null,['label'=>'Male']);
echo Html::radio('sex',null,['label'=>'Female']);
echo Html::checkbox('agreement',true,['label'=>'Do you agree']);
echo Html::tag('br');
echo Html::dropDownList('gender','',['male'=>'MAle','Female'=>'Female'],['class'=>'form-control']);
echo Html::tag('br');
echo Html::img('@web/uploads/img1.jpg',['class'=>'img-round','alt'=>'This is image testing']);
echo Html::tag('br');
echo Html::ol(['A'=>'A','B'=>'B','C'=>'C']);
?>

<p></p>
<h1></h1>
<i></i>
<button
