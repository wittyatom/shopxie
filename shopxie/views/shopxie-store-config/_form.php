<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ShopxieStoreConfig */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="shopxie-store-config-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'person_id')->textInput() ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'store_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'store_categories')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'store_phone_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'store_address')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'store_postal_code')->textInput() ?>

    <?= $form->field($model, 'store_city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'store_lat')->textInput() ?>

    <?= $form->field($model, 'store_lng')->textInput() ?>

    <?= $form->field($model, 'added_date')->textInput() ?>

    <?= $form->field($model, 'modified')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
