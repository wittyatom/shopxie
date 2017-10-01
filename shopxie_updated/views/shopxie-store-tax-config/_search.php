<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ShopxieStoreTaxConfigSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="shopxie-store-tax-config-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'store_tax_config_id') ?>

    <?= $form->field($model, 'store_id') ?>

    <?= $form->field($model, 'subcategory_id') ?>

    <?= $form->field($model, 'vat') ?>

    <?= $form->field($model, 'cst') ?>

    <?php // echo $form->field($model, 'gst') ?>

    <?php // echo $form->field($model, 'tax_inclusive') ?>

    <?php // echo $form->field($model, 'create_date') ?>

    <?php // echo $form->field($model, 'update_data') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
