<?php
use yii\helpers\Html;
?>
<?php var_dump($model) ?>
<div class="card mb-3" style="max-width: 450px;">
  <div class="row no-gutters">
    <div class="col-md-2">
      <img src="uploads/<?= Html::encode($model->imageFile) ?>" class="card-img" alt="user photo">
    </div>
    <div class="col-md-10">
      <div class="card-body">
        <h5 class="card-title"><?= Html::encode($model->name) ?></h5>
        <p class="card-text"><small class="text-muted"><?= Html::encode($model->email) ?></small></p>
        <p class="card-text"><?= Html::encode($model->message) ?></p>
      </div>
    </div>
  </div>
  <hr>
</div>