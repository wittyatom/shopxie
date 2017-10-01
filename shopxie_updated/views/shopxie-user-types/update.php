<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ShopxieUserTypes */

$this->title = 'Update Shopxie User Types: ' . $model->user_type_id;
$this->params['breadcrumbs'][] = ['label' => 'Shopxie User Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->user_type_id, 'url' => ['view', 'id' => $model->user_type_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="shopxie-user-types-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
