<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ShopxieStoreConfigSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="shopxie-store-config-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'store_id') ?>

    <?= $form->field($model, 'person_id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'store_name') ?>

    <?= $form->field($model, 'store_categories') ?>

    <?php // echo $form->field($model, 'store_phone_number') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'store_address') ?>

    <?php // echo $form->field($model, 'store_postal_code') ?>

    <?php // echo $form->field($model, 'store_city') ?>

    <?php // echo $form->field($model, 'store_lat') ?>

    <?php // echo $form->field($model, 'store_lng') ?>

    <?php // echo $form->field($model, 'added_date') ?>

    <?php // echo $form->field($model, 'modified') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
