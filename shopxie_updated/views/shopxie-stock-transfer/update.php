<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ShopxieStockTransfer */

$this->title = 'Update Shopxie Stock Transfer: ' . $model->transfer_id;
$this->params['breadcrumbs'][] = ['label' => 'Shopxie Stock Transfers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->transfer_id, 'url' => ['view', 'id' => $model->transfer_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="shopxie-stock-transfer-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
