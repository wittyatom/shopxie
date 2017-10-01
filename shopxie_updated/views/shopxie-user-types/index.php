<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ShopxieUserTypesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Shopxie User Types';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shopxie-user-types-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Shopxie User Types', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'user_type_id',
            'user_id',
            'store_id',
            'user_type',
            'created_by',
            // 'updated_by',
            // 'assign_by',
            // 'created_date',
            // 'update_date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
