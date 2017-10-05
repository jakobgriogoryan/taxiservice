<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8"/>
    <title>Metronic | Login Options - Login Form 1</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
    <link href="<?=base_url()?>/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?= base_url()?>/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?= base_url()?>/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?= base_url()?>/assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="<?= base_url()?>/assets/admin/pages/css/login.css" rel="stylesheet" type="text/css"/>
    <!-- END PAGE LEVEL SCRIPTS -->
    <!-- BEGIN THEME STYLES -->
    <link href="<?= base_url()?>/assets/global/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
    <link href="<?= base_url()?>/assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
    <link href="<?= base_url()?>/assets/admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
    <link href="<?= base_url()?>/assets/admin/layout/css/themes/darkblue.css" rel="stylesheet" type="text/css" id="style_color"/>
    <link href="<?= base_url()?>/assets/admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>
    <!-- END THEME STYLES -->
    <link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="login">
<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
<div class="menu-toggler sidebar-toggler">
</div>
<!-- END SIDEBAR TOGGLER BUTTON -->
<!-- BEGIN LOGO -->
<div class="logo">
    <a href="index.html">
        <img src="<?= base_url()?>/assets/admin/layout/img/logo-big.png" alt=""/>
    </a>
</div>
<!-- END LOGO -->

<!-- BEGIN LOGIN -->
<div class="content">
    <!-- BEGIN LOGIN FORM -->
    <form class="login-form" action=" <?= base_url()?>admin/auth/login" method="post">
        <h3 class="form-title">Регистрация</h3>
        <div class="alert alert-danger display-hide">
            <button class="close" data-close="alert"></button>
            <span>
			Введите ваш логин и пароль. </span>
        </div>
        <div class="form-group">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">Логин</label>
            <input class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off" placeholder="Логин" name="login"/>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Пароль</label>
            <input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="Пароль" name="password"/>
        </div>
        <div class="form-actions">
            <button type="submit" class="btn btn-success uppercase">Войти</button>
            <label class="rememberme check">
                <input type="checkbox" name="remember" value="1"/>Запомнить </label>
            <a href="javascript:;" id="forget-password" class="forget-password">Забыли пароль?</a>
        </div>
<!--        <div class="login-options">-->
<!--            <h4>Or login with</h4>-->
<!--            <ul class="social-icons">-->
<!--                <li>-->
<!--                    <a class="social-icon-color facebook" data-original-title="facebook" href="#"></a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a class="social-icon-color twitter" data-original-title="Twitter" href="#"></a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a class="social-icon-color googleplus" data-original-title="Goole Plus" href="#"></a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a class="social-icon-color linkedin" data-original-title="Linkedin" href="#"></a>-->
<!--                </li>-->
<!--            </ul>-->
<!--        </div>-->
        <div class="create-account">
            <p>
                <a href="javascript:;" id="register-btn" class="uppercase">Зарегистрироваться</a>
            </p>
        </div>
    </form>
    <!-- END LOGIN FORM -->
    <!-- BEGIN FORGOT PASSWORD FORM -->
    <form class="forget-form" action="<?= base_url().'/login' ?>" method="post">
        <h3>Забыли пароль ?</h3>
        <p>
            Введите ваш электронная почта для изменения паролья.
        </p>
        <div class="form-group">
            <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Электронная почта" name="email"/>
        </div>
        <div class="form-actions">
            <button type="button" id="back-btn" class="btn btn-default">Назад</button>
            <button type="submit" class="btn btn-success uppercase pull-right">Далее</button>
        </div>
    </form>
    <!-- END FORGOT PASSWORD FORM -->
    <!-- BEGIN REGISTRATION FORM -->
    <form class="register-form" action="<?= base_url()?>/login" method="post">
        <h3>Регистрация</h3>
        <p class="hint">
            Введите ваши персональные данные:
        </p>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Имя</label>
            <input class="form-control placeholder-no-fix" type="text" placeholder="Имя" name="name"/>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Фамилия</label>
            <input class="form-control placeholder-no-fix" type="text" placeholder="Фамилия" name="surname"/>
        </div>
        <div class="form-group">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">Электронная почта</label>
            <input class="form-control placeholder-no-fix" type="text" placeholder="Электронная почта" name="email"/>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Номер мовильного телефона</label>
            <input class="form-control placeholder-no-fix" type="text" placeholder="Номер мовильного телефона" name="phone_number"/>
        </div>
<!--        <div class="form-group">-->
<!--            <label class="control-label visible-ie8 visible-ie9">City/Town</label>-->
<!--            <input class="form-control placeholder-no-fix" type="text" placeholder="City/Town" name="city"/>-->
<!--        </div>-->

        <p class="hint">
            Введите данные вашего аккаунта:
        </p>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Логин</label>
            <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Логин" name="login"/>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Пароль</label>
            <input class="form-control placeholder-no-fix" type="password" autocomplete="off" id="register_password" placeholder="Пароль" name="password"/>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Павторите пароль</label>
            <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Павторите пароль" name="rpassword"/>
        </div>
<!--        <div class="form-group margin-top-20 margin-bottom-20">-->
<!--            <label class="check">-->
<!--                <input type="checkbox" name="tnc"/> I agree to the <a href="#">-->
<!--                    Terms of Service </a>-->
<!--                & <a href="#">-->
<!--                    Privacy Policy </a>-->
<!--            </label>-->
<!--            <div id="register_tnc_error">-->
<!--            </div>-->
<!--        </div>-->
        <div class="form-actions">
            <button type="button" id="register-back-btn" class="btn btn-default">Назад</button>
            <button type="submit" id="register-submit-btn" class="btn btn-success uppercase pull-right">Создать аккаунт</button>
        </div>
    </form>
    <!-- END REGISTRATION FORM -->
</div>
<div class="copyright">
    2014 © Metronic. Admin Dashboard Template.
</div>
<!-- END LOGIN -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="<?= base_url()?>/assets/global/plugins/respond.min.js"></script>
<script src="<?= base_url()?>/assets/global/plugins/excanvas.min.js"></script>
<![endif]-->
<script src="<?= base_url()?>/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="<?= base_url()?>/assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<script src="<?= base_url()?>/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?= base_url()?>/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?= base_url()?>/assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="<?= base_url()?>/assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="<?= base_url()?>/assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?= base_url()?>/assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?= base_url()?>/assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="<?= base_url()?>/assets/admin/layout/scripts/demo.js" type="text/javascript"></script>
<script src="<?= base_url()?>/assets/admin/pages/scripts/login.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
    jQuery(document).ready(function() {
        Metronic.init(); // init metronic core components
        Layout.init(); // init current layout
        Login.init();
        Demo.init();
    });
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>