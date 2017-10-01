<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ShopxieItemPicsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Shopxie Item Pics';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shopxie-item-pics-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Shopxie Item Pics', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'pic_id',
            'item_id',
            'pics_meta:ntext',
            'hero_image',
            'created_by',
            // 'updated_by',
            // 'created_at',
            // 'updated_at',
            // 'deleted',
            // 'module_id',
            // 'vendor_id',
            // 'store_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
