<?php get_header(); ?>
<div id="continer">
<?php get_template_part("pagenation"); ?>
    <?php if (have_posts()) : ;?>
        <?php while (have_posts()) : the_post();?>
        <div class="main">
            <div class="meta">
                <div class="index-time">
                    <?php echo get_the_date("Y/m/d H:i:s"); ?>
                </div>
                <a class="index-newarticle-a" href="<?php the_permalink() ?>">
                    <div class="index-newarticle-img"><?php the_post_thumbnail([150,150]);?></div>
                    <div class="index-newarticle-title"><h1 class="index-h1"><?php the_title();?></h1></div>
                </a>
            </div>
        </div>
        <?php endwhile;?>
    <?php endif;?>
<?php get_template_part("pagenation"); ?>
    </div>
</div>
<?php get_template_part("sidebar"); ?>
<?php get_footer(); ?>
