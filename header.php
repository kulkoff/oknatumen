<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package oknatumen
 */

?>

<!DOCTYPE html>
<!--[if lt IE 7]><html lang="ru" class="lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html lang="ru" class="lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html lang="ru" class="lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="ru">
<!--<![endif]-->

<head>
    <meta charset="utf-8" />
    
    <title>Сайт Тепловин</title>
    <meta content="" name="description" />
    <meta content="" property="og:image" />
    <meta content="" property="og:description" />
    <meta content="" property="og:site_name" />
    <meta content="website" property="og:type" />

    <meta content="telephone=no" name="format-detection" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="shortcut icon" href="favicon.png" />
    <?php wp_head(); ?>
</head>

<body>
    <header class="clearfix" id="top_nav">
        <div class="center-wrapper">
            <a class="logo" href="#"><img src="<?php  bloginfo("template_directory"); ?>/img/logo-head.png" alt="Компания Teplowin"></a>
            <nav>
                <?php wp_nav_menu('primary'); ?> 
            </nav>
            <div class="buttons-header"> 
                <div class="callback"><a class="fancybox" href="#data">Заказать звонок</a>
                    <div style="display:none"><div id="data"><?php echo do_shortcode( '[contact-form-7 id="17" title="Zamer"]' ); ?></div></div>
                </div>
                <div class="call-master"><a class="fancybox" href="#data">Вызвать замерщика</a>
                <div style="display:none"><div id="data"><?php echo do_shortcode( '[contact-form-7 id="17" title="Zamer"]' ); ?></div></div>
                </div>
            </div>
        </div>
    </header>