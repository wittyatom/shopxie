<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ShopxieItems */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Shopxie Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shopxie-items-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->item_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->item_id], [
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
            'name',
            'category',
            'supplier_id',
            'item_number',
            'description:ntext',
            'cost_price',
            'unit_price',
            'reorder_level',
            'receiving_quantity',
            'item_id',
            'pic_id',
            'allow_alt_description',
            'is_serialized',
            'deleted',
            'brand_id',
            'parent_id',
            'category_id',
            'subcategory_id',
            'item_color',
            'custom5',
            'custom6',
            'custom7',
            'custom8',
            'custom9',
            'custom10',
            'vendor_id',
            'store_id',
            'status',
            'create_date',
            'update_date',
            'sku_id',
            'attribute1:ntext',
            'attribute2:ntext',
        ],
    ]) ?>

</div>
