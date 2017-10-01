<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ShopxieStoreBankDetails */

$this->title = $model->bank_id;
$this->params['breadcrumbs'][] = ['label' => 'Shopxie Store Bank Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shopxie-store-bank-details-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->bank_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->bank_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'bank_id',
            'store_id',
            'beneficiary_name',
            'bank_name',
            'account_number',
            'operating_type',
            'account_type',
            'ifsc_code',
            'bank_branch',
            'bank_address',
            'bank_state',
            'bank_city',
            'deleted',
            'created_date',
            'updated_date',
        ],
    ]) ?>

</div>
