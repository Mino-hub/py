<?php
    $args = array(
        'posts_per_page'   => 25, 
        'orderby'          => 'rand',
        'post_type'        => array('post'),
        'post_status'      => 'publish'
    );
    $wp_query = new WP_Query($args);
?>

<div class="meta">
    <div>
        おすすめ記事
    </div>
    <div class="newArticleSpace">
    <?php if (have_posts()) : ?>    
            <ul>
            <?php while (have_posts()) : the_post(); ?>
                <li>
                    <a class="sidebar-newarticle-a" href="<?php the_permalink() ?>">
                        <div class="sidebar-newarticle-img"><?php the_post_thumbnail([50,50]);?></div>
                        <div class="sidebar-newarticle-title"><?php the_title();?></div>
                    </a>
                </li>
            <?php endwhile; ?>
            </ul>
    <?php endif; wp_reset_query();?>
    </div>
</div>
