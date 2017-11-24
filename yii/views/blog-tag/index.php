<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BlogTagSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Blog Tags';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blog-tag-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Blog Tag', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_tag',
            'post_id',
            'tag',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
