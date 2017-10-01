<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ShopxieSessionCartSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="shopxie-session-cart-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'session_cart_id') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'store_id') ?>

    <?= $form->field($model, 'create_date') ?>

    <?= $form->field($model, 'update_date') ?>

    <?php // echo $form->field($model, 'data') ?>

    <?php // echo $form->field($model, 'additional_discount') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
