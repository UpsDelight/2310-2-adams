<?php get_header();
$wp_object = get_queried_object();
// echo "<pre>";
// print_r($wp_object);
// echo "</pre>";
$category_id = $wp_object->term_id;
$category_name = $wp_object->name;
$category_slug = $wp_object->slug;
?>
<!-- ↓↓ main ↓↓ -->
<main>
    <!-- ↓↓ mv low ↓↓ -->
    <section class="mv_low">
        <figure class="mv_low_bg">
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/common_low/img_mv_mask_2.png" alt="Result お導入事例知らせ">
        </figure>
        <div class="mv_low_container">
            <h2 class="mv_low_ttl ani fadein">
                <span class="ttl_en">Result</span>
                <span class="ttl_jp"><?php echo mb_strimwidth($category_name, 0, 100, '…', 'UTF-8') ?></span>
            </h2>
        </div>
    </section>
    <!-- ↑↑ mv low ↑↑ -->
    <!-- ↓↓ breadcrumb ↓↓ -->
    <div class="breadcrumb">
        <ul class="breadcrumb_links ani fadein">
            <li class="breadcrumb_link"><a class="link" href="<?php echo home_url(); ?>">トップ</a></li>
            <li class="breadcrumb_link"><a class="link" href="<?php echo home_url('/result/'); ?>">導入事例</a></li>
            <li class="breadcrumb_link"><?php echo $category_name; ?></li>
        </ul>
    </div>
    <!-- ↑↑ breadcrumb ↑↑ -->
    <section class="news_main result_main">
        <div class="container">
            <div class="news_content ani fadein">
                <?php  
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    global $post;
                    // Query post argument
                    $args = array(
                        'post_type'      => 'result',
                        'posts_per_page' => 9,
                        'paged'          => $paged,
                        'post_status'    => 'publish',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'result_cate',
                                'field' => 'slug',
                                'terms' => $category_slug
                            )
                        )
                    );
                    $posts_query = new WP_Query($args);
                    if($posts_query->have_posts()): ?>
                    <div class="news_posts1">
                        <?php foreach($posts_query->posts as $post):$posts_query->the_post(); ?>
                            <?php
                                $cats = get_the_terms($post->ID,'result_cate');
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
                                        <li class="news_post1_cat news_post1_cat_<?php echo $category_slug;?>"><span class="hashtag">&num;</span><?php echo  $category_name; ?></li>
                                    </ul>
                                <?php endif;?>
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