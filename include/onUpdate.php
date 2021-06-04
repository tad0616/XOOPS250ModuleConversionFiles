<?php
// 如「模組目錄」= signup，則「首字大寫模組目錄」= Signup
// 如「資料表名」= actions，則「模組物件」= Actions

// use XoopsModules\Tadtools\Utility;
use XoopsModules\首字大寫模組目錄\Update;

// if (!class_exists('XoopsModules\Tadtools\Utility')) {
//     require XOOPS_ROOT_PATH . '/modules/tadtools/preloads/autoloader.php';
// }
if (!class_exists('XoopsModules\首字大寫模組目錄\Update')) {
    require dirname(__DIR__) . '/preloads/autoloader.php';
}

function xoops_module_update_模組目錄($module, $old_version)
{
    global $xoopsDB;

    if (Update::chk_1()) {
        Update::go_1();
    }

    return true;
}
