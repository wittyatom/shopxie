<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ShopxieInventory */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="shopxie-inventory-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'trans_items')->textInput() ?>

    <?= $form->field($model, 'trans_user')->textInput() ?>

    <?= $form->field($model, 'trans_date')->textInput() ?>

    <?= $form->field($model, 'trans_comment')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'trans_location')->textInput() ?>

    <?= $form->field($model, 'trans_inventory')->textInput() ?>

    <?= $form->field($model, 'vendor_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
