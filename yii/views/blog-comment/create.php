<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\BlogComment */

$this->title = 'Create Blog Comment';
$this->params['breadcrumbs'][] = ['label' => 'Blog Comments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blog-comment-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
