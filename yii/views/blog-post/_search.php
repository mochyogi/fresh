<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BlogPostSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="blog-post-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_blog') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'article') ?>

    <?= $form->field($model, 'date_published') ?>

    <?= $form->field($model, 'comment_id') ?>

    <?php // echo $form->field($model, 'image') ?>

    <?php // echo $form->field($model, 'view') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
