<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ShopxieBanners */

$this->title = $model->banner_id;
$this->params['breadcrumbs'][] = ['label' => 'Shopxie Banners', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shopxie-banners-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->banner_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->banner_id], [
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
            'banner_id',
            'banner_type',
            'banner_url:url',
            'created',
            'updated',
            'deleted',
        ],
    ]) ?>

</div>
