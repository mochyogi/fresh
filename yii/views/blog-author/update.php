<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\BlogAuthor */

$this->title = 'Update Blog Author: ' . $model->id_autrhor;
$this->params['breadcrumbs'][] = ['label' => 'Blog Authors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_autrhor, 'url' => ['view', 'id' => $model->id_autrhor]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="blog-author-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
