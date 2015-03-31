<?php
/*-----------引入檔案區--------------*/
$xoopsOption['template_main'] = "demo_adm_index.html";
include_once "header.php";
include_once "../function.php";

/*-----------function區--------------*/

//顯示預設頁面內容
function show_content(){
  global $xoopsTpl;

  $main="後台頁面開發中";
  $xoopsTpl->assign('content' , $main);
}

/*-----------執行動作判斷區----------*/
$op=empty($_REQUEST['op'])?"":$_REQUEST['op'];

switch($op){

  // case "xxx":
  // xxx();
  // header("location:{$_SERVER['PHP_SELF']}");

  default:
  show_content();
  break;
}

include_once 'footer.php';
?>
