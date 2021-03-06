<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\MyEntryForm;
use app\models\UploadForm;
use yii\web\UploadedFile;

class SiteController extends Controller
{
     /**
      * prints "hello world"
      */
    public function actionMySayHello($message = 'Hello')
    {
      return $this->render('my-say-hello', ['message' => $message]);
    }

    /**
     * form to entry name amd email
     */
    public function actionMyEntry()
    {
        $model = new MyEntryForm();
        $model->name = 'Mr.Smith';
        $model->email = 'manager@matrix.net';
        $model->message = 'Hot Friday! 50% for Matrix!';

        // if(Yii::$app->request->isPost) {
            // }
            
            // if ($model->load(Yii::$app->request->post()) && $model->validate()) {      
        if ($model->load(Yii::$app->request->post())) {      
            $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
            return $this->render('my-entry-confirm', ['model' => $model]);
        } else {
            return $this->render('my-entry', ['model' => $model]);
        }
    }

    /**
     * uploading file within my-entry form
     */
    public function actionUpload()
    {
        $model = new UploadForm();
        if(Yii::$app->request->isPost) {
            $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
            if($model->upload()) {
                // return;
                return $this->render('upload-confirm', ['model' => $model]);
            }
        }
        // if ($model->load(Yii::$app->request->post()) && $model->validate()) {
        //     return $this->render('upload-confirm', ['model' => $model]);
        // } else {
            return $this->render('upload', ['model' => $model]);
        // }
    }

    /**
     * yii2 basic app
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
}
