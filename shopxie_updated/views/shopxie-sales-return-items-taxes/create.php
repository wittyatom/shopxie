<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ShopxieSalesReturnItemsTaxes */

$this->title = 'Create Shopxie Sales Return Items Taxes';
$this->params['breadcrumbs'][] = ['label' => 'Shopxie Sales Return Items Taxes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shopxie-sales-return-items-taxes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
