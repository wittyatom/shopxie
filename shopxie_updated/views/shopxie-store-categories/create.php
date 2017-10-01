<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ShopxieStoreCategories */

$this->title = 'Create Shopxie Store Categories';
$this->params['breadcrumbs'][] = ['label' => 'Shopxie Store Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shopxie-store-categories-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
