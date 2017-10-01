<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ShopxieStockLocations */

$this->title = $model->location_id;
$this->params['breadcrumbs'][] = ['label' => 'Shopxie Stock Locations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shopxie-stock-locations-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->location_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->location_id], [
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
            'location_id',
            'location_name',
            'deleted',
            'vendor_id',
        ],
    ]) ?>

</div>
