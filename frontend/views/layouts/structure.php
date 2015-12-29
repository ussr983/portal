<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>


<!DOCTYPE html>
<html lang="<?php echo Yii::$app->language ?>">
<head>
	<meta charset="<?php echo Yii::$app->charset ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php echo Html::csrfMetaTags() ?>
        <title><?php echo Html::encode($this->title) ?></title>
        <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody(); ?>
    <header>
        <div class="container">
            <div class="col-2 header-logo">
                <a href="/">
                        <img class="img-responsive" src="public/img/logo.png" alt="tiptop" />
                </a>
            </div>
            <div class="col-5 header-description">
                <p><span class="text-underline text-red">Это проект для легкого решения бытовых и материальных проблем людей!</span></p>
                <p>Немного ниже находится более полная информация о возможностях  системы.  Ознакомится с ней необходимо, чтоб понимать, как и что тут работает , каким образом совершаются сделки, начисляются бонусы и многое другое.</p>
            </div>
            <div class="col-2 login">

            </div>
            <div class="col-3 new-ad">
                <a class="btn btn-green btn-new_ad" href="#"><i class="icon-plus"></i> Подать объявление</a>
            </div>
        </div>
    </header>
    <nav class="nav-top">
        <div class="container">
            <div class="menu-top">
                <a href="#">Что такое трейдсеть?</a>
                <a href="#">Как совершать обмен?</a>
                <a href="#">Как тут заработать?</a>
                <a href="#">Интерент-магазины</a>
                <a href="#">Покупки за 10 грн</a>
            </div>
        </div>
    </nav>
    <?php echo $content; ?>
    <footer>
        <div class="footer-header">
            <div class="container">
                <div class="col-2 about">
                    <h4 class="title">О нас</h4>
                    <ul class="menu-about list-unstyle">
                        <li class="menu-item"><a href="#">Партнерская программа</a></li>
                        <li class="menu-item"><a href="#">FAQ</a></li>
                        <li class="menu-item"><a href="#">О проекте</a></li>
                        <li class="menu-item"><a href="#">Публичная оферта</a></li>
                        <li class="menu-item"><a href="#">Контакты</a></li>
                    </ul>
                </div>
                <div class="col-2 support">
                    <h4 class="title">Помощь</h4>
                    <ul class="menu-support list-unstyle">
                        <li class="menu-item"><a href="#">Служба поддержки</a></li>
                        <li class="menu-item"><a href="#">Защита потребителей</a></li>
                    </ul>
                </div>
            </div>
        </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="copyright">2015 &copy; tiptop.com.ua</div>
                </div>
            </div>
    </footer>
    <?php $this->endBody(); ?>
</body>
</html>
<?php $this->endPage(); ?>