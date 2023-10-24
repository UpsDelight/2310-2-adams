<?php get_header();
$wp_object = get_queried_object();
$category_id = $wp_object->term_id;
$category_name = $wp_object->name;
$cate_slug = $wp_object->slug;
?>
<!-- ↓↓ main ↓↓ -->
<main>
    <!-- ↓↓ mv low ↓↓ -->
    <section class="mv_low">
        <figure class="mv_low_bg">
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/common_low/img_mv_mask_2.png" alt="News お知らせ">
        </figure>
        <div class="mv_low_container">
            <h2 class="mv_low_ttl ani fadein">
                <span class="ttl_en">News</span>
                <span class="ttl_jp"><?php echo mb_strimwidth($category_name, 0, 100, '…', 'UTF-8') ?></span>
            </h2>
        </div>
    </section>
    <!-- ↑↑ mv low ↑↑ -->
    <!-- ↓↓ breadcrumb ↓↓ -->
    <div class="breadcrumb">
        <ul class="breadcrumb_links ani fadein">
            <li class="breadcrumb_link"><a class="link" href="<?php echo home_url(); ?>">トップ</a></li>
            <li class="breadcrumb_link"><a href="<?php echo home_url('/news/'); ?>">お知らせ</a></li>
            <li class="breadcrumb_link"><?php echo $category_name; ?></li>
        </ul>
    </div>
    <!-- ↑↑ breadcrumb ↑↑ -->
    <section class="news_main">
        <div class="container">
            <div class="news_content ani fadein">
                <div class="news_filter">
                    <h3 class="news_ttl">
                        <span class="ttl_en">Category</span>
                        <span class="ttl_jp">カテゴリー</span>
                    </h3>
                    <ul class="news_categories">
                        <li class="news_cate"><a class="link" href="<?php echo home_url(); ?>/news/">ALL</a></li>
                        <?php
                        $terms = get_terms([
                            'taxonomy' => 'news_cate',
                            'hide_empty' => false,
                        ]);

                        ?>
                        <?php foreach ($terms as $term) : ?>
                            <li class="news_cate <?php echo $term->term_id == $category_id ? 'active' : ''; ?>"><a class="link" href="<?php echo get_term_link($term->term_id); ?>"><?php echo $term->name; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                global $post;
                // Query post argument
                $args = array(
                    'post_type'      => 'news',
                    'posts_per_page' => 9,
                    'paged'          => $paged,
                    'post_status'    => 'publish',
                    // 'orderby'        => 'date',
                    // 'order'          => 'DESC',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'news_cate',
                            'field' => 'slug',
                            'terms' => $cate_slug
                        )
                    )
                );
                $posts_query = new WP_Query($args);
                if ($posts_query->have_posts()) : ?>
                    <div class="news_posts">
                        <?php
                            foreach ($posts_query->posts as $post) : $posts_query->the_post(); ?>
                            <a class="news_post" href="<?php the_permalink(); ?>">
                                <p class="news_post_ttl"><?php the_title() ?> </p>
                                <p class="news_post_info"><span class="date"><?php echo get_the_date('Y-m-d'); ?></span><span class="cate"><?php echo  $category_name; ?></span></p>
                            </a>
                        <?php endforeach; ?>
                    </div>

                    <?php
                        wp_pagenavi(array('query' => $posts_query));
                        wp_reset_postdata();
                        ?>
                <?php else : echo '<p class="no_post">現在お知らせはありません。</p>'; ?>
                <?php endif; ?>
            </div>
            <?php echo get_sidebar(); ?>
        </div>
    </section>
</main>
<!-- ↑↑ main ↑↑ -->
<?php get_footer(); ?>