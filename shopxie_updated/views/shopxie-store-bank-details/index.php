<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ShopxieStoreBankDetailsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Shopxie Store Bank Details';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shopxie-store-bank-details-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Shopxie Store Bank Details', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'bank_id',
            'store_id',
            'beneficiary_name',
            'bank_name',
            'account_number',
            // 'operating_type',
            // 'account_type',
            // 'ifsc_code',
            // 'bank_branch',
            // 'bank_address',
            // 'bank_state',
            // 'bank_city',
            // 'deleted',
            // 'created_date',
            // 'updated_date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
