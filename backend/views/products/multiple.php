<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;


/* @var $this yii\web\View */
/* @var $model backend\models\Products */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="products-form">

    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>

    <?php //= $form->field($upload, 'image[]')->fileInput(['multiple'=>true]) ?>

    <?php echo $form->field($upload, 'image[]')->widget(FileInput::classname(), [
        'options' => ['accept' => 'image/*','multiple'=>true],
    ]);

    ?>

    <?= $form->field($upload, 'product_id')->dropDownList($products) ?>


    <div class="form-group">
        <?= Html::submitButton('Upload', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
