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
            'store_category:ntext',
            // 'store_parent_categories:ntext',
            // 'store_phone_number',
            // 'email:email',
            // 'store_address:ntext',
            // 'store_postal_code',
            // 'store_city',
            // 'store_state',
            // 'store_lat',
            // 'store_lng',
            // 'store_type',
            // 'store_status',
            // 'added_date',
            // 'modified',
            // 'invoice_configration',
            // 'store_mode',
            // 'store_frequency',
            // 'vat_tin',
            // 'cst_tin',
            // 'pan',
            // 'tan',
            // 'exchange_allowed',
            // 'exchange_period_days',
            // 'refund_allowed',
            // 'refund_give',
            // 'free',
            // 'company_name',
            // 'company_type',
            // 'country',
            // 'currency',
            // 'language',
            // 'company_pan',
            // 'personal_pan',
            // 'operating_account_type',
            // 'account_holder',
            // 'bank_name',
            // 'account_number',
            // 'account_type',
            // 'ifsc_code',
            // 'state',
            // 'city',
            // 'branch',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
