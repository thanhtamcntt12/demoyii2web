<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Danhmuc */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="danhmuc-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'CateName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Icon')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Groupsid')->dropDownList($dataGroup, ['prompt' => '-Chọn danh mục-']) ?>

    <?= $form->field($model, 'Parentid')->dropDownList($dataCat, ['prompt' => '-Chọn danh mục-']) ?>

    <?= $form->field($model, 'Keywords')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Order')->textInput(['maxlength' => true]) ?>


    <?= $form->field($model, 'status')->checkBox() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
