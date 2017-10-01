<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ShopxieItemKits */

$this->title = 'Update Shopxie Item Kits: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Shopxie Item Kits', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->item_kit_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="shopxie-item-kits-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
