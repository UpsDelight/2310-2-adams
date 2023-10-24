<?php 
$cats = wp_get_object_terms($post->ID,'news_cate');
if($cats){
    foreach ( $cats as $cat ){
        $cat_link = get_term_link($cat->term_id); 
        $cat_name = $cat->name;
        $cat_id = $cat->term_id;
    }
}
get_header();
?>
<!-- ↓↓ main ↓↓ -->
<main class="p_new_detail">
    <!-- ↓↓ breadcrumb ↓↓ -->
    <div class="breadcrumb">
        <ul class="breadcrumb_links ani fadein">
            <li class="breadcrumb_link"><a class="link" href="<?php echo home_url(); ?>">トップ</a></li>
            <li class="breadcrumb_link"><a class="link" href="<?php echo home_url('/news'); ?>">お知らせ</a></li>
            <li class="breadcrumb_link"><?php the_title(); ?></li>
        </ul>
    </div>
    <!-- ↑↑ breadcrumb ↑↑ -->
    <section class="news_detail ani fadein">
        <div class="container">
            <h2 class="news_detail_ttl"><?php the_title(); ?></h2>
            <p class="news_detail_info"><span class="date"><?php echo get_the_date('Y-m-d'); ?></span><span class="cate"><?php echo $cat_name; ?></span></p>
            <div class="news_detail_content">
                <?php the_content(); ?>
            </div>
            <p class="c_btn_link"><a href="<?php echo home_url("/news") ?>" class="link">戻る</a></p>
        </div>
    </section>
</main>
<!-- ↑↑ main ↑↑ -->
<?php get_footer(); ?>
