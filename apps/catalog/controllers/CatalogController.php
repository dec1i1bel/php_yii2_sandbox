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
  }
}