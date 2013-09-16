<?php
/*-----------引入檔案區--------------*/
include_once '../../mainfile.php';
include XOOPS_ROOT_PATH."/header.php";
/*-----------function區--------------*/

function show_content(){
  return "模組開發中";
}

/*-----------執行動作判斷區----------*/
$op=empty($_REQUEST['op'])?"":$_REQUEST['op'];

switch($op){

	default:
	$main=show_content();
	break;
}

/*-----------秀出結果區--------------*/
echo $main;
include_once XOOPS_ROOT_PATH.'/footer.php';
?>