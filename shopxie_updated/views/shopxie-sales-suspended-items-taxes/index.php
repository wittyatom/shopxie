<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ShopxieSalesSuspendedItemsTaxesSearchItems */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Shopxie Sales Suspended Items Taxes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shopxie-sales-suspended-items-taxes-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Shopxie Sales Suspended Items Taxes', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'sale_id',
            'item_id',
            'line',
            'name',
            'percent',
            // 'vendor_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
