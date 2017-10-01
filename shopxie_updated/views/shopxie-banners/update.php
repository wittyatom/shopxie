<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ShopxieBanners */

$this->title = 'Update Shopxie Banners: ' . $model->banner_id;
$this->params['breadcrumbs'][] = ['label' => 'Shopxie Banners', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->banner_id, 'url' => ['view', 'id' => $model->banner_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="shopxie-banners-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
