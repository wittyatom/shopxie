<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ShopxieSalesReturnPayments */

$this->title = $model->sale_id;
$this->params['breadcrumbs'][] = ['label' => 'Shopxie Sales Return Payments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shopxie-sales-return-payments-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'sale_id' => $model->sale_id, 'payment_type' => $model->payment_type], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'sale_id' => $model->sale_id, 'payment_type' => $model->payment_type], [
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
            'sale_id',
            'payment_type',
            'payment_amount',
            'vendor_id',
            'store_id',
        ],
    ]) ?>

</div>
