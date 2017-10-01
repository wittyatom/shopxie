<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ShopxieSubcategory */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="shopxie-subcategory-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'sub_category_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sub_category_display_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'category_id')->textInput() ?>

    <?= $form->field($model, 'sub_category_createdby')->textInput() ?>

    <?= $form->field($model, 'sub_category_createdat')->textInput() ?>

    <?= $form->field($model, 'deleted')->textInput() ?>

    <?= $form->field($model, 'vendor_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
