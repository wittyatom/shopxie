<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ShopxieSubcategorySize */

$this->title = 'Update Shopxie Subcategory Size: ' . $model->subcategory_size_id;
$this->params['breadcrumbs'][] = ['label' => 'Shopxie Subcategory Sizes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->subcategory_size_id, 'url' => ['view', 'id' => $model->subcategory_size_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="shopxie-subcategory-size-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
