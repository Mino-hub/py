<?php get_header(); ?>
<?php if (have_posts()) : the_post(); ?>    
<div id="continer">
    <div class="main">
        <div class="meta">
            <h1><?php the_title();?></h1>
        </div>
    </div>
    <div class="main-noline">
        <div id="article">
            <?php the_content(); ?>
        </div>
    </div>
    <?php endif; ?>
<?php get_template_part("sidebar"); ?>
<?php get_footer(); ?>
