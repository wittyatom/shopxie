<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ShopxieReceivingsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Shopxie Receivings';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shopxie-receivings-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Shopxie Receivings', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'receiving_time',
            'supplier_id',
            'employee_id',
            'comment:ntext',
            'receiving_id',
            // 'payment_type',
            // 'invoice_number',
            // 'vendor_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
