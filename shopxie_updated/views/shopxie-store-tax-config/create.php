<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ShopxieStoreTaxConfig */

$this->title = 'Create Shopxie Store Tax Config';
$this->params['breadcrumbs'][] = ['label' => 'Shopxie Store Tax Configs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shopxie-store-tax-config-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
