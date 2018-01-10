<!DOCTYPE html>
<html lang="<?php echo $language; ?>">
    <head>
        <title><?php echo $pageTitle; ?></title>
        <meta charset="UTF-8"/>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        
        <!--        <link href="favicon.ico" type="image/x-icon" rel="icon"/>
                <link href="favicon.ico" type="image/x-icon" rel="shortcut icon"/>-->
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo $BASE_URL;?>/anhmh.png">
        <link rel="apple-touch-icon" href="<?php echo $BASE_URL;?>/anhmh.png"/>
        
        <meta name="description" content="<?php echo $metaDescription; ?>"/>
        <meta name="keywords" content="<?php echo $metaKeywords; ?>"/>

        <meta property="og:title" content="<?php echo $metaTitle;?>"/>
        <meta property="og:type" content="website"/>
        <meta property="og:url" content="<?php echo $metaUrl; ?>"/>
        <meta property="og:image"  content="<?php echo $metaImage; ?>"/>
        <meta property="og:description" content="<?php echo $metaDescription; ?>"/>
        <meta property="og:locale" content="<?php echo $metaLocale; ?>"/>

        <meta name="twitter:card" content="summary_large_image"/>
        <meta name="twitter:title" content="<?php echo $metaTitle; ?>"/>
        <meta name="twitter:description" content="<?php echo $metaDescription; ?>"/>
        <meta name="twitter:image" content="<?php echo $metaImage; ?>"/>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="<?php echo $BASE_URL;?>/css/snow.css"/>
        <link rel="stylesheet" href="<?php echo $BASE_URL;?>/css/animate.css"/>
        <link rel="stylesheet" href="<?php echo $BASE_URL;?>/css/styles.css"/>
        <link rel="stylesheet" href="<?php echo $BASE_URL;?>/css/mobile_styles.css" media="only screen and (max-width:750px)"/>
        <link rel="stylesheet" href="<?php echo $BASE_URL;?>/css/ie_styles.css"/>
        <link rel="stylesheet" href="<?php echo $BASE_URL;?>/css/ff_styles.css"/>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="<?php echo $BASE_URL;?>/js/functions.js"></script>
        <script src="<?php echo $BASE_URL;?>/js/wow.min.js"></script>
        <script src="<?php echo $BASE_URL;?>/js/common.js"></script>
    </head>
    <body id="myPage body_<?php echo $controller . '_' . $action; ?>" data-spy="scroll" data-target=".navbar" data-offset="10">
        <div id="container" class="hidden">
            
            <?= $this->element('Layout/header'); ?>

            <?= $this->fetch('content') ?>
            
            <?= $this->element('Layout/footer'); ?>
            
<!--            <audio id="bg_audio" loop="loop">
                <source src="a.mp3" type="audio/mpeg">
            </audio>-->
        </div>

        <div id="main_loader">
            <div class="loader"></div>
            <!--            <div class="main_loader_img">
                            <img src="images/loader3.gif"/>
                        </div>-->
            <div class="main_loader_bg bg_left"></div>
            <div class="main_loader_bg bg_right"></div>
        </div>
    </body>
</html>

