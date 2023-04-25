<!DOCTYPE html>
<html lang="en-us">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- VIEWPORT FOR MOBILE DEVICES -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- TITLE & DESCRIPTION -->
    <title>
        <?php wp_title(); ?>
    </title>
    <!-- NO MORE THAN 75 CHAR.-->
    <?php wp_head(); ?>
    <?php include('assets/css/customStyles.php'); ?>

    <!-- STYLESHEETS -->
    <?php $gaCode = get_theme_mod('google_ga_code'); if($gaCode): echo $gaCode; endif; 
	$gtManager = get_theme_mod('gt_manager');
    ?>
</head>

<body <?php body_class(); ?>>
<?php if($gtManager): echo $gtManager; endif; ?>
<div id="header">
    <div class="header-inner">
        <div class="navigation">
            <div id="main-nav" class="main-nav">
                <div id="menu-wrap" class="menu-wrap-container">
                    <?php wp_nav_menu(array('theme_location' => 'main_menu', 'container' => false, 'walker' => new wp_bootstrap_navwalker())); ?>
                </div>
            </div>
        </div>
    </div>
</div>
