<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ShopxieReceivingsItems */

$this->title = $model->receiving_id;
$this->params['breadcrumbs'][] = ['label' => 'Shopxie Receivings Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shopxie-receivings-items-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'receiving_id' => $model->receiving_id, 'item_id' => $model->item_id, 'line' => $model->line], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'receiving_id' => $model->receiving_id, 'item_id' => $model->item_id, 'line' => $model->line], [
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
            'receiving_id',
            'item_id',
            'description',
            'serialnumber',
            'line',
            'quantity_purchased',
            'item_cost_price',
            'item_unit_price',
            'discount_percent',
            'item_location',
            'receiving_quantity',
            'vendor_id',
        ],
    ]) ?>

</div>
