
<div class="meta">
    <div>
        カテゴリー一覧
    </div>
    <?php
        $args = array(
            'type'                     => 'post',
            'child_of'                 => 0,
            'parent'                   => '',
            'orderby'                  => 'name',
            'order'                    => 'ASC',
            'hide_empty'               => 1,
            'hierarchical'             => 1,
            'exclude'                  => '',
            'include'                  => '',
            'number'                   => '',
            'taxonomy'                 => 'category',
            'pad_counts'               => false 
        );
        echo "<ul>";
        foreach (get_categories($args) as $item) {
            $link = get_category_link($item->term_id);
            echo "<li><a class=\"category\" href=\"{$link}\">{$item->name}</a></li>";
            }
        echo "</ul>";
    ?>
</div>
