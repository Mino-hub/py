<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <title>ぴゃかじてん</title>
        <link rel="stylesheet" type="text/css" href="http://pyaka.net/wp-content/themes/pyakathema/reset.css">
        <link rel="stylesheet" type="text/css" href="http://pyaka.net/wp-content/themes/pyakathema/style.css">
        <link rel="stylesheet" type="text/css" href="http://pyaka.net/wp-content/themes/pyakathema/genericons.css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    </head>
<?php if ( !is_user_logged_in() ){
echo <<<aaa
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
              m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-36078315-10', 'auto');
  ga('send', 'pageview');

</script>
aaa;
}
?>
    <body>
        <header>
            <div id="topwrap">
                <a href="<?php echo site_url(); ?>">
                    <img src="http://pyaka.net/wp-content/themes/pyakathema/img/top.svg">
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
