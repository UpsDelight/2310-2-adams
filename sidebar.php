<div class="news_sidebar ani fadein">
    <?php if( is_post_type_archive( 'news' ) || is_tax( 'news_cate' )): ?>
        <div class="news_archive">
         <h4 class="news_ttl">
            <span class="ttl_en">Archive</span>
            <span class="ttl_jp">アーカイブ</span>
        </h4> 
        <?php
            $archives = siderbar_news();
        ?>
        <ul class="news_archive_date">
            <?php foreach ($archives as $item): ?>
                <li><a href="<?php echo home_url('news/?y='.$item['year']); ?>"><?php echo $item['name']; ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
    <?php elseif( is_post_type_archive( 'result' ) || is_tax( 'result_cate' ) ||is_singular( 'result' )): ?>
        <div class="news_archive">
         <h4 class="news_ttl">
            <span class="ttl_en">Category</span>
            <span class="ttl_jp">カテゴリ</span>
        </h4> 
        <?php
            $taxonomy = 'result_cate';
            $terms = get_terms(array(	'taxonomy' => $taxonomy, 'orderby' => 'id', 'order' => 'ASC',));
        ?>
        <ul class="news_archive_date news_archive_cat">
            <?php foreach ($terms as $item): ?>
                <li><a href="<?php echo get_term_link($item->slug, $taxonomy);?>"><?php echo $item->name; ?></a></li>
            <?php endforeach; ?>
        </ul>
    <?php endif;?>

</div>
