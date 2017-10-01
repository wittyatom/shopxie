<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ShopxieSize */

$this->title = 'Update Shopxie Size: ' . $model->size_id;
$this->params['breadcrumbs'][] = ['label' => 'Shopxie Sizes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->size_id, 'url' => ['view', 'id' => $model->size_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="shopxie-size-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
