<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ShopxieItemQuantities */

$this->title = 'Create Shopxie Item Quantities';
$this->params['breadcrumbs'][] = ['label' => 'Shopxie Item Quantities', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shopxie-item-quantities-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
