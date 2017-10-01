<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ShopxieSalesitemsTaxesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="shopxie-sales-items-taxes-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'item_tax_id') ?>

    <?= $form->field($model, 'sale_id') ?>

    <?= $form->field($model, 'item_id') ?>

    <?= $form->field($model, 'line') ?>

    <?= $form->field($model, 'name') ?>

    <?php // echo $form->field($model, 'percent') ?>

    <?php // echo $form->field($model, 'vendor_id') ?>

    <?php // echo $form->field($model, 'store_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
