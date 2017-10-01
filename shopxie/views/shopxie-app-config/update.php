<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ShopxieAppConfig */

$this->title = 'Update Shopxie App Config: ' . $model->app_id;
$this->params['breadcrumbs'][] = ['label' => 'Shopxie App Configs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->app_id, 'url' => ['view', 'id' => $model->app_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="shopxie-app-config-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
