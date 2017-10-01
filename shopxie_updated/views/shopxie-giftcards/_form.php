<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ShopxieGiftcards */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="shopxie-giftcards-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'record_time')->textInput() ?>

    <?= $form->field($model, 'giftcard_number')->textInput() ?>

    <?= $form->field($model, 'value')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deleted')->textInput() ?>

    <?= $form->field($model, 'person_id')->textInput() ?>

    <?= $form->field($model, 'vendor_id')->textInput() ?>

    <?= $form->field($model, 'store_id')->textInput() ?>

    <?= $form->field($model, 'expiry_date')->textInput() ?>

    <?= $form->field($model, 'giftcard_status')->textInput() ?>

    <?= $form->field($model, 'giftcard_tnc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sale_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
