<?php
namespace app\models;

use Yii;
use yii\base\Model;
use yii\web\UploadedFile;

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
      [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg']
    ];
  }

  public function upload()
  {
    if($this->validate()) {
      $this->imageFile->saveAs('uploads/' . $this->imageFile->baseName . '.' . $this->imageFile->extension);
      return true;
    } else {
      return false;
    }
  }
}
?>