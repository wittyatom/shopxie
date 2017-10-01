<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ShopxieStoreConfig */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Shopxie Store Configs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shopxie-store-config-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->store_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->store_id], [
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
            'store_id',
            'person_id',
            'name',
            'store_name',
            'store_categories:ntext',
            'store_phone_number',
            'email:email',
            'store_address:ntext',
            'store_postal_code',
            'store_city',
            'store_lat',
            'store_lng',
            'added_date',
            'modified',
        ],
    ]) ?>

</div>
