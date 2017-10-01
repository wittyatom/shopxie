<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ShopxieInventory */

$this->title = 'Update Shopxie Inventory: ' . $model->trans_id;
$this->params['breadcrumbs'][] = ['label' => 'Shopxie Inventories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->trans_id, 'url' => ['view', 'id' => $model->trans_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="shopxie-inventory-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
