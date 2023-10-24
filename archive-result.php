<?php get_header(); 
?>
<!-- ↓↓ main ↓↓ -->
<main>
    <!-- ↓↓ mv low ↓↓ -->
    <section class="mv_low">
        <figure class="mv_low_bg">
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/common_low/img_mv_mask_2.png" alt="Result 導入事例">
        </figure>
        <div class="mv_low_container">
            <h2 class="mv_low_ttl ani fadein">
                <span class="ttl_en">Result</span>
                <span class="ttl_jp">導入事例</span>
            </h2>
        </div>
    </section>
    <!-- ↑↑ mv low ↑↑ -->
    <!-- ↓↓ breadcrumb ↓↓ -->
    <div class="breadcrumb">
        <ul class="breadcrumb_links ani fadein">
            <li class="breadcrumb_link"><a class="link" href="<?php echo home_url(); ?>">トップ</a></li>
            <li class="breadcrumb_link">導入事例</li>
        </ul>
    </div>
    <!-- ↑↑ breadcrumb ↑↑ -->
    <section class="news_main result_main">
        <div class="container">
            <div class="news_content ani fadein">
                <?php  
                    $terms = get_terms([
                        'taxonomy' => 'result_cate',
                        'hide_empty' => false,
                    ]);
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    global $post;
                    // Query post argument
                    $args = array(
                        'post_type'      => 'result',
                        'posts_per_page' => 9,
                        'paged'          => $paged,
                        'post_status'    => 'publish',
                        // 'orderby'        => 'date',
                        // 'order'          => 'DESC'
                    );
                    $posts_query = new WP_Query($args);
                    if($posts_query->have_posts()): ?>
                    <div class="news_posts1">
                        <?php foreach($posts_query->posts as $post):$posts_query->the_post(); ?>
                            <?php
                                $cats = get_the_terms($post->ID,'result_cate');
                                // echo '<pre>';
                                // print_r($cats);
                                // echo '</pre>';
                                if($cats){
                                    foreach ( $cats as $cat ){
                                    $cat_link = get_term_link($cat->term_id); 
                                    $cat_name = $cat->name;
                                    $cat_id = $cat->term_id;
                                    $cat_slug = $cat->slug;
                                    }
                                }
                            ?>
                            <div class="news_post1">
                                <div class="news_post1_img">
                                <?php if (has_post_thumbnail()) {
                                     the_post_thumbnail();    
                                    ?>
								    <?php } else {?>
                                    <img loading="lazy" src="<?php echo get_theme_file_uri(); ?>/assets/images/common/img_dummy.jpg" alt="dummy" width="360" height="233">
								    <?php }?>
                                </div>
                                <div class="news_post1_info">
                                <?php if($cats): ?>
                                    <ul class="news_post1_cats">
                                        <?php foreach ( $cats as $cat ):?>
                                        <li class="news_post1_cat news_post1_cat_<?php echo $cat->slug;?>"><span class="hashtag">&num;</span><?php echo  $cat->name; ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                    <?php endif; ?>
                                    <p class="news_post1_ttl"><?php echo strip_tags(get_the_title());?> </p>
                                    <p class="news_post1_desc"><?php echo strip_tags(get_the_content());?></p>
                                </div>
                                    </div>
                        <?php endforeach; ?>
                    </div>
                    <?php
                    wp_pagenavi(array('query' => $posts_query));
                    wp_reset_postdata();
                ?>
                <?php else: echo '<p class="no_post">現在お知らせはありません。</p>'; ?> 
                <?php endif; ?>
            </div>
            <?php echo get_sidebar(); ?>
        </div>
    </section>
</main>
<!-- ↑↑ main ↑↑ -->
<?php get_footer(); ?>