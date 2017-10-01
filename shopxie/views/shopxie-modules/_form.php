<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ShopxieModules */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="shopxie-modules-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name_lang_key')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'desc_lang_key')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sort')->textInput() ?>

    <?= $form->field($model, 'module_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vendor_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
