<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ShopxieItemsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="shopxie-items-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'category') ?>

    <?= $form->field($model, 'supplier_id') ?>

    <?= $form->field($model, 'item_number') ?>

    <?= $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'cost_price') ?>

    <?php // echo $form->field($model, 'unit_price') ?>

    <?php // echo $form->field($model, 'reorder_level') ?>

    <?php // echo $form->field($model, 'receiving_quantity') ?>

    <?php // echo $form->field($model, 'item_id') ?>

    <?php // echo $form->field($model, 'pic_id') ?>

    <?php // echo $form->field($model, 'allow_alt_description') ?>

    <?php // echo $form->field($model, 'is_serialized') ?>

    <?php // echo $form->field($model, 'deleted') ?>

    <?php // echo $form->field($model, 'brand_id') ?>

    <?php // echo $form->field($model, 'parent_id') ?>

    <?php // echo $form->field($model, 'category_id') ?>

    <?php // echo $form->field($model, 'subcategory_id') ?>

    <?php // echo $form->field($model, 'item_color') ?>

    <?php // echo $form->field($model, 'custom5') ?>

    <?php // echo $form->field($model, 'custom6') ?>

    <?php // echo $form->field($model, 'custom7') ?>

    <?php // echo $form->field($model, 'custom8') ?>

    <?php // echo $form->field($model, 'custom9') ?>

    <?php // echo $form->field($model, 'custom10') ?>

    <?php // echo $form->field($model, 'vendor_id') ?>

    <?php // echo $form->field($model, 'store_id') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'create_date') ?>

    <?php // echo $form->field($model, 'update_date') ?>

    <?php // echo $form->field($model, 'sku_id') ?>

    <?php // echo $form->field($model, 'attribute1') ?>

    <?php // echo $form->field($model, 'attribute2') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
