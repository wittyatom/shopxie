<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ShopxiePeopleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Shopxie Peoples';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shopxie-people-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Shopxie People', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name',
            'last_name',
            'gender',
            'phone_number',
            'email:email',
            // 'address_1:ntext',
            // 'address_2',
            // 'city',
            // 'state',
            // 'zip',
            // 'country',
            // 'comments:ntext',
            // 'person_id',
            // 'vendor_id',
            // 'store_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
