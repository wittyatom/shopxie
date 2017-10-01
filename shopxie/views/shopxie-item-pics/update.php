<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ShopxieItemPics */

$this->title = 'Update Shopxie Item Pics: ' . $model->pic_id;
$this->params['breadcrumbs'][] = ['label' => 'Shopxie Item Pics', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pic_id, 'url' => ['view', 'id' => $model->pic_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="shopxie-item-pics-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
