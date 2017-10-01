<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ShopxieSubcategorySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="shopxie-subcategory-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'sub_category_id') ?>

    <?= $form->field($model, 'sub_category_name') ?>

    <?= $form->field($model, 'sub_category_display_name') ?>

    <?= $form->field($model, 'category_id') ?>

    <?= $form->field($model, 'sub_category_createdby') ?>

    <?php // echo $form->field($model, 'sub_category_createdat') ?>

    <?php // echo $form->field($model, 'deleted') ?>

    <?php // echo $form->field($model, 'vendor_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
