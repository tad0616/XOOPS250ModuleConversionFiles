<?php
//判斷是否對該模組有管理權限
$session_name = basename(__DIR__) . '_adm';
if (!isset($_SESSION[$session_name])) {
    $_SESSION[$session_name] = ($xoopsUser) ? $xoopsUser->isAdmin() : false;
}

//回模組首頁
$interface_menu[_TAD_TO_MOD] = "index.php";
$interface_icon[_TAD_TO_MOD] = "fa-chevron-right";

//模組後台
if ($isAdmin) {
    $interface_menu[_TAD_TO_ADMIN] = "admin/main.php";
    $interface_icon[_TAD_TO_ADMIN] = "fa-chevron-right";
}
