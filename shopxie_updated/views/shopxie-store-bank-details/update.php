<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ShopxieStoreBankDetails */

$this->title = 'Update Shopxie Store Bank Details: ' . $model->bank_id;
$this->params['breadcrumbs'][] = ['label' => 'Shopxie Store Bank Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->bank_id, 'url' => ['view', 'id' => $model->bank_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="shopxie-store-bank-details-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
