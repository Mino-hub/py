<?php get_header(); ?>
<?php if (have_posts()) : the_post(); ?>    
<div id="continer">
    <div class="main">
        <div class="meta">
            <h1><?php the_title();?></h1>
            <?php the_post_thumbnail(); ?>
            <div><?php echo get_the_date("Y/m/d H:i:s"); ?></div>
        </div>
    </div>
    <div class="main-noline">
        <div id="article">
            <?php the_content(); ?>
        </div>
    </div>
    <div class="aspace">
    </div>
    <div class="main">
    </div>
    <div class="main">
        <div class="meta">
            <div>
               こちらの記事もオススメ 
            </div>
            <?php related_posts(); ?>
        </div>
    </div>
    <div class="main">
        <div class="meta">
            <div>
                この記事のカテゴリー
            </div>
            <ul>
                <li><a href="<?php echo site_url();?>">Home</a></li>
                <?php 
                    $cat = get_the_category();
                    $catId = $cat[0]->cat_ID;
                    $catName = $cat[0]->cat_name; 
                    $catUrl = get_category_link($catId);
                ?>
                <li><a href="<?php echo $catUrl;?>"><?php echo $catName; ?></a></li>
            </ul>
        </div>
    </div>
    <?php endif; ?>
<?php get_template_part("comments"); ?>
</div>
<?php get_template_part("sidebar"); ?>
<?php get_footer(); ?>
