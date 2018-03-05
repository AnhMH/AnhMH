<!DOCTYPE html>
<html lang="vi-VN">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="pingback" href="https://demo.mekshq.com/herald/xmlrpc.php">
        <title>Herald &#8211; Next Generation WordPress Magazine Theme</title>
        <link rel='dns-prefetch' href='//fonts.googleapis.com' />
        <link rel='dns-prefetch' href='//s.w.org' />
        <link rel="alternate" type="application/rss+xml" title="" href="" />
        <link rel='stylesheet'  href='<?php echo $BASE_URL; ?>/css/style.css?<?php echo FILE_VERSION; ?>' type='text/css' media='all' />
        <link rel='stylesheet'  href='<?php echo $BASE_URL; ?>/css/custom.css?<?php echo FILE_VERSION; ?>' type='text/css' media='all' />
        <script type='text/javascript'>
            /* <![CDATA[ */
            var herald_js_settings = {"ajax_url":"https:\/\/demo.mekshq.com\/herald\/wp-admin\/admin-ajax.php", "rtl_mode":"false", "header_sticky":"1", "header_sticky_offset":"600", "header_sticky_up":"", "single_sticky_bar":"", "popup_img":"1", "logo":"https:\/\/demo.mekshq.com\/herald\/wp-content\/themes\/herald\/assets\/img\/herald_logo.png", "logo_retina":"https:\/\/demo.mekshq.com\/herald\/wp-content\/themes\/herald\/assets\/img\/herald_logo@2x.png", "logo_mini":"https:\/\/demo.mekshq.com\/herald\/wp-content\/themes\/herald\/assets\/img\/herald_logo_mini.png", "logo_mini_retina":"https:\/\/demo.mekshq.com\/herald\/wp-content\/themes\/herald\/assets\/img\/herald_logo_mini@2x.png", "smooth_scroll":"", "trending_columns":"6", "responsive_menu_more_link":"", "header_ad_responsive":"", "header_responsive_breakpoint":"1249"};
            /* ]]> */
        </script>
        <link rel='https://api.w.org/' href='' />
        <link rel="EditURI" type="application/rsd+xml" title="RSD" href="" />
        <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="" /> 
        <meta name="generator" content="ConLaTatCa" />
        <meta name="generator" content="ConLaTatCa" />
        <link rel="canonical" href="" />
        <link rel='shortlink' href='' />
        <link rel="alternate" type="application/json+oembed" href="" />
        <link rel="alternate" type="text/xml+oembed" href="" />

        <!--[if IE 7]>
        <link rel="stylesheet" href="css/style-ie7.css">
        <![endif]-->

        <link rel="icon" href="https://mksdmcdn-9b59.kxcdn.com/herald/wp-content/uploads/2015/12/cropped-favicon_default-65x65.png" sizes="32x32" />
        <link rel="icon" href="https://mksdmcdn-9b59.kxcdn.com/herald/wp-content/uploads/2015/12/cropped-favicon_default-300x300.png" sizes="192x192" />
        <link rel="apple-touch-icon-precomposed" href="https://mksdmcdn-9b59.kxcdn.com/herald/wp-content/uploads/2015/12/cropped-favicon_default-180x180.png" />

        <meta name="msapplication-TileImage" content="" />

    </head>

    <body class="herald-boxed">
        <?= $this->element('Layout/header'); ?>

        <div id="content" class="herald-site-content herald-slide">
            <?= $this->fetch('content'); ?>
        </div>
        <div class="herald-ad herald-slide herald-above-footer">
            <a href="conlataca.info">
                <img src="<?php echo $BASE_URL;?>/img/banner728x90_white.jpg" alt="" />
            </a>
        </div>
        <footer id="footer" class="herald-site-footer herald-slide">
            <?= $this->element('Layout/footer'); ?>
        </footer>


        <a href="javascript:void(0)" id="back-top" class="herald-goto-top"><i class="fa fa-angle-up"></i></a>
        <script type='text/javascript' src='<?php echo $BASE_URL; ?>/js/common.js?<?php echo FILE_VERSION; ?>'></script>
    </body>
</html>
