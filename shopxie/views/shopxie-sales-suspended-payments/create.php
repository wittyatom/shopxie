<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ShopxieSalesSuspendedPayments */

$this->title = 'Create Shopxie Sales Suspended Payments';
$this->params['breadcrumbs'][] = ['label' => 'Shopxie Sales Suspended Payments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shopxie-sales-suspended-payments-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
