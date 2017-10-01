<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ShopxieSalesItemsTaxes */

$this->title = 'Update Shopxie Sales Items Taxes: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Shopxie Sales Items Taxes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->item_tax_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="shopxie-sales-items-taxes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
