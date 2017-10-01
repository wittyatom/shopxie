<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ShopxieStoreTaxConfig */

$this->title = $model->store_tax_config_id;
$this->params['breadcrumbs'][] = ['label' => 'Shopxie Store Tax Configs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shopxie-store-tax-config-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->store_tax_config_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->store_tax_config_id], [
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
            'store_tax_config_id',
            'store_id',
            'subcategory_id',
            'vat',
            'cst',
            'gst',
            'tax_inclusive',
            'create_date',
            'update_data',
        ],
    ]) ?>

</div>
