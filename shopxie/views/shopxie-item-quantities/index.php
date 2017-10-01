<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ShopxieItemQuantitiesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Shopxie Item Quantities';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shopxie-item-quantities-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Shopxie Item Quantities', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'quantity_id',
            'item_id',
            'location_id',
            'quantity',
            'purchase_price',
            // 'mrp',
            // 'discount',
            // 'selling_price',
            // 'size',
            // 'vendor_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
