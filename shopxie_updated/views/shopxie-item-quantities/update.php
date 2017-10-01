<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ShopxieItemQuantities */

$this->title = 'Update Shopxie Item Quantities: ' . $model->quantity_id;
$this->params['breadcrumbs'][] = ['label' => 'Shopxie Item Quantities', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->quantity_id, 'url' => ['view', 'id' => $model->quantity_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="shopxie-item-quantities-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
