<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ShopxieInventorySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="shopxie-inventory-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'trans_id') ?>

    <?= $form->field($model, 'trans_items') ?>

    <?= $form->field($model, 'trans_user') ?>

    <?= $form->field($model, 'trans_date') ?>

    <?= $form->field($model, 'trans_comment') ?>

    <?php // echo $form->field($model, 'trans_location') ?>

    <?php // echo $form->field($model, 'trans_inventory') ?>

    <?php // echo $form->field($model, 'vendor_id') ?>

    <?php // echo $form->field($model, 'store_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
