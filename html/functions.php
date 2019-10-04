<?php
/**
 * カスタムメニューの登録
*/
register_nav_menus();
/**
* アイキャッチ画像の有効化
*/
add_theme_support('post-thumbnails');
/**
* 画像サイズの登録
*/
add_image_size('blog-thumb', 260, 190, true);
/**
* カスタム投稿タイプ（お知らせ）の登録
*/
register_post_type(
 'news',
 array(
 'labels' => array(
 'name' => 'お知らせ',
 'add_new_item' => 'お知らせの追加',
 'edit_item' => 'お知らせの編集'
 ),
 'public' => true,
 'supports' => array('title')
 )
);
/**
* カスタム投稿タイプ（つぼみにっき）の登録
*/
register_post_type(
 'blog',
 array(
 'labels' => array(
 'name' => 'つぼみにっき',
 'add_new_item' => 'つぼみにっきの追加',
 'edit_item' => 'つぼみにっきの編集'
 ),
 'public' => true,
 'supports' => array('title', 'editor', 'thumbnail')
 )
);

function set_org_query_vars( $query_vars ) {
  $query_vars[] = 'prm';       // 独自のパラメータ prmを配列最後尾に追加する。
  $query_vars[] = 'prm1';       // 独自のパラメータ prm2を配列最後尾に追加する。
  $query_vars[] = 'prm2';       // 独自のパラメータ prm2を配列最後尾に追加する。
  return $query_vars;
}
add_filter('query_vars', 'set_org_query_vars');

