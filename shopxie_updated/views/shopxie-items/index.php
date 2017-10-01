<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ShopxieItemsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Shopxie Items';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shopxie-items-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Shopxie Items', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name',
            'category',
            'supplier_id',
            'item_number',
            'description:ntext',
            // 'cost_price',
            // 'unit_price',
            // 'reorder_level',
            // 'receiving_quantity',
            // 'item_id',
            // 'pic_id',
            // 'allow_alt_description',
            // 'is_serialized',
            // 'deleted',
            // 'brand_id',
            // 'parent_id',
            // 'category_id',
            // 'subcategory_id',
            // 'item_color',
            // 'custom5',
            // 'custom6',
            // 'custom7',
            // 'custom8',
            // 'custom9',
            // 'custom10',
            // 'vendor_id',
            // 'store_id',
            // 'status',
            // 'create_date',
            // 'update_date',
            // 'sku_id',
            // 'attribute1:ntext',
            // 'attribute2:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
