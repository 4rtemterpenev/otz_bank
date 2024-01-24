<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 *
 * @property string $name The name of the person submitting the contact form.
 * @property string $phone The phone number of the person submitting the contact form.
 * @property string $body The message body or content of the contact form.
 */
class ContactForm extends Model
{
    public $name;
    public $phone;
    public $body;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['name', 'phone', 'body'], 'required','message'=>'Это поле не может быть пустым'],
            [['name', 'phone', 'body'], 'string'],
        ];
    }

}
