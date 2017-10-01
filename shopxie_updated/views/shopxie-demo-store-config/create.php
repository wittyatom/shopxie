<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ShopxieDemoStoreConfig */

$this->title = 'Create Shopxie Demo Store Config';
$this->params['breadcrumbs'][] = ['label' => 'Shopxie Demo Store Configs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shopxie-demo-store-config-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
