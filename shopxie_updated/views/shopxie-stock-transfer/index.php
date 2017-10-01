<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ShopxieStockTransferSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Shopxie Stock Transfers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shopxie-stock-transfer-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Shopxie Stock Transfer', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'transfer_id',
            'dispatch_no',
            'barcode',
            'transfer_from',
            'transfer_to',
            // 'vendor_id',
            // 'error',
            // 'status',
            // 'create_date',
            // 'update_date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
