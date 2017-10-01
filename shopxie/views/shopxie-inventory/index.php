<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ShopxieInventorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Shopxie Inventories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shopxie-inventory-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Shopxie Inventory', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'trans_id',
            'trans_items',
            'trans_user',
            'trans_date',
            'trans_comment:ntext',
            // 'trans_location',
            // 'trans_inventory',
            // 'vendor_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
