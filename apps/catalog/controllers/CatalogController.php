<?php
namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\Catalog;

class CatalogController extends Controller
{
  public function actionIndex()
  {
    $query = Catalog::find();

    $pagination = new Pagination([
      'defaultPageSize' => 6,
      'totalCount' => $query->count(),
    ]);

    $items = $query->orderBy('name')
                  ->offset($pagination->offset)
                  ->limit($pagination->limit)
                  ->all();

    return $this->render('index', [
      'items' => $items,
      'pagination' => $pagination,
    ]);
  }
}