<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ShopxieGiftcards */

$this->title = $model->giftcard_id;
$this->params['breadcrumbs'][] = ['label' => 'Shopxie Giftcards', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shopxie-giftcards-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->giftcard_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->giftcard_id], [
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
            'record_time',
            'giftcard_id',
            'giftcard_number',
            'value',
            'deleted',
            'person_id',
            'vendor_id',
            'store_id',
            'expiry_date',
            'giftcard_status',
            'giftcard_tnc',
            'sale_id',
        ],
    ]) ?>

</div>
