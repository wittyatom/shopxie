<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ShopxieSalesSuspendedSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="shopxie-sales-suspended-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'sale_time') ?>

    <?= $form->field($model, 'customer_id') ?>

    <?= $form->field($model, 'employee_id') ?>

    <?= $form->field($model, 'comment') ?>

    <?= $form->field($model, 'invoice_number') ?>

    <?php // echo $form->field($model, 'sale_id') ?>

    <?php // echo $form->field($model, 'vendor_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
