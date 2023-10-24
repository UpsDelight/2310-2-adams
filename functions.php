<?php
// アイキャッチ画像の有効化
add_theme_support('post-thumbnails');


function remove_redirect_guess_404_permalink($redirect_url)
{
    if (is_404())
        return false;
    return $redirect_url;
}
add_filter('redirect_canonical', 'remove_redirect_guess_404_permalink');


function page_is_ancestor_of($slug)
{
    global $post;
    // 親か判別したい固定ページスラッグからページ情報を取得
    if (is_page()) {
        $page = get_page_by_path($slug);
        $result = false;
        if (isset($page)) {
            foreach ($post->ancestors as $ancestor) {
                if ($ancestor == $page->ID) {
                    $result = true;
                }
            }
        }
        return $result;
    }
}

//Custom sidebar for news
function siderbar_news()
{
    $start_year = 2020;
    $current_year = (int) date('Y');
    $data = [];

    for ($i = $current_year; $i >= $start_year; $i--) {
        if ($i == $start_year) {
            $data[] = [
                'name' => $i . '年以前',
                'year' => $i
            ];
        } else {
            $data[] = [
                'name' => $i . '年',
                'year' => $i
            ];
        }
    }

    return $data;
}

// エラーメッセージの変更
function validation_rule($validation, $data, $Data)
{
    $validation->set_rule('name', 'noempty', array('message' => 'Not entered.'));
    $validation->set_rule('details', 'noempty', array('message' => 'Not entered.'));
    $validation->set_rule('mail', 'noempty', array('message' => 'Not entered.'));
    $validation->set_rule('mail_confirm', 'noempty', array('message' => 'Not entered.'));
    $validation->set_rule('privacy', 'required', array('message' => 'Not checked.'));
    $validation->set_rule('mail_confirm', 'eq', array(
        'target' => 'mail',
        'message' => 'No match.'
    ));
    return $validation;
}
add_filter('mwform_validation_mw-wp-form-201', 'validation_rule', 10, 3);


add_shortcode('siteurl', 'shortcode_siteurl');
function shortcode_siteurl()
{
    return get_bloginfo('url');
}


//Add category name in wp admin
add_filter('manage_result_posts_columns', 'adams_filter_posts_columns' );
function adams_filter_posts_columns( $columns ) {
    $columns = array(
        'cb' => $columns['cb'],
        'title' => __( 'Title' ),
        'category' => __( 'Category' ),
        'date' => __( 'Date' ),
    );
    return $columns;
}
add_action( 'manage_result_posts_custom_column', 'adams_result_column', 10, 2);
function adams_result_column( $column, $post_id ) {
    if ( $column == 'category' ) {
        $terms = get_the_terms($post_id,'result_cate');
      //  print_r($terms);
        if(!empty($terms)){
            foreach($terms as $key => $term){
                $txt = $term->name;
                if ($key !== count($terms)-1) {
                    $txt .= ', ';
                }
                echo $txt;
            }
        }
    }
}