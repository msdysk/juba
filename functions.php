<?php

function new_excerpt_more($post) {
    return ' <a href="'. esc_url( get_permalink() ) . '">' . '…続きを読む' . '</a>';    
}    
add_filter('excerpt_more', 'new_excerpt_more');

// jsの読み込み
function my_scripts() {
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'javascript',get_template_directory_uri().'/js/control.js',array('jquery'));
  }
  add_action( 'wp_enqueue_scripts', 'my_scripts' );

// メニューの取り込み
add_theme_support('menus');

// アイキャッチ画像
add_theme_support('post-thumbnails');

// アイキャッチ画像
add_theme_support( 'post-thumbnails' );

// ウィジェット
register_sidebar();

// カスタムロゴ
add_image_size('mytheme-logo', 160, 90);
add_theme_support('custom-logo', array(
    'size' => 'mytheme-logo'
));

// カスタムメニューの定義
// 

function twpp_setup_theme() {
    register_nav_menu( 'header-navigation', 'Header Navigation' );
  }
  
  add_action( 'after_setup_theme', 'twpp_setup_theme' );
?>