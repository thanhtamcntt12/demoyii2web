<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\DanhmucSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="danhmuc-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idCate') ?>

    <?= $form->field($model, 'Icon') ?>

    <?= $form->field($model, 'CateName') ?>

    <?= $form->field($model, 'Parentid') ?>

    <?= $form->field($model, 'Keywords') ?>

    <?php // echo $form->field($model, 'Description') ?>

    <?php // echo $form->field($model, 'Order') ?>

    <?php // echo $form->field($model, 'Groupsid') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
