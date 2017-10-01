<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ShopxieSalesSuspendedItemsTaxes */

$this->title = 'Update Shopxie Sales Suspended Items Taxes: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Shopxie Sales Suspended Items Taxes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'sale_id' => $model->sale_id, 'item_id' => $model->item_id, 'line' => $model->line, 'name' => $model->name, 'percent' => $model->percent]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="shopxie-sales-suspended-items-taxes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
