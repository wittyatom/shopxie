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

    <?= $form->field($model, 'store_category') ?>

    <?php // echo $form->field($model, 'store_parent_categories') ?>

    <?php // echo $form->field($model, 'store_phone_number') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'store_address') ?>

    <?php // echo $form->field($model, 'store_postal_code') ?>

    <?php // echo $form->field($model, 'store_city') ?>

    <?php // echo $form->field($model, 'store_state') ?>

    <?php // echo $form->field($model, 'store_lat') ?>

    <?php // echo $form->field($model, 'store_lng') ?>

    <?php // echo $form->field($model, 'store_type') ?>

    <?php // echo $form->field($model, 'store_status') ?>

    <?php // echo $form->field($model, 'added_date') ?>

    <?php // echo $form->field($model, 'modified') ?>

    <?php // echo $form->field($model, 'invoice_configration') ?>

    <?php // echo $form->field($model, 'store_mode') ?>

    <?php // echo $form->field($model, 'store_frequency') ?>

    <?php // echo $form->field($model, 'vat_tin') ?>

    <?php // echo $form->field($model, 'cst_tin') ?>

    <?php // echo $form->field($model, 'pan') ?>

    <?php // echo $form->field($model, 'tan') ?>

    <?php // echo $form->field($model, 'exchange_allowed') ?>

    <?php // echo $form->field($model, 'exchange_period_days') ?>

    <?php // echo $form->field($model, 'refund_allowed') ?>

    <?php // echo $form->field($model, 'refund_give') ?>

    <?php // echo $form->field($model, 'free') ?>

    <?php // echo $form->field($model, 'company_name') ?>

    <?php // echo $form->field($model, 'company_type') ?>

    <?php // echo $form->field($model, 'country') ?>

    <?php // echo $form->field($model, 'currency') ?>

    <?php // echo $form->field($model, 'language') ?>

    <?php // echo $form->field($model, 'company_pan') ?>

    <?php // echo $form->field($model, 'personal_pan') ?>

    <?php // echo $form->field($model, 'operating_account_type') ?>

    <?php // echo $form->field($model, 'account_holder') ?>

    <?php // echo $form->field($model, 'bank_name') ?>

    <?php // echo $form->field($model, 'account_number') ?>

    <?php // echo $form->field($model, 'account_type') ?>

    <?php // echo $form->field($model, 'ifsc_code') ?>

    <?php // echo $form->field($model, 'state') ?>

    <?php // echo $form->field($model, 'city') ?>

    <?php // echo $form->field($model, 'branch') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
