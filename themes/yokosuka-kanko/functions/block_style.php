<?php

/**
 * ブロックスタイル 段落
 */
add_action('init', function () {
  register_block_style(
    'core/paragraph',
    [
      'name' => 'under-angle',
      'label' => '下部角ラベル'
    ]
  );
  register_block_style(
    'core/paragraph',
    [
      'name' => 'top-angle',
      'label' => '上部角ラベル'
    ]
  );
  register_block_style(
    'core/heading',
    [
      'name' => 'headline-H2',
      'label' => '特集H2'
    ]
  );
  register_block_style(
    'core/heading',
    [
      'name' => 'headline-H3',
      'label' => '特集H3'
    ]
  );
  register_block_style(
    'core/button',
    [
      'name' => 'shadow-button',
      'label' => '影付きボタン'
    ]
  );
  register_block_style(
    'core/button',
    [
      'name' => 'pdf-button',
      'label' => 'PDF付きボタン'
    ]
  );

  register_block_style(
    'core/separator',
    [
      'name' => 'border',
      'label' => '点線'
    ]
  );
  register_block_style(
    'core/button',
    [
      'name' => 'download-button',
      'label' => 'Word版とかの'
    ]
  );
});

/*
 * エディター用スタイルシート
 */
add_action('enqueue_block_editor_assets', function () {
  // ブラウザキャッシュを防ぐためのタイムスタンプ
  $time_stamp = date('mdgis');
  // エディター用のスタイル
  wp_enqueue_style('editor-style', get_stylesheet_directory_uri() . '/css/editor-style.css', [], $time_stamp);
}, 20);
