<?php
namespace app\models;

use Yii;
use yii\base\Model;

class MyEntryForm extends Model
{
  public $name;
  public $email;
  public $message;
  public $imageFile;

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