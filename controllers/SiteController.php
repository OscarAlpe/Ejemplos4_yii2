<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use \app\models\Noticias;

class SiteController extends Controller
{
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
        $noticias = \app\models\Noticias::find()->all();
        
        return $this->render('index', [
            "noticias"=>$noticias,
        ]);
    }

    public function actionPagina1()
    {
        return $this->render('pagina1', [
            "noticiaAleatoria" => Noticias::aleatoria(),
        ]);
    }
    
    public function actionPagina2()
    {
        return $this->render('pagina2');
    }

    public function actionPagina3()
    {
        return $this->render('pagina3');
    }
}
