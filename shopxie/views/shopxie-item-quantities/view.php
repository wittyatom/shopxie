<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ShopxieItemQuantities */

$this->title = $model->quantity_id;
$this->params['breadcrumbs'][] = ['label' => 'Shopxie Item Quantities', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shopxie-item-quantities-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->quantity_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->quantity_id], [
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
            'quantity_id',
            'item_id',
            'location_id',
            'quantity',
            'purchase_price',
            'mrp',
            'discount',
            'selling_price',
            'size',
            'vendor_id',
        ],
    ]) ?>

</div>
