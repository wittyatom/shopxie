<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ShopxieSalesSuspendedItemsTaxes */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Shopxie Sales Suspended Items Taxes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shopxie-sales-suspended-items-taxes-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'sale_id' => $model->sale_id, 'item_id' => $model->item_id, 'line' => $model->line, 'name' => $model->name, 'percent' => $model->percent], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'sale_id' => $model->sale_id, 'item_id' => $model->item_id, 'line' => $model->line, 'name' => $model->name, 'percent' => $model->percent], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'sale_id',
            'item_id',
            'line',
            'name',
            'percent',
            'vendor_id',
        ],
    ]) ?>

</div>
