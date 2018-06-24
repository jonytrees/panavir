<?php
header('Content-Type: text/html; charset=utf-8');
header('X-UA-Compatible: IE=edge');
include 'functions.php';

$title = 'Панавир';
$desc = 'Препарат растительного происхождения';
$url = SI_CurrentPageURL();
$image = SI_CurrentPageImage();

//https://sypexgeo.net/ru/about/
if (file_exists('SxGeo.php')) {
    include 'SxGeo.php';
    $web_time = '';

    $SxGeo = new SxGeo('SxGeo.dat');
    $SxGeoCity = new SxGeo('SxGeoCity.dat');
    $ip = $_SERVER['REMOTE_ADDR'];
    $country = $SxGeo->getCountry($ip);
    $region = $SxGeoCity->getCityFull($ip);
    $regionCity = $region["city"]["name_ru"];

    if ($country == "RU") {
        $web_time = '12:00';
        switch ($regionCity) {
            case 'Калининград':
                $web_time = '10:00';
                break;
            case 'Москва':
                $web_time = '11:00';
                break;
            case 'Санкт-Петербург':
                $web_time = '11:00';
                break;
        }
    } else if ($country == "UA") {
        $web_time = '10:00';
    } else if ($country == "BY") {
        $web_time = '11:00';
    } else {
        $web_time = '12:00 по Москве';
    }
}
?>

<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="ru" class="loading">


<head>

    <!-- Meta information (content-type + mobile mod) -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta name="format-detection" content="telephone=no">
    <meta name="cmsmagazine" content="2f345f737ed0d95e9259d18f5edc8cd7">
    <meta name="tagline" content="http://hello-brand.ru/">


    <!-- Favicon -->
    <link rel="icon" type="image/x-icon">
    <link rel="shortcut icon" type="image/x-icon">
    <!-- Favicon -->
    <link rel="icon"  type="image/png">
    <link rel="shortcut icon" href="images/icons.png" type="image/png">


    <!-- CSS styles -->
    <link rel="stylesheet" href="css/jquery.fancybox.min.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/jquery.formstyler.min.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/swiper.min.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style-fix.css" type="text/css" media="screen">


    <!-- OGP -->
    <meta property="og:title" content="<?php echo $title; ?>"/>
    <meta property="og:description" content="<?php echo $desc; ?>"/>
    <meta property="og:url" content="<?php echo $url; ?>">
    <meta property="og:image" content="<?php echo $image; ?>">


    <!-- Page title -->
    <title><?php echo $title; ?> | <?php echo $desc; ?></title>


</head>


<body id="main">
<div id="global-wrapper">

    <!--===================================================== Loader -->
        <div class="loader">
            <div class="pseudo-table">
                <div class="pseudo-table-cell align-center">

                    <div class="a-loader a-loader-2">
                        <div class="bar-1"></div>
                        <div class="bar-2"></div>
                        <div class="bar-3"></div>
                        <div class="bar-4"></div>
                        <div class="bar-5"></div>
                        <div class="bar-6"></div>
                        <div class="bar-7"></div>
                        <div class="bar-8"></div>
                    </div>

                    <div class="loader-text">
                        загрузка
                    </div>

                </div>
            </div>
        </div>

    <!--===================================================== Header -->
    <header class="layout-header cre-animate" data-animation="scale-up" data-speed="1200" data-delay="400" data-offset="90%" data-easing="easeInOutBack">
        <div class="container">
            <div class="row">

                <!-- Logo -->
                <div class="col-1-2 col-1-2-xs">
                    <a href="#" class="logo">
                    </a>
                    <span class="logo_subtext">
                        Препарат растительного происхождения
                    </span>
                </div>

                <!-- Phone block -->
                <div class="col-1-2 col-1-2-xs align-right">
                    <div class="si-phone">
                        <a href="tel:+78005552229" class="phone-link dark"><svg class="phone-svg" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><defs><path id="nh0oa" d="M962 43.5a14.5 14.5 0 1 1-29 0 14.5 14.5 0 0 1 29 0zm-7.3 3.78a4.69 4.69 0 0 0-3.07-2.14.48.48 0 0 0-.44.1c-.7.6-1.68 1.25-2.1 1.31-2.82-1.38-4.39-4.02-4.45-4.52-.03-.28.61-1.27 1.36-2.08a.5.5 0 0 0 .12-.38c-.19-2.17-2.45-3.23-2.55-3.28a.47.47 0 0 0-.29-.04c-2.61.44-3 1.96-3.02 2.02a.5.5 0 0 0 0 .27c3.13 9.68 9.61 11.48 11.75 12.07l.4.11a.51.51 0 0 0 .36-.02c.06-.03 1.6-.75 1.98-3.12.01-.1 0-.21-.05-.3z"/></defs><g><g transform="translate(-931 -27)"><use fill="#94bee6" xlink:href="#nh0oa"/></g></g></svg>8-800-555-222-9</a>
                        <a href="#" class="button button-yellow open-phone-modal" data-extra="1">Задать вопрос</a>
                        <div class="si-overlay"></div>
                        <div class="si-modals-wrapper">
                            <div class="si-success-modal si-success-modal-1">
                                <a href="#" class="si-close"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><defs><path id="4928a" d="M1144.15 325.8l5.4 5.27c.6.58.6 1.53 0 2.11-.59.58-1.56.58-2.15 0l-5.37-5.23-5.52 5.6c-.58.58-1.5.58-2.08 0a1.5 1.5 0 0 1 0-2.1l5.2-5.29-5.2-5.27a1.5 1.5 0 0 1 0-2.12c.57-.58 1.5-.58 2.08 0l5.16 5.24 5.73-5.59c.6-.58 1.56-.58 2.16 0 .6.59.6 1.53 0 2.11z"/></defs><g><g transform="translate(-1132 -316)"><use fill="#626365" xlink:href="#4928a"/></g></g></svg></a>

                                <div class="modal-container align-center">

                                    <div class="si-success-modal-title">
                                        <div class="title">
                                            Спасибо!
                                        </div>
                                    </div>

                                    <div class="modal_sub_title">
                                        Наш менеджер свяжется
                                        с Вами в течение 15 мин
                                    </div>
                                    <div class="title-2">
                                        Время работы отдела продаж:
                                    </div>
                                    <div class="sub_title-2">
                                        пн-пт с 10.00 до 20.00 (по Москве)
                                    </div>
                                </div>
                                <div class="line"></div>
                                <div class="modal_social">
                                    <div class="social-title">
                                        Подпишитесь на наши новости:
                                    </div>
                                    <div class="smm">
                                        <a href="#"> <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px"
                                                          viewBox="0 0 26 26" style="enable-background:new 0 0 26 26;" xml:space="preserve">
<style type="text/css">
    .st0{fill:#3A589B;}
</style>
                                                <path class="st0" d="M11.2,20.1h2.9V13H16l0.3-2.4h-2.2l0-1.2c0-0.6,0.1-1,1-1h1.2V5.9h-1.9c-2.3,0-3.2,1.2-3.2,3.2v1.5H9.7V13h1.5
	V20.1z M0,0h26v26H0V0z"/>
</svg></a>
                                        <a href="#"><svg version="1.1" id="Layer_1" class="google" xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px"
                                                         viewBox="0 0 26 26"  style="enable-background:new 0 0 26 26;" xml:space="preserve">
<style type="text/css">
    .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#D6492F;}
</style>
                                                <path class="st0" d="M26,9v17H11.9l2.3,0c0.2-0.7,0.3-1.2,0.3-1.9c0-2.6-2.2-3.9-3.9-5.4l-1.4-1.1c-0.4-0.3-1-0.8-1-1.6
	c0-0.8,0.6-1.4,1.1-1.9c1.6-1.3,3.1-2.6,3.1-5.4c0-2.6-1.4-4-2.3-4.8h2.3l2.1-1.7H6.6c-2,0-4.4,0.3-6.6,2.1V0h26v7h-4.9V2.1h-2.1V7
	h-4.8v2h4.8v4.9h2.1V9H26z M0,22.5c0.8-1.1,1.7-1.2,2.3-1.4c1.6-0.5,3.7-0.6,4-0.6c0.4,0,0.6,0,0.9,0c2.9,2.1,4.8,3.1,4.8,5.1
	c0,0.2,0,0.3,0,0.4H0V22.5z M1.2,7.5c0-1,0.1-2,0.7-2.8c0.6-0.8,1.7-1.3,2.7-1.3c3.2,0,4.8,4.3,4.8,7c0,0.6-0.3,1.6-1,2.5
	c-0.6,0.7-1.6,1-2.6,1C2.5,13.9,1.2,10.1,1.2,7.5z M5.1,15.4c-0.2,0.5-0.4,0.8-0.4,1.5c0,1.2,0.6,1.9,1.1,2.6
	c-1.5,0.1-3.7,0.1-5.9,1.1v-6.3c1,0.9,2.2,1.2,3.9,1.2C4.3,15.4,4.7,15.4,5.1,15.4z"/>
</svg></a>
                                        <a href="#"><svg version="1.1" class="insta" id="Layer_1" xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px"
                                                         viewBox="0 0 26 26" style="enable-background:new 0 0 26 26;" xml:space="preserve">
<style type="text/css">
    .st0{fill:#3B5998;}
</style>
                                                <g>
                                                    <path class="st0" d="M17.1,13.5c-0.1,0.6-0.3,1.1-0.6,1.6c-0.3,0.5-0.7,0.9-1.2,1.3c-1.3,0.9-3,0.9-4.3,0.2
		c-0.7-0.4-1.2-0.9-1.6-1.6c-0.6-1-0.6-2.1-0.3-3.2c-0.4,0-0.8,0-1.3,0v0c0,2,0,3.9,0,5.9c0,0.3,0.2,0.5,0.5,0.5c3.1,0,6.2,0,9.3,0
		c0.3,0,0.5-0.2,0.5-0.5c0-2,0-3.9,0-5.9v0h-1.3C17.1,12.3,17.1,12.9,17.1,13.5z"/>
                                                    <path class="st0" d="M12.9,15.7c1.5,0,2.7-1.2,2.7-2.6c0-1.5-1.2-2.7-2.7-2.7c-1.5,0-2.7,1.2-2.7,2.6
		C10.3,14.5,11.5,15.6,12.9,15.7z"/>
                                                    <path class="st0" d="M15.9,9.4c0.1,0.2,0.3,0.4,0.5,0.4c0.2,0,0.4,0,0.6,0v0c0.2,0,0.4,0,0.7,0c0.3,0,0.5-0.2,0.5-0.5
		c0-0.4,0-0.8,0-1.3c0-0.3-0.2-0.5-0.5-0.5c-0.4,0-0.8,0-1.2,0c-0.3,0-0.5,0.2-0.5,0.5c0,0.4,0,0.8,0,1.2
		C15.9,9.3,15.9,9.4,15.9,9.4z"/>
                                                    <path class="st0" d="M0,0v26h26V0H0z M19.6,18.3c0,0.1,0,0.1,0,0.2c-0.1,0.5-0.5,1-1.1,1.1c-0.1,0-0.1,0-0.2,0v0H7.7
		c0,0-0.1,0-0.1,0c-0.6-0.1-1.1-0.5-1.2-1.1c0-0.1,0-0.1,0-0.2V7.7c0,0,0,0,0-0.1C6.5,7,6.9,6.6,7.5,6.4c0.1,0,0.1,0,0.2,0h10.6
		c0,0,0,0,0.1,0c0.6,0.1,1.1,0.5,1.2,1.1c0,0.1,0,0.1,0,0.2V18.3z"/>
                                                </g>
</svg></a>
                                        <a href="#"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px"
                                                         viewBox="0 0 26 26" class="vk" style="enable-background:new 0 0 26 26;" xml:space="preserve">
<style type="text/css">
    .st0{fill:#4C75A3;}
</style>
                                                <path class="st0" d="M0,0v26h26V0H0z M20.4,18.4c-0.2,0-0.3,0-0.5,0c-0.3,0-0.5,0-0.8,0c-0.5,0-1,0-1.4-0.2
	c-0.2-0.1-0.4-0.4-0.6-0.6c-0.3-0.3-0.7-0.7-1.3-1.2c-0.5-0.5-1.3-1-1.7-0.8c-0.4,0.2,0.1,2.2-0.3,2.5c-0.5,0.3-1.9,0.3-3.3-0.1
	c-0.3-0.1-0.7-0.3-1-0.5c-1.1-0.7-2.1-1.7-2.9-2.7c-0.8-1-1.4-2.1-2-3.3c-0.2-0.5-0.5-1-0.7-1.5c0-0.1-0.1-0.2-0.1-0.3
	C3.7,9.6,3.6,9.4,3.7,9.1c0.1-0.4,0.5-0.4,0.8-0.4c0.1,0,0.3,0,0.4,0c0.5,0,1,0,1.4,0c0.1,0,0.3,0,0.4,0C7,8.9,7.1,9.2,7.2,9.4
	C7.3,9.6,7.4,9.8,7.4,10c0.1,0.2,0.2,0.4,0.2,0.5c0.3,0.6,0.6,1.3,0.9,1.8c0.4,0.6,0.8,1.1,1.2,1.6c0.6,0.6,0.7-0.1,0.7-0.1
	s0-2.4,0-3.2c0-0.8-0.6-1-0.8-1.4c-0.2-0.5,0.3-0.5,0.3-0.5h2.3c0,0,1.1,0,1.3,0S14,9,14,9s0,3.3,0,3.8c0,0.6,0.1,0.6,0.4,0.5
	c0.3-0.1,1.7-1.9,1.9-2.2c0.1-0.1,0.1-0.2,0.2-0.3c0.1-0.2,0.3-0.5,0.4-0.7c0.1-0.1,0.2-0.3,0.3-0.4c0.1-0.2,0.3-0.4,0.4-0.6
	c0.1-0.2,0.2-0.3,0.5-0.4c0.2,0,0.3,0,0.5,0c0.2,0,0.3,0,0.5,0c0,0,0.8,0,1.2,0c0.1,0,0.2,0,0.3,0c0.2,0,0.2,0.2,0.3,0.3
	c0.1,0.2,0,0.4-0.1,0.6c-0.2,0.4-0.4,0.9-0.7,1.3c-0.2,0.3-0.4,0.7-0.7,1c-0.4,0.5-0.8,1.3-1.1,1.6c-0.2,0.3-0.2,0.4-0.1,0.6
	c0.1,0.2,1.2,1.3,1.5,1.6c0.3,0.3,0.7,0.7,1.2,1.4c0.1,0.1,0.2,0.3,0.3,0.5c0,0.1,0.1,0.2,0.1,0.3C21.1,18.3,20.7,18.4,20.4,18.4z"
                                                    />
</svg></a>
                                    </div>
                                </div>
                            </div>
                            <div class="si-modal phone-modal">
                                <a href="#" class="si-close"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><defs><path id="4928a" d="M1144.15 325.8l5.4 5.27c.6.58.6 1.53 0 2.11-.59.58-1.56.58-2.15 0l-5.37-5.23-5.52 5.6c-.58.58-1.5.58-2.08 0a1.5 1.5 0 0 1 0-2.1l5.2-5.29-5.2-5.27a1.5 1.5 0 0 1 0-2.12c.57-.58 1.5-.58 2.08 0l5.16 5.24 5.73-5.59c.6-.58 1.56-.58 2.16 0 .6.59.6 1.53 0 2.11z"/></defs><g><g transform="translate(-1132 -316)"><use fill="#626365" xlink:href="#4928a"/></g></g></svg></a>

                                <div class="modal-container align-center">

                                    <div class="modal-form-title">
                                        Закажите консультацию
                                    </div>

                                    <div class="modal-time">
                                        Ответ в течение 15 минут
                                    </div>

                                    <form action="send.php" method="post" class="send-form" autocomplete="off">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-1-2 col-1-2-xs">
                                                    <input type="text" name="client_name" class="client-name" placeholder="Ваше имя">
                                                </div>
                                                <div class="col-1-2 col-1-2-xs">
                                                    <input type="tel" name="client_phone" class="client-phone" placeholder="Ваш телефон">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-1-1 col-1-xs">
                                                    <textarea name="client_message" class="client-message" placeholder="Ваш вопрос"></textarea>
                                                </div>
                                            </div>
                                        </div>


                                        <input type="hidden" name="send_type" class="send-type" value="1">
                                        <input type="hidden" name="send_extra" class="send-extra" value="1">

                                        <div class="btn-holder">
                                            <button type="submit" class="btn">Позвоните мне</button>
                                            <div class="g-recaptcha" id="g-recaptcha"></div>
                                        </div>
                                        <!--                                                     Agreement -->
                                        <div class="form-agree align-left">
                                            <label class="checkbox-label form-agree-check checked">
                                                <input type="checkbox" checked>
                                                Нажимая кнопку "ПОЗВОНИТЕ МНЕ", я&nbsp;даю своё согласие на&nbsp;обработку
                                                моих персональных данных в&nbsp;соответствии с&nbsp;Федеральным законом
                                                от&nbsp;27.07.2006&nbsp;года №152&#8209;ФЗ "О&nbsp;персональных данных",
                                                на&nbsp;условиях и&nbsp;для&nbsp;целей, определённых
                                                в&nbsp;Согласии на&nbsp;обработку персональных данных.
                                            </label>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </header>

    <!--===================================================== section sub_header -->
    <section class="section-sub_header entry-main-image parallax-block" data-parallax="scroll" data-image-src="images/header_fon.jpg" id="sub_header">
        <div class="block_warning">
            *ИМЕЮТСЯ ПРОТИВОПОКАЗАНИЯ, ПЕРЕД ПРИМЕНЕНИЕМ НЕОБХОДИМО ОЗНАКОМИТЬСЯ<br> С ИНСТРУКЦИЕЙ.
        </div>
        <div class="container">
            <div class="row">
                <div class="col-1-2 col-1-xs">
                    <div class="block_title cre-animate" data-animation="scale-up" data-speed="1500" data-delay="500" data-offset="90%" data-easing="easeInOutBack">
                        <span class="small_text_h1">
                            противовирусный гель
                        </span>
                        <h1>
                            <span>Панавир®</span>
                            от герпеса
                            и ВПЧ*
                        </h1>
                    </div>
                </div>
                <div class="col-1-2 col-1-xs">
                    <img class="sub_header_img cre-animate" data-animation="scale-up" data-speed="1500" data-delay="600" data-offset="90%" data-easing="easeInOutBack" src="images/tube.jpg" alt=""/>
                </div>
            </div>
            <div class="row">
                <h2>Боритесь с вирусом <span>незамедлительно</span></h2>

                <div class="col-1-1 col-1-xs cre-animate" data-animation="scale-up" data-speed="1500" data-delay="700" data-offset="90%" data-easing="easeInOutBack">
                    <div class="h2_subtext-big">
                        <p class="h2_subtext float-left">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                 viewBox="0 0 40 40" style="enable-background:new 0 0 40 40;" xml:space="preserve">
<style type="text/css">
    .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#FFF200;}
    .st1{fill-rule:evenodd;clip-rule:evenodd;fill:#94BEE6;}
</style>
                                <path class="st0" d="M20,8.4c6.4,0,11.6,5.2,11.6,11.6c0,6.4-5.2,11.6-11.6,11.6S8.4,26.4,8.4,20C8.4,13.6,13.6,8.4,20,8.4z"/>
                                <path class="st1" d="M20,40C9,40,0,31,0,20C0,9,9,0,20,0c11,0,20,9,20,20C40,31,31,40,20,40z M20,1.5C9.8,1.5,1.5,9.8,1.5,20
	c0,10.2,8.3,18.5,18.5,18.5c10.2,0,18.5-8.3,18.5-18.5C38.5,9.8,30.2,1.5,20,1.5z M20,36.4c-9.1,0-16.4-7.4-16.4-16.4
	c0-9.1,7.4-16.4,16.4-16.4c9.1,0,16.4,7.4,16.4,16.4C36.4,29.1,29.1,36.4,20,36.4z M20,5.1C11.8,5.1,5.1,11.8,5.1,20
	c0,8.2,6.7,14.9,14.9,14.9c8.2,0,14.9-6.7,14.9-14.9C34.9,11.8,28.2,5.1,20,5.1z M19.3,24.7c-0.3,0.3-0.8,0.3-1.1,0l-4.4-4.4
	c-0.3-0.3-0.3-0.8,0-1.1c0.3-0.3,0.8-0.3,1.1,0l3.9,3.9l6.3-6.3c0.3-0.3,0.8-0.3,1.1,0c0.3,0.3,0.3,0.8,0,1.1L19.3,24.7z"/>
</svg>
                            Блокирует вирус
                        </p>
                        <p class="h2_subtext">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                 viewBox="0 0 40 40" style="enable-background:new 0 0 40 40;" xml:space="preserve">
<style type="text/css">
    .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#FFF200;}
    .st1{fill-rule:evenodd;clip-rule:evenodd;fill:#94BEE6;}
</style>
                                <path class="st0" d="M20,8.4c6.4,0,11.6,5.2,11.6,11.6c0,6.4-5.2,11.6-11.6,11.6S8.4,26.4,8.4,20C8.4,13.6,13.6,8.4,20,8.4z"/>
                                <path class="st1" d="M20,40C9,40,0,31,0,20C0,9,9,0,20,0c11,0,20,9,20,20C40,31,31,40,20,40z M20,1.5C9.8,1.5,1.5,9.8,1.5,20
	c0,10.2,8.3,18.5,18.5,18.5c10.2,0,18.5-8.3,18.5-18.5C38.5,9.8,30.2,1.5,20,1.5z M20,36.4c-9.1,0-16.4-7.4-16.4-16.4
	c0-9.1,7.4-16.4,16.4-16.4c9.1,0,16.4,7.4,16.4,16.4C36.4,29.1,29.1,36.4,20,36.4z M20,5.1C11.8,5.1,5.1,11.8,5.1,20
	c0,8.2,6.7,14.9,14.9,14.9c8.2,0,14.9-6.7,14.9-14.9C34.9,11.8,28.2,5.1,20,5.1z M19.3,24.7c-0.3,0.3-0.8,0.3-1.1,0l-4.4-4.4
	c-0.3-0.3-0.3-0.8,0-1.1c0.3-0.3,0.8-0.3,1.1,0l3.9,3.9l6.3-6.3c0.3-0.3,0.8-0.3,1.1,0c0.3,0.3,0.3,0.8,0,1.1L19.3,24.7z"/>
</svg>
                            Восстанавливает повреждённые ткани
                        </p>
                        <p class="h2_subtext mobile-block">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                 viewBox="0 0 40 40" style="enable-background:new 0 0 40 40;" xml:space="preserve">
<style type="text/css">
    .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#FFF200;}
    .st1{fill-rule:evenodd;clip-rule:evenodd;fill:#94BEE6;}
</style>
                                <path class="st0" d="M20,8.4c6.4,0,11.6,5.2,11.6,11.6c0,6.4-5.2,11.6-11.6,11.6S8.4,26.4,8.4,20C8.4,13.6,13.6,8.4,20,8.4z"/>
                                <path class="st1" d="M20,40C9,40,0,31,0,20C0,9,9,0,20,0c11,0,20,9,20,20C40,31,31,40,20,40z M20,1.5C9.8,1.5,1.5,9.8,1.5,20
	c0,10.2,8.3,18.5,18.5,18.5c10.2,0,18.5-8.3,18.5-18.5C38.5,9.8,30.2,1.5,20,1.5z M20,36.4c-9.1,0-16.4-7.4-16.4-16.4
	c0-9.1,7.4-16.4,16.4-16.4c9.1,0,16.4,7.4,16.4,16.4C36.4,29.1,29.1,36.4,20,36.4z M20,5.1C11.8,5.1,5.1,11.8,5.1,20
	c0,8.2,6.7,14.9,14.9,14.9c8.2,0,14.9-6.7,14.9-14.9C34.9,11.8,28.2,5.1,20,5.1z M19.3,24.7c-0.3,0.3-0.8,0.3-1.1,0l-4.4-4.4
	c-0.3-0.3-0.3-0.8,0-1.1c0.3-0.3,0.8-0.3,1.1,0l3.9,3.9l6.3-6.3c0.3-0.3,0.8-0.3,1.1,0c0.3,0.3,0.3,0.8,0,1.1L19.3,24.7z"/>
</svg>
                            Снижает риск
                            повторных высыпаний
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-1-1 col-1-xs">
                    <div class="line"></div>
                    <p class="header_small_text">
                        Лекарственное средство Панавир гель для наружного и местного применения 0,002%.
                        № рег. Удостоверения ЛС-001697.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <!--===================================================== section warting-mobile -->
    <section class="section-warting-mobile" id="warting-mobile">
        <div class="container">
            <div class="row">
                <div class="col-1-1 col-1-xs">
                    <div class="block_warning-mobile">
                        *ИМЕЮТСЯ ПРОТИВОПОКАЗАНИЯ, ПЕРЕД ПРИМЕНЕНИЕМ НЕОБХОДИМО ОЗНАКОМИТЬСЯ С ИНСТРУКЦИЕЙ.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--===================================================== section third -->
    <section class="section-third" id="section-third">
        <div class="container">
            <div class="row">
                <div class="col-1-3 col-1-xs cre-animate" data-animation="scale-up" data-speed="1200" data-delay="500" data-offset="50%" data-easing="ease">
                    <svg xmlns="http://www.w3.org/2000/svg" class="fast-svg margin-under" width="81" height="110" viewBox="0 0 81 81"><defs><path id="iq7la" d="M480 985c-21.5 0-39-17.5-39-39s17.5-39 39-39 39 17.5 39 39-17.5 39-39 39zm0-75c-19.85 0-36 16.15-36 36s16.15 36 36 36 36-16.15 36-36-16.15-36-36-36zm1.5 17.14v17.37h10.68a1.5 1.5 0 0 1 0 3H480a1.5 1.5 0 0 1-1.5-1.5v-18.87a1.5 1.5 0 1 1 3 0zm-1.5 50.74a31.92 31.92 0 0 1-29.94-42.85 1.5 1.5 0 0 1 2.81 1.03A28.91 28.91 0 0 0 480 974.88 28.91 28.91 0 0 0 508.88 946 28.91 28.91 0 0 0 480 917.12c-6.64 0-13.12 2.3-18.25 6.5a1.5 1.5 0 1 1-1.9-2.33 31.94 31.94 0 0 1 20.15-7.17A31.92 31.92 0 0 1 511.88 946 31.92 31.92 0 0 1 480 977.88zm-25.17-47.39a1.49 1.49 0 0 1-1.5-1.5c0-.38.15-.78.44-1.05a1.54 1.54 0 0 1 2.11 0 1.46 1.46 0 0 1 0 2.12c-.27.27-.66.43-1.05.43z"/><path id="iq7lb" d="M480 926a20 20 0 1 1 0 40 20 20 0 0 1 0-40z"/><mask id="iq7ld" width="2" height="2" x="-1" y="-1"><path fill="#fff" d="M441 907h78v78h-78z"/><use xlink:href="#iq7la"/></mask><filter id="iq7lc" width="118" height="128" x="421" y="897" filterUnits="userSpaceOnUse"><feOffset dy="10" in="SourceGraphic" result="FeOffset1053Out"/><feGaussianBlur in="FeOffset1053Out" result="FeGaussianBlur1054Out" stdDeviation="4 4"/></filter></defs><g><g transform="translate(-439 -905)"><use fill="#fff200" xlink:href="#iq7lb"/></g><g transform="translate(-439 -905)"><g filter="url(#iq7lc)"><use fill="none" stroke-opacity=".3" stroke-width="0" mask="url(&quot;#iq7ld&quot;)" xlink:href="#iq7la"/><use fill-opacity=".3" xlink:href="#iq7la"/></g><use fill="#fff" xlink:href="#iq7la"/></g></g></svg>
                    <p class="third_text">
                        Быстро
                        <span>от 4-7 дней курс применения</span>
                    </p>

                </div>
                <div class="col-1-3 col-1-xs margin-under cre-animate" data-animation="scale-up" data-speed="1200" data-delay="500" data-offset="50%" data-easing="ease">
                    <svg xmlns="http://www.w3.org/2000/svg" class="effective-svg margin-under-2" width="98" height="133" viewBox="0 0 98 105"><defs><path id="8c1va" d="M855.84 901.84a1.51 1.51 0 0 0-1.45-.86l-17.51.77-.37-2.72a1.54 1.54 0 1 0-3.06.41l.46 3.44-7.22 8.65-1.96-14.66 7.25-8.69a1.55 1.55 0 0 0 2.97-.75l-.41-3.1a1.55 1.55 0 0 0-2.71-.78l-9.9 11.86c-.29.33-.41.76-.35 1.2l2.43 18.13-25.35 30.35a1.55 1.55 0 0 0 1.18 2.54c.44 0 .88-.19 1.18-.56l25.36-30.34 18.24-.8c.44-.02.84-.22 1.12-.55l9.9-11.86c.4-.47.48-1.13.2-1.68zm-4.8 2.39l-7.23 8.64-14.75.65 7.22-8.65zm-15.74-9.65c.3-.3.45-.68.45-1.08 0-.42-.15-.8-.45-1.1a1.61 1.61 0 0 0-2.19 0c-.27.3-.44.68-.44 1.1 0 .4.17.79.44 1.08.3.3.7.46 1.1.46.4 0 .8-.17 1.1-.46zm-24.33 45.94a12.47 12.47 0 0 1-11.13 18.03 12.47 12.47 0 1 1 3.73-24.36 1.55 1.55 0 0 0 .93-2.95 15.56 15.56 0 1 0-4.66 30.4 15.56 15.56 0 0 0 13.89-22.5 1.55 1.55 0 0 0-2.76 1.39zm10.02-6a24.16 24.16 0 0 1-21.15 35.71 24.15 24.15 0 0 1 0-48.3c2.62 0 5.2.43 7.67 1.26a1.55 1.55 0 0 0 .98-2.93 27.24 27.24 0 1 0-8.65 53.06 27.24 27.24 0 0 0 23.86-40.28 1.55 1.55 0 0 0-2.7 1.48zm-8.3-23.56a1.54 1.54 0 0 0-1-1.94A38.92 38.92 0 1 0 799.84 985a38.92 38.92 0 0 0 32.96-59.52 1.55 1.55 0 0 0-2.62 1.64 35.83 35.83 0 0 1-30.34 54.79 35.83 35.83 0 0 1 .01-71.65c3.73 0 7.4.57 10.91 1.7.81.26 1.68-.18 1.94-1z"/><path id="8c1vb" d="M800 926a20 20 0 1 1 0 40 20 20 0 0 1 0-40z"/><mask id="8c1vd" width="2" height="2" x="-1" y="-1"><path fill="#fff" d="M761 883h95v102h-95z"/><use xlink:href="#8c1va"/></mask><filter id="8c1vc" width="135" height="152" x="741" y="873" filterUnits="userSpaceOnUse"><feOffset dy="10" in="SourceGraphic" result="FeOffset1028Out"/><feGaussianBlur in="FeOffset1028Out" result="FeGaussianBlur1029Out" stdDeviation="4 4"/></filter></defs><g><g transform="translate(-760 -881)"><use fill="#fff200" xlink:href="#8c1vb"/></g><g transform="translate(-760 -881)"><g filter="url(#8c1vc)"><use fill="none" stroke-opacity=".3" stroke-width="0" mask="url(&quot;#8c1vd&quot;)" xlink:href="#8c1va"/><use fill-opacity=".3" xlink:href="#8c1va"/></g><use fill="#fff" xlink:href="#8c1va"/></g></g></svg>
                    <p class="third_text">
                        Эффективно
                    </p>
                </div>
                <div class="col-1-3 col-1-xs cre-animate" data-animation="scale-up" data-speed="1200" data-delay="700" data-offset="50%" data-easing="ease">

                    <svg xmlns="http://www.w3.org/2000/svg" class="security-svg margin-under"  width="66" height="105" viewBox="0 0 66 80"><defs><path id="lgwqa" d="M1150.94 946.24a49.78 49.78 0 0 1-30.37 38.63 1.5 1.5 0 0 1-1.17 0l-.84-.36a49.8 49.8 0 0 1-30.07-45.61v-19.44c0-.83.68-1.5 1.5-1.5 3.71 0 9.92-1.84 17.97-5.33 6.17-2.67 11.27-5.38 11.32-5.4l.08-.04.1-.04c.34-.12.71-.12 1.05 0l.1.04.09.03c.2.11 20.25 10.74 29.28 10.74.83 0 1.5.67 1.5 1.5v19.44c0 2.43-.18 4.9-.54 7.34zm-29.45 34.93a46.78 46.78 0 0 0 26.16-33.65h-11.18v.05l-.11.81c-.04.25-.07.5-.12.73-.05.27-.12.54-.18.8-.06.24-.11.47-.18.7a16.6 16.6 0 0 1-1.5 3.54l-.35.56c-.15.24-.3.48-.46.7-.11.18-.24.33-.36.5l-.55.7-.26.28a16.7 16.7 0 0 1-1.57 1.56l-.2.18-.78.6-.4.3c-.26.18-.53.35-.8.51-.15.1-.3.2-.46.28a15.81 15.81 0 0 1-2.72 1.24l-.93.3-.5.13c-.33.08-.66.16-1 .22l-.43.07c-.37.06-.74.12-1.12.15zm-3 0v-18.74c-.39-.03-.75-.1-1.12-.15l-.44-.07a16.9 16.9 0 0 1-1-.22l-.5-.13a17.05 17.05 0 0 1-3.65-1.54l-.46-.28c-.27-.16-.54-.33-.8-.51l-.4-.3-.78-.6-.2-.18c-.56-.48-1.08-1-1.57-1.56l-.26-.28-.54-.7c-.13-.17-.25-.32-.37-.5-.16-.22-.31-.46-.46-.7l-.34-.56a16.36 16.36 0 0 1-1.5-3.54l-.19-.7c-.06-.26-.13-.53-.18-.8-.05-.24-.08-.48-.11-.73l-.12-.81v-.05h-11.18a46.8 46.8 0 0 0 26.16 33.65zm0-70.16c-2.12 1.06-5.51 2.72-9.33 4.37-7.57 3.28-13.5 5.13-17.66 5.5v18.02c0 1.86.15 3.75.37 5.62h11.63v-.05c.03-.28.08-.54.12-.82l.1-.73.2-.8a16.1 16.1 0 0 1 1.3-3.5c.11-.25.24-.5.38-.73.1-.2.22-.38.34-.56l.46-.71.37-.49c.18-.24.35-.48.54-.7l.26-.28a16.6 16.6 0 0 1 1.57-1.56l.2-.18c.25-.21.51-.4.78-.6l.4-.3.8-.52.46-.28a17.11 17.11 0 0 1 3.66-1.53l.5-.13 1-.23.43-.06c.37-.06.73-.12 1.11-.15zm1.5 21.52a13.53 13.53 0 0 0-13.55 13.49c0 7.44 6.08 13.49 13.55 13.49 7.47 0 13.55-6.05 13.55-13.5 0-7.43-6.08-13.48-13.55-13.48zm28.48-11.65c-8.25-.76-21.7-7.2-26.98-9.87v18.6c.38.03.75.09 1.12.15l.43.06 1 .23.5.13a16.42 16.42 0 0 1 3.65 1.53l.46.28.8.52.4.3c.27.2.53.39.78.6l.2.18c.56.48 1.08 1 1.58 1.56l.25.28c.2.22.37.46.55.7.12.16.25.32.36.49l.46.7.35.57a16.96 16.96 0 0 1 1.5 3.54c.07.23.12.46.18.7.07.26.13.52.18.8.05.23.08.48.12.72.04.28.08.54.1.82l.01.05h11.63c.23-1.87.37-3.76.37-5.62zm-29.45 29.74a1.5 1.5 0 0 1-2.13 0l-3.05-3.04a1.5 1.5 0 0 1 0-2.11 1.5 1.5 0 0 1 2.13 0l1.98 1.97 6.06-6.03a1.51 1.51 0 0 1 2.13 0 1.5 1.5 0 0 1 0 2.12z"/><path id="lgwqb" d="M1120 926a20 20 0 1 1 0 40 20 20 0 0 1 0-40z"/><mask id="lgwqd" width="2" height="2" x="-1" y="-1"><path fill="#fff" d="M1088 907h64v78h-64z"/><use xlink:href="#lgwqa"/></mask><filter id="lgwqc" width="104" height="128" x="1068" y="897" filterUnits="userSpaceOnUse"><feOffset dy="10" in="SourceGraphic" result="FeOffset1078Out"/><feGaussianBlur in="FeOffset1078Out" result="FeGaussianBlur1079Out" stdDeviation="4 4"/></filter></defs><g><g transform="translate(-1087 -906)"><use fill="#fff200" xlink:href="#lgwqb"/></g><g transform="translate(-1087 -906)"><g filter="url(#lgwqc)"><use fill="none" stroke-opacity=".3" stroke-width="0" mask="url(&quot;#lgwqd&quot;)" xlink:href="#lgwqa"/><use fill-opacity=".3" xlink:href="#lgwqa"/></g><use fill="#fff" xlink:href="#lgwqa"/></g></g></svg>
                    <p class="third_text">
                        Безопасно
                        <span>хорошая переносимость</span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!--===================================================== section substance -->
    <section class="section-substance" id="substance">
        <div class="container">
            <div class="row">
            <h2>Субстанция <span>Панавир®</span></h2>
                <div class="col-1-3 col-1-xs">
                    <div class="substance_text cre-animate" data-animation="scale-up" data-speed="1500" data-delay="600" data-offset="90%" data-easing="easeInOutQuad">
                        <svg version="1.1" class="substance_block1 top-under" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                             viewBox="0 0 51 58.9" style="enable-background:new 0 0 51 58.9;" xml:space="preserve">
<style type="text/css">
    .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#94BEE6;}
    .st1{fill-rule:evenodd;clip-rule:evenodd;fill:#626365;}
</style>
                            <path class="st0" d="M24.5,23c8,0,14.5,6.5,14.5,14.5c0,8-6.5,14.5-14.5,14.5S10,45.5,10,37.5C10,29.5,16.5,23,24.5,23z"/>
                            <path class="st1" d="M35.8,47.7c3.2-1.6,7-1.4,10.1,0.6c3.2,2,5,5.4,5,9.1c0,0.8-0.7,1.5-1.5,1.5H21.7c-0.8,0-1.5-0.7-1.5-1.5
	s0.7-1.5,1.5-1.5h26.2c-0.4-2.1-1.7-3.9-3.5-5.1c-2.2-1.4-4.9-1.5-7.2-0.4c-2.3,1.2-4,2.7-4,2.8c-0.6,0.6-1.5,0.6-2.1,0
	c-0.3-0.3-0.4-0.7-0.4-1.1c0-0.4,0.2-0.8,0.4-1.1c0,0,0.4-0.4,1-0.9c-18.3-4.7-25.6,2.1-28,5.7h7.3c0.8,0,1.5,0.7,1.5,1.5
	s-0.7,1.5-1.5,1.5H1.5c-0.1,0-0.3,0-0.4-0.1c0,0,0,0,0,0c0,0,0,0,0,0c-0.2-0.1-0.3-0.1-0.4-0.2c0,0,0,0-0.1-0.1
	c-0.1-0.1-0.2-0.2-0.3-0.4c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0-0.1-0.1-0.1c0,0,0-0.1,0-0.1c0,0,0-0.1,0-0.1c0-0.1,0-0.1,0-0.2
	c0,0,0,0,0-0.1c0,0,0-0.1,0-0.1c0-0.1,0-0.1,0-0.2c0,0,0-0.1,0-0.1c0,0,0-0.1,0-0.1c0.1-0.2,5.1-14.7,28-10.7
	c1.6-1.8,2.4-3.6,2.3-5.5c-0.1-3.6-2.9-6.4-3.2-6.7c-0.9-0.7-1.7-1.4-2.5-2.1c-1.1,0.4-2.2,0.6-3.4,0.6c-3.6,0-7-1.9-8.9-5
	C8.1,20.9,8,15,12,10.3c0.4-0.5,1.1-0.7,1.7-0.4c0.6,0.2,1,0.8,1,1.4c0,0.2,0.1,5.9,5,5.9c0.9,0,1.8,0.1,2.7,0.4l0-0.1l0.1,0
	c-0.4-1.7-0.5-3.4-0.1-5.1C23.9,4.8,28,0.5,34,0c0.6-0.1,1.2,0.3,1.5,0.9c0.3,0.6,0.1,1.3-0.3,1.7c-0.2,0.2-4,4.3-0.7,7.7
	c1.6,1.6,2.6,3.7,3,5.8c2.6-2.1,2.4-6.3,2.4-6.5c0,0,0,0,0,0c0-0.1,0-0.3,0-0.4c0,0,0,0,0-0.1c0-0.1,0.1-0.3,0.2-0.4
	c0,0,0,0,0.1-0.1c0.1-0.1,0.2-0.2,0.3-0.3c0,0,0.1-0.1,0.1-0.1c0.1,0,0.1-0.1,0.2-0.1c0.1,0,0.1,0,0.2,0c0,0,0.1,0,0.1,0
	c0,0,0.1,0,0.1,0c0,0,0,0,0.1,0c0.3,0,0.5,0,0.8,0.1c0,0,0,0,0.1,0c0,0,0,0,0.1,0c0,0,0,0.1,0.1,0.1c0.1,0,0.1,0.1,0.2,0.1
	c5,5,5.4,11.8,1.1,19.9c-1.6,3-4.3,5.2-7.4,6.1c-1.1,0.3-2.2,0.5-3.3,0.5c-0.4,0-0.8,0-1.2-0.1c0.9,1.5,1.7,3.5,1.8,5.8
	c0.1,2.2-0.6,4.3-2,6.3c1.3,0.3,2.6,0.6,4,1.1C35.5,47.9,35.7,47.8,35.8,47.7z M24.5,22c-0.1-0.1-0.2-0.2-0.3-0.2
	c-0.1-0.1-0.2-0.2-0.4-0.3c-0.1-0.1-0.2-0.1-0.3-0.2c-0.1-0.1-0.3-0.1-0.4-0.2C23,21,22.9,21,22.8,20.9c-0.1-0.1-0.3-0.1-0.4-0.2
	c-0.1,0-0.2-0.1-0.3-0.1c-0.2-0.1-0.3-0.1-0.5-0.1c-0.1,0-0.2-0.1-0.3-0.1c-0.2,0-0.4-0.1-0.5-0.1c-0.1,0-0.2,0-0.3,0
	c-0.3,0-0.6-0.1-0.8-0.1c-3.3,0-5.8-1.8-7.1-4.8c-0.9,3-0.1,6.5,2.4,10.5h0c0.1,0.2,0.3,0.4,0.4,0.6c0,0,0,0,0,0.1
	c0.1,0.2,0.3,0.3,0.4,0.5c0,0,0.1,0.1,0.1,0.1c0.1,0.1,0.2,0.2,0.4,0.4c0,0,0.1,0.1,0.1,0.1c0.1,0.1,0.2,0.2,0.4,0.3
	c0.1,0,0.1,0.1,0.2,0.1c0.1,0.1,0.2,0.2,0.4,0.3c0.1,0,0.1,0.1,0.2,0.1c0.1,0.1,0.3,0.2,0.4,0.2c0.1,0,0.1,0.1,0.2,0.1
	c0.1,0.1,0.3,0.1,0.4,0.2c0.1,0,0.1,0,0.2,0.1c0.1,0.1,0.3,0.1,0.4,0.2c0.1,0,0.1,0,0.2,0.1c0.1,0,0.3,0.1,0.4,0.1
	c0.1,0,0.1,0,0.2,0c0.1,0,0.3,0.1,0.4,0.1c0.1,0,0.1,0,0.2,0c0.1,0,0.3,0,0.4,0c0.1,0,0.1,0,0.2,0c0.1,0,0.3,0,0.4,0
	c0.1,0,0.2,0,0.2,0c0.1,0,0.3,0,0.4,0c0.1,0,0.2,0,0.2,0c0.1,0,0.3,0,0.4-0.1c0.1,0,0.2,0,0.3-0.1c0.1,0,0.2-0.1,0.4-0.1
	c0.1,0,0.2-0.1,0.3-0.1c0,0,0.1,0,0.1,0c0,0,0,0,0,0c-0.1-0.3-0.1-0.7-0.1-1c0-0.1,0-0.1,0-0.2c0-0.3,0-0.7,0.1-1c0-0.1,0-0.1,0-0.2
	c0.1-0.4,0.1-0.7,0.3-1.1c0,0,0-0.1,0-0.1c0.1-0.4,0.3-0.8,0.5-1.2c0.1-0.3,0.3-0.6,0.5-0.8c0.1-0.1,0.1-0.2,0.2-0.3
	c0.1-0.1,0.1-0.2,0.2-0.4c-0.1-0.1-0.1-0.1-0.2-0.2c-0.1-0.1-0.2-0.2-0.3-0.3C24.7,22.2,24.6,22.1,24.5,22z M40.2,17.8
	c-0.1,0.1-0.2,0.2-0.4,0.3c-0.1,0.1-0.3,0.3-0.4,0.4c-0.1,0.1-0.3,0.2-0.4,0.3c-0.2,0.1-0.3,0.2-0.5,0.4c-0.2,0.1-0.3,0.2-0.5,0.3
	c-0.2,0.1-0.3,0.2-0.5,0.2c0,0.1,0,0.1,0,0.2c-0.2,0.8-0.9,1.4-1.8,1.2h0c-0.4-0.1-0.8-0.3-1-0.7c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0
	c0,0,0,0,0,0c-0.2,0-0.3,0-0.5-0.1c0,0-0.1,0-0.1,0c-0.1-0.1-0.3-0.1-0.4-0.2c0,0,0,0-0.1-0.1c-0.1-0.1-0.2-0.2-0.3-0.4c0,0,0,0,0,0
	c-0.1-0.2-0.1-0.3-0.1-0.5v0c-0.1-0.7,0.4-1.4,1.1-1.6c0.1,0,0.2,0,0.3-0.1c0.1,0,0.2,0,0.3,0c0-0.1,0-0.1,0-0.2c0-0.1,0-0.2,0-0.3
	c0-0.1,0-0.3-0.1-0.4c0-0.1,0-0.2-0.1-0.3c0-0.1-0.1-0.3-0.1-0.4c0-0.1-0.1-0.2-0.1-0.3c0-0.1-0.1-0.3-0.1-0.4
	c0-0.1-0.1-0.2-0.1-0.3c-0.1-0.1-0.1-0.3-0.2-0.4c0-0.1-0.1-0.2-0.1-0.3c-0.1-0.1-0.1-0.3-0.2-0.4c0-0.1-0.1-0.2-0.1-0.2
	c-0.1-0.1-0.2-0.3-0.3-0.4c0-0.1-0.1-0.1-0.1-0.2c-0.2-0.2-0.3-0.4-0.5-0.5c-2.3-2.3-2.9-5.4-1.6-8.5c-2.8,1.4-4.7,4.5-5.7,9.1
	c-0.1,0.3-0.1,0.7-0.2,1c0,0.1,0,0.2,0,0.3c0,0.2,0,0.5,0,0.7c0,0.1,0,0.3,0,0.4c0,0.2,0,0.4,0.1,0.6c0,0.1,0.1,0.3,0.1,0.4
	c0,0.2,0.1,0.4,0.1,0.6c0,0.1,0.1,0.3,0.2,0.4c0.1,0.2,0.1,0.4,0.2,0.5c0.1,0.1,0.1,0.3,0.2,0.4c0.1,0.2,0.2,0.3,0.3,0.5
	c0.1,0.1,0.2,0.3,0.3,0.4c0.1,0.1,0.2,0.3,0.3,0.4c0.1,0.1,0.2,0.2,0.3,0.3c0.1,0.1,0.2,0.2,0.2,0.2c0.2-0.2,0.4-0.3,0.6-0.5
	c0.1-0.1,0.3-0.2,0.4-0.3c0.4-0.3,0.8-0.6,1.3-0.8c0.4-0.2,0.8-0.2,1.1-0.1c0.4,0.1,0.7,0.4,0.9,0.7c0.4,0.7,0.1,1.7-0.6,2
	c-0.3,0.1-0.5,0.3-0.8,0.5c0,0,0,0,0,0c0.7,0.3,1,1.1,0.8,1.8c-0.1,0.4-0.4,0.7-0.7,0.9c-0.4,0.2-0.8,0.2-1.1,0.1
	c-0.4-0.1-0.9-0.3-1.3-0.5c-0.1,0.1-0.1,0.2-0.2,0.3c-0.1,0.1-0.1,0.2-0.2,0.2c-0.1,0.2-0.3,0.5-0.4,0.7c-0.7,1.5-0.8,2.6-0.2,3.6
	c4.9-0.2,8.5-1.8,10.8-4.7C39.2,22.4,39.9,20,40.2,17.8C40.2,17.7,40.2,17.7,40.2,17.8z M28.5,23.5c0.3,0.1,0.6,0.3,0.9,0.4
	c0.1,0,0.3,0,0.4,0c0.1-0.1,0.2-0.2,0.2-0.3c0.1-0.3-0.1-0.5-0.3-0.6c-0.2,0-0.3-0.1-0.5-0.2C29,22.9,28.7,23.2,28.5,23.5z
	 M35.3,31.6c2.4-0.7,4.4-2.4,5.6-4.7c1.5-2.8,2.9-6.6,2.4-10.2c-0.2,3.1-1.1,6.6-3.3,9.6c-2.1,2.8-5.2,4.6-9.1,5.4
	C32.4,32,33.9,32,35.3,31.6z M16.5,55.9c0.4,0,0.8,0.2,1,0.4c0.3,0.3,0.4,0.7,0.4,1.1c0,0.4-0.2,0.8-0.5,1.1c-0.2,0.3-0.6,0.4-1,0.4
	c-0.4,0-0.8-0.2-1.1-0.4c-0.3-0.3-0.4-0.7-0.4-1.1c0-0.4,0.2-0.8,0.4-1.1C15.7,56.1,16,56,16.5,55.9z"/>
</svg>
                        Растительного<br> происхождения.
                    </div>
                    <div class="substance_text cre-animate" data-animation="scale-up" data-speed="1500" data-delay="100" data-offset="90%" data-easing="easeInOutQuint">
                        <svg version="1.1" class="substance_block2" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                             viewBox="0 0 42.6 51.9" style="enable-background:new 0 0 42.6 51.9;" xml:space="preserve">
<style type="text/css">
    .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#94BEE6;}
    .st1{fill-rule:evenodd;clip-rule:evenodd;fill:#626365;}
</style>
                            <path class="st0" d="M21.5,12c8,0,14.5,6.5,14.5,14.5S29.5,41,21.5,41S7,34.5,7,26.5S13.5,12,21.5,12z"/>
                            <path class="st1" d="M42.6,26.7C42.6,26.7,42.6,26.7,42.6,26.7C42.6,26.8,42.6,26.8,42.6,26.7c-1.7,11.5-9.4,21.4-20,25.9
	c-0.2,0.1-0.4,0.2-0.6,0.2c0,0,0,0,0,0c-0.1,0-0.2,0.1-0.3,0.1c-0.1,0-0.2,0-0.3,0c-0.1,0-0.2,0-0.3,0c0,0-0.1,0-0.1,0
	c-0.1,0-0.1,0-0.2,0l-0.6-0.2C9.8,48.1,2.1,38.2,0.4,26.8c0,0,0,0,0,0c0,0,0-0.1,0-0.1C0.1,25,0,23.4,0,21.7v-13
	c0-0.8,0.7-1.5,1.5-1.5C3.9,7.2,8,6,13.3,3.7c4.1-1.8,7.5-3.6,7.5-3.6c0,0,0,0,0.1,0c0.1,0,0.1-0.1,0.2-0.1c0,0,0.1,0,0.1,0
	c0.1,0,0.2,0,0.3,0c0,0,0.1,0,0.1,0c0.1,0,0.2,0,0.3,0c0,0,0.1,0,0.1,0c0.1,0,0.1,0.1,0.2,0.1c0,0,0,0,0.1,0
	c0.1,0.1,13.4,7.1,19.3,7.1c0.8,0,1.5,0.7,1.5,1.5v13C43,23.4,42.9,25,42.6,26.7z M23,49.1c8.3-4.1,14.4-12,16.3-21.2h-6.4
	c-0.7,5.1-4.8,9.2-9.9,9.9V49.1z M20,49.1V37.9c-5.2-0.7-9.2-4.8-9.9-9.9H3.7C5.6,37.1,11.6,45,20,49.1z M20,3.9
	c-1.4,0.7-3.4,1.6-5.5,2.6C9.7,8.6,5.8,9.8,3,10.1v11.6c0,1.1,0.1,2.2,0.2,3.3h6.9c0.7-5.1,4.8-9.2,9.9-9.9V3.9z M21.5,18
	c-4.7,0-8.5,3.8-8.5,8.5c0,4.7,3.8,8.5,8.5,8.5c4.7,0,8.5-3.8,8.5-8.5C30,21.8,26.2,18,21.5,18z M40,10.1c-5.2-0.7-13.2-4.4-17-6.2
	v11.2c5.2,0.7,9.2,4.7,9.9,9.9h6.9c0.1-1.1,0.2-2.2,0.2-3.3V10.1z M21.2,29.9c-0.3,0.3-0.7,0.4-1.1,0.4c-0.4,0-0.8-0.2-1.1-0.4l-2-2
	c-0.6-0.6-0.6-1.5,0-2.1c0.6-0.6,1.6-0.6,2.1,0l1,1l3.7-3.7c0.6-0.6,1.5-0.6,2.1,0c0.6,0.6,0.6,1.5,0,2.1L21.2,29.9z"/>
</svg>
                        Уникальный профиль
                        <span>безопасности</span>
                        и <span>переносимости</span>.
                    </div>
                    <div class="substance_text cre-animate" data-animation="scale-up" data-speed="1500" data-delay="500" data-offset="90%" data-easing="easeInOutQuad">
                        <svg version="1.1" class="substance_block3" id="Layer_1" xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px"
                             viewBox="0 0 47.5 29" style="enable-background:new 0 0 47.5 29;" xml:space="preserve">
<style type="text/css">
    .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#94BEE6;}
    .st1{fill:#626365;}
</style>
                            <path class="st0" d="M24,0c8,0,14.5,6.5,14.5,14.5C38.5,22.5,32,29,24,29S9.5,22.5,9.5,14.5C9.5,6.5,16,0,24,0z"/>
                            <path class="st1" d="M47.5,11.4c0,0,0-0.1,0-0.1l0,0c0,0,0-0.1,0-0.1c0,0,0,0,0,0c0,0,0-0.1,0-0.1c0,0,0,0,0-0.1c0,0,0-0.1,0-0.1
	c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0-0.1,0-0.1c0,0,0,0,0-0.1c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0-0.1c0,0,0,0-0.1-0.1c0,0,0,0,0,0
	c0,0-0.1-0.1-0.1-0.1l0,0c-0.2-0.2-0.5-0.4-0.8-0.5c-0.2-0.1-0.4-0.1-0.6,0l0,0c0,0-0.1,0-0.1,0c0,0,0,0,0,0c0,0-0.1,0-0.1,0
	c0,0,0,0,0,0c-0.2,0.1-0.5,0.1-0.7,0.1c-1.2,0-2.8-0.8-5.1-2.8C36.1,4.3,33.1,3,30.3,3C28,3,25.9,3.9,24,5.8C22.1,3.9,20,3,17.7,3
	c-2.8,0-5.7,1.3-9.1,4.1c-2.4,2-3.9,2.8-5.1,2.8c-0.3,0-0.5,0-0.7-0.1c0,0,0,0,0,0c0,0-0.1,0-0.1,0l0,0c-0.1,0-0.1,0-0.1,0
	c-0.2,0-0.4,0-0.6,0C1.5,9.9,1.2,10,1,10.2l0,0c0,0-0.1,0.1-0.1,0.1c0,0,0,0,0,0c0,0,0,0.1-0.1,0.1c0,0,0,0,0,0.1c0,0,0,0,0,0
	c0,0,0,0,0,0c0,0,0,0,0,0.1c0,0,0,0,0,0.1c0,0,0,0,0,0c0,0,0,0,0,0.1c0,0,0,0,0,0.1c0,0,0,0.1,0,0.1c0,0,0,0.1,0,0.1
	c0,0,0,0.1,0,0.1c0,0,0,0.1,0,0.1c0,0,0,0,0,0.1c0,0,0,0.1,0,0.1c0,0,0,0,0,0.1l0,0c0,0,0,0.1,0,0.1c0,0,0,0,0,0c0,0,0,0.1,0,0.1
	l0,0c0,0,0,0.1,0,0.1c0.1,0.3,0.3,0.6,0.5,0.8c0,0,0,0,0.1,0.1l0,0c0,0,0,0,0.1,0c0,0,0,0,0.1,0l0,0c0,0,0,0,0.1,0l0,0
	c0.2,0.1,0.3,0.2,0.5,0.3c1.3,0.8,3.2,2.7,4.4,4c0.8,0.8,2.9,3,6,4.9c4,2.6,7.9,3.9,11.7,3.9c3.8,0,7.8-1.3,11.7-3.9
	c3.1-2,5.2-4.1,6-4.9c1.2-1.2,3.1-3.1,4.4-4c0.2-0.1,0.4-0.2,0.5-0.3c0,0,0,0,0,0c0,0,0,0,0,0l0,0c0,0,0,0,0.1-0.1c0,0,0,0,0,0
	c0.3-0.2,0.5-0.6,0.6-0.9c0-0.1,0-0.2,0-0.3l0,0C47.5,11.6,47.5,11.5,47.5,11.4L47.5,11.4z M11.7,14.9L11.7,14.9
	c3.3-0.2,6.7-0.4,11.4,2.5c0.3,0.2,0.6,0.3,0.9,0.3c0.3,0,0.6-0.1,0.9-0.3c4.8-2.9,8.2-2.7,11.4-2.5C37.2,15,38.1,15,39,15
	c-5,4.9-10.2,7.5-15,7.5S14,19.9,9,15C9.9,15,10.8,15,11.7,14.9z M36.5,11.5C33.1,11.3,29.2,11,24,14c-4.1-2.3-7.4-2.6-9.7-2.6
	c-1,0-1.9,0.1-2.8,0.1c-1,0.1-2,0.1-3,0.1c0.9-0.6,1.7-1.2,2.3-1.8c2.7-2.2,4.9-3.3,6.8-3.3c1.8,0,3.4,1,4.9,3
	c0.3,0.4,0.8,0.7,1.4,0.7c0.5,0,1.1-0.3,1.4-0.7c1.5-2,3.1-3,4.9-3c1.9,0,4.2,1.1,6.8,3.3c0.7,0.6,1.5,1.2,2.3,1.8
	C38.5,11.6,37.6,11.5,36.5,11.5L36.5,11.5z"/>
</svg>
                        <span>Успешно применяется</span>
                        даже в тех случаях, когда другие противовирусные средства не действуют или противопоказаны.
                    </div>
                </div>
                <div class="col-1-3 col-1-xs">
                    <img class="image-tube" src="images/tube-mini.png" alt=""/>
                </div>
                <div class="col-1-3 col-1-xs">
                    <div class="substance_text cre-animate" data-animation="scale-up" data-speed="1500" data-delay="500" data-offset="90%" data-easing="easeInOutQuint">
                        <svg version="1.1" class="substance_block4" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
         viewBox="0 0 47.3 47" style="enable-background:new 0 0 47.3 47;" xml:space="preserve">
<style type="text/css">
    .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#94BEE6;}
    .st1{fill-rule:evenodd;clip-rule:evenodd;fill:#626365;}
</style>
        <path class="st0" d="M23.7,9c8,0,14.5,6.5,14.5,14.5c0,8-6.5,14.5-14.5,14.5c-8,0-14.5-6.5-14.5-14.5C9.3,15.5,15.7,9,23.7,9z"/>
        <path class="st1" d="M23.7,47c-13,0-23.5-10.5-23.5-23.5C0.3,10.5,10.8,0,23.7,0c13,0,23.5,10.5,23.5,23.5
	C47.3,36.5,36.7,47,23.7,47z M23.7,43c4.3,0,8.2-1.4,11.4-3.7l-5.5-5.5c-0.1,0-0.2,0.1-0.3,0.1c-0.3,0-0.5-0.1-0.7-0.4L28,32.2
	l-0.3-0.3c-0.8,0.4-1.6,0.6-2.5,0.8l0.1,1.5c0,0.4-0.3,0.8-0.7,0.8c0,0,0,0,0,0c-0.4,0-0.7-0.3-0.7-0.7l-0.1-1.6c-0.2,0-0.4,0-0.6,0
	c-0.7-0.1-1.4-0.3-2.1-0.5l-1.2,2.4c-0.1,0.3-0.4,0.4-0.7,0.4c-0.1,0-0.2,0-0.3-0.1c-0.4-0.2-0.5-0.6-0.3-1l1.1-2.2
	c-0.8-0.4-1.6-0.8-2.2-1.4l-2,2.1c-0.1,0.1-0.3,0.2-0.5,0.2c-0.2,0-0.4-0.1-0.5-0.2c-0.3-0.3-0.3-0.7,0-1l2-2.1
	c-0.6-0.7-1.1-1.4-1.4-2.1l-2.8,0.8c-0.1,0-0.1,0-0.2,0c-0.3,0-0.6-0.2-0.7-0.5c-0.1-0.4,0.1-0.8,0.5-0.9l2.8-0.9
	c-0.1-0.7-0.2-1.4-0.1-2.1c0.1-0.5,0.2-1,0.3-1.4l-2.6-0.4c-0.4-0.1-0.7-0.4-0.6-0.8c0.1-0.4,0.4-0.7,0.8-0.6l2.8,0.5
	c0.1-0.4,0.3-0.7,0.5-1L8,12.1c-2.3,3.2-3.7,7.1-3.7,11.4C4.2,34.3,13,43,23.7,43z M29.6,24.1c-0.6-3.1-2.5-6.4-6.2-6.4
	c-1,0-1.9,0.2-2.7,0.6l2.6,2.6c0.2-0.5,0.7-0.9,1.3-0.9c0.8,0,1.5,0.7,1.5,1.5c0,0.6-0.4,1.1-0.9,1.3l0.9,0.9c0.1,0,0.2-0.1,0.3-0.1
	c0.6,0,1.1,0.5,1.1,1.1c0,0.1,0,0.2-0.1,0.3l1.7,1.7C29.6,26,29.8,25,29.6,24.1z M17.2,24c-0.2,1.9,0.7,3.2,1.6,3.9
	c1.2,1.1,2.9,1.8,4.8,2.1c0.7,0.1,1.5,0,2.2-0.2L22.9,27c0,0-0.1,0-0.1,0c-0.8,0-1.5-0.7-1.5-1.5c0,0,0-0.1,0-0.1l-3.6-3.6
	C17.5,22.5,17.3,23.2,17.2,24z M23.7,4c-4.9,0-9.3,1.8-12.7,4.7l7.7,7.7c0.4-0.2,0.7-0.4,1.1-0.6L19,13.2c-0.1-0.4,0.1-0.8,0.5-0.9
	c0.4-0.1,0.8,0.1,0.9,0.5l0.9,2.6c0.6-0.2,1.3-0.3,2-0.3l0.3-2.4c0-0.4,0.4-0.7,0.8-0.6c0.4,0,0.7,0.4,0.7,0.8l-0.3,2.3
	c0.7,0.1,1.4,0.4,2.1,0.7l1.5-2.3c0.2-0.3,0.7-0.4,1-0.2c0.3,0.2,0.4,0.7,0.2,1l-1.4,2.3c0.6,0.4,1.1,0.9,1.5,1.4l2.3-1.6
	c0.3-0.2,0.8-0.2,1,0.2c0.2,0.3,0.2,0.8-0.2,1l-2.3,1.6c0.5,0.7,0.8,1.5,1.2,2.4l2.2-0.7c0.4-0.1,0.8,0.1,0.9,0.5
	c0.1,0.4-0.1,0.8-0.5,0.9L32.1,23c0.1,0.2,0.1,0.4,0.1,0.6c0.1,0.5,0.1,1,0.1,1.6l2.3,0.4c0.4,0.1,0.7,0.4,0.6,0.8
	c-0.1,0.4-0.4,0.6-0.7,0.6c0,0-0.1,0-0.1,0l-2.2-0.4c-0.2,0.7-0.4,1.3-0.8,1.9l2,1.5c0.3,0.2,0.4,0.7,0.1,1c0,0,0,0,0,0l5.1,5.1
	c2.9-3.4,4.7-7.8,4.7-12.7C43.3,12.7,34.5,4,23.7,4z"/>
</svg>
                        Обладает широким спектром  <span>антивирусного действия</span>.
                    </div>
                    <div class="substance_text cre-animate" data-animation="scale-up" data-speed="1500" data-delay="800" data-offset="90%" data-easing="easeInOutQuad">
                        <svg version="1.1" class="substance_block5" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                             viewBox="0 0 44 52" style="enable-background:new 0 0 44 52;" xml:space="preserve">
<style type="text/css">
    .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#94BEE6;}
    .st1{fill-rule:evenodd;clip-rule:evenodd;fill:#626365;}
</style>
                            <path class="st0" d="M20.6,16c8,0,14.5,6.5,14.5,14.5c0,8-6.5,14.5-14.5,14.5c-8,0-14.5-6.5-14.5-14.5C6.1,22.5,12.6,16,20.6,16z"/>
                            <path class="st1" d="M44,41.1c0,6-4.8,10.9-10.8,10.9c-2.1,0-4-0.6-5.7-1.7c-2.3,0.9-4.8,1.4-7.3,1.4C9.1,51.7,0,42.4,0,30.9
	c0-1.8,0.2-3.7,0.7-5.4c0.2-0.9,1.2-1.5,2.1-1.3c0.9,0.3,1.5,1.2,1.2,2.2c-0.4,1.5-0.6,3-0.6,4.5c0,9.5,7.6,17.3,16.9,17.3
	c1.5,0,2.9-0.2,4.3-0.6c-1.4-1.8-2.2-4.1-2.2-6.6c0-3.4,1.5-6.4,3.9-8.4c-0.1,0-0.2,0-0.3,0h-5.8c-1,0-1.7-0.8-1.7-1.8V18.7
	c0-1,0.8-1.8,1.7-1.8c1,0,1.7,0.8,1.7,1.8v10.5h4.1c1,0,1.7,0.8,1.7,1.8c0,0.3-0.1,0.6-0.2,0.8c1.6-1,3.6-1.6,5.6-1.6
	c1.4,0,2.7,0.3,3.9,0.8c0-9.5-7.6-17.3-16.9-17.3c-4.7,0-9.3,2.1-12.5,5.7c-0.3,0.4-0.7,0.6-1.2,0.6c-0.5,0-0.9-0.1-1.2-0.4
	c-0.3-0.3-0.5-0.7-0.6-1.2c0-0.5,0.1-0.9,0.4-1.3c3.5-3.9,8.2-6.3,13.3-6.7V8.9h-4.1c-1,0-1.7-0.8-1.7-1.8V1.8c0-1,0.8-1.8,1.7-1.8
	h11.6c1,0,1.7,0.8,1.7,1.8v5.4c0,1-0.8,1.8-1.7,1.8h-4.1v1.3c10.4,0.9,18.6,9.9,18.6,20.7c0,0.7,0,1.4-0.1,2.1
	C42.7,35,44,37.9,44,41.1z M24.4,5.4V3.5h-8.1v1.9H24.4z M39.7,37.7c0.1,0.5-0.1,1.1-0.5,1.5l-6.2,6.3c-0.3,0.3-0.8,0.5-1.2,0.5
	s-0.9-0.2-1.2-0.5L27.2,42c-0.3-0.3-0.5-0.8-0.5-1.2c0-0.5,0.2-0.9,0.5-1.2c0.7-0.7,1.8-0.7,2.5,0l2.2,2.2l4.9-5
	c0.6-0.6,1.5-0.7,2.1-0.2c-1.3-1.7-3.4-2.8-5.7-2.8c-4,0-7.3,3.3-7.3,7.4c0,4.1,3.3,7.4,7.3,7.4s7.3-3.3,7.3-7.4
	C40.6,39.9,40.3,38.7,39.7,37.7z M5.6,22c0,0.5-0.2,0.9-0.5,1.2c-0.3,0.3-0.8,0.5-1.2,0.5c-0.5,0-0.9-0.2-1.2-0.5
	c-0.3-0.3-0.5-0.8-0.5-1.2c0-0.5,0.2-0.9,0.5-1.2c0.7-0.7,1.8-0.7,2.5,0C5.4,21.1,5.6,21.6,5.6,22z"/>
</svg>
                        <span>Ускоряет</span> заживление
                        и выздоровление.
                    </div>
                    <div class="substance_text cre-animate" data-animation="scale-up" data-speed="1500" data-delay="400" data-offset="90%" data-easing="easeInOutQuint">
                        <svg version="1.1" class="substance_block6" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                             viewBox="0 0 54 47" style="enable-background:new 0 0 54 47;" xml:space="preserve">
<style type="text/css">
    .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#94BEE6;}
    .st1{fill-rule:evenodd;clip-rule:evenodd;fill:#626365;}
</style>
                            <path class="st0" d="M27.5,9c8,0,14.5,6.5,14.5,14.5c0,8-6.5,14.5-14.5,14.5c-8,0-14.5-6.5-14.5-14.5C13,15.5,19.5,9,27.5,9z"/>
                            <path class="st1" d="M40.5,47h-27L0,23.5L13.5,0h27L54,23.5L40.5,47z M38.4,3.4H15.6L4.2,23.5l11.4,20.1h22.8l11.4-20.1L38.4,3.4z
	 M42.9,22.9c-0.1,0.4-0.2,0.7-0.5,1c-0.2,0.3-0.6,0.5-1,0.7c-0.4,0.2-0.9,0.3-1.6,0.3h-1.3V28c0,0.1,0,0.1,0,0.2
	c0,0.1-0.1,0.1-0.2,0.1h-1.6c-0.2,0-0.3-0.1-0.3-0.3v-8.7c0-0.1,0-0.2,0.1-0.2c0-0.1,0.1-0.1,0.2-0.1h3.2c0.4,0,0.8,0.1,1.2,0.2
	c0.4,0.1,0.7,0.3,1,0.5c0.3,0.2,0.5,0.5,0.7,0.9c0.2,0.4,0.2,0.8,0.2,1.3C43,22.2,43,22.6,42.9,22.9z M40.4,21.1
	c-0.2-0.2-0.5-0.3-0.9-0.3h-1v2.2h1c0.4,0,0.7-0.1,0.9-0.3c0.2-0.2,0.3-0.5,0.3-0.9C40.7,21.6,40.6,21.3,40.4,21.1z M33.5,26.8
	c-0.3,0.5-0.7,0.9-1.2,1.2c-0.5,0.3-1.3,0.5-2.2,0.5c-0.6,0-1.1-0.1-1.6-0.2s-0.8-0.3-1.1-0.6c-0.3-0.2-0.5-0.5-0.7-0.9
	c-0.2-0.3-0.3-0.7-0.4-1c-0.1-0.4-0.2-0.7-0.2-1.1s0-0.7,0-1.1c0-0.3,0-0.6,0-0.9c0-0.3,0.1-0.7,0.2-1c0.1-0.3,0.2-0.7,0.4-1
	c0.2-0.3,0.4-0.6,0.7-0.9c0.3-0.3,0.7-0.5,1.1-0.6c0.4-0.2,0.9-0.2,1.5-0.2c0.9,0,1.6,0.1,2.1,0.4c0.5,0.3,0.9,0.6,1.2,1.1
	c0.3,0.4,0.5,0.9,0.6,1.5c0.1,0.6,0.1,1.1,0.1,1.7c0,0.5,0,1.1-0.1,1.7C34,25.8,33.8,26.3,33.5,26.8z M31.5,21.5
	c-0.2-0.5-0.7-0.7-1.4-0.7c-0.6,0-1.1,0.2-1.3,0.7c-0.2,0.5-0.4,1.2-0.4,2.2c0,0.9,0.1,1.6,0.3,2.1c0.2,0.5,0.7,0.7,1.3,0.7
	c0.7,0,1.1-0.2,1.4-0.7c0.3-0.5,0.4-1.2,0.4-2.1C31.9,22.7,31.8,22,31.5,21.5z M25.5,20.9h-2.1V28c0,0.1,0,0.1,0,0.2
	c0,0.1-0.1,0.1-0.2,0.1h-1.6c-0.1,0-0.2,0-0.2-0.1c0-0.1-0.1-0.1-0.1-0.2v-7.1h-2.1c-0.1,0-0.2,0-0.3-0.1c0-0.1-0.1-0.1-0.1-0.2
	v-1.3c0-0.1,0-0.2,0.1-0.2c0-0.1,0.1-0.1,0.3-0.1h6.3c0.2,0,0.3,0.1,0.3,0.3v1.3c0,0.1,0,0.2-0.1,0.2C25.7,20.9,25.6,20.9,25.5,20.9
	z M17,27.8c-0.3,0.2-0.7,0.4-1.2,0.5c-0.4,0.1-0.9,0.1-1.4,0.1c-0.1,0-0.3,0-0.6,0s-0.5,0-0.7-0.1c-0.3,0-0.5-0.1-0.8-0.1
	c-0.3-0.1-0.5-0.1-0.7-0.2c-0.2-0.1-0.4-0.2-0.4-0.3c0-0.1,0-0.2,0-0.3l0.2-0.8c0-0.2,0.1-0.3,0.2-0.3c0.1,0,0.2,0,0.4,0
	c0.2,0,0.4,0,0.6,0.1c0.2,0,0.4,0,0.6,0.1c0.2,0,0.4,0,0.6,0c0.2,0,0.4,0,0.6,0c0.5,0,0.8-0.1,1-0.2c0.2-0.1,0.3-0.4,0.3-0.7
	c0-0.2,0-0.3-0.1-0.4c0-0.1-0.1-0.2-0.2-0.3c-0.1-0.1-0.2-0.1-0.4-0.2c-0.2-0.1-0.4-0.1-0.6-0.1c-0.4-0.1-0.8-0.2-1.2-0.3
	c-0.4-0.1-0.7-0.3-1.1-0.5c-0.3-0.2-0.6-0.5-0.7-0.8c-0.2-0.3-0.3-0.7-0.3-1.2c0-0.5,0.1-0.9,0.2-1.2c0.2-0.4,0.4-0.7,0.7-0.9
	c0.3-0.2,0.7-0.4,1.1-0.5c0.4-0.1,0.9-0.2,1.4-0.2c0.1,0,0.3,0,0.5,0c0.2,0,0.4,0,0.7,0c0.2,0,0.5,0.1,0.8,0.1
	c0.3,0.1,0.5,0.1,0.7,0.2c0.2,0.1,0.4,0.2,0.4,0.3c0,0.1,0,0.2,0,0.3l-0.2,0.8c0,0.1,0,0.2-0.1,0.2c0,0-0.1,0.1-0.1,0.1
	c0,0-0.1,0-0.2,0c-0.1,0-0.2,0-0.2,0c-0.3,0-0.6-0.1-1-0.1c-0.3,0-0.7,0-1.1,0c-0.4,0-0.7,0.1-0.9,0.2c-0.2,0.1-0.3,0.3-0.3,0.6
	c0,0.1,0,0.3,0.1,0.4c0,0.1,0.1,0.2,0.2,0.2c0.1,0.1,0.2,0.1,0.4,0.2c0.2,0,0.4,0.1,0.6,0.1c0.4,0.1,0.8,0.2,1.2,0.3
	c0.4,0.1,0.7,0.3,1.1,0.5c0.3,0.2,0.6,0.5,0.7,0.8c0.2,0.3,0.3,0.8,0.3,1.3c0,0.6-0.1,1-0.3,1.4C17.6,27.3,17.4,27.6,17,27.8z"/>
</svg>
                        <span>Минимизирует</span> повтор эпизода герпеса
                        и ВПЧ.
                    </div>
                </div>
            </div>
        <div class="row">
            <div class="col-1-1 col-1-xs cre-animate" data-animation="scale-up" data-speed="1500" data-delay="900" data-offset="90%" data-easing="ease">
               <div class="substance_footer-text">
                   <div class="footer-text_medal">
                       <img src="images/medal.png" alt=" "/>
                   </div>
                   <div class="footer-text_block">
                       <p>Уникальная российская разработка</p>
                       <h5>ЛАУРЕАТ ПРЕМИИ ПРАВИТЕЛЬСТВА РФ</h5>
                   </div>
               </div>

            </div>
        </div>
        </div>
    </section>

    <!--===================================================== section five -->
    <section class="section-five entry-main-image parallax-block" data-parallax="scroll" data-image-src="images/fon_block4.jpg" id="five">
        <div class="container">
            <div class="row">
                <div class="col-1-2 col-1-2-xs col-1-xxs">
                    <div class="cre-animate" data-animation="scale-up" data-speed="1500" data-delay="800" data-offset="90%" data-easing="ease">
                        <svg xmlns="http://www.w3.org/2000/svg" class="margin_left"  width="81" height="111" viewBox="0 0 81 81"><defs><path id="wn6ga" d="M484.44 2105.05a7.5 7.5 0 0 1-9.4.97l-4.26 4.26a13.42 13.42 0 0 1 2.93 8.4c0 3.62-1.4 7.02-3.96 9.58a1.54 1.54 0 0 1-2.19 0c-.6-.6-.6-1.59 0-2.2a10.36 10.36 0 0 0 1-13.57l-4.88 4.88a13.78 13.78 0 0 1-5.55 21.32l2.25 8.45a10.37 10.37 0 0 0 4.53-11.13 1.55 1.55 0 1 1 3.02-.7 13.44 13.44 0 0 1-6.72 14.93l1.15 4.32a7.45 7.45 0 0 1 7.64 5.55 7.46 7.46 0 0 1-5.31 9.18 7.52 7.52 0 0 1-8.43-11 7.45 7.45 0 0 1 3.11-2.93l-1.05-3.96a13.49 13.49 0 0 1-16.78-10.14 1.55 1.55 0 0 1 3.02-.66 10.45 10.45 0 0 0 12.96 7.81l-2.37-8.9a13.73 13.73 0 0 1-15.83-15.6l-8.92-2.37a10.43 10.43 0 0 0 7.2 12.6 1.55 1.55 0 0 1-.86 2.97 13.52 13.52 0 0 1-9.33-16.36l-3.62-.97a7.44 7.44 0 0 1-8.62 3.86 7.45 7.45 0 0 1-4.56-3.49 7.5 7.5 0 1 1 13.98-3.36l3.92 1.05a13.49 13.49 0 0 1 15.02-6.9 1.54 1.54 0 1 1-.7 3 10.38 10.38 0 0 0-11.22 4.73l8.5 2.26a13.79 13.79 0 0 1 21.4-5.74l4.87-4.89a10.37 10.37 0 0 0-13.58 1 1.54 1.54 0 1 1-2.19-2.18 13.44 13.44 0 0 1 9.57-3.96c3.1 0 6.02 1.04 8.4 2.94l4.27-4.26a7.5 7.5 0 1 1 11.59 1.2zm-25.5 54.78a4.41 4.41 0 1 0 0 0zm-38.03-45.64a4.38 4.38 0 0 0-3.81-2.2 4.42 4.42 0 1 0 3.81 2.2zm39.56 4.21a10.64 10.64 0 0 0-7.55-3.12 10.64 10.64 0 0 0-10.68 10.67 10.69 10.69 0 0 0 21.35 0 10.6 10.6 0 0 0-3.12-7.55zm21.78-21.78a4.4 4.4 0 1 0-6.22 6.22 4.4 4.4 0 0 0 6.22-6.22z"/><path id="wn6gb" d="M452 2102a25 25 0 1 1 0 50 25 25 0 0 1 0-50z"/><mask id="wn6gd" width="2" height="2" x="-1" y="-1"><path fill="#fff" d="M409 2092h78v78h-78z"/><use xlink:href="#wn6ga"/></mask><filter id="wn6gc" width="118" height="128" x="389" y="2082" filterUnits="userSpaceOnUse"><feOffset dy="10" in="SourceGraphic" result="FeOffset1103Out"/><feGaussianBlur in="FeOffset1103Out" result="FeGaussianBlur1104Out" stdDeviation="4 4"/></filter></defs><g><g transform="translate(-408 -2090)"><use fill="#fff200" xlink:href="#wn6gb"/></g><g transform="translate(-408 -2090)"><g filter="url(#wn6gc)"><use fill="none" stroke-opacity=".3" stroke-width="0" mask="url(&quot;#wn6gd&quot;)" xlink:href="#wn6ga"/><use fill-opacity=".3" xlink:href="#wn6ga"/></g><use fill="#fff" xlink:href="#wn6ga"/></g></g></svg>
                        <div class="five_block-text margin_left">
                            <h3>
                                Комплексный
                                подход
                            </h3>
                            <p>
                                в лечении герпеса и ВПЧ с помощью курса монотерапии: местная форма (гель Панавир)
                                и системная форма препарата Панавир.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-1-2 col-1-2-xs col-1-xxs">
                    <div class="cre-animate" data-animation="scale-up" data-speed="1500" data-delay="800" data-offset="90%" data-easing="ease">
                        <svg xmlns="http://www.w3.org/2000/svg"  width="81" height="121" viewBox="0 0 81 81"><defs><path id="dbmva" d="M878.4 2107.2a9.52 9.52 0 0 1-5.6-1.8l-9.9 9.9a18 18 0 0 1 4.2 10.14h4.16a7.24 7.24 0 1 1 0 3.12h-4.16a18 18 0 0 1-4.2 10.13l9.9 9.9a9.53 9.53 0 0 1 12.38 1 9.54 9.54 0 0 1 2.82 6.8c0 2.57-1 4.98-2.81 6.8a9.53 9.53 0 0 1-6.8 2.8 9.54 9.54 0 0 1-7.8-15.2l-9.9-9.9a18 18 0 0 1-10.13 4.2v4.16a7.24 7.24 0 1 1-3.12 0v-4.15a18 18 0 0 1-10.13-4.2l-9.91 9.9a9.54 9.54 0 0 1-1 12.38 9.53 9.53 0 0 1-6.8 2.82c-2.56 0-4.97-1-6.79-2.82a9.54 9.54 0 0 1-2.81-6.78c0-2.57 1-4.98 2.81-6.8a9.53 9.53 0 0 1 12.38-1l9.91-9.91a18 18 0 0 1-4.2-10.13h-4.16a7.23 7.23 0 1 1 0-3.12h4.16a18 18 0 0 1 4.2-10.13l-9.9-9.91a9.53 9.53 0 0 1-12.38-1 9.54 9.54 0 0 1-2.82-6.8c0-2.57 1-4.98 2.81-6.8a9.54 9.54 0 0 1 6.8-2.8 9.54 9.54 0 0 1 7.8 15.2l9.9 9.9a18.08 18.08 0 0 1 10.13-4.19v-4.17a7.24 7.24 0 1 1 3.12 0v4.17a18.1 18.1 0 0 1 10.13 4.2l9.91-9.92a9.54 9.54 0 0 1 1-12.38 9.54 9.54 0 0 1 6.8-2.81c2.56 0 4.97 1 6.79 2.8a9.54 9.54 0 0 1 2.81 6.8c0 2.56-1 4.97-2.81 6.79a9.53 9.53 0 0 1-6.8 2.81zm-.1 23.9a4.12 4.12 0 1 0 0-8.22 4.12 4.12 0 0 0 0 8.23zm-4.49 29.88a6.44 6.44 0 0 0 4.59 1.9c1.73 0 3.36-.68 4.58-1.9a6.44 6.44 0 0 0-4.58-11.06 6.44 6.44 0 0 0-4.58 11.06zm-49.62-9.17a6.44 6.44 0 0 0-4.59-1.9c-1.73 0-3.36.68-4.58 1.9a6.44 6.44 0 0 0 0 9.17 6.44 6.44 0 0 0 4.58 1.9c1.73 0 3.36-.68 4.59-1.9a6.44 6.44 0 0 0 0-9.17zm-4.5-28.92a4.11 4.11 0 1 0 .01 8.23 4.11 4.11 0 0 0 0-8.23zm4.5-29.87a6.44 6.44 0 0 0-9.17 0 6.44 6.44 0 0 0 4.58 11.06 6.44 6.44 0 0 0 6.49-6.48c0-1.73-.68-3.36-1.9-4.58zm20.7 63.28a4.11 4.11 0 1 0 8.23 0 4.11 4.11 0 0 0-8.23 0zm8.22-58.61a4.12 4.12 0 1 0-8.23 0 4.12 4.12 0 0 0 8.23 0zm6.53 18.67a15 15 0 0 0-10.64-4.4 15 15 0 0 0-15.05 15.04c0 4.02 1.57 7.8 4.4 10.64a14.95 14.95 0 0 0 10.64 4.4h.01c4.02 0 7.8-1.56 10.64-4.4a14.95 14.95 0 0 0 4.4-10.64c0-4.02-1.56-7.8-4.4-10.64zm23.34-23.34a6.44 6.44 0 0 0-9.17 0 6.44 6.44 0 0 0 4.58 11.06c1.74 0 3.37-.67 4.6-1.9a6.44 6.44 0 0 0 0-9.16z"/><path id="dbmvb" d="M849 2102a25 25 0 1 1 0 50 25 25 0 0 1 0-50z"/><mask id="dbmvd" width="2" height="2" x="-1" y="-1"><path fill="#fff" d="M810 2088h78v78h-78z"/><use xlink:href="#dbmva"/></mask><filter id="dbmvc" width="118" height="128" x="790" y="2078" filterUnits="userSpaceOnUse"><feOffset dy="10" in="SourceGraphic" result="FeOffset1128Out"/><feGaussianBlur in="FeOffset1128Out" result="FeGaussianBlur1129Out" stdDeviation="4 4"/></filter></defs><g><g transform="translate(-808 -2086)"><use fill="#fff200" xlink:href="#dbmvb"/></g><g transform="translate(-808 -2086)"><g filter="url(#dbmvc)"><use fill="none" stroke-opacity=".3" stroke-width="0" mask="url(&quot;#dbmvd&quot;)" xlink:href="#dbmva"/><use fill-opacity=".3" xlink:href="#dbmva"/></g><use fill="#fff" xlink:href="#dbmva"/></g></g></svg>
                        <div class="five_block-text">
                            <h3 class="five_block-text_h3">
                                Совместное
                                применение
                            </h3>
                            <p>
                                разных форм препарата Панавир повысит эффективность лечения, поможет справиться
                                с вирусами и поднять иммунитет.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--===================================================== section six -->
    <section class="section-six" id="six">
        <div class="container">
            <h2>
                Панавир® работает
                <span>быстро, надёжно и эффективно</span>
            </h2>
            <p class="six_sub-title">
                Панавир® в лечении герпеса и ВПЧ
            </p>
            <div class="row">
                <div class="col-1-2 col-1-xs">
                    <div class="six_block cre-animate" data-animation="scale-up" data-speed="1500" data-delay="800" data-offset="90%" data-easing="ease">
                        <div class="six_block_hover">
                            * Инструкция по медицинскому применению препарата.
                        </div>
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px"
                             viewBox="0 0 40 40" style="enable-background:new 0 0 40 40;" xml:space="preserve">
<style type="text/css">
    .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#FFF200;}
    .st1{fill-rule:evenodd;clip-rule:evenodd;fill:#94BEE6;}
</style>
                            <path class="st0" d="M20,8.4c6.4,0,11.6,5.2,11.6,11.6c0,6.4-5.2,11.6-11.6,11.6S8.4,26.4,8.4,20C8.4,13.6,13.6,8.4,20,8.4z"/>
                            <path class="st1" d="M20,40C9,40,0,31,0,20C0,9,9,0,20,0c11,0,20,9,20,20C40,31,31,40,20,40z M20,1.5C9.8,1.5,1.5,9.8,1.5,20
	c0,10.2,8.3,18.5,18.5,18.5c10.2,0,18.5-8.3,18.5-18.5C38.5,9.8,30.2,1.5,20,1.5z M20,36.4c-9.1,0-16.4-7.4-16.4-16.4
	c0-9.1,7.4-16.4,16.4-16.4c9.1,0,16.4,7.4,16.4,16.4C36.4,29.1,29.1,36.4,20,36.4z M20,5.1C11.8,5.1,5.1,11.8,5.1,20
	c0,8.2,6.7,14.9,14.9,14.9c8.2,0,14.9-6.7,14.9-14.9C34.9,11.8,28.2,5.1,20,5.1z M19.3,24.7c-0.3,0.3-0.8,0.3-1.1,0l-4.4-4.4
	c-0.3-0.3-0.3-0.8,0-1.1c0.3-0.3,0.8-0.3,1.1,0l3.9,3.9l6.3-6.3c0.3-0.3,0.8-0.3,1.1,0c0.3,0.3,0.3,0.8,0,1.1L19.3,24.7z"/>
</svg>

                        <div class="six_block_text">
                            <h6>
                                Способен
                            </h6>
                            <p class="sub_h6">
                                полностью предотвратить образование пузырьков при применении на ранней стадии заболевания герпеса.*
                            </p>
                        </div>
                    </div>
                    <div class="six_block cre-animate" data-animation="scale-up" data-speed="1500" data-delay="700" data-offset="90%" data-easing="ease">
                        <div class="six_block_hover">
                            ** По данным исследований "Современный подход к терапии рецидивирующей генитальной герпетической инфекции" Перламутров Ю.Н., Чернова Н.И, журнал "Врач", 2010г.
                        </div>
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                             viewBox="0 0 40 40" style="enable-background:new 0 0 40 40;" xml:space="preserve">
<style type="text/css">
    .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#FFF200;}
    .st1{fill-rule:evenodd;clip-rule:evenodd;fill:#94BEE6;}
</style>
                            <path class="st0" d="M20,8.4c6.4,0,11.6,5.2,11.6,11.6c0,6.4-5.2,11.6-11.6,11.6S8.4,26.4,8.4,20C8.4,13.6,13.6,8.4,20,8.4z"/>
                            <path class="st1" d="M20,40C9,40,0,31,0,20C0,9,9,0,20,0c11,0,20,9,20,20C40,31,31,40,20,40z M20,1.5C9.8,1.5,1.5,9.8,1.5,20
	c0,10.2,8.3,18.5,18.5,18.5c10.2,0,18.5-8.3,18.5-18.5C38.5,9.8,30.2,1.5,20,1.5z M20,36.4c-9.1,0-16.4-7.4-16.4-16.4
	c0-9.1,7.4-16.4,16.4-16.4c9.1,0,16.4,7.4,16.4,16.4C36.4,29.1,29.1,36.4,20,36.4z M20,5.1C11.8,5.1,5.1,11.8,5.1,20
	c0,8.2,6.7,14.9,14.9,14.9c8.2,0,14.9-6.7,14.9-14.9C34.9,11.8,28.2,5.1,20,5.1z M19.3,24.7c-0.3,0.3-0.8,0.3-1.1,0l-4.4-4.4
	c-0.3-0.3-0.3-0.8,0-1.1c0.3-0.3,0.8-0.3,1.1,0l3.9,3.9l6.3-6.3c0.3-0.3,0.8-0.3,1.1,0c0.3,0.3,0.3,0.8,0,1.1L19.3,24.7z"/>
</svg>

                        <div class="six_block_text">
                            <h6>
                                у 82,8%
                            </h6>
                            <p class="sub_h6">
                                пациентов увеличилась длительность периода
                                без симптомов герпеса
                                в 1,5-2 раза.**
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-1-2 col-1-xs">
                    <div class="six_block cre-animate" data-animation="scale-up" data-speed="1500" data-delay="600" data-offset="90%" data-easing="ease">
                        <div class="six_block_hover">
                            ** По данным исследований "Современный подход к терапии рецидивирующей генитальной герпетической инфекции" Перламутров Ю.Н., Чернова Н.И, журнал "Врач", 2010г.
                        </div>
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px"
                             viewBox="0 0 40 40" style="enable-background:new 0 0 40 40;" xml:space="preserve">
<style type="text/css">
    .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#FFF200;}
    .st1{fill-rule:evenodd;clip-rule:evenodd;fill:#94BEE6;}
</style>
                            <path class="st0" d="M20,8.4c6.4,0,11.6,5.2,11.6,11.6c0,6.4-5.2,11.6-11.6,11.6S8.4,26.4,8.4,20C8.4,13.6,13.6,8.4,20,8.4z"/>
                            <path class="st1" d="M20,40C9,40,0,31,0,20C0,9,9,0,20,0c11,0,20,9,20,20C40,31,31,40,20,40z M20,1.5C9.8,1.5,1.5,9.8,1.5,20
	c0,10.2,8.3,18.5,18.5,18.5c10.2,0,18.5-8.3,18.5-18.5C38.5,9.8,30.2,1.5,20,1.5z M20,36.4c-9.1,0-16.4-7.4-16.4-16.4
	c0-9.1,7.4-16.4,16.4-16.4c9.1,0,16.4,7.4,16.4,16.4C36.4,29.1,29.1,36.4,20,36.4z M20,5.1C11.8,5.1,5.1,11.8,5.1,20
	c0,8.2,6.7,14.9,14.9,14.9c8.2,0,14.9-6.7,14.9-14.9C34.9,11.8,28.2,5.1,20,5.1z M19.3,24.7c-0.3,0.3-0.8,0.3-1.1,0l-4.4-4.4
	c-0.3-0.3-0.3-0.8,0-1.1c0.3-0.3,0.8-0.3,1.1,0l3.9,3.9l6.3-6.3c0.3-0.3,0.8-0.3,1.1,0c0.3,0.3,0.3,0.8,0,1.1L19.3,24.7z"/>
</svg>
                        <div class="six_block_text">
                            <h6>
                                в 1,5-2 раза
                            </h6>
                            <p class="sub_h6">
                                уменьшилась продолжительность проявления заболевания (рецидивов) по сравнению
                                с данными до лечения герпеса.**
                            </p>
                        </div>
                    </div>
                    <div class="six_block cre-animate" data-animation="scale-up" data-speed="1500" data-delay="900" data-offset="90%" data-easing="ease">
                        <div class="six_block_hover">
                            *** По данным исследований при комплексной терапии Панавиром и деструкции "Генитальные кондиломы: терапия и профилактика" С. Роговская, Н. Подзолкова, А. Оламова, ПМГМУ им И.М. Сеченова, РМАПО, Москва, 2010 год.
                        </div>
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px"
                             viewBox="0 0 40 40" style="enable-background:new 0 0 40 40;" xml:space="preserve">
<style type="text/css">
    .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#FFF200;}
    .st1{fill-rule:evenodd;clip-rule:evenodd;fill:#94BEE6;}
</style>
                            <path class="st0" d="M20,8.4c6.4,0,11.6,5.2,11.6,11.6c0,6.4-5.2,11.6-11.6,11.6S8.4,26.4,8.4,20C8.4,13.6,13.6,8.4,20,8.4z"/>
                            <path class="st1" d="M20,40C9,40,0,31,0,20C0,9,9,0,20,0c11,0,20,9,20,20C40,31,31,40,20,40z M20,1.5C9.8,1.5,1.5,9.8,1.5,20
	c0,10.2,8.3,18.5,18.5,18.5c10.2,0,18.5-8.3,18.5-18.5C38.5,9.8,30.2,1.5,20,1.5z M20,36.4c-9.1,0-16.4-7.4-16.4-16.4
	c0-9.1,7.4-16.4,16.4-16.4c9.1,0,16.4,7.4,16.4,16.4C36.4,29.1,29.1,36.4,20,36.4z M20,5.1C11.8,5.1,5.1,11.8,5.1,20
	c0,8.2,6.7,14.9,14.9,14.9c8.2,0,14.9-6.7,14.9-14.9C34.9,11.8,28.2,5.1,20,5.1z M19.3,24.7c-0.3,0.3-0.8,0.3-1.1,0l-4.4-4.4
	c-0.3-0.3-0.3-0.8,0-1.1c0.3-0.3,0.8-0.3,1.1,0l3.9,3.9l6.3-6.3c0.3-0.3,0.8-0.3,1.1,0c0.3,0.3,0.3,0.8,0,1.1L19.3,24.7z"/>
</svg>

                       <div class="six_block_text">
                           <h6>
                               у 95,8%
                           </h6>
                           <p class="sub_h6">
                               пациентов отмечено стойкое излечение
                               при лечении ВПЧ.***
                           </p>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--===================================================== section advantages -->
    <section class="section-advantages" id="advantages">
        <div class="container">
            <h2>
                <span>Преимущества субстанции Панавир®</span>
                в лечении герпеса и ВПЧ
            </h2>
            <div class="row">
                <div class="col-1-3 col-1-xs">
                    <div class="cre-animate" data-animation="scale-up" data-speed="1500" data-delay="500" data-offset="90%" data-easing="easeInOutBack">
                        <div class="basic_advantages_block">
                            <svg version="1.1" class="advantages_block1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px"
                                 viewBox="0 0 50.8 45" style="enable-background:new 0 0 50.8 45;" xml:space="preserve">
<style type="text/css">
    .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#94BEE6;}
    .st1{fill-rule:evenodd;clip-rule:evenodd;fill:#626365;}
</style>
                                <path class="st0" d="M27.8,7.2c8.3,0,15,6.7,15,15c0,8.3-6.7,15-15,15c-8.3,0-15-6.7-15-15C12.8,13.9,19.5,7.2,27.8,7.2z"/>
                                <path class="st1" d="M27.8,45L27.8,45c-6.2,0-11.9-2.3-16.2-6.6c-4-4-6.3-9.2-6.6-14.8l-3.9-0.1c-0.5,0-0.9-0.3-1.1-0.7
	c-0.2-0.4-0.2-0.9,0.1-1.3l5.6-7.2C6,14,6.4,13.8,6.8,13.8c0.4,0,0.8,0.3,1,0.6l4.4,7.3c0.2,0.2,0.3,0.5,0.3,0.8
	c0,0.7-0.6,1.2-1.3,1.2l-0.1,0l-3.7-0.1c0.3,4.9,2.3,9.5,5.9,13c3.8,3.8,9,5.9,14.5,5.9c11.3,0,20.4-9,20.5-20.1
	c0-0.9-0.1-1.7-0.2-2.6c-0.1-0.7,0.4-1.3,1.1-1.4c0.7-0.1,1.3,0.4,1.4,1.1c0.1,1,0.2,1.9,0.2,2.9C50.7,34.9,40.4,45,27.8,45z
	 M9,21.2l-2.4-3.9l-2.9,3.8L9,21.2z M48.4,16.8c-0.3,0-0.7-0.1-0.9-0.4c-0.2-0.2-0.4-0.6-0.4-0.9c0-0.3,0.1-0.7,0.4-0.9
	c0.5-0.5,1.3-0.5,1.8,0c0.2,0.2,0.4,0.6,0.4,0.9c0,0.3-0.1,0.6-0.4,0.9C49,16.6,48.7,16.8,48.4,16.8z M31.2,30.4
	c-0.6,0.3-1.4,0.1-1.7-0.5l-4.1-7.1c-0.3-0.6-0.1-1.4,0.4-1.7l10.8-6.2c0.6-0.3,1.4-0.1,1.7,0.5c0.3,0.6,0.1,1.4-0.4,1.7l-9.7,5.6
	l3.5,6C32,29.3,31.8,30,31.2,30.4z M46.4,12.6c-0.4,0-0.8-0.2-1.1-0.6c-3.7-6-10.2-9.5-17.3-9.5c-5.7,0-11.2,2.4-15.1,6.5
	c-0.2,0.2-0.5,0.4-0.9,0.4c-0.3,0-0.7-0.1-0.9-0.3c-0.2-0.2-0.4-0.5-0.4-0.9c0-0.3,0.1-0.6,0.3-0.9C15.4,2.7,21.5,0,27.9,0
	C36,0,43.3,4,47.4,10.7c0.4,0.6,0.2,1.4-0.4,1.7C46.8,12.6,46.6,12.6,46.4,12.6z"/>
</svg>
                            <div class="advantages_block">
                                Ускоряет заживление ткани
                            </div>
                        </div>
                        <div class="basic_advantages_block margin-under">
                            <svg version="1.1" class="advantages_block2" id="Layer_1" xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px"
                                 viewBox="0 0 49 61" style="enable-background:new 0 0 49 61;" xml:space="preserve">
<style type="text/css">
    .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#94BEE6;}
    .st1{fill-rule:evenodd;clip-rule:evenodd;fill:#626365;}
</style>
                                <path class="st0" d="M25,19.2c8.3,0,15,6.7,15,15c0,8.3-6.7,15-15,15s-15-6.7-15-15C10,25.9,16.7,19.2,25,19.2z"/>
                                <path class="st1" d="M36.9,24.5c-6.7,0-12.1-5.5-12.1-12.3S30.2,0,36.9,0C43.6,0,49,5.5,49,12.3S43.6,24.5,36.9,24.5z M36.9,2.4
	c-5.4,0-9.8,4.4-9.8,9.9s4.4,9.9,9.8,9.9c5.4,0,9.8-4.4,9.8-9.9S42.3,2.4,36.9,2.4z M38,7.2v3.9h2.1c0.6,0,1.1,0.5,1.1,1.1
	c0,0.6-0.5,1.1-1.1,1.1h-3.2c-0.6,0-1.1-0.5-1.1-1.1v-5c0-0.6,0.5-1.1,1.1-1.1S38,6.6,38,7.2z M36.9,21.5c-5,0-9.1-4.1-9.1-9.2
	c0-1.1,0.2-2.2,0.6-3.2c0.1-0.3,0.3-0.5,0.6-0.6c0.2-0.1,0.3-0.1,0.5-0.1c-0.1-0.2-0.2-0.4-0.2-0.7c0-0.3,0.1-0.6,0.3-0.8
	c0.2-0.2,0.5-0.3,0.8-0.3c0.3,0,0.6,0.1,0.8,0.3c0.2,0.2,0.3,0.5,0.3,0.8c0,0.3-0.1,0.6-0.3,0.8c-0.2,0.2-0.5,0.3-0.8,0.3
	c0,0,0,0,0,0c0.2,0.3,0.3,0.7,0.2,1c-0.3,0.8-0.4,1.6-0.4,2.4c0,3.9,3.1,7,6.9,7c3.8,0,6.9-3.1,6.9-7c0-3.9-3.1-7-6.9-7
	c-1.6,0-3.2,0.6-4.4,1.6C32.2,7,32,7.1,31.7,7.1c-0.3,0-0.6-0.2-0.7-0.4c-0.2-0.2-0.3-0.5-0.2-0.8c0-0.3,0.2-0.6,0.4-0.7
	C32.7,3.8,34.8,3,36.9,3c5,0,9.1,4.1,9.1,9.2C46,17.3,41.9,21.5,36.9,21.5z M23.8,10.4l0,0.2h-1.8c-4.8,0-8.6,3.9-8.6,8.7v1.1
	c0,0.7-0.6,1.3-1.2,1.3c-0.9,0-1.7,1.4-1.7,3c0,1.6,0.8,3,1.7,3c0,0,0.1,0,0.2,0c0.7-0.1,1.3,0.2,1.5,0.9c0.8,2.8,2.5,5.2,4.8,6.8
	c1.1,0.8,1.8,2,1.8,3.4v2.5c0,1.7-1.1,3.2-2.6,3.8L4.6,51c-1.2,0.5-2.1,1.7-2.1,3v4.5h42V54c0-1.3-0.8-2.5-2-3l-13.3-5.9
	c-1.5-0.6-2.6-2.1-2.6-3.8v-2.5c0-1.4,0.7-2.7,1.8-3.4c2.4-1.6,4.1-4,4.8-6.8c0.2-0.7,0.8-1,1.5-0.9c0,0,0.2,0,0.2,0
	c0.6,0,1.3-0.8,1.5-1.9l0-0.2l0.2,0c0,0,0.1,0,0.1,0c0,0,0.1,0,0.1,0c0.6,0,1.1,0,1.8-0.1l0.3,0l0,0.3c-0.3,2.4-1.8,4.2-3.7,4.4
	c-1,3-3,5.5-5.6,7.3c-0.4,0.3-0.7,0.8-0.7,1.3v2.5c0,0.7,0.4,1.3,1,1.5l13.3,5.9c2.1,0.8,3.6,3,3.6,5.3v5.7c0,0.7-0.6,1.3-1.2,1.3
	H1.2C0.6,61,0,60.4,0,59.7V54c0-2.3,1.5-4.5,3.6-5.3l13.2-5.9c0.7-0.3,1.1-0.8,1.1-1.5v-2.5c0-0.5-0.3-1-0.7-1.3
	c-2.6-1.7-4.5-4.3-5.6-7.3c-2.1-0.3-3.7-2.6-3.7-5.5c0-2.5,1.2-4.6,2.9-5.2v-0.1c0-6.2,5-11.2,11.1-11.2h2.4l-0.1,0.3
	C24,9,23.9,9.7,23.8,10.4z"/>
</svg>
                            <div class="advantages_block">
                                Уменьшает количество высыпаний
                            </div>
                        </div>
                         <div class="basic_advantages_block margin-under">
                             <svg version="1.1" class="advantages_block3" id="Layer_1" xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px"
                                  viewBox="0 0 48 53" style="enable-background:new 0 0 48 53;" xml:space="preserve">
<style type="text/css">
    .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#94BEE6;}
    .st1{fill-rule:evenodd;clip-rule:evenodd;fill:#626365;}
</style>
                                 <path class="st0" d="M24,10.3c8.3,0,15,6.7,15,15c0,8.3-6.7,15-15,15c-8.3,0-15-6.7-15-15C9,17,15.8,10.3,24,10.3z"/>
                                 <path class="st1" d="M47,21.2c-2,9.6-6.9,18.3-14.1,25.2c-2.5,2.4-5.3,4.5-8.2,6.4C24.5,52.9,24.2,53,24,53c-0.2,0-0.5-0.1-0.7-0.2
	C8.7,43.6,0,28.2,0,11.4v-0.7C0,10,0.6,9.4,1.3,9.4c4.7,0,8.6-3.7,8.6-8.2c0-0.7,0.6-1.3,1.3-1.3h25.7c0.7,0,1.3,0.6,1.3,1.3
	c0,4.5,3.9,8.2,8.6,8.2c0.7,0,1.3,0.6,1.3,1.3v0.7C48,14.7,47.6,18,47,21.2z M35.7,2.5H12.3c-0.6,4.9-4.7,8.8-9.8,9.4
	C2.7,27.3,10.7,41.6,24,50.2c2.6-1.7,5-3.6,7.2-5.7C38,38,42.6,29.8,44.5,20.7c0.6-2.9,0.9-5.8,1-8.8C40.3,11.3,36.3,7.4,35.7,2.5z
	 M22.3,35c-0.2,0.2-0.6,0.4-0.9,0.4c-0.3,0-0.7-0.1-0.9-0.4l-5.7-5.8c-1.5-1.5-1.5-3.8,0-5.3c1.5-1.5,3.8-1.5,5.3,0l1.3,1.3l6.5-6.5
	c0.7-0.7,1.6-1.1,2.6-1.1c1,0,2,0.4,2.6,1.1c0.7,0.7,1.1,1.6,1.1,2.6c0,1-0.4,1.9-1.1,2.6L22.3,35z M31.4,20.5
	c-0.5-0.5-1.3-0.5-1.7,0l-7.4,7.4c-0.5,0.5-1.3,0.5-1.8,0l-2.2-2.2c-0.2-0.2-0.5-0.4-0.9-0.4c-0.3,0-0.6,0.1-0.9,0.4
	c-0.5,0.5-0.5,1.3,0,1.7l4.9,4.9l10-10c0.2-0.2,0.4-0.5,0.4-0.9C31.8,21.1,31.7,20.8,31.4,20.5z"/>
</svg>
                             <div class="advantages_block">
                                 Высокий профиль безопасности
                             </div>
                        </div>
                    </div>
                </div>
                <div class="col-1-3 col-1-xs">
                    <div class="cre-animate" data-animation="scale-up" data-speed="1500" data-delay="800" data-offset="90%" data-easing="easeInOutBack">
                        <div class="basic_advantages_block">
                            <svg version="1.1" class="advantages_block4" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                 viewBox="0 0 50 63" style="enable-background:new 0 0 50 63;" xml:space="preserve">
<style type="text/css">
    .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#94BEE6;}
    .st1{fill-rule:evenodd;clip-rule:evenodd;fill:#626365;}
</style>
                                <path class="st0" d="M20,13c8.3,0,15,6.7,15,15s-6.7,15-15,15c-8.3,0-15-6.7-15-15S11.7,13,20,13z"/>
                                <path class="st1" d="M8.2,11.4h23.1c0.7,0,1.3,0.6,1.3,1.3c0,0.7-0.6,1.3-1.3,1.3H8.2c-0.7,0-1.3-0.6-1.3-1.3
	C6.9,12,7.5,11.4,8.2,11.4z M8.2,20.7h23.1c0.7,0,1.3,0.6,1.3,1.3c0,0.7-0.6,1.3-1.3,1.3H8.2c-0.7,0-1.3-0.6-1.3-1.3
	C6.9,21.3,7.5,20.7,8.2,20.7z M8.2,39.2h11.5c0.7,0,1.3,0.6,1.3,1.3c0,0.7-0.6,1.3-1.3,1.3H8.2c-0.7,0-1.3-0.6-1.3-1.3
	C6.9,39.8,7.5,39.2,8.2,39.2z M8.2,29.9h23.1c0.7,0,1.3,0.6,1.3,1.3c0,0.7-0.6,1.3-1.3,1.3H8.2c-0.7,0-1.3-0.6-1.3-1.3
	C6.9,30.5,7.5,29.9,8.2,29.9z M2.3,9.5c0.2,0.2,0.4,0.6,0.4,0.9c0,0.4-0.1,0.7-0.4,0.9c-0.2,0.2-0.6,0.4-0.9,0.4
	c-0.4,0-0.7-0.1-0.9-0.4C0.1,11.2,0,10.8,0,10.5c0-0.4,0.1-0.7,0.4-0.9C0.9,9,1.8,9,2.3,9.5z M50,52.1c0,6-4.8,10.9-10.7,10.9
	C33.6,63,29,58.6,28.6,53c-0.2,0.2-0.5,0.3-0.8,0.3H1.3c-0.7,0-1.3-0.6-1.3-1.3V13.8c0-0.7,0.6-1.3,1.3-1.3c0.7,0,1.3,0.6,1.3,1.3
	v36.7h25.1c0.3,0,0.6,0.1,0.9,0.3c0.5-4.6,3.9-8.4,8.3-9.4c-0.1-0.2-0.1-0.3-0.1-0.5V2.7H2.6v4.4c0,0.7-0.6,1.3-1.3,1.3
	C0.6,8.5,0,7.9,0,7.1V1.3C0,0.6,0.6,0,1.3,0h36.8c0.7,0,1.3,0.6,1.3,1.3V41c0,0.1,0,0.2,0,0.3C45.3,41.4,50,46.2,50,52.1z
	 M39.3,43.4c-4.8,0-8.6,3.9-8.6,8.7c0,4.8,3.9,8.7,8.6,8.7c4.8,0,8.6-3.9,8.6-8.7C47.9,47.3,44,43.4,39.3,43.4z M40.2,47.7v3.5h1.9
	c0.5,0,1,0.4,1,1c0,0.5-0.4,1-1,1h-2.9c-0.5,0-1-0.4-1-1v-4.5c0-0.5,0.4-1,1-1C39.8,46.7,40.2,47.1,40.2,47.7z M39.3,60.3
	c-4.5,0-8.1-3.7-8.1-8.2c0-1,0.2-1.9,0.5-2.8c0.1-0.2,0.3-0.4,0.5-0.6c0.1-0.1,0.3-0.1,0.4-0.1c-0.1-0.2-0.2-0.4-0.2-0.6
	c0-0.3,0.1-0.5,0.3-0.7c0.2-0.2,0.4-0.3,0.7-0.3c0.3,0,0.5,0.1,0.7,0.3c0.2,0.2,0.3,0.4,0.3,0.7c0,0.3-0.1,0.5-0.3,0.7
	c-0.2,0.2-0.4,0.3-0.7,0.3c0,0,0,0,0,0c0.2,0.3,0.3,0.6,0.1,0.9c-0.2,0.7-0.4,1.4-0.4,2.1c0,3.4,2.8,6.2,6.1,6.2
	c3.4,0,6.1-2.8,6.1-6.2c0-3.4-2.8-6.2-6.1-6.2c-1.4,0-2.8,0.5-3.9,1.4c-0.2,0.2-0.5,0.2-0.7,0.2c-0.3,0-0.5-0.2-0.7-0.4
	c-0.2-0.2-0.2-0.5-0.2-0.7c0-0.3,0.2-0.5,0.4-0.7c1.4-1.2,3.3-1.8,5.1-1.8c4.5,0,8.1,3.7,8.1,8.2C47.3,56.7,43.7,60.3,39.3,60.3z"/>
</svg>
                            <div class="advantages_block">
                                Уменьшает выраженность симптомов
                            </div>
                        </div>
                        <div class="basic_advantages_block">
                            <svg version="1.1" class="advantages_block5" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                 viewBox="0 0 51 51" style="enable-background:new 0 0 51 51;" xml:space="preserve">
<style type="text/css">
    .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#94BEE6;}
    .st1{fill-rule:evenodd;clip-rule:evenodd;fill:#626365;}
</style>
                                <path class="st0" d="M25,12.3c8.3,0,15,6.7,15,15s-6.7,15-15,15s-15-6.7-15-15S16.7,12.3,25,12.3z"/>
                                <path class="st1" d="M10.1,41.3c-0.7,0-1.2-0.6-1.2-1.2c0-0.7,0.6-1.2,1.2-1.2h2.8c0.7,0,1.2,0.6,1.2,1.2c0,0.7-0.6,1.2-1.2,1.2
	H10.1z M16.5,18.8c-0.2-0.2-0.4-0.6-0.4-0.9c0-0.3,0.1-0.6,0.4-0.9c0.5-0.5,1.3-0.5,1.8,0c0.2,0.2,0.4,0.6,0.4,0.9
	c0,0.3-0.1,0.6-0.4,0.9c-0.2,0.2-0.6,0.4-0.9,0.4C17,19.1,16.7,19,16.5,18.8z M41,51c-2.7,0-5.1-1.1-6.9-2.8H1.2
	C0.6,48.3,0,47.7,0,47V17.9V7.1c0-0.7,0.6-1.2,1.2-1.2h7.3v-2c0-2.1,1.7-3.8,3.8-3.8s3.8,1.7,3.8,3.8v2h17.9v-2
	c0-2.1,1.7-3.8,3.8-3.8c2.1,0,3.8,1.7,3.8,3.8v2H49c0.7,0,1.2,0.6,1.2,1.2v14.8c0,0.7-0.6,1.2-1.2,1.2c-0.7,0-1.2-0.6-1.2-1.2v-2.7
	H22.6c-0.7,0-1.2-0.6-1.2-1.2c0-0.7,0.6-1.2,1.2-1.2h25.1V8.3h-6v2c0,2.1-1.7,3.8-3.8,3.8c-2.1,0-3.8-1.7-3.8-3.8v-2H16.2v2
	c0,2.1-1.7,3.8-3.8,3.8s-3.8-1.7-3.8-3.8v-2h-6v8.4h9.6c0.7,0,1.2,0.6,1.2,1.2c0,0.7-0.6,1.2-1.2,1.2H2.5v26.7h29.8
	c-0.7-1.3-1.1-2.9-1.2-4.5H16.9c-0.7,0-1.2-0.6-1.2-1.2c0-0.7,0.6-1.2,1.2-1.2h14.4c1-4.4,5-7.7,9.7-7.7c2.6,0,4.9,1,6.7,2.6v-7.3
	c0-0.7,0.6-1.2,1.2-1.2c0.7,0,1.2,0.6,1.2,1.2v10.8c0.5,1.2,0.8,2.5,0.8,3.8C51,46.6,46.5,51,41,51z M36.6,10.3
	c0,0.7,0.6,1.3,1.3,1.3c0.7,0,1.3-0.6,1.3-1.3V3.8c0-0.7-0.6-1.3-1.3-1.3c-0.7,0-1.3,0.6-1.3,1.3V10.3z M11,10.3
	c0,0.7,0.6,1.3,1.3,1.3c0.7,0,1.3-0.6,1.3-1.3V3.8c0-0.7-0.6-1.3-1.3-1.3c-0.7,0-1.3,0.6-1.3,1.3V10.3z M41,33.6
	c-4.1,0-7.5,3.3-7.5,7.5c0,4.1,3.4,7.5,7.5,7.5s7.5-3.3,7.5-7.5C48.5,37,45.2,33.6,41,33.6z M44.3,42.3H41c-0.7,0-1.2-0.6-1.2-1.2
	v-5.7c0-0.7,0.6-1.2,1.2-1.2c0.7,0,1.2,0.6,1.2,1.2v4.5h2c0.7,0,1.2,0.6,1.2,1.2C45.5,41.8,45,42.3,44.3,42.3z"/>
</svg>
                            <div class="advantages_block">
                                Увеличивает период ремиссии без симптомов
                            </div>
                        </div>
                        <div class="basic_advantages_block">
                            <svg version="1.1" class="advantages_block6" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                 viewBox="0 0 55 47" style="enable-background:new 0 0 55 47;" xml:space="preserve">
<style type="text/css">
    .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#94BEE6;}
    .st1{fill-rule:evenodd;clip-rule:evenodd;fill:#626365;}
</style>
                                <path class="st0" d="M27,9.3c8.3,0,15,6.7,15,15s-6.7,15-15,15c-8.3,0-15-6.7-15-15S18.7,9.3,27,9.3z"/>
                                <path class="st1" d="M41.2,47H13.7L0,23.5L13.7,0h27.5L55,23.5L41.2,47z M39.8,2.5H15.2l-12.3,21l12.3,21h24.6l12.3-21L39.8,2.5z
	 M45.9,23.5c-0.5,0.8-1.7,1.4-3.3,1.4h-1.3v4.2c0,0.3-0.2,0.4-0.5,0.4h-2.1c-0.4,0-0.5-0.1-0.5-0.4V17.4c0-0.3,0.2-0.4,0.5-0.4h3.1
	c3.2,0,4.8,1.3,4.8,3.9C46.7,21.9,46.5,22.7,45.9,23.5z M42.3,19.5h-0.9v2.9h0.9c0.9,0,1.3-0.5,1.3-1.5C43.6,20,43.1,19.5,42.3,19.5
	z M31.7,29.6c-1.7,0-3-0.6-3.7-1.4c-0.3-0.4-0.6-0.9-0.8-1.6c-0.4-1.3-0.4-2.2-0.4-3.5c0-0.4,0-0.9,0.1-1.3c0.1-0.8,0.3-1.9,0.7-2.7
	c0.7-1.2,1.9-2.3,4.1-2.2c1.7,0,2.9,0.5,3.6,1.3c0.4,0.4,0.6,0.8,0.9,1.4c0.4,1.1,0.5,2.1,0.5,3.5c0,1.3-0.1,2.3-0.5,3.5
	C35.7,28.4,34.4,29.5,31.7,29.6z M31.7,19.5c-1.3,0-1.7,1.2-1.7,3.8c0,2.6,0.4,3.7,1.7,3.7c1.3,0,1.8-1.1,1.8-3.7
	C33.5,20.6,33.1,19.5,31.7,19.5z M25.7,19.5h-2.2V29c0,0.2,0,0.4-0.5,0.4h-2c-0.4,0-0.5-0.1-0.5-0.4v-9.5h-2.2
	c-0.5,0-0.5-0.1-0.5-0.4v-1.7c0-0.3,0.1-0.4,0.5-0.4h7.5c0.3,0,0.5,0.2,0.5,0.4v1.7C26.3,19.4,26.1,19.5,25.7,19.5z M13.2,21.8
	c0.5,0.1,0.9,0.2,1.2,0.3c0.6,0.2,1.5,0.6,2,1.1c0.5,0.5,0.8,1.4,0.8,2.5c0,3-2.2,3.9-4.5,3.9c-1.4,0-2.5-0.2-3.4-0.6
	c-0.6-0.2-0.7-0.4-0.6-0.8l0.2-1.1c0.1-0.5,0.2-0.5,0.9-0.4C11,26.9,12,27,12.7,27c0.9,0,1.4-0.4,1.4-1.2c0-0.8-0.3-1.1-1.3-1.3
	c-0.9-0.2-1.5-0.4-2.2-0.8c-1.1-0.6-1.7-1.4-1.7-3c0-2.4,1.6-3.8,4.2-3.8c1.3,0,2.4,0.2,3.2,0.5c0.6,0.2,0.7,0.4,0.6,0.8l-0.2,1.1
	c-0.1,0.4-0.3,0.5-0.8,0.4c-1-0.2-1.8-0.2-2.5-0.2c-0.9,0-1.3,0.4-1.3,1.1c0,0.4,0.1,0.6,0.3,0.8C12.4,21.5,12.7,21.7,13.2,21.8z"/>
</svg>
                            <div class="advantages_block">
                                Снижает риск повторного эпизода заболевания
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-1-3 col-1-xs">
                    <div class="cre-animate" data-animation="scale-up" data-speed="1500" data-delay="700" data-offset="90%" data-easing="easeInOutBack">
                        <div class="basic_advantages_block">
                            <svg version="1.1" class="advantages_block7" id="Layer_1" xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px"
                                 viewBox="0 0 47 47" style="enable-background:new 0 0 47 47;" xml:space="preserve">
<style type="text/css">
    .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#94BEE6;}
    .st1{fill-rule:evenodd;clip-rule:evenodd;fill:#626365;}
</style>
                                <path class="st0" d="M23,8c8.3,0,15,6.7,15,15c0,8.3-6.7,15-15,15c-8.3,0-15-6.7-15-15C8,14.7,14.7,8,23,8z"/>
                                <path class="st1" d="M23.5,47C10.5,47,0,36.5,0,23.5S10.5,0,23.5,0C36.5,0,47,10.5,47,23.5S36.5,47,23.5,47z M38.4,37.6l-0.8,0.8
	C37.8,38.1,38.1,37.8,38.4,37.6z M3,23.5C3,34.8,12.2,44,23.5,44c4.6,0,8.9-1.6,12.3-4.1l-6.2-6.2c-0.1,0.1-0.1,0.1-0.2,0.1
	c-0.1,0.1-0.2,0.1-0.3,0.1c-0.3,0-0.5-0.1-0.7-0.4l-0.9-1.7c-0.8,0.4-1.7,0.7-2.6,0.8l0.1,1.5c0,0.4-0.3,0.8-0.7,0.8c0,0,0,0,0,0
	c-0.4,0-0.7-0.3-0.7-0.7l-0.1-1.6c-0.2,0-0.4,0-0.6,0c-0.7-0.1-1.4-0.3-2.1-0.5l-1.2,2.4C19.5,34.9,19.2,35,19,35
	c-0.1,0-0.2,0-0.3-0.1c-0.4-0.2-0.5-0.6-0.3-1l1.1-2.2c-0.8-0.4-1.6-0.8-2.2-1.4l-2,2.1c-0.1,0.2-0.3,0.2-0.5,0.2
	c-0.2,0-0.4-0.1-0.5-0.2c-0.3-0.3-0.3-0.7,0-1l2-2.1c-0.6-0.7-1.1-1.4-1.4-2.1L12,28.1c-0.1,0-0.1,0-0.2,0c-0.3,0-0.6-0.2-0.7-0.5
	c-0.1-0.4,0.1-0.8,0.5-0.9l2.8-0.9c-0.1-0.7-0.2-1.4-0.1-2.1c0.1-0.5,0.2-1,0.3-1.4l-2.6-0.4c-0.4-0.1-0.7-0.4-0.6-0.8
	c0.1-0.4,0.4-0.7,0.8-0.6l2.8,0.5c0.2-0.4,0.4-0.9,0.6-1.3l-8.4-8.4C4.5,14.6,3,18.9,3,23.5z M29.4,24.1c-0.6-3.1-2.5-6.4-6.2-6.4
	c-1,0-1.9,0.2-2.7,0.7l2.7,2.7c0.2-0.5,0.7-0.9,1.4-0.9c0.8,0,1.5,0.7,1.5,1.5c0,0.6-0.4,1.1-0.9,1.4l0.8,0.8c0.1,0,0.2-0.1,0.4-0.1
	c0.6,0,1.1,0.5,1.1,1.1c0,0.1,0,0.3-0.1,0.4l1.7,1.7C29.4,26,29.5,25.1,29.4,24.1z M16.9,24c-0.2,1.9,0.7,3.2,1.6,3.9
	c1.2,1.1,2.9,1.8,4.8,2.1c0.8,0.1,1.6,0,2.4-0.3L22.9,27c-0.1,0-0.3,0.1-0.4,0.1c-0.8,0-1.5-0.7-1.5-1.5c0-0.1,0-0.3,0.1-0.4
	l-1.6-1.6c-0.2-0.1-0.3-0.3-0.4-0.4l-1.5-1.5C17.3,22.3,17,23.1,16.9,24z M8.6,9.4l0.8-0.8C9.1,8.9,8.9,9.2,8.6,9.4z M23.5,3
	c-5.1,0-9.8,1.9-13.4,5l8.4,8.4c0.4-0.2,0.8-0.4,1.2-0.6l-0.9-2.6c-0.1-0.4,0.1-0.8,0.5-0.9c0.4-0.1,0.8,0.1,0.9,0.5l0.9,2.6
	c0.6-0.2,1.3-0.3,2-0.3l0.3-2.4c0-0.4,0.4-0.7,0.8-0.6c0.4,0,0.7,0.4,0.7,0.8l-0.3,2.3c0.7,0.1,1.4,0.4,2.1,0.7l1.5-2.3
	c0.2-0.3,0.7-0.4,1-0.2c0.3,0.2,0.4,0.7,0.2,1l-1.4,2.3c0.6,0.4,1.1,0.9,1.5,1.4l2.3-1.6c0.3-0.2,0.8-0.2,1,0.2
	c0.2,0.3,0.2,0.8-0.2,1l-2.3,1.6c0.5,0.7,0.8,1.5,1.2,2.4l2.2-0.7c0.4-0.1,0.8,0.1,0.9,0.5c0.1,0.4-0.1,0.8-0.5,0.9L31.9,23
	c0.1,0.2,0.1,0.4,0.1,0.6c0.1,0.5,0.1,1,0.1,1.6l2.3,0.4c0.4,0.1,0.7,0.4,0.6,0.8c-0.1,0.4-0.4,0.6-0.7,0.6c0,0-0.1,0-0.1,0
	l-2.2-0.4c-0.2,0.7-0.4,1.3-0.8,1.9l2,1.5c0.3,0.2,0.4,0.7,0.1,1c0,0,0,0-0.1,0.1l5.8,5.8c3.1-3.6,5-8.3,5-13.4
	C44,12.2,34.8,3,23.5,3z"/>
</svg>
                            <div class="advantages_block">
                                Активизирует иммунитет
                            </div>
                        </div>
                        <div class="basic_advantages_block margin-under">
                            <svg version="1.1" class="advantages_block8" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                 viewBox="0 0 50 49" style="enable-background:new 0 0 50 49;" xml:space="preserve">
<style type="text/css">
    .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#94BEE6;}
    .st1{fill-rule:evenodd;clip-rule:evenodd;fill:#626365;}
</style>
                                <path class="st0" d="M20.1,6.3c8.3,0,15,6.7,15,15c0,8.3-6.7,15-15,15s-15-6.7-15-15C5.1,13,11.8,6.3,20.1,6.3z"/>
                                <path class="st1" d="M40.3,49c-5.3,0-9.7-4.3-9.7-9.7c0-5.3,4.4-9.7,9.7-9.7c5.4,0,9.7,4.3,9.7,9.7C50,44.7,45.7,49,40.3,49z
	 M40.3,31.6c-4.3,0-7.7,3.5-7.7,7.7c0,4.3,3.5,7.7,7.7,7.7c4.3,0,7.7-3.5,7.7-7.7C48,35.1,44.6,31.6,40.3,31.6z M41.7,41l-0.5,0.5
	c-0.5,0.5-1.2,0.5-1.7,0L38.9,41L37,39c-0.4-0.4-0.4-1,0-1.4c0.4-0.4,1-0.4,1.4,0l1.1,1.1c0.5,0.5,1.2,0.5,1.7,0l1.1-1.1
	c0.4-0.4,1-0.4,1.4,0c0.4,0.4,0.4,1,0,1.4L41.7,41z M27.7,41.5H13.9V27.7H0V13.9h13.9V0h13.8v13.9h13.9v13.8H27.7V41.5z M39.1,25.2
	v-8.8H25.2V2.5h-8.8v13.9H2.5v8.8h13.9v13.9h8.8V25.2H39.1z"/>
</svg>
                            <div class="advantages_block">
                                Уменьшает продолжительность симптомов
                            </div>
                        </div>
                        <div class="basic_advantages_block">
                            <svg version="1.1" class="advantages_block9" id="Layer_1" xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px"
                                 viewBox="0 0 52 30" style="enable-background:new 0 0 52 30;" xml:space="preserve">
<style type="text/css">
    .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#94BEE6;}
    .st1{fill:#626365;}
</style>
                                <path class="st0" d="M26,0c8.3,0,15,6.7,15,15c0,8.3-6.7,15-15,15c-8.3,0-15-6.7-15-15C11,6.7,17.7,0,26,0z"/>
                                <path class="st1" d="M52,12.6L52,12.6c0-0.1,0-0.1,0-0.1c0,0,0,0,0,0c0,0,0-0.1,0-0.1c0,0,0,0,0,0c0,0,0-0.1,0-0.1c0,0,0,0,0,0
	c0,0,0,0,0,0c0,0,0,0,0-0.1c0,0,0,0,0-0.1c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0-0.1c0,0,0,0,0-0.1c0,0,0,0,0,0c0,0,0,0-0.1-0.1l0,0
	c-0.2-0.2-0.4-0.3-0.6-0.4c-0.2,0-0.3,0-0.5,0l0,0c0,0-0.1,0-0.1,0c0,0,0,0,0,0c0,0-0.1,0-0.1,0c0,0,0,0,0,0c-0.3,0.1-0.7,0.2-1,0.2
	c-1.5,0-3.4-1-6.2-3.2C39.4,5.4,36.1,4,33.2,4c-2.6,0-5,1.1-7.2,3.3C23.9,5.1,21.5,4,18.8,4c-3,0-6.2,1.4-9.9,4.4
	c-2.8,2.3-4.6,3.2-6.2,3.2c-0.4,0-0.7-0.1-1-0.2c0,0,0,0,0,0c0,0-0.1,0-0.1,0l0,0c0,0-0.1,0-0.1,0c-0.2,0-0.3,0-0.5,0
	c-0.2,0.1-0.5,0.2-0.6,0.4l0,0c0,0,0,0-0.1,0.1c0,0,0,0,0,0c0,0,0,0,0,0.1c0,0,0,0,0,0.1c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0.1
	c0,0,0,0,0,0.1c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0.1c0,0,0,0,0,0.1c0,0,0,0,0,0.1c0,0,0,0,0,0.1c0,0,0,0,0,0.1c0,0,0,0,0,0.1
	c0,0,0,0,0,0.1c0,0,0,0,0,0l0,0c0,0,0,0.1,0,0.1c0,0,0,0,0,0l0,0c0,0,0,0.1,0,0.1l0,0C0,13,0,13,0,13c0.1,0.2,0.2,0.4,0.4,0.6
	c0,0,0,0,0,0l0,0c0,0,0,0,0,0c0,0,0,0,0,0l0,0c0,0,0,0,0.1,0l0,0C0.8,13.9,1,14,1.2,14.1c1.5,0.9,3.7,3,5.1,4.4
	c0.9,0.9,3.3,3.2,6.7,5.3c4.4,2.7,8.7,4.1,13,4.1c4.2,0,8.6-1.4,13-4.1c3.4-2.1,5.8-4.5,6.7-5.3c1.4-1.4,3.6-3.5,5.1-4.4
	c0.2-0.1,0.4-0.2,0.6-0.3c0,0,0,0,0,0c0,0,0,0,0,0l0,0c0,0,0,0,0.1,0c0,0,0,0,0,0l0,0c0.2-0.2,0.4-0.4,0.5-0.7c0-0.1,0-0.1,0-0.2
	l0,0c0,0,0-0.1,0-0.1v0C52,12.6,52,12.6,52,12.6z M12,15.9L12,15.9c3.8-0.2,7.7-0.5,13.3,2.8c0.2,0.1,0.5,0.2,0.7,0.2
	c0.3,0,0.5-0.1,0.7-0.2c5.6-3.3,9.5-3.1,13.3-2.8c1.5,0.1,2.9,0.2,4.5,0.1c-0.3,0.3-0.5,0.5-0.8,0.7c-5.9,5.7-12,8.7-17.7,8.7
	c-5.7,0-11.9-3-17.7-8.7C8,16.5,7.8,16.2,7.5,16C9.1,16.1,10.6,16,12,15.9z M26,16.1c-4.4-2.4-7.9-2.9-11-2.9
	c-1.1,0-2.1,0.1-3.1,0.1c-1.8,0.1-3.5,0.2-5.3-0.1c1.5-0.8,2.9-1.8,4.1-2.8c3.1-2.5,5.8-3.8,8.1-3.8c2.2,0,4.2,1.2,6.1,3.5
	c0.3,0.3,0.7,0.5,1.1,0.5c0.4,0,0.8-0.2,1.1-0.5c1.8-2.4,3.8-3.5,6.1-3.5c2.3,0,5,1.2,8.1,3.8c1.2,1,2.6,2,4.1,2.8
	c-1.7,0.3-3.5,0.2-5.3,0.1C36.3,13,31.9,12.8,26,16.1z M51.8,12.8L51.8,12.8L51.8,12.8L51.8,12.8z M51.8,12.7L51.8,12.7L51.8,12.7
	L51.8,12.7z"/>
</svg>
                            <div class="advantages_block">
                                Снижает риск образования рубцов в процессе заживления
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="button-yellow cre-animate" data-animation="scale-up" data-speed="1500" data-delay="500" data-offset="90%" data-easing="easeInOutBack" href="#">
                Больше о Панавир
            </a>
        </div>
    </section>


    <!--===================================================== section symptoms -->
    <section class="section-symptoms" id="symptoms">
        <h2>
            <span>Симптомы</span> герпеса
        </h2>
        <div class="container">
            <div class="row">
                <div class="col-1-1 col-1-xs col-1-xxs">
                    <div class="block-slider-holder">
                        <div class="block-slider swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="slide_block">
                                        <div class="slide_text">
                                            <ul>
                                                <li>Зуд</li>
                                                <li>Боль</li>
                                                <li>Жжение</li>
                                                <li>Воспаление</li>
                                                <li>Пузырьковые высыпания</li>
                                                <li>Корки</li>
                                            </ul>
                                        </div>
                                        <div class="slide_image">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="slide_block">
                                        <div class="slide_text">
                                            <ul>
                                                <li>Бородавки</li>
                                                <li>Кондиломы</li>
                                                <li>Папилломы</li>
                                                <li>Образования в виде разрастаний («Цветная капуста»)</li>
                                            </ul>
                                        </div>
                                        <div class="slide_image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-next swiper-button-next">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px"
                     viewBox="0 0 62 62" style="enable-background:new 0 0 62 62;" xml:space="preserve">
<style type="text/css">
    .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#626365;}
    .st1{fill:#FFF200;}
</style>
                    <path class="st0" d="M25.3,21.1c0.8-0.8,2-0.8,2.8,0l8.5,8.5c0.8,0.8,0.8,2,0,2.8l-8.5,8.5c-0.8,0.8-2,0.8-2.8,0
	c-0.8-0.8-0.8-2,0-2.8l7.1-7.1l-7.1-7.1C24.6,23.2,24.6,21.9,25.3,21.1z"/>
                    <g>
                        <path class="st1" d="M31,62C13.9,62,0,48.1,0,31S13.9,0,31,0s31,13.9,31,31S48.1,62,31,62z M31,2C15,2,2,15,2,31s13,29,29,29
		s29-13,29-29S47,2,31,2z"/>
                    </g>
</svg>
                        </div>
                        <div class="block-prev swiper-button-prev">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                     viewBox="0 0 62 62" style="enable-background:new 0 0 62 62;" xml:space="preserve">
<style type="text/css">
    .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#626365;}
    .st1{fill:#FFF200;}
</style>
                    <path class="st0" d="M34.4,23.9L27.3,31l7.1,7.1c0.8,0.8,0.8,2,0,2.8c-0.8,0.8-2,0.8-2.8,0L23,32.4c-0.8-0.8-0.8-2,0-2.8l8.5-8.5
	c0.8-0.8,2-0.8,2.8,0C35.1,21.9,35.1,23.2,34.4,23.9z"/>
                    <g>
                        <path class="st1" d="M31,62C13.9,62,0,48.1,0,31S13.9,0,31,0s31,13.9,31,31S48.1,62,31,62z M31,2C15,2,2,15,2,31s13,29,29,29
		s29-13,29-29S47,2,31,2z"/>
                    </g>
</svg>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1-1 col-1-xs">
                            <a class="blue_link" href="#">Больше о симптомах герпеса</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--===================================================== section action -->
    <section class="section-action entry-main-image parallax-block" data-parallax="scroll" data-image-src="images/fon_block8.jpg" id="action">
        <div class="container">
            <h2>
                <span>Панавир®</span> в действии
            </h2>
            <p class="sub_title cre-animate" data-animation="scale-up" data-speed="1600" data-delay="800" data-offset="90%" data-easing="easeOutBack">
                Гель Панавир® содержит биологически активные полисахариды побегов <span>Solanum tuberosum</span>, растительного происхождения антивирусного действия.
            </p>
            <div class="row">
                <div class="col-1-2 col-1-2-xs col-1-xxs">
                    <div class="block-slider-holder">
                        <div class="block-slider swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="slide_block_img">
                                        <img src="images/tube-mini.png" alt=" "/>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="slide_block_img">
                                        <img src="images/tube-mini.png" alt=" "/>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="slide_block_img">
                                        <img src="images/tube-mini.png" alt=" "/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-1-2 col-1-2-xs col-1-xxs">
                    <div class="cre-animate" data-animation="scale-up" data-speed="1500" data-delay="600" data-offset="90%" data-easing="easeOutBack">
                        <h3>
                            Субстанция Панавир®:
                        </h3>
                        <div class="list-block hover-scale-1">&#8226; блокирует вирус;</div>
                        <div class="list-block">&#8226; не пропускает вирус за пределы высыпаний;</div>
                        <div class="list-block">&#8226; минимизирует риск повторного инфицирования;</div>
                        <div class="list-block">&#8226; предотвращает проникновение вируса в здоровые клетки;</div>
                        <div class="list-block">&#8226; действует на всех этапах вирусной активности;</div>
                        <div class="list-block">&#8226; препятствует размножению вируса;</div>
                        <div class="list-block">&#8226; уменьшает выраженность местных болезненных и воспалительных проявлений;</div>
                        <div class="list-block">&#8226; стимулирует выработку интерферона;</div>
                        <div class="list-block">&#8226; смягчает воспалительные процессы;</div>
                        <div class="list-block">&#8226; ускоряет регенерацию тканей;</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--===================================================== section-effective -->
    <section class="section-effective" id="effective">
        <div class="container">
            <div class="row">
                <div class="col-1-1 col-1-xs">
                    <h2 class="cre-animate" data-animation="scale-up" data-speed="1500" data-delay="800" data-offset="90%" data-easing="easeInOutCirc">
                        <span>Убедитесь в</span> <span class="blue">высокой эффективности</span>
                        геля Панавир®
                    </h2>
                    <p class="sub_h2 cre-animate" data-animation="scale-up" data-speed="1500" data-delay="600" data-offset="90%" data-easing="easeInOutCirc">
                        Простой курс применения.
                    </p>
                    <div class="tabs_menu">
                        <div class="tab-menu1 cre-animate" data-animation="scale-up" data-speed="1500" data-delay="500" data-offset="90%" data-easing="easeInOutCirc">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                 viewBox="0 0 40 40" style="enable-background:new 0 0 40 40;" xml:space="preserve">
<style type="text/css">
    .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#FFF200;}
    .st1{fill-rule:evenodd;clip-rule:evenodd;fill:#94BEE6;}
</style>
                                <path class="st0" d="M20,8.4c6.4,0,11.6,5.2,11.6,11.6c0,6.4-5.2,11.6-11.6,11.6S8.4,26.4,8.4,20C8.4,13.6,13.6,8.4,20,8.4z"/>
                                <path class="st1" d="M20,40C9,40,0,31,0,20C0,9,9,0,20,0c11,0,20,9,20,20C40,31,31,40,20,40z M20,1.5C9.8,1.5,1.5,9.8,1.5,20
	c0,10.2,8.3,18.5,18.5,18.5c10.2,0,18.5-8.3,18.5-18.5C38.5,9.8,30.2,1.5,20,1.5z M20,36.4c-9.1,0-16.4-7.4-16.4-16.4
	c0-9.1,7.4-16.4,16.4-16.4c9.1,0,16.4,7.4,16.4,16.4C36.4,29.1,29.1,36.4,20,36.4z M20,5.1C11.8,5.1,5.1,11.8,5.1,20
	c0,8.2,6.7,14.9,14.9,14.9c8.2,0,14.9-6.7,14.9-14.9C34.9,11.8,28.2,5.1,20,5.1z M19.3,24.7c-0.3,0.3-0.8,0.3-1.1,0l-4.4-4.4
	c-0.3-0.3-0.3-0.8,0-1.1c0.3-0.3,0.8-0.3,1.1,0l3.9,3.9l6.3-6.3c0.3-0.3,0.8-0.3,1.1,0c0.3,0.3,0.3,0.8,0,1.1L19.3,24.7z"/>
</svg>
                            <a href="#tab1" class="active">При лечении герпеса</a>
                        </div>
                        <div class="tab-menu2 cre-animate" data-animation="scale-up" data-speed="1500" data-delay="800" data-offset="90%" data-easing="easeInOutCirc">
                            <svg xmlns="http://www.w3.org/2000/svg" width="53" height="53" viewBox="0 0 53 53"><defs><path id="jm85a" d="M874 6052c-13.79 0-25-11.22-25-25 0-13.79 11.21-25 25-25 13.78 0 25 11.21 25 25 0 13.78-11.22 25-25 25zm0-48.08a23.1 23.1 0 0 0-23.08 23.08 23.1 23.1 0 0 0 23.08 23.07 23.1 23.1 0 0 0 23.08-23.07 23.1 23.1 0 0 0-23.08-23.08zm0 43.6a20.54 20.54 0 0 1-20.52-20.52c0-11.32 9.2-20.52 20.52-20.52 11.31 0 20.52 9.2 20.52 20.52 0 11.31-9.2 20.51-20.52 20.51zm0-39.12a18.62 18.62 0 0 0-18.6 18.6c0 10.25 8.35 18.6 18.6 18.6 10.25 0 18.6-8.35 18.6-18.6 0-10.26-8.35-18.6-18.6-18.6z"/></defs><g><g transform="translate(-847 -6000)"><use fill="#94bee6" xlink:href="#jm85a"/></g></g></svg>
                            <a href="#tab2">При лечении ВПЧ</a>
                        </div>
                    </div>
                    <div class="block-slider-holder tab" id="tab1">
                        <div class="block-slider swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="slide_block">
                                        <div class="slide_block_text margin-right">
                                            <svg version="1.1" class="lump-svg" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                 viewBox="0 0 47 48" style="enable-background:new 0 0 47 48;" xml:space="preserve">
<style type="text/css">
    .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#FFF200;}
    .st1{fill-rule:evenodd;clip-rule:evenodd;fill:#626365;}
</style>
                                                <path class="st0" d="M23.5,1C36.5,1,47,11.5,47,24.5C47,37.5,36.5,48,23.5,48C10.5,48,0,37.5,0,24.5C0,11.5,10.5,1,23.5,1z"/>
                                                <path class="st1" d="M34.7,28.3c-3.1,2.8-4.8,6.6-4.8,10.5c0,0.7-0.6,1.3-1.3,1.3s-1.3-0.6-1.3-1.3c0-4.6,2.1-9.1,5.7-12.4
	c2.8-2.6,4.4-6.2,4.4-10S35.8,9,33,6.4c-2.8-2.6-6.4-3.9-10.3-3.7c-3.3,0.2-6.4,1.5-8.8,3.8c-0.5,0.4-1.1,0.5-1.6,0.2
	c0.1,0.2,0.1,0.4,0.1,0.6c0,0.3-0.1,0.7-0.4,0.9c-0.3,0.3-0.6,0.4-0.9,0.4c-0.3,0-0.7-0.1-0.9-0.4C9.9,7.9,9.8,7.5,9.8,7.2
	c0-0.3,0.1-0.7,0.4-0.9c0.5-0.4,1.2-0.5,1.7-0.2c-0.3-0.5-0.2-1.1,0.3-1.5C15,1.8,18.7,0.2,22.6,0c4.6-0.2,8.9,1.3,12.3,4.4
	c3.3,3.1,5.2,7.3,5.2,11.8C40,20.8,38.1,25.2,34.7,28.3z M10.4,8.7c0.3,0.2,0.6,0.4,0.7,0.8c0.1,0.3,0.1,0.7-0.1,1
	c-0.8,1.7-1.3,3.5-1.4,5.4c-0.1,3.9,1.5,7.7,4.3,10.4c3.4,3.1,5.4,7.2,5.7,11.5h3.7c0.7,0,1.3,0.6,1.3,1.3c0,0.7-0.6,1.3-1.3,1.3h-5
	c-0.7,0-1.3-0.6-1.3-1.3V39c0-4-1.7-7.9-4.9-10.9C8.7,25,6.8,20.4,7,15.8c0.1-2.3,0.6-4.4,1.6-6.5C8.8,9,9,8.7,9.4,8.6
	C9.7,8.5,10.1,8.5,10.4,8.7z M26.8,31.7c0,1.8-1.5,3.3-3.3,3.3c-1.8,0-3.3-1.5-3.3-3.3c0-1.8,1.5-3.3,3.3-3.3
	C25.3,28.4,26.8,29.9,26.8,31.7z M22.9,31.7c0,0.3,0.3,0.6,0.6,0.6c0.3,0,0.6-0.3,0.6-0.6c0-0.3-0.3-0.6-0.6-0.6
	C23.1,31.1,22.9,31.3,22.9,31.7z M24.6,5.9c0-0.7,0.6-1.3,1.3-1.3c4.4,0,8,3.5,8,7.9c0,0.7-0.6,1.3-1.3,1.3c-0.7,0-1.3-0.6-1.3-1.3
	c0-2.9-2.4-5.3-5.3-5.3C25.2,7.2,24.6,6.6,24.6,5.9z M25.7,28h-4.3c-0.7,0-1.2-0.5-1.3-1.1l-2.2-14.5c-0.1-0.4,0.1-0.8,0.3-1.1
	c0.3-0.3,0.6-0.5,1-0.5h8.7c0.4,0,0.8,0.2,1,0.5c0.3,0.3,0.4,0.7,0.3,1.1L27,26.9C26.9,27.5,26.3,28,25.7,28z M20.7,13.5l1.8,11.9h2
	l1.8-11.9H20.7z M19.9,41.5h7.2c0.7,0,1.3,0.6,1.3,1.3c0,0.7-0.6,1.3-1.3,1.3h-7.2c-0.7,0-1.3-0.6-1.3-1.3
	C18.6,42.1,19.2,41.5,19.9,41.5z M22.1,45.4H25c0.7,0,1.3,0.6,1.3,1.3c0,0.7-0.6,1.3-1.3,1.3h-2.8c-0.7,0-1.3-0.6-1.3-1.3
	C20.8,46,21.4,45.4,22.1,45.4z"/>
</svg>

                                            <h5>Гель Панавир®:</h5>
                                            <ul>
                                                <li>Предотвращает образование пузырьков, если применять при первых признаках герпеса - зуд, покалывание и жжение.</li>
                                                <li>Эффективен на любой стадии герпеса.</li>
                                                <li>Эффективен на коже и слизистых оболочках.</li>
                                                <li>Лечит вирус простого герпеса Herpes simplex I типа и II типа (в том числе генитальный герпес).</li>
                                            </ul>
                                        </div>
                                        <div class="slide_block_text">
                                            <svg version="1.1" class="calendar-svg" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                 viewBox="0 0 47 47" style="enable-background:new 0 0 47 47;" xml:space="preserve">
<style type="text/css">
    .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#FFF200;}
    .st1{fill-rule:evenodd;clip-rule:evenodd;fill:#626365;}
</style>
                                                <path class="st0" d="M23.5,0C36.5,0,47,10.5,47,23.5C47,36.5,36.5,47,23.5,47C10.5,47,0,36.5,0,23.5C0,10.5,10.5,0,23.5,0z"/>
                                                <path class="st1" d="M27.9,36.5h-9.3H9.3c-0.7,0-1.2-0.5-1.2-1.2v-6.2v-6.2c0-0.7,0.5-1.2,1.2-1.2h9.3h9.3h9.3
	c0.7,0,1.2,0.5,1.2,1.2v6.2v6.2c0,0.7-0.5,1.2-1.2,1.2H27.9z M17.4,24.1h-6.9v3.8h6.9V24.1z M17.4,30.3h-6.9v3.8h6.9V30.3z
	 M26.7,24.1h-6.9v3.8h6.9V24.1z M26.7,30.3h-6.9v3.8h6.9V30.3z M36,24.1h-6.9v3.8H36V24.1z M36,30.3h-6.9v3.8H36V30.3z M42.7,25.5
	c-0.3,0-0.6-0.1-0.9-0.4c-0.2-0.2-0.3-0.5-0.3-0.8c0-0.3,0.1-0.6,0.4-0.8c0.5-0.4,1.2-0.4,1.7,0c0.2,0.2,0.3,0.5,0.3,0.8
	c0,0.3-0.1,0.6-0.3,0.8C43.3,25.4,43,25.5,42.7,25.5z M43.9,40.8c0,0.7-0.5,1.2-1.2,1.2H4.3c-0.7,0-1.2-0.5-1.2-1.2V17.4V8.7
	c0-0.7,0.5-1.2,1.2-1.2H10V6.1c0-1.8,1.5-3.3,3.3-3.3c1.8,0,3.3,1.5,3.3,3.3v1.4h14V6.1c0-1.8,1.5-3.3,3.3-3.3
	c1.8,0,3.3,1.5,3.3,3.3v1.4h5.7c0.7,0,1.2,0.5,1.2,1.2v11.9c0,0.7-0.5,1.2-1.2,1.2c-0.7,0-1.2-0.5-1.2-1.2v-2h-36v21h36V28
	c0-0.7,0.5-1.2,1.2-1.2c0.7,0,1.2,0.5,1.2,1.2V40.8z M14.1,6.1c0-0.5-0.4-0.9-0.9-0.9c-0.5,0-0.9,0.4-0.9,0.9v5.2
	c0,0.5,0.4,0.9,0.9,0.9c0.5,0,0.9-0.4,0.9-0.9V6.1z M34.6,6.1c0-0.5-0.4-0.9-0.9-0.9c-0.5,0-0.9,0.4-0.9,0.9v5.2
	c0,0.5,0.4,0.9,0.9,0.9c0.5,0,0.9-0.4,0.9-0.9V6.1z M41.5,16.2V9.9H37v1.4c0,1.8-1.5,3.3-3.3,3.3c-1.8,0-3.3-1.5-3.3-3.3V9.9h-14
	v1.4c0,1.8-1.5,3.3-3.3,3.3c-1.8,0-3.3-1.5-3.3-3.3V9.9H5.5v6.3H41.5z"/>
</svg>

                                            <h5>Для лечения герпеса гель
                                                Панавир® наносят:</h5>
                                            <ul>
                                                <li>тонким слоем на поражённые участки кожи и слизистых оболочек;</li>
                                                <li>5 раз в сутки;</li>
                                                <li>в течение 4-5 дней. Курс лечения может быть продлён до 10 дней.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="slide_block">
                                        <div class="slide_block_text margin-right">
                                            <svg version="1.1" class="lump-svg" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                 viewBox="0 0 47 48" style="enable-background:new 0 0 47 48;" xml:space="preserve">
<style type="text/css">
    .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#FFF200;}
    .st1{fill-rule:evenodd;clip-rule:evenodd;fill:#626365;}
</style>
                                                <path class="st0" d="M23.5,1C36.5,1,47,11.5,47,24.5C47,37.5,36.5,48,23.5,48C10.5,48,0,37.5,0,24.5C0,11.5,10.5,1,23.5,1z"/>
                                                <path class="st1" d="M34.7,28.3c-3.1,2.8-4.8,6.6-4.8,10.5c0,0.7-0.6,1.3-1.3,1.3s-1.3-0.6-1.3-1.3c0-4.6,2.1-9.1,5.7-12.4
	c2.8-2.6,4.4-6.2,4.4-10S35.8,9,33,6.4c-2.8-2.6-6.4-3.9-10.3-3.7c-3.3,0.2-6.4,1.5-8.8,3.8c-0.5,0.4-1.1,0.5-1.6,0.2
	c0.1,0.2,0.1,0.4,0.1,0.6c0,0.3-0.1,0.7-0.4,0.9c-0.3,0.3-0.6,0.4-0.9,0.4c-0.3,0-0.7-0.1-0.9-0.4C9.9,7.9,9.8,7.5,9.8,7.2
	c0-0.3,0.1-0.7,0.4-0.9c0.5-0.4,1.2-0.5,1.7-0.2c-0.3-0.5-0.2-1.1,0.3-1.5C15,1.8,18.7,0.2,22.6,0c4.6-0.2,8.9,1.3,12.3,4.4
	c3.3,3.1,5.2,7.3,5.2,11.8C40,20.8,38.1,25.2,34.7,28.3z M10.4,8.7c0.3,0.2,0.6,0.4,0.7,0.8c0.1,0.3,0.1,0.7-0.1,1
	c-0.8,1.7-1.3,3.5-1.4,5.4c-0.1,3.9,1.5,7.7,4.3,10.4c3.4,3.1,5.4,7.2,5.7,11.5h3.7c0.7,0,1.3,0.6,1.3,1.3c0,0.7-0.6,1.3-1.3,1.3h-5
	c-0.7,0-1.3-0.6-1.3-1.3V39c0-4-1.7-7.9-4.9-10.9C8.7,25,6.8,20.4,7,15.8c0.1-2.3,0.6-4.4,1.6-6.5C8.8,9,9,8.7,9.4,8.6
	C9.7,8.5,10.1,8.5,10.4,8.7z M26.8,31.7c0,1.8-1.5,3.3-3.3,3.3c-1.8,0-3.3-1.5-3.3-3.3c0-1.8,1.5-3.3,3.3-3.3
	C25.3,28.4,26.8,29.9,26.8,31.7z M22.9,31.7c0,0.3,0.3,0.6,0.6,0.6c0.3,0,0.6-0.3,0.6-0.6c0-0.3-0.3-0.6-0.6-0.6
	C23.1,31.1,22.9,31.3,22.9,31.7z M24.6,5.9c0-0.7,0.6-1.3,1.3-1.3c4.4,0,8,3.5,8,7.9c0,0.7-0.6,1.3-1.3,1.3c-0.7,0-1.3-0.6-1.3-1.3
	c0-2.9-2.4-5.3-5.3-5.3C25.2,7.2,24.6,6.6,24.6,5.9z M25.7,28h-4.3c-0.7,0-1.2-0.5-1.3-1.1l-2.2-14.5c-0.1-0.4,0.1-0.8,0.3-1.1
	c0.3-0.3,0.6-0.5,1-0.5h8.7c0.4,0,0.8,0.2,1,0.5c0.3,0.3,0.4,0.7,0.3,1.1L27,26.9C26.9,27.5,26.3,28,25.7,28z M20.7,13.5l1.8,11.9h2
	l1.8-11.9H20.7z M19.9,41.5h7.2c0.7,0,1.3,0.6,1.3,1.3c0,0.7-0.6,1.3-1.3,1.3h-7.2c-0.7,0-1.3-0.6-1.3-1.3
	C18.6,42.1,19.2,41.5,19.9,41.5z M22.1,45.4H25c0.7,0,1.3,0.6,1.3,1.3c0,0.7-0.6,1.3-1.3,1.3h-2.8c-0.7,0-1.3-0.6-1.3-1.3
	C20.8,46,21.4,45.4,22.1,45.4z"/>
</svg>

                                            <h5>Гель Панавир®:</h5>
                                            <ul>
                                                <li>Предотвращает образование пузырьков, если применять при первых признаках герпеса - зуд, покалывание и жжение.</li>
                                                <li>Эффективен на любой стадии герпеса.</li>
                                                <li>Эффективен на коже и слизистых оболочках.</li>
                                                <li>Лечит вирус простого герпеса Herpes simplex I типа и II типа (в том числе генитальный герпес).</li>
                                            </ul>
                                        </div>
                                        <div class="slide_block_text">
                                            <svg version="1.1" class="calendar-svg" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                 viewBox="0 0 47 47" style="enable-background:new 0 0 47 47;" xml:space="preserve">
<style type="text/css">
    .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#FFF200;}
    .st1{fill-rule:evenodd;clip-rule:evenodd;fill:#626365;}
</style>
                                                <path class="st0" d="M23.5,0C36.5,0,47,10.5,47,23.5C47,36.5,36.5,47,23.5,47C10.5,47,0,36.5,0,23.5C0,10.5,10.5,0,23.5,0z"/>
                                                <path class="st1" d="M27.9,36.5h-9.3H9.3c-0.7,0-1.2-0.5-1.2-1.2v-6.2v-6.2c0-0.7,0.5-1.2,1.2-1.2h9.3h9.3h9.3
	c0.7,0,1.2,0.5,1.2,1.2v6.2v6.2c0,0.7-0.5,1.2-1.2,1.2H27.9z M17.4,24.1h-6.9v3.8h6.9V24.1z M17.4,30.3h-6.9v3.8h6.9V30.3z
	 M26.7,24.1h-6.9v3.8h6.9V24.1z M26.7,30.3h-6.9v3.8h6.9V30.3z M36,24.1h-6.9v3.8H36V24.1z M36,30.3h-6.9v3.8H36V30.3z M42.7,25.5
	c-0.3,0-0.6-0.1-0.9-0.4c-0.2-0.2-0.3-0.5-0.3-0.8c0-0.3,0.1-0.6,0.4-0.8c0.5-0.4,1.2-0.4,1.7,0c0.2,0.2,0.3,0.5,0.3,0.8
	c0,0.3-0.1,0.6-0.3,0.8C43.3,25.4,43,25.5,42.7,25.5z M43.9,40.8c0,0.7-0.5,1.2-1.2,1.2H4.3c-0.7,0-1.2-0.5-1.2-1.2V17.4V8.7
	c0-0.7,0.5-1.2,1.2-1.2H10V6.1c0-1.8,1.5-3.3,3.3-3.3c1.8,0,3.3,1.5,3.3,3.3v1.4h14V6.1c0-1.8,1.5-3.3,3.3-3.3
	c1.8,0,3.3,1.5,3.3,3.3v1.4h5.7c0.7,0,1.2,0.5,1.2,1.2v11.9c0,0.7-0.5,1.2-1.2,1.2c-0.7,0-1.2-0.5-1.2-1.2v-2h-36v21h36V28
	c0-0.7,0.5-1.2,1.2-1.2c0.7,0,1.2,0.5,1.2,1.2V40.8z M14.1,6.1c0-0.5-0.4-0.9-0.9-0.9c-0.5,0-0.9,0.4-0.9,0.9v5.2
	c0,0.5,0.4,0.9,0.9,0.9c0.5,0,0.9-0.4,0.9-0.9V6.1z M34.6,6.1c0-0.5-0.4-0.9-0.9-0.9c-0.5,0-0.9,0.4-0.9,0.9v5.2
	c0,0.5,0.4,0.9,0.9,0.9c0.5,0,0.9-0.4,0.9-0.9V6.1z M41.5,16.2V9.9H37v1.4c0,1.8-1.5,3.3-3.3,3.3c-1.8,0-3.3-1.5-3.3-3.3V9.9h-14
	v1.4c0,1.8-1.5,3.3-3.3,3.3c-1.8,0-3.3-1.5-3.3-3.3V9.9H5.5v6.3H41.5z"/>
</svg>

                                            <h5>Для лечения герпеса гель
                                                Панавир® наносят:</h5>
                                            <ul>
                                                <li>тонким слоем на поражённые участки кожи и слизистых оболочек;</li>
                                                <li>5 раз в сутки;</li>
                                                <li>в течение 4-5 дней. Курс лечения может быть продлён до 10 дней.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="slide_block">
                                        <div class="slide_block_text margin-right">
                                            <svg version="1.1" class="lump-svg" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                 viewBox="0 0 47 48" style="enable-background:new 0 0 47 48;" xml:space="preserve">
<style type="text/css">
    .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#FFF200;}
    .st1{fill-rule:evenodd;clip-rule:evenodd;fill:#626365;}
</style>
                                                <path class="st0" d="M23.5,1C36.5,1,47,11.5,47,24.5C47,37.5,36.5,48,23.5,48C10.5,48,0,37.5,0,24.5C0,11.5,10.5,1,23.5,1z"/>
                                                <path class="st1" d="M34.7,28.3c-3.1,2.8-4.8,6.6-4.8,10.5c0,0.7-0.6,1.3-1.3,1.3s-1.3-0.6-1.3-1.3c0-4.6,2.1-9.1,5.7-12.4
	c2.8-2.6,4.4-6.2,4.4-10S35.8,9,33,6.4c-2.8-2.6-6.4-3.9-10.3-3.7c-3.3,0.2-6.4,1.5-8.8,3.8c-0.5,0.4-1.1,0.5-1.6,0.2
	c0.1,0.2,0.1,0.4,0.1,0.6c0,0.3-0.1,0.7-0.4,0.9c-0.3,0.3-0.6,0.4-0.9,0.4c-0.3,0-0.7-0.1-0.9-0.4C9.9,7.9,9.8,7.5,9.8,7.2
	c0-0.3,0.1-0.7,0.4-0.9c0.5-0.4,1.2-0.5,1.7-0.2c-0.3-0.5-0.2-1.1,0.3-1.5C15,1.8,18.7,0.2,22.6,0c4.6-0.2,8.9,1.3,12.3,4.4
	c3.3,3.1,5.2,7.3,5.2,11.8C40,20.8,38.1,25.2,34.7,28.3z M10.4,8.7c0.3,0.2,0.6,0.4,0.7,0.8c0.1,0.3,0.1,0.7-0.1,1
	c-0.8,1.7-1.3,3.5-1.4,5.4c-0.1,3.9,1.5,7.7,4.3,10.4c3.4,3.1,5.4,7.2,5.7,11.5h3.7c0.7,0,1.3,0.6,1.3,1.3c0,0.7-0.6,1.3-1.3,1.3h-5
	c-0.7,0-1.3-0.6-1.3-1.3V39c0-4-1.7-7.9-4.9-10.9C8.7,25,6.8,20.4,7,15.8c0.1-2.3,0.6-4.4,1.6-6.5C8.8,9,9,8.7,9.4,8.6
	C9.7,8.5,10.1,8.5,10.4,8.7z M26.8,31.7c0,1.8-1.5,3.3-3.3,3.3c-1.8,0-3.3-1.5-3.3-3.3c0-1.8,1.5-3.3,3.3-3.3
	C25.3,28.4,26.8,29.9,26.8,31.7z M22.9,31.7c0,0.3,0.3,0.6,0.6,0.6c0.3,0,0.6-0.3,0.6-0.6c0-0.3-0.3-0.6-0.6-0.6
	C23.1,31.1,22.9,31.3,22.9,31.7z M24.6,5.9c0-0.7,0.6-1.3,1.3-1.3c4.4,0,8,3.5,8,7.9c0,0.7-0.6,1.3-1.3,1.3c-0.7,0-1.3-0.6-1.3-1.3
	c0-2.9-2.4-5.3-5.3-5.3C25.2,7.2,24.6,6.6,24.6,5.9z M25.7,28h-4.3c-0.7,0-1.2-0.5-1.3-1.1l-2.2-14.5c-0.1-0.4,0.1-0.8,0.3-1.1
	c0.3-0.3,0.6-0.5,1-0.5h8.7c0.4,0,0.8,0.2,1,0.5c0.3,0.3,0.4,0.7,0.3,1.1L27,26.9C26.9,27.5,26.3,28,25.7,28z M20.7,13.5l1.8,11.9h2
	l1.8-11.9H20.7z M19.9,41.5h7.2c0.7,0,1.3,0.6,1.3,1.3c0,0.7-0.6,1.3-1.3,1.3h-7.2c-0.7,0-1.3-0.6-1.3-1.3
	C18.6,42.1,19.2,41.5,19.9,41.5z M22.1,45.4H25c0.7,0,1.3,0.6,1.3,1.3c0,0.7-0.6,1.3-1.3,1.3h-2.8c-0.7,0-1.3-0.6-1.3-1.3
	C20.8,46,21.4,45.4,22.1,45.4z"/>
</svg>

                                            <h5>Гель Панавир®:</h5>
                                            <ul>
                                                <li>Предотвращает образование пузырьков, если применять при первых признаках герпеса - зуд, покалывание и жжение.</li>
                                                <li>Эффективен на любой стадии герпеса.</li>
                                                <li>Эффективен на коже и слизистых оболочках.</li>
                                                <li>Лечит вирус простого герпеса Herpes simplex I типа и II типа (в том числе генитальный герпес).</li>
                                            </ul>
                                        </div>
                                        <div class="slide_block_text">
                                            <svg version="1.1" class="calendar-svg" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                 viewBox="0 0 47 47" style="enable-background:new 0 0 47 47;" xml:space="preserve">
<style type="text/css">
    .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#FFF200;}
    .st1{fill-rule:evenodd;clip-rule:evenodd;fill:#626365;}
</style>
                                                <path class="st0" d="M23.5,0C36.5,0,47,10.5,47,23.5C47,36.5,36.5,47,23.5,47C10.5,47,0,36.5,0,23.5C0,10.5,10.5,0,23.5,0z"/>
                                                <path class="st1" d="M27.9,36.5h-9.3H9.3c-0.7,0-1.2-0.5-1.2-1.2v-6.2v-6.2c0-0.7,0.5-1.2,1.2-1.2h9.3h9.3h9.3
	c0.7,0,1.2,0.5,1.2,1.2v6.2v6.2c0,0.7-0.5,1.2-1.2,1.2H27.9z M17.4,24.1h-6.9v3.8h6.9V24.1z M17.4,30.3h-6.9v3.8h6.9V30.3z
	 M26.7,24.1h-6.9v3.8h6.9V24.1z M26.7,30.3h-6.9v3.8h6.9V30.3z M36,24.1h-6.9v3.8H36V24.1z M36,30.3h-6.9v3.8H36V30.3z M42.7,25.5
	c-0.3,0-0.6-0.1-0.9-0.4c-0.2-0.2-0.3-0.5-0.3-0.8c0-0.3,0.1-0.6,0.4-0.8c0.5-0.4,1.2-0.4,1.7,0c0.2,0.2,0.3,0.5,0.3,0.8
	c0,0.3-0.1,0.6-0.3,0.8C43.3,25.4,43,25.5,42.7,25.5z M43.9,40.8c0,0.7-0.5,1.2-1.2,1.2H4.3c-0.7,0-1.2-0.5-1.2-1.2V17.4V8.7
	c0-0.7,0.5-1.2,1.2-1.2H10V6.1c0-1.8,1.5-3.3,3.3-3.3c1.8,0,3.3,1.5,3.3,3.3v1.4h14V6.1c0-1.8,1.5-3.3,3.3-3.3
	c1.8,0,3.3,1.5,3.3,3.3v1.4h5.7c0.7,0,1.2,0.5,1.2,1.2v11.9c0,0.7-0.5,1.2-1.2,1.2c-0.7,0-1.2-0.5-1.2-1.2v-2h-36v21h36V28
	c0-0.7,0.5-1.2,1.2-1.2c0.7,0,1.2,0.5,1.2,1.2V40.8z M14.1,6.1c0-0.5-0.4-0.9-0.9-0.9c-0.5,0-0.9,0.4-0.9,0.9v5.2
	c0,0.5,0.4,0.9,0.9,0.9c0.5,0,0.9-0.4,0.9-0.9V6.1z M34.6,6.1c0-0.5-0.4-0.9-0.9-0.9c-0.5,0-0.9,0.4-0.9,0.9v5.2
	c0,0.5,0.4,0.9,0.9,0.9c0.5,0,0.9-0.4,0.9-0.9V6.1z M41.5,16.2V9.9H37v1.4c0,1.8-1.5,3.3-3.3,3.3c-1.8,0-3.3-1.5-3.3-3.3V9.9h-14
	v1.4c0,1.8-1.5,3.3-3.3,3.3c-1.8,0-3.3-1.5-3.3-3.3V9.9H5.5v6.3H41.5z"/>
</svg>

                                            <h5>Для лечения герпеса гель
                                                Панавир® наносят:</h5>
                                            <ul>
                                                <li>тонким слоем на поражённые участки кожи и слизистых оболочек;</li>
                                                <li>5 раз в сутки;</li>
                                                <li>в течение 4-5 дней. Курс лечения может быть продлён до 10 дней.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-next swiper-button-next">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px"
                                 viewBox="0 0 62 62" style="enable-background:new 0 0 62 62;" xml:space="preserve">
<style type="text/css">
    .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#626365;}
    .st1{fill:#FFF200;}
</style>
                                <path class="st0" d="M25.3,21.1c0.8-0.8,2-0.8,2.8,0l8.5,8.5c0.8,0.8,0.8,2,0,2.8l-8.5,8.5c-0.8,0.8-2,0.8-2.8,0
	c-0.8-0.8-0.8-2,0-2.8l7.1-7.1l-7.1-7.1C24.6,23.2,24.6,21.9,25.3,21.1z"/>
                                <g>
                                    <path class="st1" d="M31,62C13.9,62,0,48.1,0,31S13.9,0,31,0s31,13.9,31,31S48.1,62,31,62z M31,2C15,2,2,15,2,31s13,29,29,29
		s29-13,29-29S47,2,31,2z"/>
                                </g>
</svg>
                        </div>
                        <div class="block-prev swiper-button-prev">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                 viewBox="0 0 62 62" style="enable-background:new 0 0 62 62;" xml:space="preserve">
<style type="text/css">
    .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#626365;}
    .st1{fill:#FFF200;}
</style>
                                <path class="st0" d="M34.4,23.9L27.3,31l7.1,7.1c0.8,0.8,0.8,2,0,2.8c-0.8,0.8-2,0.8-2.8,0L23,32.4c-0.8-0.8-0.8-2,0-2.8l8.5-8.5
	c0.8-0.8,2-0.8,2.8,0C35.1,21.9,35.1,23.2,34.4,23.9z"/>
                                <g>
                                    <path class="st1" d="M31,62C13.9,62,0,48.1,0,31S13.9,0,31,0s31,13.9,31,31S48.1,62,31,62z M31,2C15,2,2,15,2,31s13,29,29,29
		s29-13,29-29S47,2,31,2z"/>
                                </g>
</svg>
                        </div>
                    </div>
                    <div class="block-slider-holder tab" id="tab2">
                        <div class="block-slider swiper-container">
                        <div class="swiper-wrapper">

                            <div class="swiper-slide">
                                <div class="slide_block">
                                    <div class="slide_block_text margin-right">
                                        <svg version="1.1" class="lump-svg" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                         viewBox="0 0 47 48" style="enable-background:new 0 0 47 48;" xml:space="preserve">
<style type="text/css">
    .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#FFF200;}
    .st1{fill-rule:evenodd;clip-rule:evenodd;fill:#626365;}
</style>
                                        <path class="st0" d="M23.5,1C36.5,1,47,11.5,47,24.5C47,37.5,36.5,48,23.5,48C10.5,48,0,37.5,0,24.5C0,11.5,10.5,1,23.5,1z"/>
                                        <path class="st1" d="M34.7,28.3c-3.1,2.8-4.8,6.6-4.8,10.5c0,0.7-0.6,1.3-1.3,1.3s-1.3-0.6-1.3-1.3c0-4.6,2.1-9.1,5.7-12.4
	c2.8-2.6,4.4-6.2,4.4-10S35.8,9,33,6.4c-2.8-2.6-6.4-3.9-10.3-3.7c-3.3,0.2-6.4,1.5-8.8,3.8c-0.5,0.4-1.1,0.5-1.6,0.2
	c0.1,0.2,0.1,0.4,0.1,0.6c0,0.3-0.1,0.7-0.4,0.9c-0.3,0.3-0.6,0.4-0.9,0.4c-0.3,0-0.7-0.1-0.9-0.4C9.9,7.9,9.8,7.5,9.8,7.2
	c0-0.3,0.1-0.7,0.4-0.9c0.5-0.4,1.2-0.5,1.7-0.2c-0.3-0.5-0.2-1.1,0.3-1.5C15,1.8,18.7,0.2,22.6,0c4.6-0.2,8.9,1.3,12.3,4.4
	c3.3,3.1,5.2,7.3,5.2,11.8C40,20.8,38.1,25.2,34.7,28.3z M10.4,8.7c0.3,0.2,0.6,0.4,0.7,0.8c0.1,0.3,0.1,0.7-0.1,1
	c-0.8,1.7-1.3,3.5-1.4,5.4c-0.1,3.9,1.5,7.7,4.3,10.4c3.4,3.1,5.4,7.2,5.7,11.5h3.7c0.7,0,1.3,0.6,1.3,1.3c0,0.7-0.6,1.3-1.3,1.3h-5
	c-0.7,0-1.3-0.6-1.3-1.3V39c0-4-1.7-7.9-4.9-10.9C8.7,25,6.8,20.4,7,15.8c0.1-2.3,0.6-4.4,1.6-6.5C8.8,9,9,8.7,9.4,8.6
	C9.7,8.5,10.1,8.5,10.4,8.7z M26.8,31.7c0,1.8-1.5,3.3-3.3,3.3c-1.8,0-3.3-1.5-3.3-3.3c0-1.8,1.5-3.3,3.3-3.3
	C25.3,28.4,26.8,29.9,26.8,31.7z M22.9,31.7c0,0.3,0.3,0.6,0.6,0.6c0.3,0,0.6-0.3,0.6-0.6c0-0.3-0.3-0.6-0.6-0.6
	C23.1,31.1,22.9,31.3,22.9,31.7z M24.6,5.9c0-0.7,0.6-1.3,1.3-1.3c4.4,0,8,3.5,8,7.9c0,0.7-0.6,1.3-1.3,1.3c-0.7,0-1.3-0.6-1.3-1.3
	c0-2.9-2.4-5.3-5.3-5.3C25.2,7.2,24.6,6.6,24.6,5.9z M25.7,28h-4.3c-0.7,0-1.2-0.5-1.3-1.1l-2.2-14.5c-0.1-0.4,0.1-0.8,0.3-1.1
	c0.3-0.3,0.6-0.5,1-0.5h8.7c0.4,0,0.8,0.2,1,0.5c0.3,0.3,0.4,0.7,0.3,1.1L27,26.9C26.9,27.5,26.3,28,25.7,28z M20.7,13.5l1.8,11.9h2
	l1.8-11.9H20.7z M19.9,41.5h7.2c0.7,0,1.3,0.6,1.3,1.3c0,0.7-0.6,1.3-1.3,1.3h-7.2c-0.7,0-1.3-0.6-1.3-1.3
	C18.6,42.1,19.2,41.5,19.9,41.5z M22.1,45.4H25c0.7,0,1.3,0.6,1.3,1.3c0,0.7-0.6,1.3-1.3,1.3h-2.8c-0.7,0-1.3-0.6-1.3-1.3
	C20.8,46,21.4,45.4,22.1,45.4z"/>
</svg>

                                        <h5>При интравагинальной локализации кондилом гель наносят:</h5>
                                        <ul>
                                            <li>небольшое количество геля равномерно распределяют по стенкам влагалища;</li>
                                            <li>2 раза в сутки;</li>
                                            <li>курс лечения 7-10 дней или до полного исчезновения клинических проявлений.</li>
                                        </ul>
                                    </div>
                                    <div class="slide_block_text">
                                        <svg version="1.1" class="calendar-svg" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                         viewBox="0 0 47 47" style="enable-background:new 0 0 47 47;" xml:space="preserve">
<style type="text/css">
    .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#FFF200;}
    .st1{fill-rule:evenodd;clip-rule:evenodd;fill:#626365;}
</style>
                                        <path class="st0" d="M23.5,0C36.5,0,47,10.5,47,23.5C47,36.5,36.5,47,23.5,47C10.5,47,0,36.5,0,23.5C0,10.5,10.5,0,23.5,0z"/>
                                        <path class="st1" d="M27.9,36.5h-9.3H9.3c-0.7,0-1.2-0.5-1.2-1.2v-6.2v-6.2c0-0.7,0.5-1.2,1.2-1.2h9.3h9.3h9.3
	c0.7,0,1.2,0.5,1.2,1.2v6.2v6.2c0,0.7-0.5,1.2-1.2,1.2H27.9z M17.4,24.1h-6.9v3.8h6.9V24.1z M17.4,30.3h-6.9v3.8h6.9V30.3z
	 M26.7,24.1h-6.9v3.8h6.9V24.1z M26.7,30.3h-6.9v3.8h6.9V30.3z M36,24.1h-6.9v3.8H36V24.1z M36,30.3h-6.9v3.8H36V30.3z M42.7,25.5
	c-0.3,0-0.6-0.1-0.9-0.4c-0.2-0.2-0.3-0.5-0.3-0.8c0-0.3,0.1-0.6,0.4-0.8c0.5-0.4,1.2-0.4,1.7,0c0.2,0.2,0.3,0.5,0.3,0.8
	c0,0.3-0.1,0.6-0.3,0.8C43.3,25.4,43,25.5,42.7,25.5z M43.9,40.8c0,0.7-0.5,1.2-1.2,1.2H4.3c-0.7,0-1.2-0.5-1.2-1.2V17.4V8.7
	c0-0.7,0.5-1.2,1.2-1.2H10V6.1c0-1.8,1.5-3.3,3.3-3.3c1.8,0,3.3,1.5,3.3,3.3v1.4h14V6.1c0-1.8,1.5-3.3,3.3-3.3
	c1.8,0,3.3,1.5,3.3,3.3v1.4h5.7c0.7,0,1.2,0.5,1.2,1.2v11.9c0,0.7-0.5,1.2-1.2,1.2c-0.7,0-1.2-0.5-1.2-1.2v-2h-36v21h36V28
	c0-0.7,0.5-1.2,1.2-1.2c0.7,0,1.2,0.5,1.2,1.2V40.8z M14.1,6.1c0-0.5-0.4-0.9-0.9-0.9c-0.5,0-0.9,0.4-0.9,0.9v5.2
	c0,0.5,0.4,0.9,0.9,0.9c0.5,0,0.9-0.4,0.9-0.9V6.1z M34.6,6.1c0-0.5-0.4-0.9-0.9-0.9c-0.5,0-0.9,0.4-0.9,0.9v5.2
	c0,0.5,0.4,0.9,0.9,0.9c0.5,0,0.9-0.4,0.9-0.9V6.1z M41.5,16.2V9.9H37v1.4c0,1.8-1.5,3.3-3.3,3.3c-1.8,0-3.3-1.5-3.3-3.3V9.9h-14
	v1.4c0,1.8-1.5,3.3-3.3,3.3c-1.8,0-3.3-1.5-3.3-3.3V9.9H5.5v6.3H41.5z"/>
</svg>

                                        <h5>При деструкции папиллом, кондилом и бородавок гель наносят:</h5>
                                        <ul>
                                            <li>тонким слоем на поражённые участки кожи и слизистых оболочек;</li>
                                            <li>2 раза в сутки;</li>
                                            <li>в течение 5 дней до деструкции и 10 дней после неё или до полного заживления.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide_block">
                                    <div class="slide_block_text margin-right">
                                        <svg version="1.1" class="lump-svg" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                         viewBox="0 0 47 48" style="enable-background:new 0 0 47 48;" xml:space="preserve">
<style type="text/css">
    .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#FFF200;}
    .st1{fill-rule:evenodd;clip-rule:evenodd;fill:#626365;}
</style>
                                        <path class="st0" d="M23.5,1C36.5,1,47,11.5,47,24.5C47,37.5,36.5,48,23.5,48C10.5,48,0,37.5,0,24.5C0,11.5,10.5,1,23.5,1z"/>
                                        <path class="st1" d="M34.7,28.3c-3.1,2.8-4.8,6.6-4.8,10.5c0,0.7-0.6,1.3-1.3,1.3s-1.3-0.6-1.3-1.3c0-4.6,2.1-9.1,5.7-12.4
	c2.8-2.6,4.4-6.2,4.4-10S35.8,9,33,6.4c-2.8-2.6-6.4-3.9-10.3-3.7c-3.3,0.2-6.4,1.5-8.8,3.8c-0.5,0.4-1.1,0.5-1.6,0.2
	c0.1,0.2,0.1,0.4,0.1,0.6c0,0.3-0.1,0.7-0.4,0.9c-0.3,0.3-0.6,0.4-0.9,0.4c-0.3,0-0.7-0.1-0.9-0.4C9.9,7.9,9.8,7.5,9.8,7.2
	c0-0.3,0.1-0.7,0.4-0.9c0.5-0.4,1.2-0.5,1.7-0.2c-0.3-0.5-0.2-1.1,0.3-1.5C15,1.8,18.7,0.2,22.6,0c4.6-0.2,8.9,1.3,12.3,4.4
	c3.3,3.1,5.2,7.3,5.2,11.8C40,20.8,38.1,25.2,34.7,28.3z M10.4,8.7c0.3,0.2,0.6,0.4,0.7,0.8c0.1,0.3,0.1,0.7-0.1,1
	c-0.8,1.7-1.3,3.5-1.4,5.4c-0.1,3.9,1.5,7.7,4.3,10.4c3.4,3.1,5.4,7.2,5.7,11.5h3.7c0.7,0,1.3,0.6,1.3,1.3c0,0.7-0.6,1.3-1.3,1.3h-5
	c-0.7,0-1.3-0.6-1.3-1.3V39c0-4-1.7-7.9-4.9-10.9C8.7,25,6.8,20.4,7,15.8c0.1-2.3,0.6-4.4,1.6-6.5C8.8,9,9,8.7,9.4,8.6
	C9.7,8.5,10.1,8.5,10.4,8.7z M26.8,31.7c0,1.8-1.5,3.3-3.3,3.3c-1.8,0-3.3-1.5-3.3-3.3c0-1.8,1.5-3.3,3.3-3.3
	C25.3,28.4,26.8,29.9,26.8,31.7z M22.9,31.7c0,0.3,0.3,0.6,0.6,0.6c0.3,0,0.6-0.3,0.6-0.6c0-0.3-0.3-0.6-0.6-0.6
	C23.1,31.1,22.9,31.3,22.9,31.7z M24.6,5.9c0-0.7,0.6-1.3,1.3-1.3c4.4,0,8,3.5,8,7.9c0,0.7-0.6,1.3-1.3,1.3c-0.7,0-1.3-0.6-1.3-1.3
	c0-2.9-2.4-5.3-5.3-5.3C25.2,7.2,24.6,6.6,24.6,5.9z M25.7,28h-4.3c-0.7,0-1.2-0.5-1.3-1.1l-2.2-14.5c-0.1-0.4,0.1-0.8,0.3-1.1
	c0.3-0.3,0.6-0.5,1-0.5h8.7c0.4,0,0.8,0.2,1,0.5c0.3,0.3,0.4,0.7,0.3,1.1L27,26.9C26.9,27.5,26.3,28,25.7,28z M20.7,13.5l1.8,11.9h2
	l1.8-11.9H20.7z M19.9,41.5h7.2c0.7,0,1.3,0.6,1.3,1.3c0,0.7-0.6,1.3-1.3,1.3h-7.2c-0.7,0-1.3-0.6-1.3-1.3
	C18.6,42.1,19.2,41.5,19.9,41.5z M22.1,45.4H25c0.7,0,1.3,0.6,1.3,1.3c0,0.7-0.6,1.3-1.3,1.3h-2.8c-0.7,0-1.3-0.6-1.3-1.3
	C20.8,46,21.4,45.4,22.1,45.4z"/>
</svg>

                                        <h5>При интравагинальной локализации кондилом гель наносят:</h5>
                                        <ul>
                                            <li>небольшое количество геля равномерно распределяют по стенкам влагалища;</li>
                                            <li>2 раза в сутки;</li>
                                            <li>курс лечения 7-10 дней или до полного исчезновения клинических проявлений.</li>
                                        </ul>
                                    </div>
                                    <div class="slide_block_text">
                                        <svg version="1.1" class="calendar-svg" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                         viewBox="0 0 47 47" style="enable-background:new 0 0 47 47;" xml:space="preserve">
<style type="text/css">
    .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#FFF200;}
    .st1{fill-rule:evenodd;clip-rule:evenodd;fill:#626365;}
</style>
                                        <path class="st0" d="M23.5,0C36.5,0,47,10.5,47,23.5C47,36.5,36.5,47,23.5,47C10.5,47,0,36.5,0,23.5C0,10.5,10.5,0,23.5,0z"/>
                                        <path class="st1" d="M27.9,36.5h-9.3H9.3c-0.7,0-1.2-0.5-1.2-1.2v-6.2v-6.2c0-0.7,0.5-1.2,1.2-1.2h9.3h9.3h9.3
	c0.7,0,1.2,0.5,1.2,1.2v6.2v6.2c0,0.7-0.5,1.2-1.2,1.2H27.9z M17.4,24.1h-6.9v3.8h6.9V24.1z M17.4,30.3h-6.9v3.8h6.9V30.3z
	 M26.7,24.1h-6.9v3.8h6.9V24.1z M26.7,30.3h-6.9v3.8h6.9V30.3z M36,24.1h-6.9v3.8H36V24.1z M36,30.3h-6.9v3.8H36V30.3z M42.7,25.5
	c-0.3,0-0.6-0.1-0.9-0.4c-0.2-0.2-0.3-0.5-0.3-0.8c0-0.3,0.1-0.6,0.4-0.8c0.5-0.4,1.2-0.4,1.7,0c0.2,0.2,0.3,0.5,0.3,0.8
	c0,0.3-0.1,0.6-0.3,0.8C43.3,25.4,43,25.5,42.7,25.5z M43.9,40.8c0,0.7-0.5,1.2-1.2,1.2H4.3c-0.7,0-1.2-0.5-1.2-1.2V17.4V8.7
	c0-0.7,0.5-1.2,1.2-1.2H10V6.1c0-1.8,1.5-3.3,3.3-3.3c1.8,0,3.3,1.5,3.3,3.3v1.4h14V6.1c0-1.8,1.5-3.3,3.3-3.3
	c1.8,0,3.3,1.5,3.3,3.3v1.4h5.7c0.7,0,1.2,0.5,1.2,1.2v11.9c0,0.7-0.5,1.2-1.2,1.2c-0.7,0-1.2-0.5-1.2-1.2v-2h-36v21h36V28
	c0-0.7,0.5-1.2,1.2-1.2c0.7,0,1.2,0.5,1.2,1.2V40.8z M14.1,6.1c0-0.5-0.4-0.9-0.9-0.9c-0.5,0-0.9,0.4-0.9,0.9v5.2
	c0,0.5,0.4,0.9,0.9,0.9c0.5,0,0.9-0.4,0.9-0.9V6.1z M34.6,6.1c0-0.5-0.4-0.9-0.9-0.9c-0.5,0-0.9,0.4-0.9,0.9v5.2
	c0,0.5,0.4,0.9,0.9,0.9c0.5,0,0.9-0.4,0.9-0.9V6.1z M41.5,16.2V9.9H37v1.4c0,1.8-1.5,3.3-3.3,3.3c-1.8,0-3.3-1.5-3.3-3.3V9.9h-14
	v1.4c0,1.8-1.5,3.3-3.3,3.3c-1.8,0-3.3-1.5-3.3-3.3V9.9H5.5v6.3H41.5z"/>
</svg>

                                        <h5>При деструкции папиллом, кондилом и бородавок гель наносят:</h5>
                                        <ul>
                                            <li>тонким слоем на поражённые участки кожи и слизистых оболочек;</li>
                                             <li>2 раза в сутки;</li>
                                            <li>в течение 5 дней до деструкции и 10 дней после неё или до полного заживления.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block-next swiper-button-next">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px"
                             viewBox="0 0 62 62" style="enable-background:new 0 0 62 62;" xml:space="preserve">
<style type="text/css">
    .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#626365;}
    .st1{fill:#FFF200;}
</style>
                            <path class="st0" d="M25.3,21.1c0.8-0.8,2-0.8,2.8,0l8.5,8.5c0.8,0.8,0.8,2,0,2.8l-8.5,8.5c-0.8,0.8-2,0.8-2.8,0
	c-0.8-0.8-0.8-2,0-2.8l7.1-7.1l-7.1-7.1C24.6,23.2,24.6,21.9,25.3,21.1z"/>
                            <g>
                                <path class="st1" d="M31,62C13.9,62,0,48.1,0,31S13.9,0,31,0s31,13.9,31,31S48.1,62,31,62z M31,2C15,2,2,15,2,31s13,29,29,29
		s29-13,29-29S47,2,31,2z"/>
                            </g>
</svg>
                    </div>
                    <div class="block-prev swiper-button-prev">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                             viewBox="0 0 62 62" style="enable-background:new 0 0 62 62;" xml:space="preserve">
<style type="text/css">
    .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#626365;}
    .st1{fill:#FFF200;}
</style>
                            <path class="st0" d="M34.4,23.9L27.3,31l7.1,7.1c0.8,0.8,0.8,2,0,2.8c-0.8,0.8-2,0.8-2.8,0L23,32.4c-0.8-0.8-0.8-2,0-2.8l8.5-8.5
	c0.8-0.8,2-0.8,2.8,0C35.1,21.9,35.1,23.2,34.4,23.9z"/>
                            <g>
                                <path class="st1" d="M31,62C13.9,62,0,48.1,0,31S13.9,0,31,0s31,13.9,31,31S48.1,62,31,62z M31,2C15,2,2,15,2,31s13,29,29,29
		s29-13,29-29S47,2,31,2z"/>
                            </g>
</svg>
                    </div>
                    </div>
                    <a class="button-yellow cre-animate" data-animation="scale-up" data-speed="1500" data-delay="900" data-offset="90%" data-easing="easeInOutCirc" href="#">Скачать инструкцию</a>
                </div>
            </div>
        </div>
    </section>

    <!--===================================================== section-virus -->
    <section class="section-virus" id="virus">
        <div class="container">
            <div class="row">
                <div class="col-1-1 col-1-xs">
                    <h2>
                        <span>Избавьтесь</span> от следов вируса
                    </h2>
                    <p class="sub_h2">
                        Панавир® с легкостью переводит заболевание в стадию ремиссии.
                    </p>
                    <div class="block-slider-holder cre-animate" data-animation="scale-up" data-speed="1500" data-delay="500" data-offset="90%" data-easing="easeOutElastic">
                        <div class="block-slider swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <h5>Факты о герпесе:</h5>
                                        <div class="row">
                                            <div class="col-1-3 col-1-xs">
                                                <div class="container_block">
                                                    <svg version="1.1" class="container_block-svg1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                             viewBox="0 0 53.5 65" style="enable-background:new 0 0 53.5 65;" xml:space="preserve">
<style type="text/css">
    .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#FFF200;}
    .st1{fill:#626365;}
</style>
                                                            <path class="st0" d="M26.2,11.5c13.8,0,25,11.2,25,25s-11.2,25-25,25s-25-11.2-25-25S12.4,11.5,26.2,11.5z"/>
                                                            <path class="st1" d="M6.8,34.8c0.4,3.3,3.2,5.8,6.6,5.8c1.6,0,3-0.5,4.1-1.4c0.5,0.6,1.1,1.2,1.7,1.7c-0.2,4.8-2.3,6.4-4.8,8.2
	c-3.1,2.3-7,5.2-7.7,14.3c-0.1,0.8,0.5,1.5,1.3,1.5c0,0,0.1,0,0.1,0c0.7,0,1.4-0.6,1.4-1.3c0.6-7.8,3.5-10,6.5-12.3
	c0.4-0.3,0.7-0.5,1.1-0.8c1.3,3.2,5.2,5.6,9.6,5.6c4.4,0,8.2-2.3,9.6-5.5c0.3,0.2,0.6,0.5,0.9,0.7c3.1,2.3,5.9,4.4,6.5,12.3
	c0.1,0.8,0.7,1.3,1.4,1.3c0,0,0.1,0,0.1,0c0.8-0.1,1.4-0.7,1.3-1.5c-0.7-9.1-4.5-12-7.7-14.3c-2.5-1.9-4.6-3.4-4.8-8.2
	c0.6-0.5,1.2-1.1,1.7-1.7c1.2,0.9,2.6,1.4,4.1,1.4c3.4,0,6.2-2.5,6.6-5.8c4-1.3,6.8-5,6.8-9.2c0-4.8-3.5-8.8-8.1-9.5
	C43.7,6.8,36.2,0,27.6,0C19,0,11.5,6.7,9.8,15.9c0,0-0.1,0-0.1,0c-5.4,0-9.7,4.3-9.7,9.7C0,29.8,2.8,33.5,6.8,34.8z M26.9,53.3
	c-3.7,0-7.1-2.3-7.3-5c1.1-1.3,2-3.1,2.3-5.6c1.5,0.8,3.1,1.2,4.8,1.2c1.7,0,3.3-0.4,4.8-1.2c0.4,2.7,1.3,4.5,2.6,5.9
	C33.7,51.1,30.5,53.3,26.9,53.3z M26.7,41.1c-5.1,0-11.2-6.6-11.2-14.8c0-0.4,0-0.9,0.1-1.4c0.2,0,0.4,0,0.6,0
	c6.6,0,12.6-3.7,15.5-9.5c3.7,2.1,6.1,6.2,6.1,10.8C37.9,34.5,31.8,41.1,26.7,41.1z M9.7,18.7c0.3,0,0.7,0,1.1,0.1
	c0.4,0.1,0.8,0,1.1-0.3c0.3-0.2,0.5-0.6,0.6-1C13.5,9.2,20,2.9,27.6,2.9c7.5,0,14,6.3,15.1,14.6c0.1,0.7,0.7,1.2,1.4,1.2
	c3.7,0.1,6.6,3.1,6.6,6.8c0,3.3-2.3,6.1-5.6,6.7c-0.7,0.1-1.2,0.8-1.2,1.5l0,0.1c0,0,0,0.1,0,0.1c0,2.1-1.7,3.8-3.8,3.8
	c-0.9,0-1.8-0.3-2.4-0.9c2-3.2,3.1-7,3.1-10.5c0-6.3-3.7-11.9-9.2-14.1c-0.7-0.3-1.6,0.1-1.9,0.8c-2.2,5.5-7.5,9.1-13.5,9.1
	c-0.5,0-1.1,0-1.6-0.1c-0.7-0.1-1.4,0.4-1.6,1.1c-0.2,1.1-0.3,2.1-0.3,3.2c0,3.5,1.2,7.3,3.1,10.5c-0.7,0.6-1.5,0.9-2.4,0.9
	c-2.1,0-3.8-1.7-3.8-3.8c0,0,0-0.1,0-0.1l0-0.1c0-0.7-0.5-1.4-1.2-1.5c-3.2-0.6-5.6-3.4-5.6-6.7C2.9,21.8,5.9,18.7,9.7,18.7z"/>
</svg>
                                                    <p>
                                                        Основная группа риска герпеса II типа
                                                    </p>
                                                    <span>
                                                        женщины от 18 до 39 лет.
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-1-3 col-1-xs">
                                                <div class="container_block">
                                                    <svg version="1.1" class="container_block-svg2" id="Layer_1" xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px"
                                                             viewBox="0 0 50 55" style="enable-background:new 0 0 50 55;" xml:space="preserve">
<style type="text/css">
    .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#FFF200;}
    .st1{fill-rule:evenodd;clip-rule:evenodd;fill:#626365;}
</style>
                                                            <path class="st0" d="M25,5c13.8,0,25,11.2,25,25c0,13.8-11.2,25-25,25S0,43.8,0,30C0,16.2,11.2,5,25,5z"/>
                                                            <path class="st1" d="M26.8,18.2v10.6h4.4c0.8,0,1.5,0.7,1.5,1.5c0,0.8-0.7,1.5-1.5,1.5h-5.9c-0.8,0-1.5-0.7-1.5-1.5V18.2
	c0-0.8,0.7-1.5,1.5-1.5C26.1,16.7,26.8,17.4,26.8,18.2z M49,40.4C49,46.3,44.2,51,38.4,51c-2.1,0-4-0.6-5.7-1.7
	c-2.3,0.9-4.8,1.4-7.4,1.4C14.1,50.8,5,41.6,5,30.4c0-1.8,0.2-3.6,0.7-5.3c0.2-0.8,1-1.3,1.8-1.1c0.8,0.2,1.3,1,1.1,1.8
	c-0.4,1.5-0.6,3-0.6,4.5c0,9.6,7.8,17.4,17.3,17.4c1.6,0,3.3-0.2,4.8-0.7c-1.5-1.8-2.4-4.1-2.4-6.6c0-5.8,4.8-10.6,10.6-10.6
	c1.5,0,2.9,0.3,4.2,0.9c0-0.1,0-0.2,0-0.4c0-9.6-7.8-17.4-17.3-17.4c-4.9,0-9.5,2.1-12.8,5.7c-0.3,0.3-0.6,0.5-1,0.5
	c-0.4,0-0.8-0.1-1.1-0.4c-0.3-0.3-0.5-0.6-0.5-1c0-0.4,0.1-0.8,0.4-1.1c3.5-3.9,8.4-6.2,13.5-6.6V8.3h-4.4c-0.8,0-1.5-0.7-1.5-1.5
	V1.5c0-0.8,0.7-1.5,1.5-1.5h11.7c0.8,0,1.5,0.7,1.5,1.5v5.3c0,0.8-0.7,1.5-1.5,1.5h-4.4v1.7c10.5,0.8,18.8,9.6,18.8,20.3
	c0,0.7-0.1,1.5-0.1,2.2C47.6,34.5,49,37.3,49,40.4z M29.7,5.3V3h-8.7v2.4H29.7z M38.4,32.8c-4.2,0-7.6,3.4-7.6,7.6
	c0,4.2,3.4,7.6,7.6,7.6c4.2,0,7.6-3.4,7.6-7.6C46,36.2,42.6,32.8,38.4,32.8z M40.5,40.4l2.2,2.2c0.6,0.6,0.6,1.5,0,2.1
	c-0.3,0.3-0.7,0.4-1.1,0.4c-0.4,0-0.8-0.2-1.1-0.4l-2.2-2.2l-2.2,2.2c-0.3,0.3-0.7,0.4-1.1,0.4c-0.4,0-0.8-0.2-1.1-0.4
	c-0.6-0.6-0.6-1.5,0-2.1l2.2-2.2L34,38.2c-0.6-0.6-0.6-1.5,0-2.1c0.6-0.6,1.6-0.6,2.1,0l2.2,2.2l2.2-2.2c0.6-0.6,1.6-0.6,2.1,0
	c0.6,0.6,0.6,1.5,0,2.1L40.5,40.4z M9.7,22.6c-0.3,0.3-0.6,0.4-1.1,0.4c-0.4,0-0.8-0.2-1.1-0.5c-0.3-0.3-0.4-0.6-0.4-1
	c0-0.4,0.2-0.8,0.4-1.1c0.5-0.5,1.6-0.5,2.1,0c0.3,0.3,0.4,0.7,0.4,1.1C10.2,22,10,22.4,9.7,22.6z"/>
</svg>
                                                    <p>
                                                        Герпес-вирус остаётся в организме пожизненно
                                                    </p>
                                                    <span>
                                                        после первичного инфицирования.
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-1-3 col-1-xs">
                                                <div class="container_block">
                                                    <svg version="1.1" class="container_block-svg3" id="Layer_1" xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px"
                                                             viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">
<style type="text/css">
    .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#FFF200;}
    .st1{fill-rule:evenodd;clip-rule:evenodd;fill:#626365;}
</style>
                                                            <path class="st0" d="M25,0c13.8,0,25,11.2,25,25c0,13.8-11.2,25-25,25S0,38.8,0,25C0,11.2,11.2,0,25,0z"/>
                                                            <path class="st1" d="M11.4,39.6c-0.7,0-1.4-0.6-1.4-1.4c0-0.8,0.6-1.4,1.4-1.4h3.4c0.7,0,1.4,0.6,1.4,1.4c0,0.8-0.6,1.4-1.4,1.4
	H11.4z M19.3,39.6c-0.7,0-1.4-0.6-1.4-1.4c0-0.8,0.6-1.4,1.4-1.4h19.4c0.7,0,1.4,0.6,1.4,1.4c0,0.8-0.6,1.4-1.4,1.4H19.3z M46.6,27
	c-0.4,0-0.7-0.1-1-0.4c-0.3-0.3-0.4-0.6-0.4-1c0-0.4,0.1-0.7,0.4-1c0.5-0.5,1.4-0.5,1.9,0c0.3,0.3,0.4,0.6,0.4,1
	c0,0.4-0.2,0.7-0.4,1C47.4,26.9,47,27,46.6,27z M46.6,22.7c-0.7,0-1.4-0.6-1.4-1.4v-2.3H4.7v24.1h40.6V30c0-0.8,0.6-1.4,1.4-1.4
	c0.7,0,1.4,0.6,1.4,1.4v14.7c0,0.8-0.6,1.4-1.4,1.4H3.4C2.6,46,2,45.4,2,44.6V17.7v-10C2,7,2.6,6.4,3.4,6.4h6.4V4.7
	c0-2.1,1.7-3.7,3.7-3.7c2,0,3.7,1.7,3.7,3.7v1.6h15.8V4.7c0-2.1,1.7-3.7,3.7-3.7c2,0,3.7,1.7,3.7,3.7v1.6h6.4C47.4,6.4,48,7,48,7.7
	v13.6C48,22.1,47.4,22.7,46.6,22.7z M14.4,4.7c0-0.5-0.4-1-1-1c-0.5,0-1,0.4-1,1v6c0,0.5,0.4,1,1,1c0.5,0,1-0.4,1-1V4.7z M37.6,4.7
	c0-0.5-0.4-1-1-1c-0.5,0-1,0.4-1,1v6c0,0.5,0.4,1,1,1c0.5,0,1-0.4,1-1V4.7z M45.3,9.1h-5v1.6c0,2.1-1.7,3.7-3.7,3.7
	c-2,0-3.7-1.7-3.7-3.7V9.1H17.1v1.6c0,2.1-1.7,3.7-3.7,3.7c-2,0-3.7-1.7-3.7-3.7V9.1h-5v7.3h40.6V9.1z"/>
                                                            <path class="st1" d="M39.8,30c0,0.4-0.1,0.7-0.2,1.1c-0.1,0.4-0.2,0.7-0.4,1.1c-0.2,0.3-0.4,0.7-0.7,0.9c-0.3,0.3-0.6,0.5-1.1,0.7
	c-0.4,0.2-0.9,0.2-1.5,0.2c-0.6,0-1.1-0.1-1.5-0.2c-0.4-0.2-0.8-0.4-1-0.6c-0.3-0.3-0.5-0.6-0.7-0.9c-0.2-0.3-0.3-0.7-0.4-1.1
	c-0.1-0.4-0.1-0.7-0.2-1.1c0-0.4,0-0.7,0-1c0-0.2,0-0.5,0-0.8c0-0.3,0.1-0.6,0.2-1c0.1-0.3,0.2-0.7,0.4-1c0.2-0.3,0.4-0.7,0.7-0.9
	c0.3-0.3,0.6-0.5,1-0.7c0.4-0.2,0.9-0.3,1.5-0.3c0.9,0,1.5,0.2,2,0.5c0.5,0.3,0.9,0.7,1.2,1.1c0.3,0.5,0.4,1,0.5,1.5
	c0.1,0.5,0.1,1.1,0.1,1.6C39.8,29.3,39.8,29.6,39.8,30z M37.5,27.9c0-0.4-0.1-0.7-0.2-0.9c-0.1-0.3-0.3-0.4-0.5-0.6
	c-0.2-0.1-0.5-0.2-0.8-0.2c-0.3,0-0.6,0.1-0.7,0.2c-0.2,0.2-0.3,0.4-0.5,0.6c-0.1,0.3-0.2,0.6-0.2,0.9c0,0.4-0.1,0.7-0.1,1.2
	c0,0.4,0,0.8,0.1,1.1c0,0.4,0.1,0.7,0.2,0.9c0.1,0.3,0.3,0.5,0.5,0.6c0.2,0.2,0.4,0.2,0.8,0.2c0.3,0,0.6-0.1,0.8-0.2
	c0.2-0.1,0.4-0.3,0.5-0.6c0.1-0.3,0.2-0.6,0.2-0.9c0-0.4,0.1-0.8,0.1-1.2C37.6,28.7,37.5,28.3,37.5,27.9z M30.6,33.8h-6.3
	c-0.2,0-0.3-0.1-0.3-0.3v-1c0-0.1,0-0.2,0-0.3c0-0.1,0.1-0.2,0.2-0.3c0.3-0.3,0.7-0.6,1-0.9c0.1-0.1,0.2-0.2,0.4-0.3
	c0.1-0.1,0.2-0.2,0.3-0.3c0.1-0.1,0.2-0.2,0.3-0.2c0.1-0.1,0.1-0.1,0.1-0.1c0,0,0.1-0.1,0.2-0.2c0.1-0.1,0.3-0.3,0.4-0.4
	c0.2-0.2,0.3-0.3,0.5-0.4c0.1-0.1,0.3-0.2,0.3-0.3c0.2-0.2,0.4-0.4,0.5-0.7c0.1-0.2,0.2-0.5,0.2-0.8c0-0.3-0.1-0.6-0.3-0.7
	c-0.2-0.1-0.5-0.2-1.1-0.2c-0.4,0-0.8,0-1.3,0.1c-0.4,0-0.8,0.1-1.1,0.1c-0.2,0-0.3,0-0.3,0c-0.1,0-0.1-0.1-0.1-0.3l-0.1-0.8
	c0-0.1,0-0.2,0-0.3c0-0.1,0.2-0.2,0.4-0.3c0.2-0.1,0.4-0.1,0.7-0.2c0.3-0.1,0.5-0.1,0.8-0.1c0.3,0,0.5-0.1,0.7-0.1
	c0.2,0,0.4,0,0.5,0c0.6,0,1.2,0.1,1.6,0.2c0.4,0.1,0.8,0.3,1.1,0.5c0.3,0.2,0.5,0.5,0.6,0.8c0.1,0.3,0.2,0.7,0.2,1.1
	c0,0.3,0,0.6-0.1,0.8c-0.1,0.2-0.1,0.5-0.3,0.7c-0.1,0.2-0.3,0.4-0.4,0.6c-0.2,0.2-0.4,0.4-0.6,0.7c-0.2,0.2-0.3,0.3-0.5,0.5
	c-0.1,0.1-0.3,0.3-0.5,0.5c-0.2,0.2-0.3,0.3-0.5,0.5c-0.2,0.2-0.4,0.4-0.7,0.6l0,0.1h3.4c0.1,0,0.2,0,0.2,0.1c0,0,0,0.1,0,0.2v1.2
	c0,0.1,0,0.2,0,0.2C30.8,33.8,30.7,33.8,30.6,33.8z M22.9,30.2h-4.4c-0.2,0-0.3-0.1-0.3-0.3v-1.1c0-0.2,0.1-0.3,0.3-0.3h4.4
	c0.1,0,0.2,0,0.2,0.1c0,0,0.1,0.1,0.1,0.2v1.1c0,0.1,0,0.2-0.1,0.2C23.1,30.1,23,30.2,22.9,30.2z M16.4,33.8h-5.3
	c-0.2,0-0.3-0.1-0.3-0.3v-1.2c0-0.2,0.1-0.3,0.3-0.3h1.5v-5.4h-1.3c-0.1,0-0.2,0-0.3,0c-0.1,0-0.1-0.1-0.1-0.2v-0.7
	c0-0.1,0-0.2,0-0.3c0-0.1,0.1-0.1,0.2-0.2l1.2-0.5c0.2-0.1,0.3-0.1,0.4-0.1c0.1,0,0.3,0,0.4,0h1.1c0.2,0,0.3,0.1,0.3,0.3V32h1.6
	c0.1,0,0.2,0,0.2,0.1c0,0,0.1,0.1,0.1,0.2v1.2c0,0.1,0,0.2,0,0.2C16.6,33.8,16.6,33.8,16.4,33.8z"/>
</svg>
                                                    <p>
                                                        От 1 до 20 раз в год
                                                    </p>
                                                    <span>
                                                        могут происходить обострения заболевания.
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-1-3 col-1-xs">
                                                <div class="container_block">
                                                    <svg version="1.1" class="container_block-svg4" id="Layer_1" xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px"
                                                             viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">
<style type="text/css">
    .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#FFF200;}
    .st1{fill-rule:evenodd;clip-rule:evenodd;fill:#626365;}
</style>
                                                            <path class="st0" d="M25,0c13.8,0,25,11.2,25,25c0,13.8-11.2,25-25,25S0,38.8,0,25C0,11.2,11.2,0,25,0z"/>
                                                            <path class="st1" d="M25,47c-3.9,0-7.6-1-11-2.9l-8.3,2.5c-0.4,0.1-0.9,0-1.2-0.3C4.1,45.9,4,45.5,4.2,45l2.4-8
	C4.2,33.4,3,29.3,3,25C3,12.9,12.9,3,25,3c12.1,0,22,9.9,22,22C47,37.1,37.1,47,25,47z M25,5.5C14.2,5.5,5.5,14.2,5.5,25
	c0,4,1.2,7.8,3.5,11.1c0.2,0.3,0.3,0.7,0.2,1.1l-1.9,6.4l6.7-2c0.1,0,0.2-0.1,0.4-0.1c0.2,0,0.4,0.1,0.6,0.2
	c3.1,1.9,6.6,2.8,10.2,2.8c10.8,0,19.5-8.8,19.5-19.5C44.5,14.2,35.8,5.5,25,5.5z M27.9,29.7v0.7c0,1.6-1.3,2.9-2.9,2.9
	c-1.6,0-2.9-1.3-2.9-2.9v-3.2c0-1.6,1.3-2.9,2.9-2.9c2.4,0,4.3-1.9,4.3-4.3c0-2.4-1.9-4.3-4.3-4.3c-2.4,0-4.3,1.9-4.3,4.3
	c0,1.6-1.3,2.9-2.9,2.9c-1.6,0-2.9-1.3-2.9-2.9C14.9,14.5,19.4,10,25,10c5.6,0,10.1,4.5,10.1,10.1C35.1,24.5,32.1,28.5,27.9,29.7z
	 M25,12.5c-4.2,0-7.6,3.4-7.6,7.6c0,0.2,0.2,0.4,0.4,0.4c0.2,0,0.4-0.2,0.4-0.4c0-3.7,3-6.8,6.8-6.8c3.7,0,6.8,3,6.8,6.8
	c0,3.7-3,6.8-6.8,6.8c-0.2,0-0.4,0.2-0.4,0.4v3.2c0,0.2,0.2,0.4,0.4,0.4c0.2,0,0.4-0.2,0.4-0.4v-1.7c0-0.6,0.4-1.1,1-1.2
	c3.6-0.7,6.2-3.8,6.2-7.5C32.6,15.9,29.2,12.5,25,12.5z M21.7,36.7c0.1-0.3,0.2-0.5,0.4-0.7c0.1-0.2,0.2-0.3,0.4-0.5
	c0.2-0.2,0.3-0.3,0.5-0.4c0.2-0.1,0.4-0.2,0.6-0.3c0.2-0.1,0.4-0.1,0.6-0.2c1.2-0.2,2.4,0.1,3.2,1c0.7,0.7,1,1.6,1,2.5
	c0,0.9-0.4,1.8-1,2.5c-0.7,0.7-1.6,1-2.5,1c-0.2,0-0.4,0-0.7-0.1c-0.3-0.1-0.5-0.1-0.6-0.2c-0.3-0.1-0.5-0.2-0.7-0.4
	c-0.2-0.1-0.3-0.3-0.5-0.4c-0.7-0.7-1-1.6-1-2.5c0-0.2,0-0.4,0.1-0.7C21.6,37.1,21.6,36.9,21.7,36.7z M24.2,38.8
	c0,0,0.1,0.1,0.1,0.1c0.1,0.1,0.2,0.1,0.2,0.1c0,0,0.1,0,0.2,0.1c0,0,0.1,0,0.2,0c0.3,0,0.6-0.1,0.7-0.3c0.2-0.2,0.3-0.5,0.3-0.8
	c0-0.3-0.1-0.5-0.3-0.7C25.5,37.1,25.3,37,25,37c-0.1,0-0.1,0-0.2,0c0,0-0.1,0-0.2,0.1c-0.1,0-0.2,0.1-0.2,0.1c0,0-0.1,0.1-0.1,0.1
	c0,0-0.1,0.1-0.1,0.1c-0.1,0.1-0.1,0.2-0.1,0.2c0,0,0,0.1-0.1,0.2c0,0,0,0.1,0,0.2C23.9,38.3,24,38.6,24.2,38.8z"/>
</svg>
                                                    <p>
                                                        В медицине не существует способа
                                                    </p>
                                                    <span>
                                                        полностью убрать вирус герпеса из организма.
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-1-3 col-1-xs">
                                                <div class="container_block">
                                                    <svg version="1.1" class="container_block-svg5" id="Layer_1" xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px"
                                                             viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">
<style type="text/css">
    .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#FFF200;}
    .st1{fill-rule:evenodd;clip-rule:evenodd;fill:#626365;}
</style>
                                                            <path class="st0" d="M25,0c13.8,0,25,11.2,25,25c0,13.8-11.2,25-25,25S0,38.8,0,25C0,11.2,11.2,0,25,0z"/>
                                                            <path class="st1" d="M44.8,42H31c-0.7,0-1.2-0.5-1.2-1.2V39c0-1.1,0.7-2,1.6-2.4l3.9-1.7v-0.4c-0.8-0.6-1.4-1.3-1.7-2.2
	c-0.8-0.4-1.4-1.3-1.4-2.4c0-0.9,0.4-1.6,0.9-2.1c0.2-2.2,2-3.9,4.2-3.9h1c2.2,0,4,1.7,4.2,3.9c0.6,0.5,0.9,1.2,0.9,2.1
	c0,1.1-0.5,2-1.4,2.4c-0.4,0.9-1,1.6-1.7,2.2v0.4l4,1.8C45.4,37,46,38,46,39v1.8C46,41.5,45.5,42,44.8,42z M43.6,39
	c0-0.1,0-0.1-0.1-0.2L39.3,37c-0.7-0.3-1.3-1.1-1.3-1.9v-0.8c0-0.7,0.3-1.3,0.9-1.7c0.6-0.4,1-1,1.2-1.7c0.1-0.5,0.5-0.8,1-0.9
	c0,0,0-0.1,0-0.1c0-0.1,0-0.1,0-0.1c-0.5-0.1-0.9-0.6-0.9-1.2v-0.3c0-1-0.8-1.9-1.9-1.9h-1c-1,0-1.9,0.8-1.9,1.9v0.3
	c0,0.6-0.4,1-0.9,1.2c0,0,0,0.1,0,0.1c0,0,0,0.1,0,0.1c0.5,0.1,0.9,0.4,1,0.9c0.2,0.7,0.6,1.3,1.2,1.7c0.6,0.4,0.9,1,0.9,1.7v0.8
	c0,0.9-0.5,1.6-1.3,1.9l-4.1,1.8c-0.1,0-0.2,0.1-0.2,0.2v0.6h11.4V39z M31.9,22H18.1c-0.7,0-1.2-0.5-1.2-1.2V19c0-1.1,0.7-2,1.6-2.4
	l3.9-1.7v-0.4c-0.8-0.6-1.4-1.3-1.7-2.2c-0.8-0.4-1.4-1.3-1.4-2.4c0-0.9,0.4-1.6,0.9-2.1c0.2-2.2,2-3.9,4.2-3.9h1
	c2.2,0,4,1.7,4.2,3.9c0.6,0.5,0.9,1.2,0.9,2.1c0,1.1-0.5,2-1.4,2.4c-0.4,0.9-1,1.6-1.7,2.2v0.4l4,1.8c0.9,0.4,1.6,1.3,1.6,2.4v1.8
	C33.1,21.5,32.6,22,31.9,22z M30.7,19c0-0.1,0-0.1-0.1-0.2L26.4,17c-0.7-0.3-1.3-1.1-1.3-1.9v-0.8c0-0.7,0.3-1.3,0.9-1.7
	c0.6-0.4,1-1,1.2-1.7c0.1-0.5,0.5-0.8,1-0.9c0,0,0-0.1,0-0.1c0-0.1,0-0.1,0-0.1c-0.5-0.1-0.9-0.6-0.9-1.2V8.3c0-1-0.8-1.9-1.9-1.9
	h-1c-1,0-1.9,0.9-1.9,1.9v0.3c0,0.6-0.4,1-0.9,1.2c0,0,0,0.1,0,0.1c0,0,0,0.1,0,0.1c0.5,0.1,0.9,0.4,1,0.9c0.2,0.7,0.6,1.3,1.2,1.7
	c0.6,0.4,0.9,1,0.9,1.7v0.8c0,0.9-0.5,1.6-1.3,1.9l-4.1,1.8c-0.1,0-0.2,0.1-0.2,0.2v0.6h11.4V19z M16.4,32.3c-0.4,0.9-1,1.6-1.7,2.2
	v0.4l4,1.8c0.9,0.4,1.6,1.3,1.6,2.4v1.8c0,0.7-0.5,1.2-1.2,1.2H5.2C4.5,42,4,41.5,4,40.8V39c0-1.1,0.7-2,1.6-2.4l3.9-1.7v-0.4
	c-0.8-0.6-1.4-1.3-1.7-2.2C7,31.9,6.4,31,6.4,29.9c0-0.9,0.4-1.6,0.9-2.1c0.2-2.2,2-3.9,4.2-3.9h1c2.2,0,4,1.7,4.2,3.9
	c0.6,0.5,0.9,1.2,0.9,2.1C17.7,31,17.2,31.9,16.4,32.3z M15.3,29.8c-0.5-0.1-0.9-0.6-0.9-1.2v-0.3c0-1-0.8-1.9-1.9-1.9h-1
	c-1,0-1.9,0.8-1.9,1.9v0.3c0,0.6-0.4,1-0.9,1.2c0,0,0,0.1,0,0.1c0,0,0,0.1,0,0.1c0.5,0.1,0.9,0.4,1,0.9c0.2,0.7,0.6,1.3,1.2,1.7
	c0.6,0.4,0.9,1,0.9,1.7v0.8c0,0.9-0.5,1.6-1.3,1.9l-4.1,1.8c-0.1,0-0.2,0.1-0.2,0.2v0.6h11.4V39c0-0.1,0-0.1-0.1-0.2L13.5,37
	c-0.7-0.3-1.3-1.1-1.3-1.9v-0.8c0-0.7,0.3-1.3,0.9-1.7c0.6-0.4,1-1,1.2-1.7c0.1-0.5,0.5-0.8,1-0.9c0,0,0-0.1,0-0.1
	C15.3,29.9,15.3,29.8,15.3,29.8z M18.8,32.8c-0.3-0.6-0.2-1.3,0.4-1.6l4.6-2.8v-4.4c0-0.7,0.5-1.2,1.2-1.2c0.7,0,1.2,0.5,1.2,1.2
	v4.4l4.6,2.8c0.6,0.3,0.7,1.1,0.4,1.6c-0.2,0.4-0.6,0.6-1,0.6c-0.2,0-0.4-0.1-0.6-0.2L25,30.4l-4.6,2.8c-0.2,0.1-0.4,0.2-0.6,0.2
	C19.4,33.4,19,33.2,18.8,32.8z"/>
</svg>
                                                    <p>
                                                        Активация вируса может протекать бессимптомно
                                                    </p>
                                                    <span>
                                                        с возможностью заражения партнёра.
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-1-3 col-1-xs">
                                                <div class="container_block">
                                                    <svg version="1.1" class="container_block-svg6" id="Layer_1" xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px"
                                                             viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">
<style type="text/css">
    .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#FFF200;}
    .st1{fill-rule:evenodd;clip-rule:evenodd;fill:#626365;}
</style>
                                                            <path class="st0" d="M25,0c13.8,0,25,11.2,25,25c0,13.8-11.2,25-25,25S0,38.8,0,25C0,11.2,11.2,0,25,0z"/>
                                                            <path class="st1" d="M27.4,16.1c1.7,0,3,1.4,3,3.1v5.1c0,1.7-1.4,3.1-3,3.1h-5c-1.7,0-3-1.4-3-3.1v-5.1c0-1.7,1.4-3.1,3-3.1H27.4z
	 M22.1,19.2v5.1c0,0.2,0.2,0.4,0.4,0.4h5c0.2,0,0.4-0.2,0.4-0.4v-5.1c0-0.2-0.2-0.4-0.4-0.4h-5C22.2,18.8,22.1,18.9,22.1,19.2z
	 M9.7,31.7c0.2,0.3,0.4,0.6,0.4,1c0,0.4-0.1,0.7-0.4,1C9.5,33.9,9.1,34,8.8,34c-0.4,0-0.7-0.1-0.9-0.4c-0.2-0.2-0.4-0.6-0.4-0.9
	c0-0.4,0.1-0.7,0.4-1C8.3,31.2,9.2,31.2,9.7,31.7z M47.9,22.7c-0.2,0.5-0.7,0.9-1.3,0.9h-4.2v21.1c0,0.7-0.6,1.4-1.3,1.4H8.8
	c-0.7,0-1.3-0.6-1.3-1.4v-7.9c0-0.7,0.6-1.4,1.3-1.4s1.3,0.6,1.3,1.4v6.6h7.8V31c0-0.7,0.6-1.4,1.3-1.4h11.5c0.7,0,1.3,0.6,1.3,1.4
	v12.3h7.7V22.2c0-0.7,0.6-1.4,1.3-1.4h1.8l-5.1-4.2c-0.3-0.2-0.5-0.6-0.5-0.9c0-0.4,0.1-0.7,0.3-1c0.2-0.3,0.5-0.5,0.9-0.5
	c0.4,0,0.7,0.1,1,0.3l0.3,0.3V3.7H33v5.5l1.7,1.4c0.3,0.2,0.4,0.6,0.5,0.9c0,0.4-0.1,0.7-0.3,1C34.7,12.8,34.4,13,34,13
	c-0.4,0-0.7-0.1-1-0.3L24.9,6L7.1,20.9h1.7c0.7,0,1.3,0.6,1.3,1.4v6.4c0,0.7-0.6,1.4-1.3,1.4s-1.3-0.6-1.3-1.4v-5H3.3
	c-0.6,0-1.1-0.4-1.3-0.9c-0.2-0.5,0-1.1,0.4-1.5L24.1,3.3c0.5-0.4,1.2-0.4,1.7,0L30.4,7V2.4C30.4,1.6,31,1,31.7,1h9.4
	c0.7,0,1.3,0.6,1.3,1.4v14.4c0,0.1,0,0.2,0,0.3l5.1,4.2C47.9,21.5,48.1,22.1,47.9,22.7z M29.4,32.3h-8.9v11h8.9V32.3z"/>
</svg>
                                                    <p>
                                                        Вирус герпеса живет
                                                        в нервной системе.
                                                    </p>
                                                    <span>
                                                        Поэтому лечение должно быть комплексным.
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <div class="swiper-slide">
                                <h5>Факты о ВПЧ:</h5>
                                <div class="row">
                                    <div class="col-1-3 col-1-xs">
                                        <div class="container_block under-size">
                                            <svg version="1.1" class="container_block-svg1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                 viewBox="0 0 53.5 65" style="enable-background:new 0 0 53.5 65;" xml:space="preserve">
<style type="text/css">
    .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#FFF200;}
    .st1{fill:#626365;}
</style>
                                                <path class="st0" d="M26.2,11.5c13.8,0,25,11.2,25,25s-11.2,25-25,25s-25-11.2-25-25S12.4,11.5,26.2,11.5z"/>
                                                <path class="st1" d="M6.8,34.8c0.4,3.3,3.2,5.8,6.6,5.8c1.6,0,3-0.5,4.1-1.4c0.5,0.6,1.1,1.2,1.7,1.7c-0.2,4.8-2.3,6.4-4.8,8.2
	c-3.1,2.3-7,5.2-7.7,14.3c-0.1,0.8,0.5,1.5,1.3,1.5c0,0,0.1,0,0.1,0c0.7,0,1.4-0.6,1.4-1.3c0.6-7.8,3.5-10,6.5-12.3
	c0.4-0.3,0.7-0.5,1.1-0.8c1.3,3.2,5.2,5.6,9.6,5.6c4.4,0,8.2-2.3,9.6-5.5c0.3,0.2,0.6,0.5,0.9,0.7c3.1,2.3,5.9,4.4,6.5,12.3
	c0.1,0.8,0.7,1.3,1.4,1.3c0,0,0.1,0,0.1,0c0.8-0.1,1.4-0.7,1.3-1.5c-0.7-9.1-4.5-12-7.7-14.3c-2.5-1.9-4.6-3.4-4.8-8.2
	c0.6-0.5,1.2-1.1,1.7-1.7c1.2,0.9,2.6,1.4,4.1,1.4c3.4,0,6.2-2.5,6.6-5.8c4-1.3,6.8-5,6.8-9.2c0-4.8-3.5-8.8-8.1-9.5
	C43.7,6.8,36.2,0,27.6,0C19,0,11.5,6.7,9.8,15.9c0,0-0.1,0-0.1,0c-5.4,0-9.7,4.3-9.7,9.7C0,29.8,2.8,33.5,6.8,34.8z M26.9,53.3
	c-3.7,0-7.1-2.3-7.3-5c1.1-1.3,2-3.1,2.3-5.6c1.5,0.8,3.1,1.2,4.8,1.2c1.7,0,3.3-0.4,4.8-1.2c0.4,2.7,1.3,4.5,2.6,5.9
	C33.7,51.1,30.5,53.3,26.9,53.3z M26.7,41.1c-5.1,0-11.2-6.6-11.2-14.8c0-0.4,0-0.9,0.1-1.4c0.2,0,0.4,0,0.6,0
	c6.6,0,12.6-3.7,15.5-9.5c3.7,2.1,6.1,6.2,6.1,10.8C37.9,34.5,31.8,41.1,26.7,41.1z M9.7,18.7c0.3,0,0.7,0,1.1,0.1
	c0.4,0.1,0.8,0,1.1-0.3c0.3-0.2,0.5-0.6,0.6-1C13.5,9.2,20,2.9,27.6,2.9c7.5,0,14,6.3,15.1,14.6c0.1,0.7,0.7,1.2,1.4,1.2
	c3.7,0.1,6.6,3.1,6.6,6.8c0,3.3-2.3,6.1-5.6,6.7c-0.7,0.1-1.2,0.8-1.2,1.5l0,0.1c0,0,0,0.1,0,0.1c0,2.1-1.7,3.8-3.8,3.8
	c-0.9,0-1.8-0.3-2.4-0.9c2-3.2,3.1-7,3.1-10.5c0-6.3-3.7-11.9-9.2-14.1c-0.7-0.3-1.6,0.1-1.9,0.8c-2.2,5.5-7.5,9.1-13.5,9.1
	c-0.5,0-1.1,0-1.6-0.1c-0.7-0.1-1.4,0.4-1.6,1.1c-0.2,1.1-0.3,2.1-0.3,3.2c0,3.5,1.2,7.3,3.1,10.5c-0.7,0.6-1.5,0.9-2.4,0.9
	c-2.1,0-3.8-1.7-3.8-3.8c0,0,0-0.1,0-0.1l0-0.1c0-0.7-0.5-1.4-1.2-1.5c-3.2-0.6-5.6-3.4-5.6-6.7C2.9,21.8,5.9,18.7,9.7,18.7z"/>
</svg>
                                            <p>
                                                Определённые типы ВПЧ могут вызвать рак шейки матки
                                            </p>
                                                    <span>
                                                        а бородавки в горле способны стать причиной охриплости, проблем с дыханием, кашля и привести к раку горла.
                                                    </span>
                                        </div>
                                    </div>
                                    <div class="col-1-3 col-1-xs">
                                        <div class="container_block under-size">
                                            <svg version="1.1" class="container_block-svg2" id="Layer_1" xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px"
                                                 viewBox="0 0 50 55" style="enable-background:new 0 0 50 55;" xml:space="preserve">
<style type="text/css">
    .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#FFF200;}
    .st1{fill-rule:evenodd;clip-rule:evenodd;fill:#626365;}
</style>
                                                <path class="st0" d="M25,5c13.8,0,25,11.2,25,25c0,13.8-11.2,25-25,25S0,43.8,0,30C0,16.2,11.2,5,25,5z"/>
                                                <path class="st1" d="M26.8,18.2v10.6h4.4c0.8,0,1.5,0.7,1.5,1.5c0,0.8-0.7,1.5-1.5,1.5h-5.9c-0.8,0-1.5-0.7-1.5-1.5V18.2
	c0-0.8,0.7-1.5,1.5-1.5C26.1,16.7,26.8,17.4,26.8,18.2z M49,40.4C49,46.3,44.2,51,38.4,51c-2.1,0-4-0.6-5.7-1.7
	c-2.3,0.9-4.8,1.4-7.4,1.4C14.1,50.8,5,41.6,5,30.4c0-1.8,0.2-3.6,0.7-5.3c0.2-0.8,1-1.3,1.8-1.1c0.8,0.2,1.3,1,1.1,1.8
	c-0.4,1.5-0.6,3-0.6,4.5c0,9.6,7.8,17.4,17.3,17.4c1.6,0,3.3-0.2,4.8-0.7c-1.5-1.8-2.4-4.1-2.4-6.6c0-5.8,4.8-10.6,10.6-10.6
	c1.5,0,2.9,0.3,4.2,0.9c0-0.1,0-0.2,0-0.4c0-9.6-7.8-17.4-17.3-17.4c-4.9,0-9.5,2.1-12.8,5.7c-0.3,0.3-0.6,0.5-1,0.5
	c-0.4,0-0.8-0.1-1.1-0.4c-0.3-0.3-0.5-0.6-0.5-1c0-0.4,0.1-0.8,0.4-1.1c3.5-3.9,8.4-6.2,13.5-6.6V8.3h-4.4c-0.8,0-1.5-0.7-1.5-1.5
	V1.5c0-0.8,0.7-1.5,1.5-1.5h11.7c0.8,0,1.5,0.7,1.5,1.5v5.3c0,0.8-0.7,1.5-1.5,1.5h-4.4v1.7c10.5,0.8,18.8,9.6,18.8,20.3
	c0,0.7-0.1,1.5-0.1,2.2C47.6,34.5,49,37.3,49,40.4z M29.7,5.3V3h-8.7v2.4H29.7z M38.4,32.8c-4.2,0-7.6,3.4-7.6,7.6
	c0,4.2,3.4,7.6,7.6,7.6c4.2,0,7.6-3.4,7.6-7.6C46,36.2,42.6,32.8,38.4,32.8z M40.5,40.4l2.2,2.2c0.6,0.6,0.6,1.5,0,2.1
	c-0.3,0.3-0.7,0.4-1.1,0.4c-0.4,0-0.8-0.2-1.1-0.4l-2.2-2.2l-2.2,2.2c-0.3,0.3-0.7,0.4-1.1,0.4c-0.4,0-0.8-0.2-1.1-0.4
	c-0.6-0.6-0.6-1.5,0-2.1l2.2-2.2L34,38.2c-0.6-0.6-0.6-1.5,0-2.1c0.6-0.6,1.6-0.6,2.1,0l2.2,2.2l2.2-2.2c0.6-0.6,1.6-0.6,2.1,0
	c0.6,0.6,0.6,1.5,0,2.1L40.5,40.4z M9.7,22.6c-0.3,0.3-0.6,0.4-1.1,0.4c-0.4,0-0.8-0.2-1.1-0.5c-0.3-0.3-0.4-0.6-0.4-1
	c0-0.4,0.2-0.8,0.4-1.1c0.5-0.5,1.6-0.5,2.1,0c0.3,0.3,0.4,0.7,0.4,1.1C10.2,22,10,22.4,9.7,22.6z"/>
</svg>
                                            <p>
                                                60% - вероятность заражения
                                            </p>
                                                    <span>
                                                     при первичном половом контакте с человеком, инфицированным ВПЧ.
                                                    </span>
                                        </div>
                                    </div>
                                    <div class="col-1-3 col-1-xs">
                                        <div class="container_block under-size">
                                            <svg version="1.1" class="container_block-svg3" id="Layer_1" xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px"
                                                 viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">
<style type="text/css">
    .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#FFF200;}
    .st1{fill-rule:evenodd;clip-rule:evenodd;fill:#626365;}
</style>
                                                <path class="st0" d="M25,0c13.8,0,25,11.2,25,25c0,13.8-11.2,25-25,25S0,38.8,0,25C0,11.2,11.2,0,25,0z"/>
                                                <path class="st1" d="M11.4,39.6c-0.7,0-1.4-0.6-1.4-1.4c0-0.8,0.6-1.4,1.4-1.4h3.4c0.7,0,1.4,0.6,1.4,1.4c0,0.8-0.6,1.4-1.4,1.4
	H11.4z M19.3,39.6c-0.7,0-1.4-0.6-1.4-1.4c0-0.8,0.6-1.4,1.4-1.4h19.4c0.7,0,1.4,0.6,1.4,1.4c0,0.8-0.6,1.4-1.4,1.4H19.3z M46.6,27
	c-0.4,0-0.7-0.1-1-0.4c-0.3-0.3-0.4-0.6-0.4-1c0-0.4,0.1-0.7,0.4-1c0.5-0.5,1.4-0.5,1.9,0c0.3,0.3,0.4,0.6,0.4,1
	c0,0.4-0.2,0.7-0.4,1C47.4,26.9,47,27,46.6,27z M46.6,22.7c-0.7,0-1.4-0.6-1.4-1.4v-2.3H4.7v24.1h40.6V30c0-0.8,0.6-1.4,1.4-1.4
	c0.7,0,1.4,0.6,1.4,1.4v14.7c0,0.8-0.6,1.4-1.4,1.4H3.4C2.6,46,2,45.4,2,44.6V17.7v-10C2,7,2.6,6.4,3.4,6.4h6.4V4.7
	c0-2.1,1.7-3.7,3.7-3.7c2,0,3.7,1.7,3.7,3.7v1.6h15.8V4.7c0-2.1,1.7-3.7,3.7-3.7c2,0,3.7,1.7,3.7,3.7v1.6h6.4C47.4,6.4,48,7,48,7.7
	v13.6C48,22.1,47.4,22.7,46.6,22.7z M14.4,4.7c0-0.5-0.4-1-1-1c-0.5,0-1,0.4-1,1v6c0,0.5,0.4,1,1,1c0.5,0,1-0.4,1-1V4.7z M37.6,4.7
	c0-0.5-0.4-1-1-1c-0.5,0-1,0.4-1,1v6c0,0.5,0.4,1,1,1c0.5,0,1-0.4,1-1V4.7z M45.3,9.1h-5v1.6c0,2.1-1.7,3.7-3.7,3.7
	c-2,0-3.7-1.7-3.7-3.7V9.1H17.1v1.6c0,2.1-1.7,3.7-3.7,3.7c-2,0-3.7-1.7-3.7-3.7V9.1h-5v7.3h40.6V9.1z"/>
                                                <path class="st1" d="M39.8,30c0,0.4-0.1,0.7-0.2,1.1c-0.1,0.4-0.2,0.7-0.4,1.1c-0.2,0.3-0.4,0.7-0.7,0.9c-0.3,0.3-0.6,0.5-1.1,0.7
	c-0.4,0.2-0.9,0.2-1.5,0.2c-0.6,0-1.1-0.1-1.5-0.2c-0.4-0.2-0.8-0.4-1-0.6c-0.3-0.3-0.5-0.6-0.7-0.9c-0.2-0.3-0.3-0.7-0.4-1.1
	c-0.1-0.4-0.1-0.7-0.2-1.1c0-0.4,0-0.7,0-1c0-0.2,0-0.5,0-0.8c0-0.3,0.1-0.6,0.2-1c0.1-0.3,0.2-0.7,0.4-1c0.2-0.3,0.4-0.7,0.7-0.9
	c0.3-0.3,0.6-0.5,1-0.7c0.4-0.2,0.9-0.3,1.5-0.3c0.9,0,1.5,0.2,2,0.5c0.5,0.3,0.9,0.7,1.2,1.1c0.3,0.5,0.4,1,0.5,1.5
	c0.1,0.5,0.1,1.1,0.1,1.6C39.8,29.3,39.8,29.6,39.8,30z M37.5,27.9c0-0.4-0.1-0.7-0.2-0.9c-0.1-0.3-0.3-0.4-0.5-0.6
	c-0.2-0.1-0.5-0.2-0.8-0.2c-0.3,0-0.6,0.1-0.7,0.2c-0.2,0.2-0.3,0.4-0.5,0.6c-0.1,0.3-0.2,0.6-0.2,0.9c0,0.4-0.1,0.7-0.1,1.2
	c0,0.4,0,0.8,0.1,1.1c0,0.4,0.1,0.7,0.2,0.9c0.1,0.3,0.3,0.5,0.5,0.6c0.2,0.2,0.4,0.2,0.8,0.2c0.3,0,0.6-0.1,0.8-0.2
	c0.2-0.1,0.4-0.3,0.5-0.6c0.1-0.3,0.2-0.6,0.2-0.9c0-0.4,0.1-0.8,0.1-1.2C37.6,28.7,37.5,28.3,37.5,27.9z M30.6,33.8h-6.3
	c-0.2,0-0.3-0.1-0.3-0.3v-1c0-0.1,0-0.2,0-0.3c0-0.1,0.1-0.2,0.2-0.3c0.3-0.3,0.7-0.6,1-0.9c0.1-0.1,0.2-0.2,0.4-0.3
	c0.1-0.1,0.2-0.2,0.3-0.3c0.1-0.1,0.2-0.2,0.3-0.2c0.1-0.1,0.1-0.1,0.1-0.1c0,0,0.1-0.1,0.2-0.2c0.1-0.1,0.3-0.3,0.4-0.4
	c0.2-0.2,0.3-0.3,0.5-0.4c0.1-0.1,0.3-0.2,0.3-0.3c0.2-0.2,0.4-0.4,0.5-0.7c0.1-0.2,0.2-0.5,0.2-0.8c0-0.3-0.1-0.6-0.3-0.7
	c-0.2-0.1-0.5-0.2-1.1-0.2c-0.4,0-0.8,0-1.3,0.1c-0.4,0-0.8,0.1-1.1,0.1c-0.2,0-0.3,0-0.3,0c-0.1,0-0.1-0.1-0.1-0.3l-0.1-0.8
	c0-0.1,0-0.2,0-0.3c0-0.1,0.2-0.2,0.4-0.3c0.2-0.1,0.4-0.1,0.7-0.2c0.3-0.1,0.5-0.1,0.8-0.1c0.3,0,0.5-0.1,0.7-0.1
	c0.2,0,0.4,0,0.5,0c0.6,0,1.2,0.1,1.6,0.2c0.4,0.1,0.8,0.3,1.1,0.5c0.3,0.2,0.5,0.5,0.6,0.8c0.1,0.3,0.2,0.7,0.2,1.1
	c0,0.3,0,0.6-0.1,0.8c-0.1,0.2-0.1,0.5-0.3,0.7c-0.1,0.2-0.3,0.4-0.4,0.6c-0.2,0.2-0.4,0.4-0.6,0.7c-0.2,0.2-0.3,0.3-0.5,0.5
	c-0.1,0.1-0.3,0.3-0.5,0.5c-0.2,0.2-0.3,0.3-0.5,0.5c-0.2,0.2-0.4,0.4-0.7,0.6l0,0.1h3.4c0.1,0,0.2,0,0.2,0.1c0,0,0,0.1,0,0.2v1.2
	c0,0.1,0,0.2,0,0.2C30.8,33.8,30.7,33.8,30.6,33.8z M22.9,30.2h-4.4c-0.2,0-0.3-0.1-0.3-0.3v-1.1c0-0.2,0.1-0.3,0.3-0.3h4.4
	c0.1,0,0.2,0,0.2,0.1c0,0,0.1,0.1,0.1,0.2v1.1c0,0.1,0,0.2-0.1,0.2C23.1,30.1,23,30.2,22.9,30.2z M16.4,33.8h-5.3
	c-0.2,0-0.3-0.1-0.3-0.3v-1.2c0-0.2,0.1-0.3,0.3-0.3h1.5v-5.4h-1.3c-0.1,0-0.2,0-0.3,0c-0.1,0-0.1-0.1-0.1-0.2v-0.7
	c0-0.1,0-0.2,0-0.3c0-0.1,0.1-0.1,0.2-0.2l1.2-0.5c0.2-0.1,0.3-0.1,0.4-0.1c0.1,0,0.3,0,0.4,0h1.1c0.2,0,0.3,0.1,0.3,0.3V32h1.6
	c0.1,0,0.2,0,0.2,0.1c0,0,0.1,0.1,0.1,0.2v1.2c0,0.1,0,0.2,0,0.2C16.6,33.8,16.6,33.8,16.4,33.8z"/>
</svg>
                                            <p>
                                                ВПЧ 6 и 11 чаще всего вызывают аногенитальные бородавки,
                                            </p>
                                                    <span>
                                                    помимо ещё 40 штаммов. <Br>
                                                    ВПЧ 6 и 11 относят к вирусам "низкого" онкогенного риска.
                                                    </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-1-3 col-1-xs">
                                        <div class="container_block under-size">
                                            <svg version="1.1" class="container_block-svg4" id="Layer_1" xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px"
                                                 viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">
<style type="text/css">
    .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#FFF200;}
    .st1{fill-rule:evenodd;clip-rule:evenodd;fill:#626365;}
</style>
                                                <path class="st0" d="M25,0c13.8,0,25,11.2,25,25c0,13.8-11.2,25-25,25S0,38.8,0,25C0,11.2,11.2,0,25,0z"/>
                                                <path class="st1" d="M25,47c-3.9,0-7.6-1-11-2.9l-8.3,2.5c-0.4,0.1-0.9,0-1.2-0.3C4.1,45.9,4,45.5,4.2,45l2.4-8
	C4.2,33.4,3,29.3,3,25C3,12.9,12.9,3,25,3c12.1,0,22,9.9,22,22C47,37.1,37.1,47,25,47z M25,5.5C14.2,5.5,5.5,14.2,5.5,25
	c0,4,1.2,7.8,3.5,11.1c0.2,0.3,0.3,0.7,0.2,1.1l-1.9,6.4l6.7-2c0.1,0,0.2-0.1,0.4-0.1c0.2,0,0.4,0.1,0.6,0.2
	c3.1,1.9,6.6,2.8,10.2,2.8c10.8,0,19.5-8.8,19.5-19.5C44.5,14.2,35.8,5.5,25,5.5z M27.9,29.7v0.7c0,1.6-1.3,2.9-2.9,2.9
	c-1.6,0-2.9-1.3-2.9-2.9v-3.2c0-1.6,1.3-2.9,2.9-2.9c2.4,0,4.3-1.9,4.3-4.3c0-2.4-1.9-4.3-4.3-4.3c-2.4,0-4.3,1.9-4.3,4.3
	c0,1.6-1.3,2.9-2.9,2.9c-1.6,0-2.9-1.3-2.9-2.9C14.9,14.5,19.4,10,25,10c5.6,0,10.1,4.5,10.1,10.1C35.1,24.5,32.1,28.5,27.9,29.7z
	 M25,12.5c-4.2,0-7.6,3.4-7.6,7.6c0,0.2,0.2,0.4,0.4,0.4c0.2,0,0.4-0.2,0.4-0.4c0-3.7,3-6.8,6.8-6.8c3.7,0,6.8,3,6.8,6.8
	c0,3.7-3,6.8-6.8,6.8c-0.2,0-0.4,0.2-0.4,0.4v3.2c0,0.2,0.2,0.4,0.4,0.4c0.2,0,0.4-0.2,0.4-0.4v-1.7c0-0.6,0.4-1.1,1-1.2
	c3.6-0.7,6.2-3.8,6.2-7.5C32.6,15.9,29.2,12.5,25,12.5z M21.7,36.7c0.1-0.3,0.2-0.5,0.4-0.7c0.1-0.2,0.2-0.3,0.4-0.5
	c0.2-0.2,0.3-0.3,0.5-0.4c0.2-0.1,0.4-0.2,0.6-0.3c0.2-0.1,0.4-0.1,0.6-0.2c1.2-0.2,2.4,0.1,3.2,1c0.7,0.7,1,1.6,1,2.5
	c0,0.9-0.4,1.8-1,2.5c-0.7,0.7-1.6,1-2.5,1c-0.2,0-0.4,0-0.7-0.1c-0.3-0.1-0.5-0.1-0.6-0.2c-0.3-0.1-0.5-0.2-0.7-0.4
	c-0.2-0.1-0.3-0.3-0.5-0.4c-0.7-0.7-1-1.6-1-2.5c0-0.2,0-0.4,0.1-0.7C21.6,37.1,21.6,36.9,21.7,36.7z M24.2,38.8
	c0,0,0.1,0.1,0.1,0.1c0.1,0.1,0.2,0.1,0.2,0.1c0,0,0.1,0,0.2,0.1c0,0,0.1,0,0.2,0c0.3,0,0.6-0.1,0.7-0.3c0.2-0.2,0.3-0.5,0.3-0.8
	c0-0.3-0.1-0.5-0.3-0.7C25.5,37.1,25.3,37,25,37c-0.1,0-0.1,0-0.2,0c0,0-0.1,0-0.2,0.1c-0.1,0-0.2,0.1-0.2,0.1c0,0-0.1,0.1-0.1,0.1
	c0,0-0.1,0.1-0.1,0.1c-0.1,0.1-0.1,0.2-0.1,0.2c0,0,0,0.1-0.1,0.2c0,0,0,0.1,0,0.2C23.9,38.3,24,38.6,24.2,38.8z"/>
</svg>
                                            <p>
                                                Вирус папилломы человека зачастую протекает бессимптомно,
                                            </p>
                                                    <span>
                                                       т.е. без каких-либо внешних проявлений, и определяется только лабораторно.
                                                    </span>
                                        </div>
                                    </div>
                                    <div class="col-1-3 col-1-xs">
                                        <div class="container_block under-size">
                                            <svg version="1.1" class="container_block-svg5" id="Layer_1" xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px"
                                                 viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">
<style type="text/css">
    .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#FFF200;}
    .st1{fill-rule:evenodd;clip-rule:evenodd;fill:#626365;}
</style>
                                                <path class="st0" d="M25,0c13.8,0,25,11.2,25,25c0,13.8-11.2,25-25,25S0,38.8,0,25C0,11.2,11.2,0,25,0z"/>
                                                <path class="st1" d="M44.8,42H31c-0.7,0-1.2-0.5-1.2-1.2V39c0-1.1,0.7-2,1.6-2.4l3.9-1.7v-0.4c-0.8-0.6-1.4-1.3-1.7-2.2
	c-0.8-0.4-1.4-1.3-1.4-2.4c0-0.9,0.4-1.6,0.9-2.1c0.2-2.2,2-3.9,4.2-3.9h1c2.2,0,4,1.7,4.2,3.9c0.6,0.5,0.9,1.2,0.9,2.1
	c0,1.1-0.5,2-1.4,2.4c-0.4,0.9-1,1.6-1.7,2.2v0.4l4,1.8C45.4,37,46,38,46,39v1.8C46,41.5,45.5,42,44.8,42z M43.6,39
	c0-0.1,0-0.1-0.1-0.2L39.3,37c-0.7-0.3-1.3-1.1-1.3-1.9v-0.8c0-0.7,0.3-1.3,0.9-1.7c0.6-0.4,1-1,1.2-1.7c0.1-0.5,0.5-0.8,1-0.9
	c0,0,0-0.1,0-0.1c0-0.1,0-0.1,0-0.1c-0.5-0.1-0.9-0.6-0.9-1.2v-0.3c0-1-0.8-1.9-1.9-1.9h-1c-1,0-1.9,0.8-1.9,1.9v0.3
	c0,0.6-0.4,1-0.9,1.2c0,0,0,0.1,0,0.1c0,0,0,0.1,0,0.1c0.5,0.1,0.9,0.4,1,0.9c0.2,0.7,0.6,1.3,1.2,1.7c0.6,0.4,0.9,1,0.9,1.7v0.8
	c0,0.9-0.5,1.6-1.3,1.9l-4.1,1.8c-0.1,0-0.2,0.1-0.2,0.2v0.6h11.4V39z M31.9,22H18.1c-0.7,0-1.2-0.5-1.2-1.2V19c0-1.1,0.7-2,1.6-2.4
	l3.9-1.7v-0.4c-0.8-0.6-1.4-1.3-1.7-2.2c-0.8-0.4-1.4-1.3-1.4-2.4c0-0.9,0.4-1.6,0.9-2.1c0.2-2.2,2-3.9,4.2-3.9h1
	c2.2,0,4,1.7,4.2,3.9c0.6,0.5,0.9,1.2,0.9,2.1c0,1.1-0.5,2-1.4,2.4c-0.4,0.9-1,1.6-1.7,2.2v0.4l4,1.8c0.9,0.4,1.6,1.3,1.6,2.4v1.8
	C33.1,21.5,32.6,22,31.9,22z M30.7,19c0-0.1,0-0.1-0.1-0.2L26.4,17c-0.7-0.3-1.3-1.1-1.3-1.9v-0.8c0-0.7,0.3-1.3,0.9-1.7
	c0.6-0.4,1-1,1.2-1.7c0.1-0.5,0.5-0.8,1-0.9c0,0,0-0.1,0-0.1c0-0.1,0-0.1,0-0.1c-0.5-0.1-0.9-0.6-0.9-1.2V8.3c0-1-0.8-1.9-1.9-1.9
	h-1c-1,0-1.9,0.9-1.9,1.9v0.3c0,0.6-0.4,1-0.9,1.2c0,0,0,0.1,0,0.1c0,0,0,0.1,0,0.1c0.5,0.1,0.9,0.4,1,0.9c0.2,0.7,0.6,1.3,1.2,1.7
	c0.6,0.4,0.9,1,0.9,1.7v0.8c0,0.9-0.5,1.6-1.3,1.9l-4.1,1.8c-0.1,0-0.2,0.1-0.2,0.2v0.6h11.4V19z M16.4,32.3c-0.4,0.9-1,1.6-1.7,2.2
	v0.4l4,1.8c0.9,0.4,1.6,1.3,1.6,2.4v1.8c0,0.7-0.5,1.2-1.2,1.2H5.2C4.5,42,4,41.5,4,40.8V39c0-1.1,0.7-2,1.6-2.4l3.9-1.7v-0.4
	c-0.8-0.6-1.4-1.3-1.7-2.2C7,31.9,6.4,31,6.4,29.9c0-0.9,0.4-1.6,0.9-2.1c0.2-2.2,2-3.9,4.2-3.9h1c2.2,0,4,1.7,4.2,3.9
	c0.6,0.5,0.9,1.2,0.9,2.1C17.7,31,17.2,31.9,16.4,32.3z M15.3,29.8c-0.5-0.1-0.9-0.6-0.9-1.2v-0.3c0-1-0.8-1.9-1.9-1.9h-1
	c-1,0-1.9,0.8-1.9,1.9v0.3c0,0.6-0.4,1-0.9,1.2c0,0,0,0.1,0,0.1c0,0,0,0.1,0,0.1c0.5,0.1,0.9,0.4,1,0.9c0.2,0.7,0.6,1.3,1.2,1.7
	c0.6,0.4,0.9,1,0.9,1.7v0.8c0,0.9-0.5,1.6-1.3,1.9l-4.1,1.8c-0.1,0-0.2,0.1-0.2,0.2v0.6h11.4V39c0-0.1,0-0.1-0.1-0.2L13.5,37
	c-0.7-0.3-1.3-1.1-1.3-1.9v-0.8c0-0.7,0.3-1.3,0.9-1.7c0.6-0.4,1-1,1.2-1.7c0.1-0.5,0.5-0.8,1-0.9c0,0,0-0.1,0-0.1
	C15.3,29.9,15.3,29.8,15.3,29.8z M18.8,32.8c-0.3-0.6-0.2-1.3,0.4-1.6l4.6-2.8v-4.4c0-0.7,0.5-1.2,1.2-1.2c0.7,0,1.2,0.5,1.2,1.2
	v4.4l4.6,2.8c0.6,0.3,0.7,1.1,0.4,1.6c-0.2,0.4-0.6,0.6-1,0.6c-0.2,0-0.4-0.1-0.6-0.2L25,30.4l-4.6,2.8c-0.2,0.1-0.4,0.2-0.6,0.2
	C19.4,33.4,19,33.2,18.8,32.8z"/>
</svg>
                                            <p>
                                                Симптомы ВПЧ могут появиться через несколько лет после заражения.
                                            </p>
                                                    <span>
                                                        В большинстве случаев сложно узнать, когда именно произошло заражение.
                                                    </span>
                                        </div>
                                    </div>
                                    <div class="col-1-3 col-1-xs">
                                        <div class="container_block under-size">
                                            <svg version="1.1" class="container_block-svg6" id="Layer_1" xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px"
                                                 viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">
<style type="text/css">
    .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#FFF200;}
    .st1{fill-rule:evenodd;clip-rule:evenodd;fill:#626365;}
</style>
                                                <path class="st0" d="M25,0c13.8,0,25,11.2,25,25c0,13.8-11.2,25-25,25S0,38.8,0,25C0,11.2,11.2,0,25,0z"/>
                                                <path class="st1" d="M27.4,16.1c1.7,0,3,1.4,3,3.1v5.1c0,1.7-1.4,3.1-3,3.1h-5c-1.7,0-3-1.4-3-3.1v-5.1c0-1.7,1.4-3.1,3-3.1H27.4z
	 M22.1,19.2v5.1c0,0.2,0.2,0.4,0.4,0.4h5c0.2,0,0.4-0.2,0.4-0.4v-5.1c0-0.2-0.2-0.4-0.4-0.4h-5C22.2,18.8,22.1,18.9,22.1,19.2z
	 M9.7,31.7c0.2,0.3,0.4,0.6,0.4,1c0,0.4-0.1,0.7-0.4,1C9.5,33.9,9.1,34,8.8,34c-0.4,0-0.7-0.1-0.9-0.4c-0.2-0.2-0.4-0.6-0.4-0.9
	c0-0.4,0.1-0.7,0.4-1C8.3,31.2,9.2,31.2,9.7,31.7z M47.9,22.7c-0.2,0.5-0.7,0.9-1.3,0.9h-4.2v21.1c0,0.7-0.6,1.4-1.3,1.4H8.8
	c-0.7,0-1.3-0.6-1.3-1.4v-7.9c0-0.7,0.6-1.4,1.3-1.4s1.3,0.6,1.3,1.4v6.6h7.8V31c0-0.7,0.6-1.4,1.3-1.4h11.5c0.7,0,1.3,0.6,1.3,1.4
	v12.3h7.7V22.2c0-0.7,0.6-1.4,1.3-1.4h1.8l-5.1-4.2c-0.3-0.2-0.5-0.6-0.5-0.9c0-0.4,0.1-0.7,0.3-1c0.2-0.3,0.5-0.5,0.9-0.5
	c0.4,0,0.7,0.1,1,0.3l0.3,0.3V3.7H33v5.5l1.7,1.4c0.3,0.2,0.4,0.6,0.5,0.9c0,0.4-0.1,0.7-0.3,1C34.7,12.8,34.4,13,34,13
	c-0.4,0-0.7-0.1-1-0.3L24.9,6L7.1,20.9h1.7c0.7,0,1.3,0.6,1.3,1.4v6.4c0,0.7-0.6,1.4-1.3,1.4s-1.3-0.6-1.3-1.4v-5H3.3
	c-0.6,0-1.1-0.4-1.3-0.9c-0.2-0.5,0-1.1,0.4-1.5L24.1,3.3c0.5-0.4,1.2-0.4,1.7,0L30.4,7V2.4C30.4,1.6,31,1,31.7,1h9.4
	c0.7,0,1.3,0.6,1.3,1.4v14.4c0,0.1,0,0.2,0,0.3l5.1,4.2C47.9,21.5,48.1,22.1,47.9,22.7z M29.4,32.3h-8.9v11h8.9V32.3z"/>
</svg>
                                            <p>
                                                Риск заболеть ВПЧ становится тем выше,
                                            </p>
                                                    <span>
                                                       чем больше половых партнёров было у человека.
                                                    </span>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-next swiper-button-next next-place">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px"
                                 viewBox="0 0 62 62" style="enable-background:new 0 0 62 62;" xml:space="preserve">
<style type="text/css">
    .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#626365;}
    .st1{fill:#FFF200;}
</style>
                                <path class="st0" d="M25.3,21.1c0.8-0.8,2-0.8,2.8,0l8.5,8.5c0.8,0.8,0.8,2,0,2.8l-8.5,8.5c-0.8,0.8-2,0.8-2.8,0
	c-0.8-0.8-0.8-2,0-2.8l7.1-7.1l-7.1-7.1C24.6,23.2,24.6,21.9,25.3,21.1z"/>
                                <g>
                                    <path class="st1" d="M31,62C13.9,62,0,48.1,0,31S13.9,0,31,0s31,13.9,31,31S48.1,62,31,62z M31,2C15,2,2,15,2,31s13,29,29,29
		s29-13,29-29S47,2,31,2z"/>
                                </g>
</svg>
                        </div>
                        <div class="block-prev swiper-button-prev prev-place">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                 viewBox="0 0 62 62" style="enable-background:new 0 0 62 62;" xml:space="preserve">
<style type="text/css">
    .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#626365;}
    .st1{fill:#FFF200;}
</style>
                                <path class="st0" d="M34.4,23.9L27.3,31l7.1,7.1c0.8,0.8,0.8,2,0,2.8c-0.8,0.8-2,0.8-2.8,0L23,32.4c-0.8-0.8-0.8-2,0-2.8l8.5-8.5
	c0.8-0.8,2-0.8,2.8,0C35.1,21.9,35.1,23.2,34.4,23.9z"/>
                                <g>
                                    <path class="st1" d="M31,62C13.9,62,0,48.1,0,31S13.9,0,31,0s31,13.9,31,31S48.1,62,31,62z M31,2C15,2,2,15,2,31s13,29,29,29
		s29-13,29-29S47,2,31,2z"/>
                                </g>
</svg>
                        </div>
                    </div>
                    <a class="blue_link" href="#">Больше о симптомах герпеса</a>
                </div>
            </div>
        </div>
    </section>


<!--===================================================== section-results -->
<section class="section-results entry-main-image parallax-block" data-parallax="scroll" data-image-src="images/fon_block4.jpg" id="results">
    <div class="container">
        <div class="row">
            <div class="col-1-1 col-1-xs">
                <h2>Лучшие <span>результаты</span></h2>
                <div class="block-slider-holder">
                    <div class="block-slider swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="slide_block">
                                    <div class="slide_block_results">
                                        <p>До лечения герпеса</p>
                                        <div class="results_foto"></div>
                                    </div>
                                    <div class="slide_block_results float-right">
                                        <p>После лечения герпеса</p>
                                        <div class="results_foto"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide_block">
                                    <div class="slide_block_results">
                                        <p>До лечения герпеса</p>
                                        <div class="results_foto"></div>
                                    </div>
                                    <div class="slide_block_results float-right">
                                        <p>После лечения герпеса</p>
                                        <div class="results_foto"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide_block">
                                    <div class="slide_block_results">
                                        <p>До лечения герпеса</p>
                                        <div class="results_foto"></div>
                                    </div>
                                    <div class="slide_block_results float-right">
                                        <p>После лечения герпеса</p>
                                        <div class="results_foto"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block-pagination swiper-pagination"></div>
                    <div class="block-next swiper-button-next next-place">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px"
                             viewBox="0 0 62 62" style="enable-background:new 0 0 62 62;" xml:space="preserve">
<style type="text/css">
    .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#626365;}
    .st1{fill:#FFF200;}
</style>
                            <path class="st0" d="M25.3,21.1c0.8-0.8,2-0.8,2.8,0l8.5,8.5c0.8,0.8,0.8,2,0,2.8l-8.5,8.5c-0.8,0.8-2,0.8-2.8,0
	c-0.8-0.8-0.8-2,0-2.8l7.1-7.1l-7.1-7.1C24.6,23.2,24.6,21.9,25.3,21.1z"/>
                            <g>
                                <path class="st1" d="M31,62C13.9,62,0,48.1,0,31S13.9,0,31,0s31,13.9,31,31S48.1,62,31,62z M31,2C15,2,2,15,2,31s13,29,29,29
		s29-13,29-29S47,2,31,2z"/>
                            </g>
</svg>
                    </div>
                    <div class="block-prev swiper-button-prev prev-place">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                             viewBox="0 0 62 62" style="enable-background:new 0 0 62 62;" xml:space="preserve">
<style type="text/css">
    .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#626365;}
    .st1{fill:#FFF200;}
</style>
                            <path class="st0" d="M34.4,23.9L27.3,31l7.1,7.1c0.8,0.8,0.8,2,0,2.8c-0.8,0.8-2,0.8-2.8,0L23,32.4c-0.8-0.8-0.8-2,0-2.8l8.5-8.5
	c0.8-0.8,2-0.8,2.8,0C35.1,21.9,35.1,23.2,34.4,23.9z"/>
                            <g>
                                <path class="st1" d="M31,62C13.9,62,0,48.1,0,31S13.9,0,31,0s31,13.9,31,31S48.1,62,31,62z M31,2C15,2,2,15,2,31s13,29,29,29
		s29-13,29-29S47,2,31,2z"/>
                            </g>
</svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!--===================================================== section-question -->
<section class="section-question" id="question">
    <div class="container">
        <div class="row">
            <div class="col-1-1 col-1-xs">
                <h2>Часто задаваемые <span>вопросы</span></h2>
                <div class="question_block cre-animate" data-animation="scale-up" data-speed="1200" data-delay="300" data-offset="90%" data-easing="ease">
                    <svg version="1.1" class="question-svg" id="Layer_1" xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px"
                         viewBox="0 0 40 40" style="enable-background:new 0 0 40 40;" xml:space="preserve">
<style type="text/css">
    .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#FFF200;}
    .st1{fill-rule:evenodd;clip-rule:evenodd;fill:#94BEE6;}
</style>
                        <path class="st0" d="M20,8.4c6.4,0,11.6,5.2,11.6,11.6c0,6.4-5.2,11.6-11.6,11.6S8.4,26.4,8.4,20C8.4,13.6,13.6,8.4,20,8.4z"/>
                        <path class="st1" d="M20,40C9,40,0,31,0,20C0,9,9,0,20,0c11,0,20,9,20,20C40,31,31,40,20,40z M20,1.5C9.8,1.5,1.5,9.8,1.5,20
	c0,10.2,8.3,18.5,18.5,18.5c10.2,0,18.5-8.3,18.5-18.5C38.5,9.8,30.2,1.5,20,1.5z M20,36.4c-9.1,0-16.4-7.4-16.4-16.4
	c0-9.1,7.4-16.4,16.4-16.4c9.1,0,16.4,7.4,16.4,16.4C36.4,29.1,29.1,36.4,20,36.4z M20,5.1C11.8,5.1,5.1,11.8,5.1,20
	c0,8.2,6.7,14.9,14.9,14.9c8.2,0,14.9-6.7,14.9-14.9C34.9,11.8,28.2,5.1,20,5.1z M19.3,24.7c-0.3,0.3-0.8,0.3-1.1,0l-4.4-4.4
	c-0.3-0.3-0.3-0.8,0-1.1c0.3-0.3,0.8-0.3,1.1,0l3.9,3.9l6.3-6.3c0.3-0.3,0.8-0.3,1.1,0c0.3,0.3,0.3,0.8,0,1.1L19.3,24.7z"/>
</svg>

                    <div class="question-block-text">
                        <h4>Почему нельзя использовать гель беременным женщинам
                            и детям?</h4>
                        <p>
                            Гель Панавир разрешён беременным при условии, что риск от лечения не будет превышать риски от нелечения. Данная формулировка говорит о том, что исследования на данной категории женщин были ограничены, в детской практике исследования данной формы не проводились. Ограничение исследований в данных категориях ограничено законодательно.
                        </p>
                        <a class="blue_link" href="#">Узнать больше</a>
                    </div>
                </div>
                <div class="question_block cre-animate" data-animation="scale-up" data-speed="1200" data-delay="400" data-offset="90%" data-easing="ease">
                    <svg version="1.1" class="question-svg" id="Layer_1" xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px"
                         viewBox="0 0 40 40" style="enable-background:new 0 0 40 40;" xml:space="preserve">
<style type="text/css">
    .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#FFF200;}
    .st1{fill-rule:evenodd;clip-rule:evenodd;fill:#94BEE6;}
</style>
                        <path class="st0" d="M20,8.4c6.4,0,11.6,5.2,11.6,11.6c0,6.4-5.2,11.6-11.6,11.6S8.4,26.4,8.4,20C8.4,13.6,13.6,8.4,20,8.4z"/>
                        <path class="st1" d="M20,40C9,40,0,31,0,20C0,9,9,0,20,0c11,0,20,9,20,20C40,31,31,40,20,40z M20,1.5C9.8,1.5,1.5,9.8,1.5,20
	c0,10.2,8.3,18.5,18.5,18.5c10.2,0,18.5-8.3,18.5-18.5C38.5,9.8,30.2,1.5,20,1.5z M20,36.4c-9.1,0-16.4-7.4-16.4-16.4
	c0-9.1,7.4-16.4,16.4-16.4c9.1,0,16.4,7.4,16.4,16.4C36.4,29.1,29.1,36.4,20,36.4z M20,5.1C11.8,5.1,5.1,11.8,5.1,20
	c0,8.2,6.7,14.9,14.9,14.9c8.2,0,14.9-6.7,14.9-14.9C34.9,11.8,28.2,5.1,20,5.1z M19.3,24.7c-0.3,0.3-0.8,0.3-1.1,0l-4.4-4.4
	c-0.3-0.3-0.3-0.8,0-1.1c0.3-0.3,0.8-0.3,1.1,0l3.9,3.9l6.3-6.3c0.3-0.3,0.8-0.3,1.1,0c0.3,0.3,0.3,0.8,0,1.1L19.3,24.7z"/>
</svg>

                    <div class="question-block-text">
                        <h4>Возможно ли при лечении папиллом/кондилом обойтись без деструкции (механического удаления)? Возможно ли, нанося гель Панарив на папилломы, исключить их без деструкции? Какой курс лечения?</h4>
                        <p>
                            Монотерапия гелевой формой Панавир возможна только при следующих условиях высыпаний: элементы не более 4мм, количество элементов не более 5 штук. Продолжительность курса от 2-х недель до 1,5 месяцев. При элементах большего размера или количестве необходимо назначение системной терапии противовирусной, иммунокоррегирующей, а также удаление элементов деструктивными методами лечения.
                        </p>
                        <a class="blue_link" href="#">Узнать больше</a>
                    </div>
                </div>
                <div class="question_block cre-animate" data-animation="scale-up" data-speed="1200" data-delay="500" data-offset="90%" data-easing="ease">
                    <svg version="1.1" class="question-svg" id="Layer_1" xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px"
                         viewBox="0 0 40 40" style="enable-background:new 0 0 40 40;" xml:space="preserve">
<style type="text/css">
    .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#FFF200;}
    .st1{fill-rule:evenodd;clip-rule:evenodd;fill:#94BEE6;}
</style>
                        <path class="st0" d="M20,8.4c6.4,0,11.6,5.2,11.6,11.6c0,6.4-5.2,11.6-11.6,11.6S8.4,26.4,8.4,20C8.4,13.6,13.6,8.4,20,8.4z"/>
                        <path class="st1" d="M20,40C9,40,0,31,0,20C0,9,9,0,20,0c11,0,20,9,20,20C40,31,31,40,20,40z M20,1.5C9.8,1.5,1.5,9.8,1.5,20
	c0,10.2,8.3,18.5,18.5,18.5c10.2,0,18.5-8.3,18.5-18.5C38.5,9.8,30.2,1.5,20,1.5z M20,36.4c-9.1,0-16.4-7.4-16.4-16.4
	c0-9.1,7.4-16.4,16.4-16.4c9.1,0,16.4,7.4,16.4,16.4C36.4,29.1,29.1,36.4,20,36.4z M20,5.1C11.8,5.1,5.1,11.8,5.1,20
	c0,8.2,6.7,14.9,14.9,14.9c8.2,0,14.9-6.7,14.9-14.9C34.9,11.8,28.2,5.1,20,5.1z M19.3,24.7c-0.3,0.3-0.8,0.3-1.1,0l-4.4-4.4
	c-0.3-0.3-0.3-0.8,0-1.1c0.3-0.3,0.8-0.3,1.1,0l3.9,3.9l6.3-6.3c0.3-0.3,0.8-0.3,1.1,0c0.3,0.3,0.3,0.8,0,1.1L19.3,24.7z"/>
</svg>

                    <div class="question-block-text">
                        <h4>Эффективен ли при контагиозном моллюске?</h4>
                        <p>
                            Контагиозный моллюск - вирусная инфекция, вызываемая одним из вирусов группы оспы, которая поражает кожу и иногда слизистые оболочки. При данной вирусной инфекции клинические исследования субстанции Панавир не проводились. Но учитывая то, что основное действующее вещество Панавир обладает широким спектром противовирусного действия, специалисты активно используют данный препарат с положительным эффектом.
                        </p>
                        <a class="blue_link" href="#">Узнать больше</a>
                    </div>
                </div>
                <div class="question_block cre-animate" data-animation="scale-up" data-speed="1200" data-delay="600" data-offset="90%" data-easing="ease">
                    <svg version="1.1" class="question-svg" id="Layer_1" xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px"
                         viewBox="0 0 40 40" style="enable-background:new 0 0 40 40;" xml:space="preserve">
<style type="text/css">
    .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#FFF200;}
    .st1{fill-rule:evenodd;clip-rule:evenodd;fill:#94BEE6;}
</style>
                        <path class="st0" d="M20,8.4c6.4,0,11.6,5.2,11.6,11.6c0,6.4-5.2,11.6-11.6,11.6S8.4,26.4,8.4,20C8.4,13.6,13.6,8.4,20,8.4z"/>
                        <path class="st1" d="M20,40C9,40,0,31,0,20C0,9,9,0,20,0c11,0,20,9,20,20C40,31,31,40,20,40z M20,1.5C9.8,1.5,1.5,9.8,1.5,20
	c0,10.2,8.3,18.5,18.5,18.5c10.2,0,18.5-8.3,18.5-18.5C38.5,9.8,30.2,1.5,20,1.5z M20,36.4c-9.1,0-16.4-7.4-16.4-16.4
	c0-9.1,7.4-16.4,16.4-16.4c9.1,0,16.4,7.4,16.4,16.4C36.4,29.1,29.1,36.4,20,36.4z M20,5.1C11.8,5.1,5.1,11.8,5.1,20
	c0,8.2,6.7,14.9,14.9,14.9c8.2,0,14.9-6.7,14.9-14.9C34.9,11.8,28.2,5.1,20,5.1z M19.3,24.7c-0.3,0.3-0.8,0.3-1.1,0l-4.4-4.4
	c-0.3-0.3-0.3-0.8,0-1.1c0.3-0.3,0.8-0.3,1.1,0l3.9,3.9l6.3-6.3c0.3-0.3,0.8-0.3,1.1,0c0.3,0.3,0.3,0.8,0,1.1L19.3,24.7z"/>
</svg>

                    <div class="question-block-text">
                        <h4>Эффективен ли при висящих папилломах без деструкции?</h4>
                        <p>
                            Монотерапия гелевой формой Панавир возможна только при следующих условиях высыпаний: элементы не более 4мм, количество элементов не более 5 штук. Продолжительность курса от 2-х недель до 1,5 месяцев.
                        </p>
                        <a class="blue_link" href="#">Узнать больше</a>
                    </div>
                </div>
                <div class="question_block cre-animate" data-animation="scale-up" data-speed="1200" data-delay="700" data-offset="90%" data-easing="ease">
                    <svg version="1.1" class="question-svg" id="Layer_1" xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px"
                         viewBox="0 0 40 40" style="enable-background:new 0 0 40 40;" xml:space="preserve">
<style type="text/css">
    .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#FFF200;}
    .st1{fill-rule:evenodd;clip-rule:evenodd;fill:#94BEE6;}
</style>
                        <path class="st0" d="M20,8.4c6.4,0,11.6,5.2,11.6,11.6c0,6.4-5.2,11.6-11.6,11.6S8.4,26.4,8.4,20C8.4,13.6,13.6,8.4,20,8.4z"/>
                        <path class="st1" d="M20,40C9,40,0,31,0,20C0,9,9,0,20,0c11,0,20,9,20,20C40,31,31,40,20,40z M20,1.5C9.8,1.5,1.5,9.8,1.5,20
	c0,10.2,8.3,18.5,18.5,18.5c10.2,0,18.5-8.3,18.5-18.5C38.5,9.8,30.2,1.5,20,1.5z M20,36.4c-9.1,0-16.4-7.4-16.4-16.4
	c0-9.1,7.4-16.4,16.4-16.4c9.1,0,16.4,7.4,16.4,16.4C36.4,29.1,29.1,36.4,20,36.4z M20,5.1C11.8,5.1,5.1,11.8,5.1,20
	c0,8.2,6.7,14.9,14.9,14.9c8.2,0,14.9-6.7,14.9-14.9C34.9,11.8,28.2,5.1,20,5.1z M19.3,24.7c-0.3,0.3-0.8,0.3-1.1,0l-4.4-4.4
	c-0.3-0.3-0.3-0.8,0-1.1c0.3-0.3,0.8-0.3,1.1,0l3.9,3.9l6.3-6.3c0.3-0.3,0.8-0.3,1.1,0c0.3,0.3,0.3,0.8,0,1.1L19.3,24.7z"/>
</svg>

                    <div class="question-block-text">
                        <h4>Как лучше применять гель интравагинально?</h4>
                        <p>
                            Интравагинально гель Панавир лучше применять при помощи аппликатора для инравагинального введения лекарственных форм или путём нанесения на тампон.
                        </p>
                        <a class="blue_link" href="#">Узнать больше</a>
                    </div>
                </div>
                <div class="question_block cre-animate" data-animation="scale-up" data-speed="1200" data-delay="800" data-offset="90%" data-easing="ease">
                    <svg version="1.1" class="question-svg" id="Layer_1" xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px"
                         viewBox="0 0 40 40" style="enable-background:new 0 0 40 40;" xml:space="preserve">
<style type="text/css">
    .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#FFF200;}
    .st1{fill-rule:evenodd;clip-rule:evenodd;fill:#94BEE6;}
</style>
                        <path class="st0" d="M20,8.4c6.4,0,11.6,5.2,11.6,11.6c0,6.4-5.2,11.6-11.6,11.6S8.4,26.4,8.4,20C8.4,13.6,13.6,8.4,20,8.4z"/>
                        <path class="st1" d="M20,40C9,40,0,31,0,20C0,9,9,0,20,0c11,0,20,9,20,20C40,31,31,40,20,40z M20,1.5C9.8,1.5,1.5,9.8,1.5,20
	c0,10.2,8.3,18.5,18.5,18.5c10.2,0,18.5-8.3,18.5-18.5C38.5,9.8,30.2,1.5,20,1.5z M20,36.4c-9.1,0-16.4-7.4-16.4-16.4
	c0-9.1,7.4-16.4,16.4-16.4c9.1,0,16.4,7.4,16.4,16.4C36.4,29.1,29.1,36.4,20,36.4z M20,5.1C11.8,5.1,5.1,11.8,5.1,20
	c0,8.2,6.7,14.9,14.9,14.9c8.2,0,14.9-6.7,14.9-14.9C34.9,11.8,28.2,5.1,20,5.1z M19.3,24.7c-0.3,0.3-0.8,0.3-1.1,0l-4.4-4.4
	c-0.3-0.3-0.3-0.8,0-1.1c0.3-0.3,0.8-0.3,1.1,0l3.9,3.9l6.3-6.3c0.3-0.3,0.8-0.3,1.1,0c0.3,0.3,0.3,0.8,0,1.1L19.3,24.7z"/>
</svg>

                    <div class="question-block-text">
                        <h4>Помогает ли как самостоятельный препарат при папилломах?</h4>
                        <p>
                            Монотерапия гелевой формой Панавир возможна только при следующих условиях высыпаний: элементы не более 4мм, количество элементов не более 5 штук. Продолжительность курса от 2-х недель до 1,5 месяцев.
                        </p>
                        <a class="blue_link" href="#">Узнать больше</a>
                    </div>
                </div>
                <div class="question_block cre-animate" data-animation="scale-up" data-speed="1200" data-delay="900" data-offset="90%" data-easing="ease">
                    <svg version="1.1" class="question-svg" id="Layer_1" xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px"
                         viewBox="0 0 40 40" style="enable-background:new 0 0 40 40;" xml:space="preserve">
<style type="text/css">
    .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#FFF200;}
    .st1{fill-rule:evenodd;clip-rule:evenodd;fill:#94BEE6;}
</style>
                        <path class="st0" d="M20,8.4c6.4,0,11.6,5.2,11.6,11.6c0,6.4-5.2,11.6-11.6,11.6S8.4,26.4,8.4,20C8.4,13.6,13.6,8.4,20,8.4z"/>
                        <path class="st1" d="M20,40C9,40,0,31,0,20C0,9,9,0,20,0c11,0,20,9,20,20C40,31,31,40,20,40z M20,1.5C9.8,1.5,1.5,9.8,1.5,20
	c0,10.2,8.3,18.5,18.5,18.5c10.2,0,18.5-8.3,18.5-18.5C38.5,9.8,30.2,1.5,20,1.5z M20,36.4c-9.1,0-16.4-7.4-16.4-16.4
	c0-9.1,7.4-16.4,16.4-16.4c9.1,0,16.4,7.4,16.4,16.4C36.4,29.1,29.1,36.4,20,36.4z M20,5.1C11.8,5.1,5.1,11.8,5.1,20
	c0,8.2,6.7,14.9,14.9,14.9c8.2,0,14.9-6.7,14.9-14.9C34.9,11.8,28.2,5.1,20,5.1z M19.3,24.7c-0.3,0.3-0.8,0.3-1.1,0l-4.4-4.4
	c-0.3-0.3-0.3-0.8,0-1.1c0.3-0.3,0.8-0.3,1.1,0l3.9,3.9l6.3-6.3c0.3-0.3,0.8-0.3,1.1,0c0.3,0.3,0.3,0.8,0,1.1L19.3,24.7z"/>
</svg>

                    <div class="question-block-text">
                        <h4>Действительно ли после него нет образования рубцовой ткани?</h4>
                        <p>
                            «Панавир» восстанавливает архитектонику эпителиальной ткани. Главное условие ранозаживления без образования рубцовой ткани - это повреждение не глубже базального слоя.
                        </p>
                        <a class="blue_link" href="#">Узнать больше</a>
                    </div>
                </div>
                <div class="question_block cre-animate" data-animation="scale-up" data-speed="1200" data-delay="1000" data-offset="90%" data-easing="ease">
                    <svg version="1.1" class="question-svg" id="Layer_1" xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px"
                         viewBox="0 0 40 40" style="enable-background:new 0 0 40 40;" xml:space="preserve">
<style type="text/css">
    .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#FFF200;}
    .st1{fill-rule:evenodd;clip-rule:evenodd;fill:#94BEE6;}
</style>
                        <path class="st0" d="M20,8.4c6.4,0,11.6,5.2,11.6,11.6c0,6.4-5.2,11.6-11.6,11.6S8.4,26.4,8.4,20C8.4,13.6,13.6,8.4,20,8.4z"/>
                        <path class="st1" d="M20,40C9,40,0,31,0,20C0,9,9,0,20,0c11,0,20,9,20,20C40,31,31,40,20,40z M20,1.5C9.8,1.5,1.5,9.8,1.5,20
	c0,10.2,8.3,18.5,18.5,18.5c10.2,0,18.5-8.3,18.5-18.5C38.5,9.8,30.2,1.5,20,1.5z M20,36.4c-9.1,0-16.4-7.4-16.4-16.4
	c0-9.1,7.4-16.4,16.4-16.4c9.1,0,16.4,7.4,16.4,16.4C36.4,29.1,29.1,36.4,20,36.4z M20,5.1C11.8,5.1,5.1,11.8,5.1,20
	c0,8.2,6.7,14.9,14.9,14.9c8.2,0,14.9-6.7,14.9-14.9C34.9,11.8,28.2,5.1,20,5.1z M19.3,24.7c-0.3,0.3-0.8,0.3-1.1,0l-4.4-4.4
	c-0.3-0.3-0.3-0.8,0-1.1c0.3-0.3,0.8-0.3,1.1,0l3.9,3.9l6.3-6.3c0.3-0.3,0.8-0.3,1.1,0c0.3,0.3,0.3,0.8,0,1.1L19.3,24.7z"/>
</svg>

                    <div class="question-block-text">
                        <h4>Возможно ли применение в стоматологии?</h4>
                        <p>
                            Гель Панавир не имеет противопоказаний для применения на слизистых оболочках ротовой полости, поэтому противопоказаний для применения в стоматологии нет.
                        </p>
                        <a class="blue_link" href="#">Узнать больше</a>
                    </div>
                </div>
                <div class="question_block cre-animate" data-animation="scale-up" data-speed="1200" data-delay="1100" data-offset="90%" data-easing="ease">
                    <svg version="1.1" class="question-svg" id="Layer_1" xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px"
                         viewBox="0 0 40 40" style="enable-background:new 0 0 40 40;" xml:space="preserve">
<style type="text/css">
    .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#FFF200;}
    .st1{fill-rule:evenodd;clip-rule:evenodd;fill:#94BEE6;}
</style>
                        <path class="st0" d="M20,8.4c6.4,0,11.6,5.2,11.6,11.6c0,6.4-5.2,11.6-11.6,11.6S8.4,26.4,8.4,20C8.4,13.6,13.6,8.4,20,8.4z"/>
                        <path class="st1" d="M20,40C9,40,0,31,0,20C0,9,9,0,20,0c11,0,20,9,20,20C40,31,31,40,20,40z M20,1.5C9.8,1.5,1.5,9.8,1.5,20
	c0,10.2,8.3,18.5,18.5,18.5c10.2,0,18.5-8.3,18.5-18.5C38.5,9.8,30.2,1.5,20,1.5z M20,36.4c-9.1,0-16.4-7.4-16.4-16.4
	c0-9.1,7.4-16.4,16.4-16.4c9.1,0,16.4,7.4,16.4,16.4C36.4,29.1,29.1,36.4,20,36.4z M20,5.1C11.8,5.1,5.1,11.8,5.1,20
	c0,8.2,6.7,14.9,14.9,14.9c8.2,0,14.9-6.7,14.9-14.9C34.9,11.8,28.2,5.1,20,5.1z M19.3,24.7c-0.3,0.3-0.8,0.3-1.1,0l-4.4-4.4
	c-0.3-0.3-0.3-0.8,0-1.1c0.3-0.3,0.8-0.3,1.1,0l3.9,3.9l6.3-6.3c0.3-0.3,0.8-0.3,1.1,0c0.3,0.3,0.3,0.8,0,1.1L19.3,24.7z"/>
</svg>

                    <div class="question-block-text">
                        <h4>Сколько хранить гель Панавир после вскрытия тубы?</h4>
                        <p>
                            На протяжении всего срока годности, при соблюдении условий хранения.
                        </p>
                        <a class="blue_link" href="#">Узнать больше</a>
                    </div>
                </div>
                <div class="question_block cre-animate" data-animation="scale-up" data-speed="1200" data-delay="1200" data-offset="90%" data-easing="ease">
                    <svg version="1.1" class="question-svg" id="Layer_1" xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px"
                         viewBox="0 0 40 40" style="enable-background:new 0 0 40 40;" xml:space="preserve">
<style type="text/css">
    .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#FFF200;}
    .st1{fill-rule:evenodd;clip-rule:evenodd;fill:#94BEE6;}
</style>
                        <path class="st0" d="M20,8.4c6.4,0,11.6,5.2,11.6,11.6c0,6.4-5.2,11.6-11.6,11.6S8.4,26.4,8.4,20C8.4,13.6,13.6,8.4,20,8.4z"/>
                        <path class="st1" d="M20,40C9,40,0,31,0,20C0,9,9,0,20,0c11,0,20,9,20,20C40,31,31,40,20,40z M20,1.5C9.8,1.5,1.5,9.8,1.5,20
	c0,10.2,8.3,18.5,18.5,18.5c10.2,0,18.5-8.3,18.5-18.5C38.5,9.8,30.2,1.5,20,1.5z M20,36.4c-9.1,0-16.4-7.4-16.4-16.4
	c0-9.1,7.4-16.4,16.4-16.4c9.1,0,16.4,7.4,16.4,16.4C36.4,29.1,29.1,36.4,20,36.4z M20,5.1C11.8,5.1,5.1,11.8,5.1,20
	c0,8.2,6.7,14.9,14.9,14.9c8.2,0,14.9-6.7,14.9-14.9C34.9,11.8,28.2,5.1,20,5.1z M19.3,24.7c-0.3,0.3-0.8,0.3-1.1,0l-4.4-4.4
	c-0.3-0.3-0.3-0.8,0-1.1c0.3-0.3,0.8-0.3,1.1,0l3.9,3.9l6.3-6.3c0.3-0.3,0.8-0.3,1.1,0c0.3,0.3,0.3,0.8,0,1.1L19.3,24.7z"/>
</svg>

                    <div class="question-block-text">
                        <h4>Можно ли использовать гель Панавир непосредственно около глаз при удалении нитевидных папиллом с ресничного края глаза?</h4>
                        <p>
                            Можно при условии, что гель не будет попадать на слизистые оболочки глаза.
                        </p>
                        <a class="blue_link" href="#">Узнать больше</a>
                    </div>
                </div>
                <div class="question_block cre-animate" data-animation="scale-up" data-speed="1200" data-delay="1300" data-offset="90%" data-easing="ease">
                    <svg version="1.1" class="question-svg" id="Layer_1" xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px"
                         viewBox="0 0 40 40" style="enable-background:new 0 0 40 40;" xml:space="preserve">
<style type="text/css">
    .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#FFF200;}
    .st1{fill-rule:evenodd;clip-rule:evenodd;fill:#94BEE6;}
</style>
                        <path class="st0" d="M20,8.4c6.4,0,11.6,5.2,11.6,11.6c0,6.4-5.2,11.6-11.6,11.6S8.4,26.4,8.4,20C8.4,13.6,13.6,8.4,20,8.4z"/>
                        <path class="st1" d="M20,40C9,40,0,31,0,20C0,9,9,0,20,0c11,0,20,9,20,20C40,31,31,40,20,40z M20,1.5C9.8,1.5,1.5,9.8,1.5,20
	c0,10.2,8.3,18.5,18.5,18.5c10.2,0,18.5-8.3,18.5-18.5C38.5,9.8,30.2,1.5,20,1.5z M20,36.4c-9.1,0-16.4-7.4-16.4-16.4
	c0-9.1,7.4-16.4,16.4-16.4c9.1,0,16.4,7.4,16.4,16.4C36.4,29.1,29.1,36.4,20,36.4z M20,5.1C11.8,5.1,5.1,11.8,5.1,20
	c0,8.2,6.7,14.9,14.9,14.9c8.2,0,14.9-6.7,14.9-14.9C34.9,11.8,28.2,5.1,20,5.1z M19.3,24.7c-0.3,0.3-0.8,0.3-1.1,0l-4.4-4.4
	c-0.3-0.3-0.3-0.8,0-1.1c0.3-0.3,0.8-0.3,1.1,0l3.9,3.9l6.3-6.3c0.3-0.3,0.8-0.3,1.1,0c0.3,0.3,0.3,0.8,0,1.1L19.3,24.7z"/>
</svg>

                    <div class="question-block-text">
                        <h4>Можно ли применять гель Панавир при аллергических дерматозах?</h4>
                        <p>
                            Применение препарата запрещено при индивидуальной непереносимости компонентов.
                        </p>
                        <a class="blue_link" href="#">Узнать больше</a>
                    </div>
                </div>
                <div class="question_block cre-animate" data-animation="scale-up" data-speed="1200" data-delay="1400" data-offset="90%" data-easing="ease">
                    <svg version="1.1" class="question-svg" id="Layer_1" xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px"
                         viewBox="0 0 40 40" style="enable-background:new 0 0 40 40;" xml:space="preserve">
<style type="text/css">
    .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#FFF200;}
    .st1{fill-rule:evenodd;clip-rule:evenodd;fill:#94BEE6;}
</style>
                        <path class="st0" d="M20,8.4c6.4,0,11.6,5.2,11.6,11.6c0,6.4-5.2,11.6-11.6,11.6S8.4,26.4,8.4,20C8.4,13.6,13.6,8.4,20,8.4z"/>
                        <path class="st1" d="M20,40C9,40,0,31,0,20C0,9,9,0,20,0c11,0,20,9,20,20C40,31,31,40,20,40z M20,1.5C9.8,1.5,1.5,9.8,1.5,20
	c0,10.2,8.3,18.5,18.5,18.5c10.2,0,18.5-8.3,18.5-18.5C38.5,9.8,30.2,1.5,20,1.5z M20,36.4c-9.1,0-16.4-7.4-16.4-16.4
	c0-9.1,7.4-16.4,16.4-16.4c9.1,0,16.4,7.4,16.4,16.4C36.4,29.1,29.1,36.4,20,36.4z M20,5.1C11.8,5.1,5.1,11.8,5.1,20
	c0,8.2,6.7,14.9,14.9,14.9c8.2,0,14.9-6.7,14.9-14.9C34.9,11.8,28.2,5.1,20,5.1z M19.3,24.7c-0.3,0.3-0.8,0.3-1.1,0l-4.4-4.4
	c-0.3-0.3-0.3-0.8,0-1.1c0.3-0.3,0.8-0.3,1.1,0l3.9,3.9l6.3-6.3c0.3-0.3,0.8-0.3,1.1,0c0.3,0.3,0.3,0.8,0,1.1L19.3,24.7z"/>
</svg>

                    <div class="question-block-text">
                        <h4>Нет ли противопоказаний при длительном применении геля Панавир?</h4>
                        <p>
                            Нет противопоказаний к длительному применению.
                        </p>
                        <a class="blue_link" href="#">Узнать больше</a>
                    </div>
                </div>
                <div class="question_block cre-animate" data-animation="scale-up" data-speed="1200" data-delay="1500" data-offset="90%" data-easing="ease">
                    <svg version="1.1" class="question-svg" id="Layer_1" xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px"
                         viewBox="0 0 40 40" style="enable-background:new 0 0 40 40;" xml:space="preserve">
<style type="text/css">
    .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#FFF200;}
    .st1{fill-rule:evenodd;clip-rule:evenodd;fill:#94BEE6;}
</style>
                        <path class="st0" d="M20,8.4c6.4,0,11.6,5.2,11.6,11.6c0,6.4-5.2,11.6-11.6,11.6S8.4,26.4,8.4,20C8.4,13.6,13.6,8.4,20,8.4z"/>
                        <path class="st1" d="M20,40C9,40,0,31,0,20C0,9,9,0,20,0c11,0,20,9,20,20C40,31,31,40,20,40z M20,1.5C9.8,1.5,1.5,9.8,1.5,20
	c0,10.2,8.3,18.5,18.5,18.5c10.2,0,18.5-8.3,18.5-18.5C38.5,9.8,30.2,1.5,20,1.5z M20,36.4c-9.1,0-16.4-7.4-16.4-16.4
	c0-9.1,7.4-16.4,16.4-16.4c9.1,0,16.4,7.4,16.4,16.4C36.4,29.1,29.1,36.4,20,36.4z M20,5.1C11.8,5.1,5.1,11.8,5.1,20
	c0,8.2,6.7,14.9,14.9,14.9c8.2,0,14.9-6.7,14.9-14.9C34.9,11.8,28.2,5.1,20,5.1z M19.3,24.7c-0.3,0.3-0.8,0.3-1.1,0l-4.4-4.4
	c-0.3-0.3-0.3-0.8,0-1.1c0.3-0.3,0.8-0.3,1.1,0l3.9,3.9l6.3-6.3c0.3-0.3,0.8-0.3,1.1,0c0.3,0.3,0.3,0.8,0,1.1L19.3,24.7z"/>
</svg>

                    <div class="question-block-text">
                        <h4>Можно ли применять Панавир одновременно с другими препаратами?</h4>
                        <p>
                            Подходит как для моно-, так и для комплексной терапии.
                        </p>
                        <a class="blue_link" href="#">Узнать больше</a>
                    </div>
                </div>
                <a class="button-yellow button open-phone-modal si-floating2" data-animation="scale-up" data-speed="1600" data-delay="1600" data-offset="50%" data-easing="ease" href="#">Задать вопрос</a>
                <div class="si-overlay"></div>
                <div class="si-modals-wrapper">
                    <div class="si-success-modal si-success-modal-1">
                        <a href="#" class="si-close"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><defs><path id="4928a" d="M1144.15 325.8l5.4 5.27c.6.58.6 1.53 0 2.11-.59.58-1.56.58-2.15 0l-5.37-5.23-5.52 5.6c-.58.58-1.5.58-2.08 0a1.5 1.5 0 0 1 0-2.1l5.2-5.29-5.2-5.27a1.5 1.5 0 0 1 0-2.12c.57-.58 1.5-.58 2.08 0l5.16 5.24 5.73-5.59c.6-.58 1.56-.58 2.16 0 .6.59.6 1.53 0 2.11z"/></defs><g><g transform="translate(-1132 -316)"><use fill="#626365" xlink:href="#4928a"/></g></g></svg></a>

                        <div class="modal-container align-center">

                            <div class="si-success-modal-title">
                                <div class="title">
                                    Спасибо!
                                </div>
                            </div>

                            <div class="modal_sub_title">
                                Наш менеджер свяжется
                                с Вами в течение 15 мин
                            </div>
                            <div class="title-2">
                                Время работы отдела продаж:
                            </div>
                            <div class="sub_title-2">
                                пн-пт с 10.00 до 20.00 (по Москве)
                            </div>
                        </div>
                        <div class="line"></div>
                        <div class="modal_social">
                            <div class="social-title">
                                Подпишитесь на наши новости:
                            </div>
                            <div class="smm">
                                <a href="#"> <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px"
                                                  viewBox="0 0 26 26" style="enable-background:new 0 0 26 26;" xml:space="preserve">
<style type="text/css">
    .st0{fill:#3A589B;}
</style>
                                        <path class="st0" d="M11.2,20.1h2.9V13H16l0.3-2.4h-2.2l0-1.2c0-0.6,0.1-1,1-1h1.2V5.9h-1.9c-2.3,0-3.2,1.2-3.2,3.2v1.5H9.7V13h1.5
	V20.1z M0,0h26v26H0V0z"/>
</svg></a>
                                <a href="#"><svg version="1.1" id="Layer_1" class="google" xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px"
                                                 viewBox="0 0 26 26"  style="enable-background:new 0 0 26 26;" xml:space="preserve">
<style type="text/css">
    .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#D6492F;}
</style>
                                        <path class="st0" d="M26,9v17H11.9l2.3,0c0.2-0.7,0.3-1.2,0.3-1.9c0-2.6-2.2-3.9-3.9-5.4l-1.4-1.1c-0.4-0.3-1-0.8-1-1.6
	c0-0.8,0.6-1.4,1.1-1.9c1.6-1.3,3.1-2.6,3.1-5.4c0-2.6-1.4-4-2.3-4.8h2.3l2.1-1.7H6.6c-2,0-4.4,0.3-6.6,2.1V0h26v7h-4.9V2.1h-2.1V7
	h-4.8v2h4.8v4.9h2.1V9H26z M0,22.5c0.8-1.1,1.7-1.2,2.3-1.4c1.6-0.5,3.7-0.6,4-0.6c0.4,0,0.6,0,0.9,0c2.9,2.1,4.8,3.1,4.8,5.1
	c0,0.2,0,0.3,0,0.4H0V22.5z M1.2,7.5c0-1,0.1-2,0.7-2.8c0.6-0.8,1.7-1.3,2.7-1.3c3.2,0,4.8,4.3,4.8,7c0,0.6-0.3,1.6-1,2.5
	c-0.6,0.7-1.6,1-2.6,1C2.5,13.9,1.2,10.1,1.2,7.5z M5.1,15.4c-0.2,0.5-0.4,0.8-0.4,1.5c0,1.2,0.6,1.9,1.1,2.6
	c-1.5,0.1-3.7,0.1-5.9,1.1v-6.3c1,0.9,2.2,1.2,3.9,1.2C4.3,15.4,4.7,15.4,5.1,15.4z"/>
</svg></a>
                                <a href="#"><svg version="1.1" class="insta" id="Layer_1" xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px"
                                                 viewBox="0 0 26 26" style="enable-background:new 0 0 26 26;" xml:space="preserve">
<style type="text/css">
    .st0{fill:#3B5998;}
</style>
                                        <g>
                                            <path class="st0" d="M17.1,13.5c-0.1,0.6-0.3,1.1-0.6,1.6c-0.3,0.5-0.7,0.9-1.2,1.3c-1.3,0.9-3,0.9-4.3,0.2
		c-0.7-0.4-1.2-0.9-1.6-1.6c-0.6-1-0.6-2.1-0.3-3.2c-0.4,0-0.8,0-1.3,0v0c0,2,0,3.9,0,5.9c0,0.3,0.2,0.5,0.5,0.5c3.1,0,6.2,0,9.3,0
		c0.3,0,0.5-0.2,0.5-0.5c0-2,0-3.9,0-5.9v0h-1.3C17.1,12.3,17.1,12.9,17.1,13.5z"/>
                                            <path class="st0" d="M12.9,15.7c1.5,0,2.7-1.2,2.7-2.6c0-1.5-1.2-2.7-2.7-2.7c-1.5,0-2.7,1.2-2.7,2.6
		C10.3,14.5,11.5,15.6,12.9,15.7z"/>
                                            <path class="st0" d="M15.9,9.4c0.1,0.2,0.3,0.4,0.5,0.4c0.2,0,0.4,0,0.6,0v0c0.2,0,0.4,0,0.7,0c0.3,0,0.5-0.2,0.5-0.5
		c0-0.4,0-0.8,0-1.3c0-0.3-0.2-0.5-0.5-0.5c-0.4,0-0.8,0-1.2,0c-0.3,0-0.5,0.2-0.5,0.5c0,0.4,0,0.8,0,1.2
		C15.9,9.3,15.9,9.4,15.9,9.4z"/>
                                            <path class="st0" d="M0,0v26h26V0H0z M19.6,18.3c0,0.1,0,0.1,0,0.2c-0.1,0.5-0.5,1-1.1,1.1c-0.1,0-0.1,0-0.2,0v0H7.7
		c0,0-0.1,0-0.1,0c-0.6-0.1-1.1-0.5-1.2-1.1c0-0.1,0-0.1,0-0.2V7.7c0,0,0,0,0-0.1C6.5,7,6.9,6.6,7.5,6.4c0.1,0,0.1,0,0.2,0h10.6
		c0,0,0,0,0.1,0c0.6,0.1,1.1,0.5,1.2,1.1c0,0.1,0,0.1,0,0.2V18.3z"/>
                                        </g>
</svg></a>
                                <a href="#"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px"
                                                 viewBox="0 0 26 26" class="vk" style="enable-background:new 0 0 26 26;" xml:space="preserve">
<style type="text/css">
    .st0{fill:#4C75A3;}
</style>
                                        <path class="st0" d="M0,0v26h26V0H0z M20.4,18.4c-0.2,0-0.3,0-0.5,0c-0.3,0-0.5,0-0.8,0c-0.5,0-1,0-1.4-0.2
	c-0.2-0.1-0.4-0.4-0.6-0.6c-0.3-0.3-0.7-0.7-1.3-1.2c-0.5-0.5-1.3-1-1.7-0.8c-0.4,0.2,0.1,2.2-0.3,2.5c-0.5,0.3-1.9,0.3-3.3-0.1
	c-0.3-0.1-0.7-0.3-1-0.5c-1.1-0.7-2.1-1.7-2.9-2.7c-0.8-1-1.4-2.1-2-3.3c-0.2-0.5-0.5-1-0.7-1.5c0-0.1-0.1-0.2-0.1-0.3
	C3.7,9.6,3.6,9.4,3.7,9.1c0.1-0.4,0.5-0.4,0.8-0.4c0.1,0,0.3,0,0.4,0c0.5,0,1,0,1.4,0c0.1,0,0.3,0,0.4,0C7,8.9,7.1,9.2,7.2,9.4
	C7.3,9.6,7.4,9.8,7.4,10c0.1,0.2,0.2,0.4,0.2,0.5c0.3,0.6,0.6,1.3,0.9,1.8c0.4,0.6,0.8,1.1,1.2,1.6c0.6,0.6,0.7-0.1,0.7-0.1
	s0-2.4,0-3.2c0-0.8-0.6-1-0.8-1.4c-0.2-0.5,0.3-0.5,0.3-0.5h2.3c0,0,1.1,0,1.3,0S14,9,14,9s0,3.3,0,3.8c0,0.6,0.1,0.6,0.4,0.5
	c0.3-0.1,1.7-1.9,1.9-2.2c0.1-0.1,0.1-0.2,0.2-0.3c0.1-0.2,0.3-0.5,0.4-0.7c0.1-0.1,0.2-0.3,0.3-0.4c0.1-0.2,0.3-0.4,0.4-0.6
	c0.1-0.2,0.2-0.3,0.5-0.4c0.2,0,0.3,0,0.5,0c0.2,0,0.3,0,0.5,0c0,0,0.8,0,1.2,0c0.1,0,0.2,0,0.3,0c0.2,0,0.2,0.2,0.3,0.3
	c0.1,0.2,0,0.4-0.1,0.6c-0.2,0.4-0.4,0.9-0.7,1.3c-0.2,0.3-0.4,0.7-0.7,1c-0.4,0.5-0.8,1.3-1.1,1.6c-0.2,0.3-0.2,0.4-0.1,0.6
	c0.1,0.2,1.2,1.3,1.5,1.6c0.3,0.3,0.7,0.7,1.2,1.4c0.1,0.1,0.2,0.3,0.3,0.5c0,0.1,0.1,0.2,0.1,0.3C21.1,18.3,20.7,18.4,20.4,18.4z"
                                            />
</svg></a>
                            </div>
                        </div>
                    </div>
                    <div class="si-modal phone-modal">
                        <a href="#" class="si-close"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><defs><path id="4928a" d="M1144.15 325.8l5.4 5.27c.6.58.6 1.53 0 2.11-.59.58-1.56.58-2.15 0l-5.37-5.23-5.52 5.6c-.58.58-1.5.58-2.08 0a1.5 1.5 0 0 1 0-2.1l5.2-5.29-5.2-5.27a1.5 1.5 0 0 1 0-2.12c.57-.58 1.5-.58 2.08 0l5.16 5.24 5.73-5.59c.6-.58 1.56-.58 2.16 0 .6.59.6 1.53 0 2.11z"/></defs><g><g transform="translate(-1132 -316)"><use fill="#626365" xlink:href="#4928a"/></g></g></svg></a>

                        <div class="modal-container align-center">

                            <div class="modal-form-title">
                                Закажите консультацию
                            </div>

                            <div class="modal-time">
                                Ответ в течение 15 минут
                            </div>

                            <form action="send.php" method="post" class="send-form" autocomplete="off">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-1-2 col-1-2-xs">
                                            <input type="text" name="client_name" class="client-name" placeholder="Ваше имя">
                                        </div>
                                        <div class="col-1-2 col-1-2-xs">
                                            <input type="tel" name="client_phone" class="client-phone" placeholder="Ваш телефон">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-1-1 col-1-xs">
                                            <textarea name="client_message" class="client-message" placeholder="Ваш вопрос"></textarea>
                                        </div>
                                    </div>
                                </div>


                                <input type="hidden" name="send_type" class="send-type" value="1">
                                <input type="hidden" name="send_extra" class="send-extra" value="1">

                                <div class="btn-holder">
                                    <button type="submit" class="btn">Позвоните мне</button>
                                    <div class="g-recaptcha" id="g-recaptcha"></div>
                                </div>
                                <!--                                                     Agreement -->
                                <div class="form-agree align-left">
                                    <label class="checkbox-label form-agree-check checked">
                                        <input type="checkbox" checked>
                                        Нажимая кнопку "ПОЗВОНИТЕ МНЕ", я&nbsp;даю своё согласие на&nbsp;обработку
                                        моих персональных данных в&nbsp;соответствии с&nbsp;Федеральным законом
                                        от&nbsp;27.07.2006&nbsp;года №152&#8209;ФЗ "О&nbsp;персональных данных",
                                        на&nbsp;условиях и&nbsp;для&nbsp;целей, определённых
                                        в&nbsp;Согласии на&nbsp;обработку персональных данных.
                                    </label>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                        </div>
                    </div>
                    <div class="si-modal phone-modal">
                        <a href="#" class="si-close"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><defs><path id="4928a" d="M1144.15 325.8l5.4 5.27c.6.58.6 1.53 0 2.11-.59.58-1.56.58-2.15 0l-5.37-5.23-5.52 5.6c-.58.58-1.5.58-2.08 0a1.5 1.5 0 0 1 0-2.1l5.2-5.29-5.2-5.27a1.5 1.5 0 0 1 0-2.12c.57-.58 1.5-.58 2.08 0l5.16 5.24 5.73-5.59c.6-.58 1.56-.58 2.16 0 .6.59.6 1.53 0 2.11z"/></defs><g><g transform="translate(-1132 -316)"><use fill="#626365" xlink:href="#4928a"/></g></g></svg></a>

                        <div class="modal-container align-center">

                            <div class="modal-form-title">
                                Закажите консультацию
                            </div>

                            <div class="modal-time">
                                Ответ в течение 15 минут
                            </div>

                            <form action="send.php" method="post" class="send-form" autocomplete="off">
                                <div class="row">
                                    <div class="col-1-2">
                                        <input type="text" name="client_name" class="client-name" placeholder="Ваше имя">
                                    </div>

                                    <div class="col-1-2">
                                        <input type="tel" name="client_phone" class="client-phone" placeholder="Ваш телефон">
                                    </div>
                                </div>

                                <textarea name="client_message" class="client-message" placeholder="Ваш вопрос"></textarea>

                                <input type="hidden" name="send_type" class="send-type" value="1">
                                <input type="hidden" name="send_extra" class="send-extra" value="1">

                                <div class="btn-holder">
                                    <button type="submit" class="btn">Позвоните мне</button>
                                    <div class="g-recaptcha" id="g-recaptcha"></div>
                                </div>

                                <!--             Agreement -->
                                <div class="form-agree align-left">
                                    <label class="checkbox-label form-agree-check checked">
                                        <input type="checkbox" checked>
                                        Нажимая кнопку "ПОЗВОНИТЕ МНЕ", я&nbsp;даю своё согласие на&nbsp;обработку
                                        моих персональных данных в&nbsp;соответствии с&nbsp;Федеральным законом
                                        от&nbsp;27.07.2006&nbsp;года №152&#8209;ФЗ "О&nbsp;персональных данных",
                                        на&nbsp;условиях и&nbsp;для&nbsp;целей, определённых
                                        в&nbsp;Согласии на&nbsp;обработку персональных данных.
                                    </label>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!--===================================================== section-opinion -->
<section class="section-opinion" id="opinion">
    <div class="container">
        <div class="row">
            <div class="col-1-1 col-1-xs">
                <h2>Мнение <span>специалистов</span> </h2>
                <div class="block-slider-holder">
                    <div class="block-slider swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="slide_block">
                                    <div class="quotes">&#147;</div>
                                    <p class="text_italic">
                                        «Поскольку ВПЧ может исчезать самостоятельно, главное, в чем сходятся все специалисты, это постоянный контроль пациентов с целью не пропустить неблагоприятного развития событий. Между тем, далеко не все пациенты согласны только на такой контроль. Совершенно естественно, что многие из них предпочитают стимулировать исчезновение ВПЧ.
                                    </p>
                                    <p class="text_bold">
                                        В этом аспекте хорошо зарекомендовал себя российский препарат Панавир®, обладающий прямым противовирусным и иммунокоррегирующим действием, благодаря чему его можно использовать в качестве средства, стимулирующего скорейшее исчезновение ВПЧ».
                                    </p>

                                </div>
                                <a class="blue-link" href="#">> Подробнее в интервью</a>
                                <p class="text-last">
                                    Доктор медицинских наук, профессор кафедры кожных и венерических болезней МГМСУ,<Br>
                                    <span>Гомберг Михаил Александрович.</span>
                                </p>
                                <a class="blue-link-mobile" href="#">> Подробнее в интервью</a>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide_block">
                                    <div class="quotes">&#147;</div>
                                    <p class="text_italic">
                                        «Целесообразно подбирать для лечения ВПЧ комплексную терапию с включением и противовирусных препаратов, и иммуномодуляторов.
                                    </p>
                                    <p class="text_bold">
                                        В этом отношении хорошо зарекомендовал себя оригинальный отечественный препарат Панавир, который помимо прямого противовирусного действия обладает и иммунокоррегирующими свойствами, что позволяет добиться стойкого положительного эффекта от лечения с помощью короткого курса монотерапии».
                                    </p>
                                </div>
                                <a class="blue-link" href="#">> Подробнее в интервью</a>
                                <p class="text-last">
                                    Доктор медицинских наук, профессор заведующий кафедрой дерматовенерологии ФПКМР РУДН,<Br>
                                    <span>Молочков Антон Владимирович.</span>
                                </p>
                                <a class="blue-link-mobile" href="#">> Подробнее в интервью</a>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide_block">
                                    <div class="quotes">&#147;</div>
                                    <p class="text_italic">
                                        «Появление штаммов вируса герпеса, устойчивых к наиболее известным противогерпетическим средствам, содержащим ациклические нуклеозиды (например ацикловир, валацикловир, валвир), снижает эффективность терапии, направленной на устранение основной причины герпеса. Это побуждает к поиску новых препаратов и схем лечения данного заболевания. Поэтому в вопросе терапии вируса герпеса наиболее эффективна именно комплексная терапия и необходимо применение препаратов, действующих не только на вирус, но и повышающих иммунитет.
                                    </p>
                                    <p class="text_bold">
                                        В лечении герпеса Панавир показал высокую эффективность, хорошую переносимость, отсутствие аллергических реакций и побочных действий. Панавир является лекарственным средством с высокой противовирусной активностью, обладает выраженным иммунокоррегирующим действием».
                                    </p>
                                </div>
                                <a class="blue-link" href="#">> Подробнее в интервью</a>
                                <p class="text-last">
                                    Доцент кафедры кожных и венерических болезней МГМСУ им. А.И. Евдокимова, <br>
                                    Чернова Н.И.
                                    </span>
                                </p>
                                <a class="blue-link-mobile" href="#">> Подробнее в интервью</a>
                            </div>
                        </div>
                    </div>
                    <div class="block-pagination swiper-pagination"></div>
                    <div class="block-next swiper-button-next next-place">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px"
                             viewBox="0 0 62 62" style="enable-background:new 0 0 62 62;" xml:space="preserve">
<style type="text/css">
    .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#626365;}
    .st1{fill:#FFF200;}
</style>
                            <path class="st0" d="M25.3,21.1c0.8-0.8,2-0.8,2.8,0l8.5,8.5c0.8,0.8,0.8,2,0,2.8l-8.5,8.5c-0.8,0.8-2,0.8-2.8,0
	c-0.8-0.8-0.8-2,0-2.8l7.1-7.1l-7.1-7.1C24.6,23.2,24.6,21.9,25.3,21.1z"/>
                            <g>
                                <path class="st1" d="M31,62C13.9,62,0,48.1,0,31S13.9,0,31,0s31,13.9,31,31S48.1,62,31,62z M31,2C15,2,2,15,2,31s13,29,29,29
		s29-13,29-29S47,2,31,2z"/>
                            </g>
</svg>

                    </div>
                    <div class="block-prev swiper-button-prev prev-place">

                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                             viewBox="0 0 62 62" style="enable-background:new 0 0 62 62;" xml:space="preserve">
<style type="text/css">
    .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#626365;}
    .st1{fill:#FFF200;}
</style>
                            <path class="st0" d="M34.4,23.9L27.3,31l7.1,7.1c0.8,0.8,0.8,2,0,2.8c-0.8,0.8-2,0.8-2.8,0L23,32.4c-0.8-0.8-0.8-2,0-2.8l8.5-8.5
	c0.8-0.8,2-0.8,2.8,0C35.1,21.9,35.1,23.2,34.4,23.9z"/>
                            <g>
                                <path class="st1" d="M31,62C13.9,62,0,48.1,0,31S13.9,0,31,0s31,13.9,31,31S48.1,62,31,62z M31,2C15,2,2,15,2,31s13,29,29,29
		s29-13,29-29S47,2,31,2z"/>
                            </g>
</svg>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!--===================================================== section-posts -->
<section class="section-posts" id="posts">
    <h2>Полезные <span>статьи</span></h2>
    <div class="container">
        <div class="row">
            <div class="col-1-2 col-1-2-xs col-1-xxs padding-left cre-animate" data-animation="scale-up" data-speed="1500" data-delay="300" data-offset="90%" data-easing="easeInOutBack">
                <div class="posts_foto"></div>
                <div class="posts_text">
                    <h6>ЗАГОЛОВОК СТАТЬИ</h6>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget.
                    </p>
                    <a class="blue_link" href="#">Читать подробнее</a>
                </div>
            </div>
            <div class="col-1-2 col-1-2-xs col-1-xxs cre-animate" data-animation="scale-up" data-speed="1500" data-delay="300" data-offset="90%" data-easing="easeInOutBack">
                <div class="posts_foto"></div>
                <div class="posts_text">
                    <h6>ЗАГОЛОВОК СТАТЬИ</h6>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget.
                    </p>
                    <a class="blue_link" href="#">Читать подробнее</a>
                </div>
            </div>

        </div>
        <a class="button-yellow si-floating4" data-animation="scale-up" data-speed="1500" data-delay="600" data-offset="100%" data-easing="ease" href="#">Ещё статьи</a>
    </div>
</section>


<!--===================================================== section-ruler -->
<section class="section-ruler entry-main-image parallax-block" data-parallax="scroll" data-image-src="images/fon_block4.jpg" id="ruler">
    <div class="container">
        <div class="row">
            <div class="col-1-1 col-1-xs">
                <h2>ЛИНЕЙКА <span>ПАНАВИР®</span></h2>
                <div class="block-slider-holder">
                    <div class="block-slider swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="slide_block">
                                    <div class="row">
                                        <div class="col-1-3">
                                                <div class="block_foto"></div>
                                                <p>Название продукта</p>
                                        </div>
                                        <div class="col-1-3">
                                                <div class="block_foto"></div>
                                                <p>Название продукта</p>
                                        </div>
                                        <div class="col-1-3">
                                                <div class="block_foto"></div>
                                                <p>Название продукта</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide_block">
                                    <div class="row">
                                        <div class="col-1-3">
                                            <div class="block_foto"></div>
                                            <p>Название продукта</p>
                                        </div>
                                        <div class="col-1-3">
                                            <div class="block_foto"></div>
                                            <p>Название продукта</p>
                                        </div>
                                        <div class="col-1-3">
                                            <div class="block_foto"></div>
                                            <p>Название продукта</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide_block">
                                    <div class="row">
                                        <div class="col-1-3">
                                            <div class="block_foto"></div>
                                            <p>Название продукта</p>
                                        </div>
                                        <div class="col-1-3">
                                            <div class="block_foto"></div>
                                            <p>Название продукта</p>
                                        </div>
                                        <div class="col-1-3">
                                            <div class="block_foto"></div>
                                            <p>Название продукта</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block-pagination swiper-pagination"></div>
                    <div class="block-next swiper-button-next next-place">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px"
                             viewBox="0 0 62 62" style="enable-background:new 0 0 62 62;" xml:space="preserve">
<style type="text/css">
    .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#626365;}
    .st1{fill:#FFF200;}
</style>
                            <path class="st0" d="M25.3,21.1c0.8-0.8,2-0.8,2.8,0l8.5,8.5c0.8,0.8,0.8,2,0,2.8l-8.5,8.5c-0.8,0.8-2,0.8-2.8,0
	c-0.8-0.8-0.8-2,0-2.8l7.1-7.1l-7.1-7.1C24.6,23.2,24.6,21.9,25.3,21.1z"/>
                            <g>
                                <path class="st1" d="M31,62C13.9,62,0,48.1,0,31S13.9,0,31,0s31,13.9,31,31S48.1,62,31,62z M31,2C15,2,2,15,2,31s13,29,29,29
		s29-13,29-29S47,2,31,2z"/>
                            </g>
</svg>

                    </div>
                    <div class="block-prev swiper-button-prev prev-place">

                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                             viewBox="0 0 62 62" style="enable-background:new 0 0 62 62;" xml:space="preserve">
<style type="text/css">
    .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#626365;}
    .st1{fill:#FFF200;}
</style>
                            <path class="st0" d="M34.4,23.9L27.3,31l7.1,7.1c0.8,0.8,0.8,2,0,2.8c-0.8,0.8-2,0.8-2.8,0L23,32.4c-0.8-0.8-0.8-2,0-2.8l8.5-8.5
	c0.8-0.8,2-0.8,2.8,0C35.1,21.9,35.1,23.2,34.4,23.9z"/>
                            <g>
                                <path class="st1" d="M31,62C13.9,62,0,48.1,0,31S13.9,0,31,0s31,13.9,31,31S48.1,62,31,62z M31,2C15,2,2,15,2,31s13,29,29,29
		s29-13,29-29S47,2,31,2z"/>
                            </g>
</svg>

                    </div>
                </div>
                <div class="block-slider-holder mobile-slide">
                    <div class="block-slider swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="slide_block">
                                    <div class="row">
                                        <div class="col-1-2 col-1-xxs">
                                            <div class="block_foto"></div>
                                            <p>Название продукта</p>
                                        </div>
                                        <div class="col-1-2 col-1-xxs">
                                            <div class="block_foto"></div>
                                            <p>Название продукта</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide_block">
                                    <div class="row">
                                        <div class="col-1-2 col-1-xxs">
                                            <div class="block_foto"></div>
                                            <p>Название продукта</p>
                                        </div>
                                        <div class="col-1-2 col-1-xxs">
                                            <div class="block_foto"></div>
                                            <p>Название продукта</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide_block">
                                    <div class="row">
                                        <div class="col-1-2 col-1-xxs">
                                            <div class="block_foto"></div>
                                            <p>Название продукта</p>
                                        </div>
                                        <div class="col-1-2 col-1-xxs">
                                            <div class="block_foto"></div>
                                            <p>Название продукта</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block-pagination swiper-pagination"></div>
                    <div class="block-next swiper-button-next next-place">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px"
                             viewBox="0 0 62 62" style="enable-background:new 0 0 62 62;" xml:space="preserve">
<style type="text/css">
    .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#626365;}
    .st1{fill:#FFF200;}
</style>
                            <path class="st0" d="M25.3,21.1c0.8-0.8,2-0.8,2.8,0l8.5,8.5c0.8,0.8,0.8,2,0,2.8l-8.5,8.5c-0.8,0.8-2,0.8-2.8,0
	c-0.8-0.8-0.8-2,0-2.8l7.1-7.1l-7.1-7.1C24.6,23.2,24.6,21.9,25.3,21.1z"/>
                            <g>
                                <path class="st1" d="M31,62C13.9,62,0,48.1,0,31S13.9,0,31,0s31,13.9,31,31S48.1,62,31,62z M31,2C15,2,2,15,2,31s13,29,29,29
		s29-13,29-29S47,2,31,2z"/>
                            </g>
</svg>

                    </div>
                    <div class="block-prev swiper-button-prev prev-place">

                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                             viewBox="0 0 62 62" style="enable-background:new 0 0 62 62;" xml:space="preserve">
<style type="text/css">
    .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#626365;}
    .st1{fill:#FFF200;}
</style>
                            <path class="st0" d="M34.4,23.9L27.3,31l7.1,7.1c0.8,0.8,0.8,2,0,2.8c-0.8,0.8-2,0.8-2.8,0L23,32.4c-0.8-0.8-0.8-2,0-2.8l8.5-8.5
	c0.8-0.8,2-0.8,2.8,0C35.1,21.9,35.1,23.2,34.4,23.9z"/>
                            <g>
                                <path class="st1" d="M31,62C13.9,62,0,48.1,0,31S13.9,0,31,0s31,13.9,31,31S48.1,62,31,62z M31,2C15,2,2,15,2,31s13,29,29,29
		s29-13,29-29S47,2,31,2z"/>
                            </g>
</svg>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!--===================================================== footer -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-1-1 col-1-xs">
                <div class="footer_row_block">
                    <div class="logo_footer"></div>
                    <div class="smm_block">
                        <span class="smm-text">Будь в курсе!</span>
                        <div class="smm">
                            <a href="#"> <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px"
                                              viewBox="0 0 26 26" style="enable-background:new 0 0 26 26;" xml:space="preserve">
<style type="text/css">
    .st0{fill:#3A589B;}
</style>
                                    <path class="st0" d="M11.2,20.1h2.9V13H16l0.3-2.4h-2.2l0-1.2c0-0.6,0.1-1,1-1h1.2V5.9h-1.9c-2.3,0-3.2,1.2-3.2,3.2v1.5H9.7V13h1.5
	V20.1z M0,0h26v26H0V0z"/>
</svg></a>
                            <a href="#"><svg version="1.1" id="Layer_1" class="google" xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px"
                                             viewBox="0 0 26 26"  style="enable-background:new 0 0 26 26;" xml:space="preserve">
<style type="text/css">
    .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#D6492F;}
</style>
                                    <path class="st0" d="M26,9v17H11.9l2.3,0c0.2-0.7,0.3-1.2,0.3-1.9c0-2.6-2.2-3.9-3.9-5.4l-1.4-1.1c-0.4-0.3-1-0.8-1-1.6
	c0-0.8,0.6-1.4,1.1-1.9c1.6-1.3,3.1-2.6,3.1-5.4c0-2.6-1.4-4-2.3-4.8h2.3l2.1-1.7H6.6c-2,0-4.4,0.3-6.6,2.1V0h26v7h-4.9V2.1h-2.1V7
	h-4.8v2h4.8v4.9h2.1V9H26z M0,22.5c0.8-1.1,1.7-1.2,2.3-1.4c1.6-0.5,3.7-0.6,4-0.6c0.4,0,0.6,0,0.9,0c2.9,2.1,4.8,3.1,4.8,5.1
	c0,0.2,0,0.3,0,0.4H0V22.5z M1.2,7.5c0-1,0.1-2,0.7-2.8c0.6-0.8,1.7-1.3,2.7-1.3c3.2,0,4.8,4.3,4.8,7c0,0.6-0.3,1.6-1,2.5
	c-0.6,0.7-1.6,1-2.6,1C2.5,13.9,1.2,10.1,1.2,7.5z M5.1,15.4c-0.2,0.5-0.4,0.8-0.4,1.5c0,1.2,0.6,1.9,1.1,2.6
	c-1.5,0.1-3.7,0.1-5.9,1.1v-6.3c1,0.9,2.2,1.2,3.9,1.2C4.3,15.4,4.7,15.4,5.1,15.4z"/>
</svg></a>
                            <a href="#"><svg version="1.1" class="insta" id="Layer_1" xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px"
                                             viewBox="0 0 26 26" style="enable-background:new 0 0 26 26;" xml:space="preserve">
<style type="text/css">
    .st0{fill:#3B5998;}
</style>
                                    <g>
                                        <path class="st0" d="M17.1,13.5c-0.1,0.6-0.3,1.1-0.6,1.6c-0.3,0.5-0.7,0.9-1.2,1.3c-1.3,0.9-3,0.9-4.3,0.2
		c-0.7-0.4-1.2-0.9-1.6-1.6c-0.6-1-0.6-2.1-0.3-3.2c-0.4,0-0.8,0-1.3,0v0c0,2,0,3.9,0,5.9c0,0.3,0.2,0.5,0.5,0.5c3.1,0,6.2,0,9.3,0
		c0.3,0,0.5-0.2,0.5-0.5c0-2,0-3.9,0-5.9v0h-1.3C17.1,12.3,17.1,12.9,17.1,13.5z"/>
                                        <path class="st0" d="M12.9,15.7c1.5,0,2.7-1.2,2.7-2.6c0-1.5-1.2-2.7-2.7-2.7c-1.5,0-2.7,1.2-2.7,2.6
		C10.3,14.5,11.5,15.6,12.9,15.7z"/>
                                        <path class="st0" d="M15.9,9.4c0.1,0.2,0.3,0.4,0.5,0.4c0.2,0,0.4,0,0.6,0v0c0.2,0,0.4,0,0.7,0c0.3,0,0.5-0.2,0.5-0.5
		c0-0.4,0-0.8,0-1.3c0-0.3-0.2-0.5-0.5-0.5c-0.4,0-0.8,0-1.2,0c-0.3,0-0.5,0.2-0.5,0.5c0,0.4,0,0.8,0,1.2
		C15.9,9.3,15.9,9.4,15.9,9.4z"/>
                                        <path class="st0" d="M0,0v26h26V0H0z M19.6,18.3c0,0.1,0,0.1,0,0.2c-0.1,0.5-0.5,1-1.1,1.1c-0.1,0-0.1,0-0.2,0v0H7.7
		c0,0-0.1,0-0.1,0c-0.6-0.1-1.1-0.5-1.2-1.1c0-0.1,0-0.1,0-0.2V7.7c0,0,0,0,0-0.1C6.5,7,6.9,6.6,7.5,6.4c0.1,0,0.1,0,0.2,0h10.6
		c0,0,0,0,0.1,0c0.6,0.1,1.1,0.5,1.2,1.1c0,0.1,0,0.1,0,0.2V18.3z"/>
                                    </g>
</svg></a>
                            <a href="#"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px"
                                             viewBox="0 0 26 26" class="vk" style="enable-background:new 0 0 26 26;" xml:space="preserve">
<style type="text/css">
    .st0{fill:#4C75A3;}
</style>
                                    <path class="st0" d="M0,0v26h26V0H0z M20.4,18.4c-0.2,0-0.3,0-0.5,0c-0.3,0-0.5,0-0.8,0c-0.5,0-1,0-1.4-0.2
	c-0.2-0.1-0.4-0.4-0.6-0.6c-0.3-0.3-0.7-0.7-1.3-1.2c-0.5-0.5-1.3-1-1.7-0.8c-0.4,0.2,0.1,2.2-0.3,2.5c-0.5,0.3-1.9,0.3-3.3-0.1
	c-0.3-0.1-0.7-0.3-1-0.5c-1.1-0.7-2.1-1.7-2.9-2.7c-0.8-1-1.4-2.1-2-3.3c-0.2-0.5-0.5-1-0.7-1.5c0-0.1-0.1-0.2-0.1-0.3
	C3.7,9.6,3.6,9.4,3.7,9.1c0.1-0.4,0.5-0.4,0.8-0.4c0.1,0,0.3,0,0.4,0c0.5,0,1,0,1.4,0c0.1,0,0.3,0,0.4,0C7,8.9,7.1,9.2,7.2,9.4
	C7.3,9.6,7.4,9.8,7.4,10c0.1,0.2,0.2,0.4,0.2,0.5c0.3,0.6,0.6,1.3,0.9,1.8c0.4,0.6,0.8,1.1,1.2,1.6c0.6,0.6,0.7-0.1,0.7-0.1
	s0-2.4,0-3.2c0-0.8-0.6-1-0.8-1.4c-0.2-0.5,0.3-0.5,0.3-0.5h2.3c0,0,1.1,0,1.3,0S14,9,14,9s0,3.3,0,3.8c0,0.6,0.1,0.6,0.4,0.5
	c0.3-0.1,1.7-1.9,1.9-2.2c0.1-0.1,0.1-0.2,0.2-0.3c0.1-0.2,0.3-0.5,0.4-0.7c0.1-0.1,0.2-0.3,0.3-0.4c0.1-0.2,0.3-0.4,0.4-0.6
	c0.1-0.2,0.2-0.3,0.5-0.4c0.2,0,0.3,0,0.5,0c0.2,0,0.3,0,0.5,0c0,0,0.8,0,1.2,0c0.1,0,0.2,0,0.3,0c0.2,0,0.2,0.2,0.3,0.3
	c0.1,0.2,0,0.4-0.1,0.6c-0.2,0.4-0.4,0.9-0.7,1.3c-0.2,0.3-0.4,0.7-0.7,1c-0.4,0.5-0.8,1.3-1.1,1.6c-0.2,0.3-0.2,0.4-0.1,0.6
	c0.1,0.2,1.2,1.3,1.5,1.6c0.3,0.3,0.7,0.7,1.2,1.4c0.1,0.1,0.2,0.3,0.3,0.5c0,0.1,0.1,0.2,0.1,0.3C21.1,18.3,20.7,18.4,20.4,18.4z"
                                        />
</svg></a>
                        </div>
                    </div>
                    <div class="contacts">
                        <span>Звонок по России бесплатный</span>
                        <p><svg xmlns="http://www.w3.org/2000/svg" class="footer_phone" width="29" height="29" viewBox="0 0 32 32"><defs><path id="nh0oa" d="M962 43.5a14.5 14.5 0 1 1-29 0 14.5 14.5 0 0 1 29 0zm-7.3 3.78a4.69 4.69 0 0 0-3.07-2.14.48.48 0 0 0-.44.1c-.7.6-1.68 1.25-2.1 1.31-2.82-1.38-4.39-4.02-4.45-4.52-.03-.28.61-1.27 1.36-2.08a.5.5 0 0 0 .12-.38c-.19-2.17-2.45-3.23-2.55-3.28a.47.47 0 0 0-.29-.04c-2.61.44-3 1.96-3.02 2.02a.5.5 0 0 0 0 .27c3.13 9.68 9.61 11.48 11.75 12.07l.4.11a.51.51 0 0 0 .36-.02c.06-.03 1.6-.75 1.98-3.12.01-.1 0-.21-.05-.3z"/></defs><g><g transform="translate(-931 -27)"><use fill="#94bee6" xlink:href="#nh0oa"/></g></g></svg>8-800-555-222-9</p>
                        <a class="blue_link button open-phone-modal" href="#">Задать вопрос</a>
                        <div class="si-overlay"></div>
                        <div class="si-modals-wrapper">
                            <div class="si-success-modal si-success-modal-1">
                                <a href="#" class="si-close"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><defs><path id="4928a" d="M1144.15 325.8l5.4 5.27c.6.58.6 1.53 0 2.11-.59.58-1.56.58-2.15 0l-5.37-5.23-5.52 5.6c-.58.58-1.5.58-2.08 0a1.5 1.5 0 0 1 0-2.1l5.2-5.29-5.2-5.27a1.5 1.5 0 0 1 0-2.12c.57-.58 1.5-.58 2.08 0l5.16 5.24 5.73-5.59c.6-.58 1.56-.58 2.16 0 .6.59.6 1.53 0 2.11z"/></defs><g><g transform="translate(-1132 -316)"><use fill="#626365" xlink:href="#4928a"/></g></g></svg></a>

                                <div class="modal-container align-center">

                                    <div class="si-success-modal-title">
                                        <div class="title">
                                            Спасибо!
                                        </div>
                                    </div>

                                    <div class="modal_sub_title">
                                        Наш менеджер свяжется
                                        с Вами в течение 15 мин
                                    </div>
                                    <div class="title-2">
                                        Время работы отдела продаж:
                                    </div>
                                    <div class="sub_title-2">
                                        пн-пт с 10.00 до 20.00 (по Москве)
                                    </div>
                                </div>
                                <div class="line"></div>
                                <div class="modal_social">
                                    <div class="social-title">
                                        Подпишитесь на наши новости:
                                    </div>
                                    <div class="smm">
                                        <a href="#"> <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px"
                                                          viewBox="0 0 26 26" style="enable-background:new 0 0 26 26;" xml:space="preserve">
<style type="text/css">
    .st0{fill:#3A589B;}
</style>
                                                <path class="st0" d="M11.2,20.1h2.9V13H16l0.3-2.4h-2.2l0-1.2c0-0.6,0.1-1,1-1h1.2V5.9h-1.9c-2.3,0-3.2,1.2-3.2,3.2v1.5H9.7V13h1.5
	V20.1z M0,0h26v26H0V0z"/>
</svg></a>
                                        <a href="#"><svg version="1.1" id="Layer_1" class="google" xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px"
                                                         viewBox="0 0 26 26"  style="enable-background:new 0 0 26 26;" xml:space="preserve">
<style type="text/css">
    .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#D6492F;}
</style>
                                                <path class="st0" d="M26,9v17H11.9l2.3,0c0.2-0.7,0.3-1.2,0.3-1.9c0-2.6-2.2-3.9-3.9-5.4l-1.4-1.1c-0.4-0.3-1-0.8-1-1.6
	c0-0.8,0.6-1.4,1.1-1.9c1.6-1.3,3.1-2.6,3.1-5.4c0-2.6-1.4-4-2.3-4.8h2.3l2.1-1.7H6.6c-2,0-4.4,0.3-6.6,2.1V0h26v7h-4.9V2.1h-2.1V7
	h-4.8v2h4.8v4.9h2.1V9H26z M0,22.5c0.8-1.1,1.7-1.2,2.3-1.4c1.6-0.5,3.7-0.6,4-0.6c0.4,0,0.6,0,0.9,0c2.9,2.1,4.8,3.1,4.8,5.1
	c0,0.2,0,0.3,0,0.4H0V22.5z M1.2,7.5c0-1,0.1-2,0.7-2.8c0.6-0.8,1.7-1.3,2.7-1.3c3.2,0,4.8,4.3,4.8,7c0,0.6-0.3,1.6-1,2.5
	c-0.6,0.7-1.6,1-2.6,1C2.5,13.9,1.2,10.1,1.2,7.5z M5.1,15.4c-0.2,0.5-0.4,0.8-0.4,1.5c0,1.2,0.6,1.9,1.1,2.6
	c-1.5,0.1-3.7,0.1-5.9,1.1v-6.3c1,0.9,2.2,1.2,3.9,1.2C4.3,15.4,4.7,15.4,5.1,15.4z"/>
</svg></a>
                                        <a href="#"><svg version="1.1" class="insta" id="Layer_1" xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px"
                                                         viewBox="0 0 26 26" style="enable-background:new 0 0 26 26;" xml:space="preserve">
<style type="text/css">
    .st0{fill:#3B5998;}
</style>
                                                <g>
                                                    <path class="st0" d="M17.1,13.5c-0.1,0.6-0.3,1.1-0.6,1.6c-0.3,0.5-0.7,0.9-1.2,1.3c-1.3,0.9-3,0.9-4.3,0.2
		c-0.7-0.4-1.2-0.9-1.6-1.6c-0.6-1-0.6-2.1-0.3-3.2c-0.4,0-0.8,0-1.3,0v0c0,2,0,3.9,0,5.9c0,0.3,0.2,0.5,0.5,0.5c3.1,0,6.2,0,9.3,0
		c0.3,0,0.5-0.2,0.5-0.5c0-2,0-3.9,0-5.9v0h-1.3C17.1,12.3,17.1,12.9,17.1,13.5z"/>
                                                    <path class="st0" d="M12.9,15.7c1.5,0,2.7-1.2,2.7-2.6c0-1.5-1.2-2.7-2.7-2.7c-1.5,0-2.7,1.2-2.7,2.6
		C10.3,14.5,11.5,15.6,12.9,15.7z"/>
                                                    <path class="st0" d="M15.9,9.4c0.1,0.2,0.3,0.4,0.5,0.4c0.2,0,0.4,0,0.6,0v0c0.2,0,0.4,0,0.7,0c0.3,0,0.5-0.2,0.5-0.5
		c0-0.4,0-0.8,0-1.3c0-0.3-0.2-0.5-0.5-0.5c-0.4,0-0.8,0-1.2,0c-0.3,0-0.5,0.2-0.5,0.5c0,0.4,0,0.8,0,1.2
		C15.9,9.3,15.9,9.4,15.9,9.4z"/>
                                                    <path class="st0" d="M0,0v26h26V0H0z M19.6,18.3c0,0.1,0,0.1,0,0.2c-0.1,0.5-0.5,1-1.1,1.1c-0.1,0-0.1,0-0.2,0v0H7.7
		c0,0-0.1,0-0.1,0c-0.6-0.1-1.1-0.5-1.2-1.1c0-0.1,0-0.1,0-0.2V7.7c0,0,0,0,0-0.1C6.5,7,6.9,6.6,7.5,6.4c0.1,0,0.1,0,0.2,0h10.6
		c0,0,0,0,0.1,0c0.6,0.1,1.1,0.5,1.2,1.1c0,0.1,0,0.1,0,0.2V18.3z"/>
                                                </g>
</svg></a>
                                        <a href="#"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px"
                                                         viewBox="0 0 26 26" class="vk" style="enable-background:new 0 0 26 26;" xml:space="preserve">
<style type="text/css">
    .st0{fill:#4C75A3;}
</style>
                                                <path class="st0" d="M0,0v26h26V0H0z M20.4,18.4c-0.2,0-0.3,0-0.5,0c-0.3,0-0.5,0-0.8,0c-0.5,0-1,0-1.4-0.2
	c-0.2-0.1-0.4-0.4-0.6-0.6c-0.3-0.3-0.7-0.7-1.3-1.2c-0.5-0.5-1.3-1-1.7-0.8c-0.4,0.2,0.1,2.2-0.3,2.5c-0.5,0.3-1.9,0.3-3.3-0.1
	c-0.3-0.1-0.7-0.3-1-0.5c-1.1-0.7-2.1-1.7-2.9-2.7c-0.8-1-1.4-2.1-2-3.3c-0.2-0.5-0.5-1-0.7-1.5c0-0.1-0.1-0.2-0.1-0.3
	C3.7,9.6,3.6,9.4,3.7,9.1c0.1-0.4,0.5-0.4,0.8-0.4c0.1,0,0.3,0,0.4,0c0.5,0,1,0,1.4,0c0.1,0,0.3,0,0.4,0C7,8.9,7.1,9.2,7.2,9.4
	C7.3,9.6,7.4,9.8,7.4,10c0.1,0.2,0.2,0.4,0.2,0.5c0.3,0.6,0.6,1.3,0.9,1.8c0.4,0.6,0.8,1.1,1.2,1.6c0.6,0.6,0.7-0.1,0.7-0.1
	s0-2.4,0-3.2c0-0.8-0.6-1-0.8-1.4c-0.2-0.5,0.3-0.5,0.3-0.5h2.3c0,0,1.1,0,1.3,0S14,9,14,9s0,3.3,0,3.8c0,0.6,0.1,0.6,0.4,0.5
	c0.3-0.1,1.7-1.9,1.9-2.2c0.1-0.1,0.1-0.2,0.2-0.3c0.1-0.2,0.3-0.5,0.4-0.7c0.1-0.1,0.2-0.3,0.3-0.4c0.1-0.2,0.3-0.4,0.4-0.6
	c0.1-0.2,0.2-0.3,0.5-0.4c0.2,0,0.3,0,0.5,0c0.2,0,0.3,0,0.5,0c0,0,0.8,0,1.2,0c0.1,0,0.2,0,0.3,0c0.2,0,0.2,0.2,0.3,0.3
	c0.1,0.2,0,0.4-0.1,0.6c-0.2,0.4-0.4,0.9-0.7,1.3c-0.2,0.3-0.4,0.7-0.7,1c-0.4,0.5-0.8,1.3-1.1,1.6c-0.2,0.3-0.2,0.4-0.1,0.6
	c0.1,0.2,1.2,1.3,1.5,1.6c0.3,0.3,0.7,0.7,1.2,1.4c0.1,0.1,0.2,0.3,0.3,0.5c0,0.1,0.1,0.2,0.1,0.3C21.1,18.3,20.7,18.4,20.4,18.4z"
                                                    />
</svg></a>
                                    </div>
                                </div>
                            </div>
                            <div class="si-modal phone-modal">
                                <a href="#" class="si-close"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><defs><path id="4928a" d="M1144.15 325.8l5.4 5.27c.6.58.6 1.53 0 2.11-.59.58-1.56.58-2.15 0l-5.37-5.23-5.52 5.6c-.58.58-1.5.58-2.08 0a1.5 1.5 0 0 1 0-2.1l5.2-5.29-5.2-5.27a1.5 1.5 0 0 1 0-2.12c.57-.58 1.5-.58 2.08 0l5.16 5.24 5.73-5.59c.6-.58 1.56-.58 2.16 0 .6.59.6 1.53 0 2.11z"/></defs><g><g transform="translate(-1132 -316)"><use fill="#626365" xlink:href="#4928a"/></g></g></svg></a>

                                <div class="modal-container align-center">

                                    <div class="modal-form-title">
                                        Закажите консультацию
                                    </div>

                                    <div class="modal-time">
                                        Ответ в течение 15 минут
                                    </div>

                                    <form action="send.php" method="post" class="send-form" autocomplete="off">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-1-2 col-1-2-xs">
                                                    <input type="text" name="client_name" class="client-name" placeholder="Ваше имя">
                                                </div>
                                                <div class="col-1-2 col-1-2-xs">
                                                    <input type="tel" name="client_phone" class="client-phone" placeholder="Ваш телефон">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-1-1 col-1-xs">
                                                    <textarea name="client_message" class="client-message" placeholder="Ваш вопрос"></textarea>
                                                </div>
                                            </div>
                                        </div>


                                        <input type="hidden" name="send_type" class="send-type" value="1">
                                        <input type="hidden" name="send_extra" class="send-extra" value="1">

                                        <div class="btn-holder">
                                            <button type="submit" class="btn">Позвоните мне</button>
                                            <div class="g-recaptcha" id="g-recaptcha"></div>
                                        </div>
                                        <!--                                                     Agreement -->
                                        <div class="form-agree align-left">
                                            <label class="checkbox-label form-agree-check checked">
                                                <input type="checkbox" checked>
                                                Нажимая кнопку "ПОЗВОНИТЕ МНЕ", я&nbsp;даю своё согласие на&nbsp;обработку
                                                моих персональных данных в&nbsp;соответствии с&nbsp;Федеральным законом
                                                от&nbsp;27.07.2006&nbsp;года №152&#8209;ФЗ "О&nbsp;персональных данных",
                                                на&nbsp;условиях и&nbsp;для&nbsp;целей, определённых
                                                в&nbsp;Согласии на&nbsp;обработку персональных данных.
                                            </label>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-1-2">
                    <div class="copyright">
                        <a class="blue_link" href="#">Политика конфиденциальности</a>   |   <a class="blue_link" href="#">Правила использования сайта</a>
                        <p>© 2008 - 2017 Панавир | Все права защищены.</p>
                    </div>
            </div>
            <div class="col-1-2">
                <div class="contacts_two">
                    <p>(495) 643-18-56</p>
                    <span>(в будние с 9:00 до 18:00 по московскому времени)</span>
                    <p class="mail">E-mail: <a class="blue_link" href="#">info@panavir.ru</a></p>
                </div>
            </div>
        </div>

    </div>
</footer>

    <!--===================================================== footer mobile -->
    <footer class="footer-mobile">
        <div class="container">
            <div class="row">
                <div class="col-1-2 col-1-2-xs">
                    <a href="#" class="logo-mobile">
                        <img src="images/logo_mobile.png" alt=" "/>
                    </a>
                </div>
                <div class="col-1-2 col-1-2-xs">
                    <div class="smm_block">
                        <span class="smm-text">Будь в курсе!</span>
                        <div class="smm">
                            <a href="#"> <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px"
                                              viewBox="0 0 26 26" style="enable-background:new 0 0 26 26;" xml:space="preserve">
<style type="text/css">
    .st0{fill:#3A589B;}
</style>
                                    <path class="st0" d="M11.2,20.1h2.9V13H16l0.3-2.4h-2.2l0-1.2c0-0.6,0.1-1,1-1h1.2V5.9h-1.9c-2.3,0-3.2,1.2-3.2,3.2v1.5H9.7V13h1.5
	V20.1z M0,0h26v26H0V0z"/>
</svg></a>
                            <a href="#"><svg version="1.1" id="Layer_1" class="google" xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px"
                                             viewBox="0 0 26 26"  style="enable-background:new 0 0 26 26;" xml:space="preserve">
<style type="text/css">
    .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#D6492F;}
</style>
                                    <path class="st0" d="M26,9v17H11.9l2.3,0c0.2-0.7,0.3-1.2,0.3-1.9c0-2.6-2.2-3.9-3.9-5.4l-1.4-1.1c-0.4-0.3-1-0.8-1-1.6
	c0-0.8,0.6-1.4,1.1-1.9c1.6-1.3,3.1-2.6,3.1-5.4c0-2.6-1.4-4-2.3-4.8h2.3l2.1-1.7H6.6c-2,0-4.4,0.3-6.6,2.1V0h26v7h-4.9V2.1h-2.1V7
	h-4.8v2h4.8v4.9h2.1V9H26z M0,22.5c0.8-1.1,1.7-1.2,2.3-1.4c1.6-0.5,3.7-0.6,4-0.6c0.4,0,0.6,0,0.9,0c2.9,2.1,4.8,3.1,4.8,5.1
	c0,0.2,0,0.3,0,0.4H0V22.5z M1.2,7.5c0-1,0.1-2,0.7-2.8c0.6-0.8,1.7-1.3,2.7-1.3c3.2,0,4.8,4.3,4.8,7c0,0.6-0.3,1.6-1,2.5
	c-0.6,0.7-1.6,1-2.6,1C2.5,13.9,1.2,10.1,1.2,7.5z M5.1,15.4c-0.2,0.5-0.4,0.8-0.4,1.5c0,1.2,0.6,1.9,1.1,2.6
	c-1.5,0.1-3.7,0.1-5.9,1.1v-6.3c1,0.9,2.2,1.2,3.9,1.2C4.3,15.4,4.7,15.4,5.1,15.4z"/>
</svg></a>
                            <a href="#"><svg version="1.1" class="insta" id="Layer_1" xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px"
                                             viewBox="0 0 26 26" style="enable-background:new 0 0 26 26;" xml:space="preserve">
<style type="text/css">
    .st0{fill:#3B5998;}
</style>
                                    <g>
                                        <path class="st0" d="M17.1,13.5c-0.1,0.6-0.3,1.1-0.6,1.6c-0.3,0.5-0.7,0.9-1.2,1.3c-1.3,0.9-3,0.9-4.3,0.2
		c-0.7-0.4-1.2-0.9-1.6-1.6c-0.6-1-0.6-2.1-0.3-3.2c-0.4,0-0.8,0-1.3,0v0c0,2,0,3.9,0,5.9c0,0.3,0.2,0.5,0.5,0.5c3.1,0,6.2,0,9.3,0
		c0.3,0,0.5-0.2,0.5-0.5c0-2,0-3.9,0-5.9v0h-1.3C17.1,12.3,17.1,12.9,17.1,13.5z"/>
                                        <path class="st0" d="M12.9,15.7c1.5,0,2.7-1.2,2.7-2.6c0-1.5-1.2-2.7-2.7-2.7c-1.5,0-2.7,1.2-2.7,2.6
		C10.3,14.5,11.5,15.6,12.9,15.7z"/>
                                        <path class="st0" d="M15.9,9.4c0.1,0.2,0.3,0.4,0.5,0.4c0.2,0,0.4,0,0.6,0v0c0.2,0,0.4,0,0.7,0c0.3,0,0.5-0.2,0.5-0.5
		c0-0.4,0-0.8,0-1.3c0-0.3-0.2-0.5-0.5-0.5c-0.4,0-0.8,0-1.2,0c-0.3,0-0.5,0.2-0.5,0.5c0,0.4,0,0.8,0,1.2
		C15.9,9.3,15.9,9.4,15.9,9.4z"/>
                                        <path class="st0" d="M0,0v26h26V0H0z M19.6,18.3c0,0.1,0,0.1,0,0.2c-0.1,0.5-0.5,1-1.1,1.1c-0.1,0-0.1,0-0.2,0v0H7.7
		c0,0-0.1,0-0.1,0c-0.6-0.1-1.1-0.5-1.2-1.1c0-0.1,0-0.1,0-0.2V7.7c0,0,0,0,0-0.1C6.5,7,6.9,6.6,7.5,6.4c0.1,0,0.1,0,0.2,0h10.6
		c0,0,0,0,0.1,0c0.6,0.1,1.1,0.5,1.2,1.1c0,0.1,0,0.1,0,0.2V18.3z"/>
                                    </g>
</svg></a>
                            <a href="#"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px"
                                             viewBox="0 0 26 26" class="vk" style="enable-background:new 0 0 26 26;" xml:space="preserve">
<style type="text/css">
    .st0{fill:#4C75A3;}
</style>
                                    <path class="st0" d="M0,0v26h26V0H0z M20.4,18.4c-0.2,0-0.3,0-0.5,0c-0.3,0-0.5,0-0.8,0c-0.5,0-1,0-1.4-0.2
	c-0.2-0.1-0.4-0.4-0.6-0.6c-0.3-0.3-0.7-0.7-1.3-1.2c-0.5-0.5-1.3-1-1.7-0.8c-0.4,0.2,0.1,2.2-0.3,2.5c-0.5,0.3-1.9,0.3-3.3-0.1
	c-0.3-0.1-0.7-0.3-1-0.5c-1.1-0.7-2.1-1.7-2.9-2.7c-0.8-1-1.4-2.1-2-3.3c-0.2-0.5-0.5-1-0.7-1.5c0-0.1-0.1-0.2-0.1-0.3
	C3.7,9.6,3.6,9.4,3.7,9.1c0.1-0.4,0.5-0.4,0.8-0.4c0.1,0,0.3,0,0.4,0c0.5,0,1,0,1.4,0c0.1,0,0.3,0,0.4,0C7,8.9,7.1,9.2,7.2,9.4
	C7.3,9.6,7.4,9.8,7.4,10c0.1,0.2,0.2,0.4,0.2,0.5c0.3,0.6,0.6,1.3,0.9,1.8c0.4,0.6,0.8,1.1,1.2,1.6c0.6,0.6,0.7-0.1,0.7-0.1
	s0-2.4,0-3.2c0-0.8-0.6-1-0.8-1.4c-0.2-0.5,0.3-0.5,0.3-0.5h2.3c0,0,1.1,0,1.3,0S14,9,14,9s0,3.3,0,3.8c0,0.6,0.1,0.6,0.4,0.5
	c0.3-0.1,1.7-1.9,1.9-2.2c0.1-0.1,0.1-0.2,0.2-0.3c0.1-0.2,0.3-0.5,0.4-0.7c0.1-0.1,0.2-0.3,0.3-0.4c0.1-0.2,0.3-0.4,0.4-0.6
	c0.1-0.2,0.2-0.3,0.5-0.4c0.2,0,0.3,0,0.5,0c0.2,0,0.3,0,0.5,0c0,0,0.8,0,1.2,0c0.1,0,0.2,0,0.3,0c0.2,0,0.2,0.2,0.3,0.3
	c0.1,0.2,0,0.4-0.1,0.6c-0.2,0.4-0.4,0.9-0.7,1.3c-0.2,0.3-0.4,0.7-0.7,1c-0.4,0.5-0.8,1.3-1.1,1.6c-0.2,0.3-0.2,0.4-0.1,0.6
	c0.1,0.2,1.2,1.3,1.5,1.6c0.3,0.3,0.7,0.7,1.2,1.4c0.1,0.1,0.2,0.3,0.3,0.5c0,0.1,0.1,0.2,0.1,0.3C21.1,18.3,20.7,18.4,20.4,18.4z"
                                        />
</svg></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-1-1 col-1-xs">
                    <div class="copyright">
                        <a class="blue_link" href="#">Политика конфиденциальности</a>   |   <a class="blue_link" href="#">Правила использования сайта</a>
                        <p>© 2008 - 2017 Панавир | Все права защищены.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-1-2 col-1-2-xs">
                    <div class="contacts_two">
                        <p>(495) 643-18-56</p>
                        <span>(в будние с 9:00 до 18:00 по московскому времени)</span>
                        <p class="mail">E-mail: <a class="blue_link" href="#">info@panavir.ru</a></p>
                    </div>
                </div>
                <div class="col-1-2 col-1-2-xs">
                    <div class="contacts">
                        <span>Звонок по России бесплатный</span>
                        <p><svg xmlns="http://www.w3.org/2000/svg" class="footer_phone" width="29" height="29" viewBox="0 0 32 32"><defs><path id="nh0oa" d="M962 43.5a14.5 14.5 0 1 1-29 0 14.5 14.5 0 0 1 29 0zm-7.3 3.78a4.69 4.69 0 0 0-3.07-2.14.48.48 0 0 0-.44.1c-.7.6-1.68 1.25-2.1 1.31-2.82-1.38-4.39-4.02-4.45-4.52-.03-.28.61-1.27 1.36-2.08a.5.5 0 0 0 .12-.38c-.19-2.17-2.45-3.23-2.55-3.28a.47.47 0 0 0-.29-.04c-2.61.44-3 1.96-3.02 2.02a.5.5 0 0 0 0 .27c3.13 9.68 9.61 11.48 11.75 12.07l.4.11a.51.51 0 0 0 .36-.02c.06-.03 1.6-.75 1.98-3.12.01-.1 0-.21-.05-.3z"/></defs><g><g transform="translate(-931 -27)"><use fill="#94bee6" xlink:href="#nh0oa"/></g></g></svg>8-800-555-222-9</p>
                        <a class="blue_link button open-phone-modal" href="#">Задать вопрос</a>

                        <div class="si-overlay"></div>
                        <div class="si-modals-wrapper">
                            <div class="si-success-modal si-success-modal-1">
                                <a href="#" class="si-close"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><defs><path id="4928a" d="M1144.15 325.8l5.4 5.27c.6.58.6 1.53 0 2.11-.59.58-1.56.58-2.15 0l-5.37-5.23-5.52 5.6c-.58.58-1.5.58-2.08 0a1.5 1.5 0 0 1 0-2.1l5.2-5.29-5.2-5.27a1.5 1.5 0 0 1 0-2.12c.57-.58 1.5-.58 2.08 0l5.16 5.24 5.73-5.59c.6-.58 1.56-.58 2.16 0 .6.59.6 1.53 0 2.11z"/></defs><g><g transform="translate(-1132 -316)"><use fill="#626365" xlink:href="#4928a"/></g></g></svg></a>

                                <div class="modal-container align-center">

                                    <div class="si-success-modal-title">
                                        <div class="title">
                                            Спасибо!
                                        </div>
                                    </div>

                                    <div class="modal_sub_title">
                                        Наш менеджер свяжется
                                        с Вами в течение 15 мин
                                    </div>
                                    <div class="title-2">
                                        Время работы отдела продаж:
                                    </div>
                                    <div class="sub_title-2">
                                        пн-пт с 10.00 до 20.00 (по Москве)
                                    </div>
                                </div>
                                <div class="line"></div>
                                <div class="modal_social">
                                    <div class="social-title">
                                        Подпишитесь на наши новости:
                                    </div>
                                    <div class="smm">
                                        <a href="#"> <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px"
                                                          viewBox="0 0 26 26" style="enable-background:new 0 0 26 26;" xml:space="preserve">
<style type="text/css">
    .st0{fill:#3A589B;}
</style>
                                                <path class="st0" d="M11.2,20.1h2.9V13H16l0.3-2.4h-2.2l0-1.2c0-0.6,0.1-1,1-1h1.2V5.9h-1.9c-2.3,0-3.2,1.2-3.2,3.2v1.5H9.7V13h1.5
	V20.1z M0,0h26v26H0V0z"/>
</svg></a>
                                        <a href="#"><svg version="1.1" id="Layer_1" class="google" xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px"
                                                         viewBox="0 0 26 26"  style="enable-background:new 0 0 26 26;" xml:space="preserve">
<style type="text/css">
    .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#D6492F;}
</style>
                                                <path class="st0" d="M26,9v17H11.9l2.3,0c0.2-0.7,0.3-1.2,0.3-1.9c0-2.6-2.2-3.9-3.9-5.4l-1.4-1.1c-0.4-0.3-1-0.8-1-1.6
	c0-0.8,0.6-1.4,1.1-1.9c1.6-1.3,3.1-2.6,3.1-5.4c0-2.6-1.4-4-2.3-4.8h2.3l2.1-1.7H6.6c-2,0-4.4,0.3-6.6,2.1V0h26v7h-4.9V2.1h-2.1V7
	h-4.8v2h4.8v4.9h2.1V9H26z M0,22.5c0.8-1.1,1.7-1.2,2.3-1.4c1.6-0.5,3.7-0.6,4-0.6c0.4,0,0.6,0,0.9,0c2.9,2.1,4.8,3.1,4.8,5.1
	c0,0.2,0,0.3,0,0.4H0V22.5z M1.2,7.5c0-1,0.1-2,0.7-2.8c0.6-0.8,1.7-1.3,2.7-1.3c3.2,0,4.8,4.3,4.8,7c0,0.6-0.3,1.6-1,2.5
	c-0.6,0.7-1.6,1-2.6,1C2.5,13.9,1.2,10.1,1.2,7.5z M5.1,15.4c-0.2,0.5-0.4,0.8-0.4,1.5c0,1.2,0.6,1.9,1.1,2.6
	c-1.5,0.1-3.7,0.1-5.9,1.1v-6.3c1,0.9,2.2,1.2,3.9,1.2C4.3,15.4,4.7,15.4,5.1,15.4z"/>
</svg></a>
                                        <a href="#"><svg version="1.1" class="insta" id="Layer_1" xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px"
                                                         viewBox="0 0 26 26" style="enable-background:new 0 0 26 26;" xml:space="preserve">
<style type="text/css">
    .st0{fill:#3B5998;}
</style>
                                                <g>
                                                    <path class="st0" d="M17.1,13.5c-0.1,0.6-0.3,1.1-0.6,1.6c-0.3,0.5-0.7,0.9-1.2,1.3c-1.3,0.9-3,0.9-4.3,0.2
		c-0.7-0.4-1.2-0.9-1.6-1.6c-0.6-1-0.6-2.1-0.3-3.2c-0.4,0-0.8,0-1.3,0v0c0,2,0,3.9,0,5.9c0,0.3,0.2,0.5,0.5,0.5c3.1,0,6.2,0,9.3,0
		c0.3,0,0.5-0.2,0.5-0.5c0-2,0-3.9,0-5.9v0h-1.3C17.1,12.3,17.1,12.9,17.1,13.5z"/>
                                                    <path class="st0" d="M12.9,15.7c1.5,0,2.7-1.2,2.7-2.6c0-1.5-1.2-2.7-2.7-2.7c-1.5,0-2.7,1.2-2.7,2.6
		C10.3,14.5,11.5,15.6,12.9,15.7z"/>
                                                    <path class="st0" d="M15.9,9.4c0.1,0.2,0.3,0.4,0.5,0.4c0.2,0,0.4,0,0.6,0v0c0.2,0,0.4,0,0.7,0c0.3,0,0.5-0.2,0.5-0.5
		c0-0.4,0-0.8,0-1.3c0-0.3-0.2-0.5-0.5-0.5c-0.4,0-0.8,0-1.2,0c-0.3,0-0.5,0.2-0.5,0.5c0,0.4,0,0.8,0,1.2
		C15.9,9.3,15.9,9.4,15.9,9.4z"/>
                                                    <path class="st0" d="M0,0v26h26V0H0z M19.6,18.3c0,0.1,0,0.1,0,0.2c-0.1,0.5-0.5,1-1.1,1.1c-0.1,0-0.1,0-0.2,0v0H7.7
		c0,0-0.1,0-0.1,0c-0.6-0.1-1.1-0.5-1.2-1.1c0-0.1,0-0.1,0-0.2V7.7c0,0,0,0,0-0.1C6.5,7,6.9,6.6,7.5,6.4c0.1,0,0.1,0,0.2,0h10.6
		c0,0,0,0,0.1,0c0.6,0.1,1.1,0.5,1.2,1.1c0,0.1,0,0.1,0,0.2V18.3z"/>
                                                </g>
</svg></a>
                                        <a href="#"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px"
                                                         viewBox="0 0 26 26" class="vk" style="enable-background:new 0 0 26 26;" xml:space="preserve">
<style type="text/css">
    .st0{fill:#4C75A3;}
</style>
                                                <path class="st0" d="M0,0v26h26V0H0z M20.4,18.4c-0.2,0-0.3,0-0.5,0c-0.3,0-0.5,0-0.8,0c-0.5,0-1,0-1.4-0.2
	c-0.2-0.1-0.4-0.4-0.6-0.6c-0.3-0.3-0.7-0.7-1.3-1.2c-0.5-0.5-1.3-1-1.7-0.8c-0.4,0.2,0.1,2.2-0.3,2.5c-0.5,0.3-1.9,0.3-3.3-0.1
	c-0.3-0.1-0.7-0.3-1-0.5c-1.1-0.7-2.1-1.7-2.9-2.7c-0.8-1-1.4-2.1-2-3.3c-0.2-0.5-0.5-1-0.7-1.5c0-0.1-0.1-0.2-0.1-0.3
	C3.7,9.6,3.6,9.4,3.7,9.1c0.1-0.4,0.5-0.4,0.8-0.4c0.1,0,0.3,0,0.4,0c0.5,0,1,0,1.4,0c0.1,0,0.3,0,0.4,0C7,8.9,7.1,9.2,7.2,9.4
	C7.3,9.6,7.4,9.8,7.4,10c0.1,0.2,0.2,0.4,0.2,0.5c0.3,0.6,0.6,1.3,0.9,1.8c0.4,0.6,0.8,1.1,1.2,1.6c0.6,0.6,0.7-0.1,0.7-0.1
	s0-2.4,0-3.2c0-0.8-0.6-1-0.8-1.4c-0.2-0.5,0.3-0.5,0.3-0.5h2.3c0,0,1.1,0,1.3,0S14,9,14,9s0,3.3,0,3.8c0,0.6,0.1,0.6,0.4,0.5
	c0.3-0.1,1.7-1.9,1.9-2.2c0.1-0.1,0.1-0.2,0.2-0.3c0.1-0.2,0.3-0.5,0.4-0.7c0.1-0.1,0.2-0.3,0.3-0.4c0.1-0.2,0.3-0.4,0.4-0.6
	c0.1-0.2,0.2-0.3,0.5-0.4c0.2,0,0.3,0,0.5,0c0.2,0,0.3,0,0.5,0c0,0,0.8,0,1.2,0c0.1,0,0.2,0,0.3,0c0.2,0,0.2,0.2,0.3,0.3
	c0.1,0.2,0,0.4-0.1,0.6c-0.2,0.4-0.4,0.9-0.7,1.3c-0.2,0.3-0.4,0.7-0.7,1c-0.4,0.5-0.8,1.3-1.1,1.6c-0.2,0.3-0.2,0.4-0.1,0.6
	c0.1,0.2,1.2,1.3,1.5,1.6c0.3,0.3,0.7,0.7,1.2,1.4c0.1,0.1,0.2,0.3,0.3,0.5c0,0.1,0.1,0.2,0.1,0.3C21.1,18.3,20.7,18.4,20.4,18.4z"
                                                    />
</svg></a>
                                    </div>
                                </div>
                            </div>
                            <div class="si-modal phone-modal">
                                <a href="#" class="si-close"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><defs><path id="4928a" d="M1144.15 325.8l5.4 5.27c.6.58.6 1.53 0 2.11-.59.58-1.56.58-2.15 0l-5.37-5.23-5.52 5.6c-.58.58-1.5.58-2.08 0a1.5 1.5 0 0 1 0-2.1l5.2-5.29-5.2-5.27a1.5 1.5 0 0 1 0-2.12c.57-.58 1.5-.58 2.08 0l5.16 5.24 5.73-5.59c.6-.58 1.56-.58 2.16 0 .6.59.6 1.53 0 2.11z"/></defs><g><g transform="translate(-1132 -316)"><use fill="#626365" xlink:href="#4928a"/></g></g></svg></a>

                                <div class="modal-container align-center">

                                    <div class="modal-form-title">
                                        Закажите консультацию
                                    </div>

                                    <div class="modal-time">
                                        Ответ в течение 15 минут
                                    </div>

                                    <form action="send.php" method="post" class="send-form" autocomplete="off">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-1-2 col-1-2-xs">
                                                    <input type="text" name="client_name" class="client-name" placeholder="Ваше имя">
                                                </div>
                                                <div class="col-1-2 col-1-2-xs">
                                                    <input type="tel" name="client_phone" class="client-phone" placeholder="Ваш телефон">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-1-1 col-1-xs">
                                                    <textarea name="client_message" class="client-message" placeholder="Ваш вопрос"></textarea>
                                                </div>
                                            </div>
                                        </div>


                                        <input type="hidden" name="send_type" class="send-type" value="1">
                                        <input type="hidden" name="send_extra" class="send-extra" value="1">

                                        <div class="btn-holder">
                                            <button type="submit" class="btn">Позвоните мне</button>
                                            <div class="g-recaptcha" id="g-recaptcha"></div>
                                        </div>
<!--                                                     Agreement -->
                                        <div class="form-agree align-left">
                                            <label class="checkbox-label form-agree-check checked">
                                                <input type="checkbox" checked>
                                                Нажимая кнопку "ПОЗВОНИТЕ МНЕ", я&nbsp;даю своё согласие на&nbsp;обработку
                                                моих персональных данных в&nbsp;соответствии с&nbsp;Федеральным законом
                                                от&nbsp;27.07.2006&nbsp;года №152&#8209;ФЗ "О&nbsp;персональных данных",
                                                на&nbsp;условиях и&nbsp;для&nbsp;целей, определённых
                                                в&nbsp;Согласии на&nbsp;обработку персональных данных.
                                            </label>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!--===================================================== section form-x -->
<!--    <section class="section-form form-x" id="form-x">-->
<!--        <div class="container align-center">-->
<!---->
<!--            <h2>-->
<!---->
<!--            </h2>-->
<!---->
<!--            <p>-->
<!---->
<!--            </p>-->
<!---->
<!--            <form action="send.php" method="post" class="send-form" autocomplete="off">-->
<!--                <div class="row">-->
<!--                    <div class="col-1-3">-->
<!--                        <input type="text" name="client_name" class="client-name" placeholder="Ваше имя">-->
<!--                    </div>-->
<!---->
<!--                    <div class="col-1-3">-->
<!--                        <input type="tel" name="client_phone" class="client-phone" placeholder="Ваш телефон">-->
<!--                    </div>-->
<!---->
<!--                    <div class="col-1-3">-->
<!--                        <input type="email" name="client_mail" class="client-mail" placeholder="Ваш e-mail">-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                <input type="hidden" name="send_type" class="send-type" value="2">-->
<!--                <input type="hidden" name="send_extra" class="send-extra" value="1">-->
<!---->
<!--                <div class="btn-holder">-->
<!--                    <button type="submit" class="btn">Позвоните мне</button>-->
<!--                    <!--<div class="g-recaptcha" id="g-recaptcha"></div>-->
<!--                </div>-->
<!---->
<!--                <!-- Agreement -->
<!--                <div class="form-agree align-left">-->
<!--                    <label class="checkbox-label form-agree-check checked">-->
<!--                        <input type="checkbox" checked>-->
<!--                        Нажимая кнопку "ПОЗВОНИТЕ МНЕ", я&nbsp;даю своё согласие на&nbsp;обработку-->
<!--                        моих персональных данных в&nbsp;соответствии с&nbsp;Федеральным законом-->
<!--                        от&nbsp;27.07.2006&nbsp;года №152&#8209;ФЗ "О&nbsp;персональных данных",-->
<!--                        на&nbsp;условиях и&nbsp;для&nbsp;целей, определённых-->
<!--                        в&nbsp;Согласии на&nbsp;обработку персональных данных.-->
<!--                    </label>-->
<!--                </div>-->
<!--            </form>-->
<!---->
<!--        </div>-->
<!--    </section>-->

    <!--===================================================== section map -->
<!--    <div class="section-map">-->
<!--        <div class="map-holder" id="map"></div>-->
<!--    </div>-->


    <!--===================================================== Footer -->
<!--    <footer class="layout-footer">-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!---->
<!--                <!-- company info block -->
<!--                <div class="col-1-2">-->
<!--                    <div class="company-info-block">-->
<!--                        <address>-->
<!--                            <dl>-->
<!--                                <dt>Адрес:</dt>-->
<!--                                <dd></dd>-->
<!--                            </dl>-->
<!--                        </address>-->
<!---->
<!--                        <dl>-->
<!--                            <dt>ИНН:</dt>-->
<!--                            <dd></dd>-->
<!--                        </dl>-->
<!---->
<!--                        <dl>-->
<!--                            <dt>ОГРН:</dt>-->
<!--                            <dd></dd>-->
<!--                        </dl>-->
<!---->
<!--                        <p>-->
<!--                            <a href="mailto:info@domen.ru">info@domen.ru</a>-->
<!--                        </p>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                <!-- Phone block -->
<!--                <div class="col-1-2 align-right">-->
<!--                    <div class="si-phone">-->
<!--                        <div class="si-phone-text">Звонок бесплатный</div>-->
<!--                        <a href="tel:+78009001111" class="phone-link dark">8 (800) 900-11-11</a>-->
<!--                        <a href="#" class="open-phone-modal" data-extra="2">Заказать консультацию</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--            <div class="copyright-holder row">-->
<!--                <div class="col-1-2">-->
<!--                    <a href="#" class="dark open-text-modal" data-id="1">-->
<!--                        Согласие на обработку персональных данных-->
<!--                    </a>-->
<!--                </div>-->
<!---->
<!--                <!-- copyright block -->
<!--                <div class="col-1-2 align-right">-->
<!--                    <a href="http://hello-brand.ru/" class="dark" target="_blank" rel="nofollow noopener">-->
<!--                        Разработано в "Hello, brand!"-->
<!--                    </a>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </footer>-->


    <!--===================================================== Modals -->
    <!-- Overlay(s) -->
<!--    <div class="si-overlay"></div>-->
<!--    <div class="si-overlay-2"></div>-->
<!---->
<!--     Wrappers-->
<!--    <div class="si-modals-wrapper-2"></div>-->
<!---->
<!--    <div class="si-modals-wrapper">-->

        <!--============================================== success modal -->
<!--        <div class="si-success-modal si-success-modal-1">-->
<!--            <a href="#" class="si-close"></a>-->
<!---->
<!--            <div class="modal-container align-center">-->
<!---->
<!--                <div class="si-success-modal-title">-->
<!--                    Спасибо!-->
<!--                </div>-->
<!---->
<!--                <div class="success-time">-->
<!--                    Наш менеджер свяжется с вами в течение 15 минут-->
<!--                </div>-->
<!---->
<!--                <p>-->
<!--                    <strong>Время работы отдела продаж:</strong>-->
<!--                    пн-пт с 10.00 до 20.00 (по Москве)-->
<!--                </p>-->
<!---->
<!--            </div>-->
<!--        </div>-->

        <!--============================================== phone modal -->
<!--        <div class="si-modal phone-modal">-->
<!--            <a href="#" class="si-close"></a>-->
<!---->
<!--            <div class="modal-container align-center">-->
<!---->
<!--                <div class="modal-form-title">-->
<!--                    Закажите консультацию-->
<!--                </div>-->
<!---->
<!--                <div class="modal-time">-->
<!--                    Ответ в течение 15 минут-->
<!--                </div>-->
<!---->
<!--                <form action="send.php" method="post" class="send-form" autocomplete="off">-->
<!--                    <div class="row">-->
<!--                        <div class="col-1-2">-->
<!--                            <input type="text" name="client_name" class="client-name" placeholder="Ваше имя">-->
<!--                        </div>-->
<!---->
<!--                        <div class="col-1-2">-->
<!--                            <input type="tel" name="client_phone" class="client-phone" placeholder="Ваш телефон">-->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                    <textarea name="client_message" class="client-message" placeholder="Ваш вопрос"></textarea>-->
<!---->
<!--                    <input type="hidden" name="send_type" class="send-type" value="1">-->
<!--                    <input type="hidden" name="send_extra" class="send-extra" value="1">-->
<!---->
<!--                    <div class="btn-holder">-->
<!--                        <button type="submit" class="btn">Позвоните мне</button>-->
<!--                        <div class="g-recaptcha" id="g-recaptcha"></div>-->
<!--                    </div>-->
<!---->
<!--<!--                     Agreement -->
<!--                    <div class="form-agree align-left">-->
<!--                        <label class="checkbox-label form-agree-check checked">-->
<!--                            <input type="checkbox" checked>-->
<!--                            Нажимая кнопку "ПОЗВОНИТЕ МНЕ", я&nbsp;даю своё согласие на&nbsp;обработку-->
<!--                            моих персональных данных в&nbsp;соответствии с&nbsp;Федеральным законом-->
<!--                            от&nbsp;27.07.2006&nbsp;года №152&#8209;ФЗ "О&nbsp;персональных данных",-->
<!--                            на&nbsp;условиях и&nbsp;для&nbsp;целей, определённых-->
<!--                            в&nbsp;Согласии на&nbsp;обработку персональных данных.-->
<!--                        </label>-->
<!--                    </div>-->
<!--                </form>-->
<!---->
<!--            </div>-->
<!--        </div>-->

        <!--============================================== text modal 1 -->
<!--        <div class="si-modal text-modal text-modal-1">-->
<!--            <a href="#" class="si-close"></a>-->
<!---->
<!--            <div class="modal-container">-->
<!---->
<!--                <div class="modal-form-title align-center">-->
<!--                    Согласие на обработку персональных данных-->
<!--                </div>-->
<!---->
<!--                <div class="modal-text-block">-->
<!--                    <p>-->
<!--                        Настоящим в&nbsp;соответствии с&nbsp;Федеральным законом №152&#8209;ФЗ-->
<!--                        «О&nbsp;персональных данных» от&nbsp;27.07.2006 года свободно, своей волей и&nbsp;в&nbsp;своём-->
<!--                        интересе выражаю своё безусловное согласие на&nbsp;обработку моих персональных данных-->
<!--                        НАЗВАНИЕ КОМПАНИИ,-->
<!--                        зарегистрированным в&nbsp;соответствии с&nbsp;законодательством&nbsp;РФ по&nbsp;адресу:-->
<!--                        АДРЕС КОМПАНИИ-->
<!--                        (далее по&nbsp;тексту&nbsp;- Оператор).-->
<!--                    </p>-->
<!---->
<!--                    <p>-->
<!--                        Персональные данные&nbsp;- любая информация, относящаяся к&nbsp;определённому-->
<!--                        или&nbsp;определяемому на&nbsp;основании такой информации физическому лицу.-->
<!--                    </p>-->
<!---->
<!--                    <p>-->
<!--                        Настоящее Согласие выдано мною на&nbsp;обработку следующих персональных данных:-->
<!--                    </p>-->
<!---->
<!--                    <ul class="marked">-->
<!--                        <li>-->
<!--                            Имя;-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            Телефон;-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            E-mail;-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            Комментарий.-->
<!--                        </li>-->
<!--                    </ul>-->
<!---->
<!--                    <p>-->
<!--                        Согласие дано Оператору для&nbsp;совершения следующих действий с&nbsp;моими персональными-->
<!--                        данными с&nbsp;использованием средств автоматизации и/или&nbsp;без&nbsp;использования таких-->
<!--                        средств: сбор, систематизация, накопление, хранение, уточнение (обновление, изменение),-->
<!--                        использование, обезличивание, передача третьим лицам для&nbsp;указанных ниже целей,-->
<!--                        а&nbsp;также осуществление любых иных действий, предусмотренных действующим-->
<!--                        законодательством&nbsp;РФ, как&nbsp;неавтоматизированными, так&nbsp;и&nbsp;автоматизированными-->
<!--                        способами.-->
<!--                    </p>-->
<!---->
<!--                    <p>-->
<!--                        Данное согласие даётся Оператору и&nbsp;третьему лицу(&#8209;ам)-->
<!--                        ТРЕТЬИ ЛИЦА-->
<!--                        для&nbsp;обработки моих персональных данных в&nbsp;следующих целях:-->
<!--                    </p>-->
<!---->
<!--                    <ul class="marked">-->
<!--                        <li>-->
<!--                            предоставление мне услуг/работ;-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            направление в&nbsp;мой адрес уведомлений, касающихся предоставляемых услуг/работ;-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            подготовка и&nbsp;направление ответов/коммерческих предложений на&nbsp;мои запросы;-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            направление в&nbsp;мой адрес информации, в&nbsp;том числе рекламной,-->
<!--                            о&nbsp;мероприятиях/товарах/услугах/работах Оператора.-->
<!--                        </li>-->
<!--                    </ul>-->
<!---->
<!--                    <p>-->
<!--                        Настоящее согласие действует до&nbsp;момента его&nbsp;отзыва путём направления соответствующего-->
<!--                        уведомления на&nbsp;электронный адрес-->
<!--                        <a href="mailto:">ЕМЕЙЛ</a>.-->
<!--                        В&nbsp;случае отзыва мною согласия на&nbsp;обработку персональных данных Оператор вправе-->
<!--                        продолжить обработку персональных данных без&nbsp;моего согласия при&nbsp;наличии оснований,-->
<!--                        указанных в&nbsp;пунктах 2&#8209;11 части&nbsp;1 статьи&nbsp;6, части&nbsp;2 статьи&nbsp;10-->
<!--                        и&nbsp;части&nbsp;2 статьи&nbsp;11 Федерального закона №152&#8209;ФЗ-->
<!--                        «О&nbsp;персональных данных» от&nbsp;26.06.2006&nbsp;г.-->
<!--                    </p>-->
<!--                </div>-->
<!---->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--    </div>-->
<!---->
<!--</div>-->

<script type="text/javascript">
    var template_url = '<?php echo SI_RootURL(); ?>';
    //    var template_url = '<?php //echo SI_CurrentPageURL(); ?>//';
</script>


<!-- Inlcude jQuery framework + jQuery migrate -->
    <script src="js/jquery-1.9.1.min.js"></script>
<script src="js/jquery-migrate-1.4.1.min.js"></script>

<!-- IE -->
<!--[if IE]>
<script src="js/html5shiv.js"></script> <![endif]-->

<!-- JS Scripts -->
<script src="js/plugins-all.js"></script>
<script src="js/jquery.easing.js"></script>
<script src="js/smooth-scroll-1.4.4.min.js"></script>
<script src="//api-maps.yandex.ru/2.1/?lang=ru_RU"></script>

<!-- Google Recaptcha -->
<!--<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>-->
<!--<script type="text/javascript">-->
<!--    var recaptcha1,-->
<!--        recaptcha2,-->
<!--        recaptcha3;-->
<!--    var onloadCallback = function () {-->
<!--        recaptcha = grecaptcha.render('g-recaptcha', {-->
<!--            'sitekey': ''-->
<!--        });-->
<!--    };-->
<!--</script>-->

<!-- custom scripts -->
<script src="js/main.js"></script>
<script src="js/share.js"></script>

<?php include('si-engine.php'); ?>

<!--

Digital-agency "Hello, brand!" - http://hello-brand.ru/
Дата создания: 16.03.2016
Версия: 1.0

-->


</body>
</html>