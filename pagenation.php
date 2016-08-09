
<div class="pagenation">
    <?php
        global $wp_query;
        $big = 999999999; 
        echo paginate_links( array(
            'base' => 'http://pyaka.net/%_%',
            'format' => '?page=%#%',
            'current' => max( 1, get_query_var('paged') ),
            'total' => $wp_query->max_num_pages
        ) );
    ?>
</div>
