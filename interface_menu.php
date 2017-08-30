<?php

//判斷是否對該模組有管理權限
$isAdmin = false;
if ($xoopsUser) {
    $module_id = $xoopsModule->getVar('mid');
    $isAdmin   = $xoopsUser->isAdmin($module_id);
}

//工具列設定

//回模組首頁
$interface_menu[_TAD_TO_MOD] = "index.php";
$interface_icon[_TAD_TO_MOD] = "fa-chevron-right";

//模組後台
if ($isAdmin) {
    $interface_menu[_TAD_TO_ADMIN] = "admin/main.php";
    $interface_icon[_TAD_TO_ADMIN] = "fa-chevron-right";
}
