<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ShopxieGiftcardsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Shopxie Giftcards';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shopxie-giftcards-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Shopxie Giftcards', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'record_time',
            'giftcard_id',
            'giftcard_number',
            'value',
            'deleted',
            // 'person_id',
            // 'vendor_id',
            // 'store_id',
            // 'expiry_date',
            // 'giftcard_status',
            // 'giftcard_tnc',
            // 'sale_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
