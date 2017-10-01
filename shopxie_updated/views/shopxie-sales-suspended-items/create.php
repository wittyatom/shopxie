<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ShopxieSalesSuspendedItems */

$this->title = 'Create Shopxie Sales Suspended Items';
$this->params['breadcrumbs'][] = ['label' => 'Shopxie Sales Suspended Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shopxie-sales-suspended-items-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
