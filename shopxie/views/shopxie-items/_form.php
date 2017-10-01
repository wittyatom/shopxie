<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ShopxieItems */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="shopxie-items-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'category')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'supplier_id')->textInput() ?>

    <?= $form->field($model, 'item_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cost_price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'unit_price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'reorder_level')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'receiving_quantity')->textInput() ?>

    <?= $form->field($model, 'pic_id')->textInput() ?>

    <?= $form->field($model, 'allow_alt_description')->textInput() ?>

    <?= $form->field($model, 'is_serialized')->textInput() ?>

    <?= $form->field($model, 'deleted')->textInput() ?>

    <?= $form->field($model, 'brand_id')->textInput() ?>

    <?= $form->field($model, 'parent_id')->textInput() ?>

    <?= $form->field($model, 'category_id')->textInput() ?>

    <?= $form->field($model, 'subcategory_id')->textInput() ?>

    <?= $form->field($model, 'item_color')->textInput() ?>

    <?= $form->field($model, 'custom5')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'custom6')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'custom7')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'custom8')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'custom9')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'custom10')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vendor_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
