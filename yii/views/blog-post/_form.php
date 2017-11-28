<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;

$obj_tag = \app\models\BlogTag::find()->all();
$arr_tag = [];
foreach ($obj_tag as $key) {
    array_push($arr_tag, $key->tag);
    die(var_dump($arr_tag));
}
$obj_category = \app\models\BlogCategory::find()->all();
$arr_category = [];
foreach ($obj_category as $key) {
    array_push($arr_category, $key->name_category);
}
$obj_author = \app\models\BlogAuthor::find()->all();
$arr_author = [];
foreach ($obj_author as $key) {
    array_push($arr_author, $key->display_name);
}
/* @var $this yii\web\View */
/* @var $model app\models\BlogPost */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="blog-post-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
    <div class="col-md-8">
        <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'article')->textArea(['rows' => 20])->label(FALSE) ?>
    </div>
    <div class="col-md-4">
    <?= $form->field($model, 'image')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'foto')->fileInput() ?>

<?= $form->field($model, 'category')->widget(Select2::classname(), [
    'data' => $arr_category,
    'language' => 'de',
    'options' => ['placeholder' => 'Select a state ...'],
    'pluginOptions' => [
        'allowClear' => true
    ],
]);
?>

    <?= $form->field($model, 'category')->widget(Select2::classname(), 
        ['data' => $arr_category,
        'options' => ['placeholder' => ''],
            'pluginOptions' => [
                'tags' => true,
                'tokenSeparators' => [',', ' '],
                'maximumInputLength' => 20
            ],
        ]) 
    ?>

    <?= $form->field($model, 'author')->widget(Select2::classname(), 
        ['data' => $arr_author,
        'options' => ['placeholder' => ''],
            'pluginOptions' => [
                'tags' => true,
                'tokenSeparators' => [',', ' '],
                'maximumInputLength' => 20
            ],
        ]) 
    ?>
    </div>
    </div>

  

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
