<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Danhmuc */

$this->title = 'Create Category';
$this->params['breadcrumbs'][] = ['label' => 'Category', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="danhmuc-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'dataGroup' => $dataGroup
    ]) ?>

</div>
