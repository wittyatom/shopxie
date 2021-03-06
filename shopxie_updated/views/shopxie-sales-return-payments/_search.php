<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ShopxieSalesReturnPaymentsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="shopxie-sales-return-payments-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'sale_id') ?>

    <?= $form->field($model, 'payment_type') ?>

    <?= $form->field($model, 'payment_amount') ?>

    <?= $form->field($model, 'vendor_id') ?>

    <?= $form->field($model, 'store_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
