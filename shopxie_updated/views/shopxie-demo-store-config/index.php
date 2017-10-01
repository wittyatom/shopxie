<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ShopxieDemoStoreConfigSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Shopxie Demo Store Configs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shopxie-demo-store-config-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Shopxie Demo Store Config', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'demo_store_config_id',
            'days',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
