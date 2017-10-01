<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ShopxieSessionCart */

$this->title = $model->session_cart_id;
$this->params['breadcrumbs'][] = ['label' => 'Shopxie Session Carts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shopxie-session-cart-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->session_cart_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->session_cart_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'session_cart_id',
            'user_id',
            'store_id',
            'create_date',
            'update_date',
            'data:ntext',
            'additional_discount',
        ],
    ]) ?>

</div>
