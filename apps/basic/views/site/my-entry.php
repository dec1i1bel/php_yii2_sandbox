<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php
$form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
  <?= $form->field($model, 'name') ?>
  <?= $form->field($model, 'email') ?>
  <?= $form->field($model, 'message') ?>
  <?= $form->field($model, 'imageFile')->fileInput() ?>
  <div class="form-group text-center">
    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
  </div>
<?php ActiveForm::end(); ?>