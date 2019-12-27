<?php
namespace app\models;

use Yii;
use yii\base\Model;

class MyEntryForm extends Model
{
  public $name;
  public $email;
  public $message;

  public function rules()
  {
    return [
      [['name', 'email', 'message'], 'required'],
      ['email', 'email'],
      ['message', 'string', 'max'=>500],
    ];
  }
}
?>