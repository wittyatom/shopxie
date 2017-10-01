<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ShopxieSalesReturnItems */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="shopxie-sales-return-items-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'sale_id')->textInput() ?>

    <?= $form->field($model, 'item_id')->textInput() ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'serialnumber')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'line')->textInput() ?>

    <?= $form->field($model, 'quantity_purchased')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'item_cost_price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'item_unit_price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'selling_price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'discount_percent')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'item_location')->textInput() ?>

    <?= $form->field($model, 'quantity_id')->textInput() ?>

    <?= $form->field($model, 'shipping_price')->textInput() ?>

    <?= $form->field($model, 'vendor_id')->textInput() ?>

    <?= $form->field($model, 'store_id')->textInput() ?>

    <?= $form->field($model, 'vat')->textInput() ?>

    <?= $form->field($model, 'cst')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
