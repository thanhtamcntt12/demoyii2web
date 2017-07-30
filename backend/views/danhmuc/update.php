<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Danhmuc */

$this->title = 'Update Category: ' . $model->idCate;
$this->params['breadcrumbs'][] = ['label' => 'Category', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idCate, 'url' => ['view', 'id' => $model->idCate]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="danhmuc-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
