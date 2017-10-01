<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ShopxieSalesItemsTaxes */

$this->title = 'Create Shopxie Sales Items Taxes';
$this->params['breadcrumbs'][] = ['label' => 'Shopxie Sales Items Taxes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shopxie-sales-items-taxes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
