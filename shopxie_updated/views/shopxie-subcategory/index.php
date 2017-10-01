<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ShopxieSubcategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Shopxie Subcategories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shopxie-subcategory-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Shopxie Subcategory', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'sub_category_id',
            'sub_category_name',
            'sub_category_display_name',
            'category_id',
            'sub_category_createdby',
            // 'sub_category_createdat',
            // 'deleted',
            // 'vendor_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
