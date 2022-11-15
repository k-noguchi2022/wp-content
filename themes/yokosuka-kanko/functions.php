<?php

/**
 * テーマのセットアップ
 */
function yokosuka_theme_setup()
{
  // タイトルタグ（<title>）の出力.
  add_theme_support('title-tag');
  // アイキャッチ画像の有効化.
  add_theme_support('post-thumbnails');
  // HTML5フォームの有効化.
  add_theme_support('html5', array('search-form'));
  // 固定ページ・投稿ページのアイキャッチサイズ.
  //add_image_size('page_eyecatch', 1100, 610, true);
  // 記事一覧のアイキャッチサイズ.
  //add_image_size('archive_thumbnail', 200, 150, true);
  // カスタムメニュー有効化.
  register_nav_menus(array(
    'header_menu' => 'ヘッダー用',
    'footer_menu_left' => 'フッター左用',
    'footer_menu_right' => 'フッター右用',
    'fishing_menu' => '釣り用',
    'walk_menu' => 'ウォーキングコース用'
  ));
  /* ウィジェットの機能を追加 */
  add_theme_support('widgets');
}
add_action('after_setup_theme', 'yokosuka_theme_setup');

/**
 * 外部ファイルの読み込み
 */
function yokosuka_enqueue_scripts()
{
    // jQueryを読み込む.
    wp_enqueue_script('jquery');
    // Google Fonts を読み込む.
    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500&display=swap',
        array(),
        '1.0.0'
    );
    // テーマ独自のCSSファイルを読み込む.
    wp_enqueue_style(
        'yokosuka-theme-style',
        get_template_directory_uri() . '/css/style.css',
        array(),
        '1.0.0'
    );
    //独自js読み込み
    wp_enqueue_script(
        'custom_script',
        get_template_directory_uri() . '/js/menu.js',
        ['jquery'],
        '1.0.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'yokosuka_enqueue_scripts');

/**
 * ブロックエディタ対応
 */
function yokosuka_block_setup()
{
  // ブロック用CSSの有効化.
  add_theme_support('wp-block-styles');
  // 埋め込み要素のレスポンシブスタイル適用.
  add_theme_support('responsive-embeds');
  // 幅広、全幅のスタイルに対応.
  add_theme_support('align-wide');
  // エディター用CSSの読み込み.
  add_theme_support('editor-styles');
  add_editor_style('css/editor-style.css');
  // エディター側にGoogle Fontsを読み込み.
  add_editor_style('https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500&display=swap');
}
add_action('after_setup_theme', 'yokosuka_block_setup');

//抜粋の文字量を指定できる関数
function custom_excerpt($length)
{
  global $post;
  $content = mb_substr(strip_tags($post->post_excerpt), 0, $length);

  if (!$content) {
    $content =  $post->post_content;
    $content =  strip_shortcodes($content);
    $content =  strip_tags($content);
    $content =  str_replace("&nbsp;", "", $content);
    $content =  html_entity_decode($content, ENT_QUOTES, "UTF-8");
    $content =  mb_substr($content, 0, $length);
  }
  return $content;
}


function my_posts_control($query)
{
  global $showContents;
  if (is_admin() || !$query->is_main_query()) {
    return;
  }
  if (is_post_type_archive('events')) {
    $query->set('posts_per_page', 5);
    return;
  }
  if (is_post_type_archive('features')) {
    $query->set('posts_per_page', 5);
    return;
  }
  if (is_post_type_archive('members')) {
    $query->set('posts_per_page', 5);
    return;
  }
  if (is_post_type_archive('news')) {
    $query->set('posts_per_page', 5);
    return;
  }
  if (is_post_type_archive('tours')) {
    $query->set('posts_per_page', 5);
    return;
  }
  if (is_post_type_archive('walking')) {
    $query->set('posts_per_page', 5);
    return;
  }
}
add_action('pre_get_posts', 'my_posts_control');


/*	カスタム投稿のパーマリンク設定
-----------------------------------------------------*/
//カスタム投稿タイプのパーマリンクを投稿IDに変更する。
add_filter('post_type_link', 'generateCustomPostLink', 1, 2);
add_filter('rewrite_rules_array', 'addRewriteRules');

function generateCustomPostLink($link, $post)
{
  //投稿IDに書き換えたパーマリンク文字列を返す
  if ($post->post_type === 'news') {
    return home_url('/news/' . $post->ID);
  } elseif ($post->post_type === 'walking') {
    return home_url('/walking/' . $post->ID);
  } elseif ($post->post_type === 'events') {
    return home_url('/events/' . $post->ID);
  } elseif ($post->post_type === 'features') {
    return home_url('/features/' . $post->ID);
  } elseif ($post->post_type === 'member') {
    return home_url('/member/' . $post->ID);
  } else {
    return $link;
  }
}

//投稿IDに書き換えたパーマリンクに対応したクエリルールを追加
function addRewriteRules($rules)
{
  $new_rule = array(
    'news/([0-9]+)/?$' => 'index.php?post_type=news&p=$matches[1]',
    'walking/([0-9]+)/?$' => 'index.php?post_type=walking&p=$matches[1]',
    'events/([0-9]+)/?$' => 'index.php?post_type=events&p=$matches[1]',
    'features/([0-9]+)/?$' => 'index.php?post_type=features&p=$matches[1]',
    'member/([0-9]+)/?$' => 'index.php?post_type=member&p=$matches[1]',
  );
  //ルール配列に結合
  return $new_rule + $rules;
}

//お知らせ外部リンク設定
function wp_post_link($link, $post)
{
  $meta = get_post_meta($post->ID, 'link_url', TRUE);
  $url = esc_url(filter_var($meta, FILTER_VALIDATE_URL));
  return $url ? $url : $link;
}
add_filter('post_link', 'wp_post_link', 10, 2);

/** 
 * Include Functions
 * いろんな関数を個々に読み込む
 */
//ブロックテンプレート
get_template_part('functions/block_style');

// 三角を表示させる
function disable_emoji()
{
  remove_action('wp_head', 'print_emoji_detection_script', 7);
  remove_action('admin_print_scripts', 'print_emoji_detection_script');
  remove_action('wp_print_styles', 'print_emoji_styles');
  remove_action('admin_print_styles', 'print_emoji_styles');
  remove_filter('the_content_feed', 'wp_staticize_emoji');
  remove_filter('comment_text_rss', 'wp_staticize_emoji');
  remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
}
add_action('init', 'disable_emoji');
