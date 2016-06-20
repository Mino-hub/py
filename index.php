<?php get_header(); ?>
<div id="continer">
    <div id="main">
    <?php if (have_posts()) : ;?>
        <?php while (have_posts()) : the_post();?>
            <div class="postlist">
                <div class="postlist-cat-div">
                    <div class="genericon genericon-time"><span><?php the_time('Y/m/d  g:i');?></span></div>
                    <div class="genericon genericon-category">daiet</div>
                </div> 
                <div class="postlist-wrap">
                    <a class="postlist-title-a" href="<?php the_permalink();?>"><?php the_title();?></a>
                    <a class="postlist-img-a" href="<?php the_permalink();?>"><?php the_post_thumbnail(array(50,50));?></a>
                </div>
                <div class="postlist-meta-div">
                    <div>
                        <?php 
                            $tag = get_the_tags(); 
                            echo "<span>※</span>";
                            foreach ($tag as $item) {
                                echo "<span>".$item->name."</span>";
                            }
                        ?>
                    </div>
                </div> 
            </div>
        <?php endwhile;?>
    <?php endif;?>
    </div>
    <div id="side">
    </div>
</div>
<?php get_footer(); ?>
