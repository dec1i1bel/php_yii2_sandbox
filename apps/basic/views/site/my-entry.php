<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\ActiveField;
?>
<?php
// $options = [];
// Html::addCssClass($options, 'test-class');
?>
<?php $form = ActiveForm::begin(); ?>
  <?= $form->field($model, 'name') ?>
  <?= $form->field($model, 'email') ?>
  <?= $form->field($model, 'message') ?>
  <div class="form-group text-center">
    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
  </div>
<?php ActiveForm::end(); ?>