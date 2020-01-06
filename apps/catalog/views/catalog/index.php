<?php

use yii\helpers\Html;
use yii\widgets\ListView;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CatalogSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Catalog';
?>
<div class="main-container">

    <h1><?= Html::encode($this->title) ?></h1>
    <h3>Filter</h3>
    
    <div class="main-section-wrapper">
        <div class="items-filter-wrapper">
            <?php echo $this->render('_search', ['model' => $searchModel]); ?>
        </div>
    
        <div class="items-container">
            <?= ListView::widget([
                'dataProvider' => $dataProvider,
                'itemOptions' => ['class' => 'item'],
                'itemView' => 'view',
            ]) ?>
        </div>
    </div>
</div>
