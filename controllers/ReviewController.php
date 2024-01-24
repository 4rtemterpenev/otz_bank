<?php

namespace app\controllers;

use app\service\FormService;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class ReviewController extends Controller
{
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

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionPositive()
    {
        return $this->render('positive');
    }

    public function actionNegative()
    {
        $model = new ContactForm();

        if ($model->load($this->request->post()) && $model->validate()) {
            if ((new FormService())->sendEmail($model)) {
                $this->getView()->registerJs("
                document.querySelector('.modal').classList.add('active');
                if (window.history.replaceState) {
                    window.history.replaceState(null, null, window.location.href);
                }
            ");
            } else {
                return $this->redirect(['index']);
            }
        }

        return $this->render('negative', [
            'model' => $model
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
