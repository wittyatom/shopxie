<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ShopxieSize */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="shopxie-size-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'range')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'gender_profile')->dropDownList([ 'girls' => 'Girls', 'boys' => 'Boys', 'men' => 'Men', 'women' => 'Women', 'baby' => 'Baby', 'Unisex' => 'Unisex', 'Mobile Devices' => 'Mobile Devices', 'Home Appliances' => 'Home Appliances', 'Health & Personal Care' => 'Health & Personal Care', 'Games & Game Accessories' => 'Games & Game Accessories', 'Computers & Laptops' => 'Computers & Laptops', 'Indoor Sports' => 'Indoor Sports', 'Fitness' => 'Fitness', 'Outdoor & Adventure Sports' => 'Outdoor & Adventure Sports', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'vendor_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
