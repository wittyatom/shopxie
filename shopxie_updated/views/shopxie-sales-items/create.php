<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ShopxieSalesItems */

$this->title = 'Create Shopxie Sales Items';
$this->params['breadcrumbs'][] = ['label' => 'Shopxie Sales Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shopxie-sales-items-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
