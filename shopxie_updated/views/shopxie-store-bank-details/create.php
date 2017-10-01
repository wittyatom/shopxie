<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ShopxieStoreBankDetails */

$this->title = 'Create Shopxie Store Bank Details';
$this->params['breadcrumbs'][] = ['label' => 'Shopxie Store Bank Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shopxie-store-bank-details-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
