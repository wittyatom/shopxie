<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ShopxieGiftcardsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="shopxie-giftcards-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'record_time') ?>

    <?= $form->field($model, 'giftcard_id') ?>

    <?= $form->field($model, 'giftcard_number') ?>

    <?= $form->field($model, 'value') ?>

    <?= $form->field($model, 'deleted') ?>

    <?php // echo $form->field($model, 'person_id') ?>

    <?php // echo $form->field($model, 'vendor_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
