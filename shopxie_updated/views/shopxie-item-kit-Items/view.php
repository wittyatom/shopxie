<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ShopxieItemKitItems */

$this->title = $model->item_kit_id;
$this->params['breadcrumbs'][] = ['label' => 'Shopxie Item Kit Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shopxie-item-kit-items-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'item_kit_id' => $model->item_kit_id, 'item_id' => $model->item_id, 'quantity' => $model->quantity], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'item_kit_id' => $model->item_kit_id, 'item_id' => $model->item_id, 'quantity' => $model->quantity], [
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
            'item_kit_id',
            'item_id',
            'quantity',
            'vendor_id',
        ],
    ]) ?>

</div>
