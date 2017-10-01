<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ShopxieReceivings */

$this->title = 'Update Shopxie Receivings: ' . $model->receiving_id;
$this->params['breadcrumbs'][] = ['label' => 'Shopxie Receivings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->receiving_id, 'url' => ['view', 'id' => $model->receiving_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="shopxie-receivings-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
