<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ShopxieModulesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="shopxie-modules-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'name_lang_key') ?>

    <?= $form->field($model, 'desc_lang_key') ?>

    <?= $form->field($model, 'sort') ?>

    <?= $form->field($model, 'module_id') ?>

    <?= $form->field($model, 'vendor_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
