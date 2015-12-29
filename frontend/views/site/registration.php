<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model frontend\models\Registration */

use yii\widgets\ActiveForm;
use yii\helpers\Html;

?>

<div class="container">
    <h2 class="header-title">Регистрация</h2>
    <div class="row">
        <div class="col-8 col-offset-2">
            <?php $form = ActiveForm::begin([
                                            'id' => 'register-form'
                                            ]); ?>
                <div class="form-group">
                    <div class="col-4">
                        <label>Логин:</label>
                    </div>
                    <div class="col-8">
                        <?php echo $form->field($registration, 'login'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-4">
                        <label>E-mail:</label>
                    </div>
                    <div class="col-8">
                        <?php echo $form->field($registration, 'email'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-4">
                        <label>Пароль:</label>
                    </div>
                    <div class="col-8">
                        <?php echo $form->field($registration, 'password'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-4">
                        <label>Повторите пароль:</label>
                    </div>
                    <div class="col-8">
                        <?php echo $form->field($registration, 'password2'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-12">
                        <div class="container-registration">
                            <?php echo Html::submitButton('Зарегистрироваться'); ?>
                            <div class="row">
                                    <div class="col-6 col-offset-3 terms">
                                            Регистрируясь, я подтверждаю свое согласие с условиями <a class="link" href="#">пользовательского соглашения</a>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
    <div class="row">
            <div class="col-12 container-login">
                    Уже зарегистрированны? <a class="link" href="#">Войти</a>
            </div>
    </div>
</div>
