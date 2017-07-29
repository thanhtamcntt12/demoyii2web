<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Group */

$this->title = $model->idGroups;
$this->params['breadcrumbs'][] = ['label' => 'Groups', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="group-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idGroups], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idGroups], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idGroups',
            'groupsName',
            'status',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
