<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\BlogTag */

$this->title = 'Update Blog Tag: ' . $model->id_tag;
$this->params['breadcrumbs'][] = ['label' => 'Blog Tags', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_tag, 'url' => ['view', 'id' => $model->id_tag]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="blog-tag-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
