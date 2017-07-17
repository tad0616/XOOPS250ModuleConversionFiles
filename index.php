<?php
/*-----------引入檔案區--------------*/
include_once "header.php";
$xoopsOption['template_main'] = "demo_index.tpl";
include_once XOOPS_ROOT_PATH . "/header.php";

/*-----------function區--------------*/

//顯示預設頁面內容
function show_content()
{
    global $xoopsTpl;

    $main = "模組開發中";
    $xoopsTpl->assign('content', $main);
}

/*-----------執行動作判斷區----------*/
include_once $GLOBALS['xoops']->path('/modules/system/include/functions.php');
$op = system_CleanVars($_REQUEST, 'op', '', 'string');
// $sn = system_CleanVars($_REQUEST, 'sn', 0, 'int');

switch ($op) {

    // case "xxx":
    // xxx();
    // header("location:{$_SERVER['PHP_SELF']}");
    // exit;

    default:
        show_content();
        break;
}

/*-----------秀出結果區--------------*/
include_once XOOPS_ROOT_PATH . '/footer.php';
