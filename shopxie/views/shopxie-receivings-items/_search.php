<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ShopxieReceivingsItemsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="shopxie-receivings-items-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'receiving_id') ?>

    <?= $form->field($model, 'item_id') ?>

    <?= $form->field($model, 'description') ?>

    <?= $form->field($model, 'serialnumber') ?>

    <?= $form->field($model, 'line') ?>

    <?php // echo $form->field($model, 'quantity_purchased') ?>

    <?php // echo $form->field($model, 'item_cost_price') ?>

    <?php // echo $form->field($model, 'item_unit_price') ?>

    <?php // echo $form->field($model, 'discount_percent') ?>

    <?php // echo $form->field($model, 'item_location') ?>

    <?php // echo $form->field($model, 'receiving_quantity') ?>

    <?php // echo $form->field($model, 'vendor_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
