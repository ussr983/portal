<?php

namespace frontend\models;

use yii\base\Model;

class RegistrationForm extends Model
{

    public $login;
    public $email;
    public $password;
    public $password2;

    public function rules()
    {

        return [
                    [
                        ['login', 'email', 'password', 'password2'], 'required'
                    ],
                    ['email', 'email']
                ];

    }

}
