<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <script type="text/javascript" src="//use.typekit.net/mpe6fom.js"></script>
        <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">

        <!--[if lt IE 9]>
            <script src="js/vendor/html5-3.6-respond-1.1.0.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        <?php if ($pageId == "home"){ ?>
        <video autoplay loop poster="polina.jpg" id="bgvid">
            <source src="video/all-720.webm" type="video/webm">
            <source src="video/all-720.mp4" type="video/mp4">
            <source src="video/all-720.ogv" type="video/ogv">
        </video>
        <?php } ?>

        <header role="banner" class="group" id="header">
            <div class="branding">
                <img src="img/logo.png" alt="WebTek">
            </div>

            <?php include('nav.php'); ?>

            <div class="phone">
                717-859-3250
            </div>
        </header>
            



