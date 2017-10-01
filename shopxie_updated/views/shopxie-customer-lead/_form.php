<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ShopxieCustomerLead */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="shopxie-customer-lead-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'customer_phone_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'customer_visit')->textInput() ?>

    <?= $form->field($model, 'store_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
