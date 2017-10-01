<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ShopxieSalesReturnItems */

$this->title = $model->sale_id;
$this->params['breadcrumbs'][] = ['label' => 'Shopxie Sales Return Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shopxie-sales-return-items-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'sale_id' => $model->sale_id, 'item_id' => $model->item_id, 'line' => $model->line], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'sale_id' => $model->sale_id, 'item_id' => $model->item_id, 'line' => $model->line], [
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
            'description',
            'serialnumber',
            'line',
            'quantity_purchased',
            'item_cost_price',
            'item_unit_price',
            'selling_price',
            'discount_percent',
            'item_location',
            'quantity_id',
            'shipping_price',
            'vendor_id',
            'store_id',
            'vat',
            'cst',
        ],
    ]) ?>

</div>
