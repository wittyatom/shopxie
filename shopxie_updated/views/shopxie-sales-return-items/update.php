<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ShopxieSalesReturnItems */

$this->title = 'Update Shopxie Sales Return Items: ' . $model->sale_id;
$this->params['breadcrumbs'][] = ['label' => 'Shopxie Sales Return Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->sale_id, 'url' => ['view', 'sale_id' => $model->sale_id, 'item_id' => $model->item_id, 'line' => $model->line]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="shopxie-sales-return-items-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
