<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ShopxieStoreConfigSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Shopxie Store Configs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shopxie-store-config-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Shopxie Store Config', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'store_id',
            'person_id',
            'name',
            'store_name',
            'store_categories:ntext',
            // 'store_phone_number',
            // 'email:email',
            // 'store_address:ntext',
            // 'store_postal_code',
            // 'store_city',
            // 'store_lat',
            // 'store_lng',
            // 'added_date',
            // 'modified',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
