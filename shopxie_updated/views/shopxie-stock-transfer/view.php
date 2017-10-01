<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ShopxieStockTransfer */

$this->title = $model->transfer_id;
$this->params['breadcrumbs'][] = ['label' => 'Shopxie Stock Transfers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shopxie-stock-transfer-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->transfer_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->transfer_id], [
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
            'transfer_id',
            'dispatch_no',
            'barcode',
            'transfer_from',
            'transfer_to',
            'vendor_id',
            'error',
            'status',
            'create_date',
            'update_date',
        ],
    ]) ?>

</div>
