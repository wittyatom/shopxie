<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ShopxieItemKitItems */

$this->title = 'Update Shopxie Item Kit Items: ' . $model->item_kit_id;
$this->params['breadcrumbs'][] = ['label' => 'Shopxie Item Kit Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->item_kit_id, 'url' => ['view', 'item_kit_id' => $model->item_kit_id, 'item_id' => $model->item_id, 'quantity' => $model->quantity]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="shopxie-item-kit-items-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
