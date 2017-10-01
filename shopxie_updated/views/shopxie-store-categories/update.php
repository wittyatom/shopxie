<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ShopxieStoreCategories */

$this->title = 'Update Shopxie Store Categories: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Shopxie Store Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->shopxie_store_category_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="shopxie-store-categories-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
