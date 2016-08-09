<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <title>ぴゃかじてん</title>
        <link rel="stylesheet" type="text/css" href="./wp-content/themes/pyaka/reset.css">
        <link rel="stylesheet" type="text/css" href="./wp-content/themes/pyaka/style.css">
        <link rel="stylesheet" type="text/css" href="./wp-content/themes/pyaka/genericons.css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    </head>
    <body>
        <header>
            <div id="topwrap">
                <a href="<?php echo site_url(); ?>">
                    <img src="./wp-content/themes/pyaka/img/top.svg">
                </a>
            </div>
            <nav class="navbar center-block hidden-xs">
                        <ul class="nav text-center navbar-nav">
                            <?php get_template_part("mainnav"); ?>
                        </ul>
                    </nav>
                    <nav class="navbar center-block visible-xs">
                        <ul class="nav navbar-nav">
                            <li class="dropdown text-center">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                 role="button" aria-haspopup="true" aria-expanded="false">menu<span class="caret"></span></a>
                                 <ul class="dropdown-menu">
                                    <?php get_template_part("mainnav"); ?>
                                </ul>
                            </li>
                        </ul>
                    </nav>
        </header>
