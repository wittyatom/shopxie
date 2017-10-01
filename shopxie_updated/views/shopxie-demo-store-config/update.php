<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ShopxieDemoStoreConfig */

$this->title = 'Update Shopxie Demo Store Config: ' . $model->demo_store_config_id;
$this->params['breadcrumbs'][] = ['label' => 'Shopxie Demo Store Configs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->demo_store_config_id, 'url' => ['view', 'id' => $model->demo_store_config_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="shopxie-demo-store-config-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
