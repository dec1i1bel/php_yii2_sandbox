<?php
use yii\helpers\Html;
?>
<ul>
  <li><label>name</label>: <?= Html::encode($model->name) ?></li>
  <li><label>email</label>: <?= Html::encode($model->email) ?></li>
</ul>