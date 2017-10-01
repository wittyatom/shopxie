<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ShopxieSalesSuspended */

$this->title = 'Create Shopxie Sales Suspended';
$this->params['breadcrumbs'][] = ['label' => 'Shopxie Sales Suspendeds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shopxie-sales-suspended-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
