<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ShopxieSalesSuspendedPayments */

$this->title = 'Update Shopxie Sales Suspended Payments: ' . $model->sale_id;
$this->params['breadcrumbs'][] = ['label' => 'Shopxie Sales Suspended Payments', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->sale_id, 'url' => ['view', 'sale_id' => $model->sale_id, 'payment_type' => $model->payment_type]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="shopxie-sales-suspended-payments-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
