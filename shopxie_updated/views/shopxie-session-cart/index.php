<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ShopxieSessionCartSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Shopxie Session Carts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shopxie-session-cart-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Shopxie Session Cart', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'session_cart_id',
            'user_id',
            'store_id',
            'create_date',
            'update_date',
            // 'data:ntext',
            // 'additional_discount',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
