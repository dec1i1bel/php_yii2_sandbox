<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Catalog */

$this->title = $model->name;
\yii\web\YiiAsset::register($this);
?>
<div class="catalog-view">
    <div class="item-container">
        <div class="item-photo">
            <img src="<?= Html::encode("{$model->photo}") ?>" alt="<?= Html::encode("{$model->name}") ?>" />
        </div>
        <div class="item-description">
            <h3 class="title"><?= Html::encode("{$this->title}") ?></h3>
            <p class="description"><?= Html::encode("{$model->description}") ?></p>
            <p class="price"><?= Html::encode("{$model->price}") ?> руб.</p>
            </div>
        <div class="item-button-order">
            <?= yii\bootstrap\Button::widget(['label' => 'Add to cart', 'options' => ['class' => 'btn btn-danger', 'disabled' => 'disabled']]) ?>
        </div>
    </div>
</div>
