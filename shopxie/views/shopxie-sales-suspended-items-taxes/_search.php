<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ShopxieSalesSuspendedItemsTaxesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="shopxie-sales-suspended-items-taxes-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'sale_id') ?>

    <?= $form->field($model, 'item_id') ?>

    <?= $form->field($model, 'line') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'percent') ?>

    <?php // echo $form->field($model, 'vendor_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
