<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ShopxieItemsTaxes */

$this->title = 'Update Shopxie Items Taxes: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Shopxie Items Taxes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'item_id' => $model->item_id, 'name' => $model->name, 'percent' => $model->percent]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="shopxie-items-taxes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
