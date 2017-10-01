<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ShopxieReceivingsItemsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Shopxie Receivings Items';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shopxie-receivings-items-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Shopxie Receivings Items', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'receiving_id',
            'item_id',
            'description',
            'serialnumber',
            'line',
            // 'quantity_purchased',
            // 'item_cost_price',
            // 'item_unit_price',
            // 'discount_percent',
            // 'item_location',
            // 'receiving_quantity',
            // 'vendor_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
