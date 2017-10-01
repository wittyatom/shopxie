<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ShopxieParentCategories */

$this->title = 'Update Shopxie Parent Categories: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Shopxie Parent Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->shopxie_parent_category_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="shopxie-parent-categories-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
