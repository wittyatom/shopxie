<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ShopxieSalesReturnItemsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Shopxie Sales Return Items';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shopxie-sales-return-items-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Shopxie Sales Return Items', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'sale_id',
            'item_id',
            'description',
            'serialnumber',
            'line',
            // 'quantity_purchased',
            // 'item_cost_price',
            // 'item_unit_price',
            // 'selling_price',
            // 'discount_percent',
            // 'item_location',
            // 'quantity_id',
            // 'shipping_price',
            // 'vendor_id',
            // 'store_id',
            // 'vat',
            // 'cst',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
