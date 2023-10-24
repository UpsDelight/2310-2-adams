<?php get_header(); ?>
<div class="page_error">
    <div class="container">
        <div class="page_error_title">
            <h3 class="jp">申し訳ありません。<br>ご指定のページが見つかりません。</h3>
            <h3 class="en">Not Found</h3>
        </div>
        <p class="p">指定されたページは、削除されたか他の場所に移動した可能性があります。<br>お手数ですが、トップページよりメニューを再度ご確認ください。</p>

        <a href="<?php echo home_url('/'); ?>" class="nav_link nav_link_rectangle opacity_hover">TOPへ戻る</a>
    </div>
</div>
<?php get_footer(); ?>