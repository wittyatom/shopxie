<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ShopxieGiftcards */

$this->title = 'Update Shopxie Giftcards: ' . $model->giftcard_id;
$this->params['breadcrumbs'][] = ['label' => 'Shopxie Giftcards', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->giftcard_id, 'url' => ['view', 'id' => $model->giftcard_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="shopxie-giftcards-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
