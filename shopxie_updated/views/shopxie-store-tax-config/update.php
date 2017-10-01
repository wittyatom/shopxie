<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ShopxieStoreTaxConfig */

$this->title = 'Update Shopxie Store Tax Config: ' . $model->store_tax_config_id;
$this->params['breadcrumbs'][] = ['label' => 'Shopxie Store Tax Configs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->store_tax_config_id, 'url' => ['view', 'id' => $model->store_tax_config_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="shopxie-store-tax-config-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
