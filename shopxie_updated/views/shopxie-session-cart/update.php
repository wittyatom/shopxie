<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ShopxieSessionCart */

$this->title = 'Update Shopxie Session Cart: ' . $model->session_cart_id;
$this->params['breadcrumbs'][] = ['label' => 'Shopxie Session Carts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->session_cart_id, 'url' => ['view', 'id' => $model->session_cart_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="shopxie-session-cart-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
