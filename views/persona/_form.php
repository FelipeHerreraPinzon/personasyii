<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Persona $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="persona-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>
<br>
    <?= $form->field($model, 'profesion')->textInput(['maxlength' => true]) ?>
<br>
   <?= Html::img( $model->imagen, ['width'=>'100px'] );  ?>
    <?= $form->field($model, 'archivo')->fileInput() ?>
<br>
    <div class="form-group">
        <?= Html::submitButton('ENVIAR', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
