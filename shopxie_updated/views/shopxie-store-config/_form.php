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

    <?= $form->field($model, 'store_category')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'store_parent_categories')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'store_phone_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'store_address')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'store_postal_code')->textInput() ?>

    <?= $form->field($model, 'store_city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'store_state')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'store_lat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'store_lng')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'store_type')->textInput() ?>

    <?= $form->field($model, 'store_status')->textInput() ?>

    <?= $form->field($model, 'added_date')->textInput() ?>

    <?= $form->field($model, 'modified')->textInput() ?>

    <?= $form->field($model, 'invoice_configration')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'store_mode')->textInput() ?>

    <?= $form->field($model, 'store_frequency')->textInput() ?>

    <?= $form->field($model, 'vat_tin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cst_tin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'exchange_allowed')->textInput() ?>

    <?= $form->field($model, 'exchange_period_days')->textInput() ?>

    <?= $form->field($model, 'refund_allowed')->textInput() ?>

    <?= $form->field($model, 'refund_give')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'free')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'company_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'company_type')->textInput() ?>

    <?= $form->field($model, 'country')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'currency')->textInput() ?>

    <?= $form->field($model, 'language')->textInput() ?>

    <?= $form->field($model, 'company_pan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'personal_pan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'operating_account_type')->textInput() ?>

    <?= $form->field($model, 'account_holder')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bank_name')->textInput() ?>

    <?= $form->field($model, 'account_number')->textInput() ?>

    <?= $form->field($model, 'account_type')->textInput() ?>

    <?= $form->field($model, 'ifsc_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'state')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'branch')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
