<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ShopxieStoreTaxConfigSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Shopxie Store Tax Configs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shopxie-store-tax-config-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Shopxie Store Tax Config', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'store_tax_config_id',
            'store_id',
            'subcategory_id',
            'vat',
            'cst',
            // 'gst',
            // 'tax_inclusive',
            // 'create_date',
            // 'update_data',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
