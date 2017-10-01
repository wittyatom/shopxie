<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ShopxieCustomerLead */

$this->title = 'Update Shopxie Customer Lead: ' . $model->lead_id;
$this->params['breadcrumbs'][] = ['label' => 'Shopxie Customer Leads', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->lead_id, 'url' => ['view', 'id' => $model->lead_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="shopxie-customer-lead-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
