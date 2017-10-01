<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ShopxieSubcategory */

$this->title = 'Update Shopxie Subcategory: ' . $model->sub_category_id;
$this->params['breadcrumbs'][] = ['label' => 'Shopxie Subcategories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->sub_category_id, 'url' => ['view', 'id' => $model->sub_category_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="shopxie-subcategory-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
