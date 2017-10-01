<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ShopxiePermissions */

$this->title = 'Update Shopxie Permissions: ' . $model->permission_id;
$this->params['breadcrumbs'][] = ['label' => 'Shopxie Permissions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->permission_id, 'url' => ['view', 'id' => $model->permission_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="shopxie-permissions-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
