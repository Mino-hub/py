<?php get_header(); ?>
<?php if (have_posts()) : the_post(); ?>    
<div id="continer">
    <div class="main">
        <div class="panel-heading">
            <h1><?php the_title();?></h1>
             <?php echo get_the_date("Y/m/d H:i:s"); ?>
        </div>
        <ol class="breadcrumb breadcrumb-nomargin">
            <li><a href="<?php echo site_url();?>">Home</a></li>
            <?php 
                $cat = get_the_category();
                $catId = $cat[0]->cat_ID;
                $catName = $cat[0]->cat_name; 
                $catUrl = get_category_link($catId);
            ?>
            <li><a href="<?php echo $catUrl;?>"><?php echo $catName; ?></a></li>
        </ol>
    </div>
    <div class="main">
        <div id="article">
            <?php the_content(); ?>
        </div>
    </div>
<div></div>
    <div id="sidebar">
    </div>
    <?php endif; ?>
</div>
<?php get_footer(); ?>
