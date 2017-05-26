<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use cakebake\actionlog\model\ActionLog;
use app\models\Subscribe;


class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['*'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                ],
                // 'rules' => [
                //     [
                //     'actions' => ['about'],
                //     'allow' => true,
                //     'roles' => ['host'],
                //     ],
                // ],
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
     * @inheritdoc
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
         // Save to database;
        $model = new Subscribe();

        // Send mail to Admin;
        $adminmail = new ContactForm();

        // Send mail to Customer;
        $membermail = new ContactForm();

        if ($model->load(Yii::$app->request->post())) {
            $model->created_at = date('Y-m-d h:m:s');
            $model->user_ip = \Yii::$app->getRequest()->getUserIP();

            $email = $model->email; //Define a user mail.

            $adminmail->subject = "Subscribe";
            $adminmail->email = $email;
            $adminmail->body = 'Subscriber!';
            $adminmail->name = 'Subscriber!';

            $membermail->subject = "Subscribe!";
            $membermail->email = \Yii::$app->params['adminEmail'];
            $membermail->body = "Thank you for subscribe! \n";
            $membermail->name = "Smart Engine bot!";

            if ($model->save()) {

                $adminmail->contact(Yii::$app->params['adminEmail']) ;
                $membermail->contact($email);

                    Yii::$app->session->setFlash('subscribed','Thank you for subscribe!');
                    ActionLog::add('success', 'Subscribed');

                return $this->render('index', [
                    'model' => $model,
                ]);
            }else{
                ActionLog::add('Error', 'Subscribed');
            }
        }
        return $this->render('index', [
            'model' => $model,
        ]);
    }

    /**
     * Login action.
     *
     * @return string
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
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return string
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


    public function actionHome(){
        return $this->render('home');
    }



}
