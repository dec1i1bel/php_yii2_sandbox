<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Catalog</h1>
<div class="main-container">
  <div class="items-filter-wrapper">
  
  </div>
  <div class="items-list wrapper">
    <div class="pagination-container">
      <?= LinkPager::widget(['pagination' => $pagination]) ?>
    </div>
    <div class="items-container">
      <?php foreach ($items as $item): ?>
        <div class="item-container">
          <div class="item-photo">
            <img src="<?= Html::encode("{$item->photo}") ?>" alt="<?= Html::encode("{$item->name}") ?>" />
          </div>
          <div class="item-description">
            <h5 class="title"><?= Html::encode("{$item->name}") ?></h5>
            <p class="description"><?= Html::encode("{$item->description}") ?></p>
            <p class="price"><?= Html::encode("{$item->price}") ?> руб.</p>
          </div>
          <div class="item-button-order">
            <?= yii\bootstrap\Button::widget(['label' => 'Add to cart', 'options' => ['class' => 'btn btn-danger', 'disabled' => 'disabled']]) ?>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
    <div class="pagination-container">
      <?= LinkPager::widget(['pagination' => $pagination]) ?>
    </div>
  </div>
</div>