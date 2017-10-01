<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ShopxieSalesReturn */

$this->title = $model->sale_id;
$this->params['breadcrumbs'][] = ['label' => 'Shopxie Sales Returns', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shopxie-sales-return-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->sale_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->sale_id], [
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
            'sale_time',
            'customer_id',
            'employee_id',
            'comment:ntext',
            'invoice_number',
            'sale_id',
            'vat',
            'cst',
            'vendor_id',
            'store_id',
        ],
    ]) ?>

</div>
