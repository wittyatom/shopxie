<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ShopxieStockTransfer */

$this->title = 'Create Shopxie Stock Transfer';
$this->params['breadcrumbs'][] = ['label' => 'Shopxie Stock Transfers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shopxie-stock-transfer-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
