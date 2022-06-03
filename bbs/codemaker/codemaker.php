<?php
include_once('./_common.php');
if (G5_IS_MOBILE) { 
include_once(G5_THEME_PATH.'/head.php');
return;
}

$g5['title'] = "codemaker";

define('_codemaker_', true);

if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/codemaker.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>

<div class="latest_wr">
  <p> 
      
  </p>
</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>