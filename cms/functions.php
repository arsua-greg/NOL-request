<?php

//自動整形を無効にする化
// タイトル欄
remove_filter('the_title', 'wpautop');
// 本文欄
remove_filter('the_content', 'wpautop');
// コメント欄
remove_filter('comment_text', 'wpautop');
// 抜粋欄
remove_filter('the_excerpt', 'wpautop');

// 記号などの自動変換を無効化
// タイトル欄
remove_filter('the_title', 'wptexturize');
// 本文欄
remove_filter('the_content', 'wptexturize');
// コメント欄
remove_filter('comment_text', 'wptexturize');
// 抜粋欄
remove_filter('the_excerpt', 'wptexturize');
