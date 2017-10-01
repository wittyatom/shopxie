<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ShopxieReceivingsItems */

$this->title = 'Update Shopxie Receivings Items: ' . $model->receiving_id;
$this->params['breadcrumbs'][] = ['label' => 'Shopxie Receivings Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->receiving_id, 'url' => ['view', 'receiving_id' => $model->receiving_id, 'item_id' => $model->item_id, 'line' => $model->line]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="shopxie-receivings-items-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
