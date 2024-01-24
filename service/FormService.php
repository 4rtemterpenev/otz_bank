<?php

namespace app\service;

use app\models\ContactForm;
use Yii;

class FormService
{
//    const RECEIVER_EMAIL = 'futureinventor@umail.uz ';
    const RECEIVER_EMAIL = 'servis@kamkombank.ru';


    public function sendEmail(ContactForm $model)
    {
        try {
            $message = Yii::$app->controller->renderPartial('@app/views/email/email_template', [
                'model' => $model,
            ]);

            return Yii::$app->mailer->compose()
                ->setFrom(['info@kamkombank.ru' => 'Запрос из отзыва Камкомбанк'])
                ->setTo(self::RECEIVER_EMAIL)
                ->setSubject(sprintf("Запрос из %s", $model->name))
                ->setHtmlBody($message)
                ->send();
        } catch (\Exception $r) {
            throw new \Exception($r->getMessage());
        }
    }
}