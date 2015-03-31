<?php
$modversion = array();

//---模組基本資訊---//
$modversion['name'] = '模組中文名稱';
$modversion['version'] = 1.00;
$modversion['description'] = '模組說明';
$modversion['author'] = '作者姓名';
$modversion['credits'] = '相關有功人員';
$modversion['help'] = 'page=help';
$modversion['license'] = 'GNU GPL 2.0';
$modversion['license_url'] = 'www.gnu.org/licenses/gpl-2.0.html/';
$modversion['image'] = 'images/logo.png';
$modversion['dirname'] = basename(dirname(__FILE__));


//---模組狀態資訊---//
$modversion['release_date'] = '2015/03/21';
$modversion['module_website_url'] = 'http://模組官網網址';
$modversion['module_website_name'] = '模組官網名稱';
$modversion['module_status'] = 'release';
$modversion['author_website_url'] = 'http://作者網站網址';
$modversion['author_website_name'] = '作者網站名稱';
$modversion['min_php']=5.2;
$modversion['min_xoops']='2.5';
$modversion['min_tadtools']='1.20';

//---paypal資訊---//
$modversion ['paypal'] = array();
$modversion ['paypal']['business'] = '作者@的Email';
$modversion ['paypal']['item_name'] = 'Donation : ' . '贊助對象名稱';
$modversion ['paypal']['amount'] = 0;
$modversion ['paypal']['currency_code'] = 'USD';


//---後台使用系統選單---//
$modversion['system_menu'] = 1;


//---模組資料表架構---//
//$modversion['sqlfile']['mysql'] = 'sql/mysql.sql';
//$modversion['tables'][0] = '';


//---後台管理介面設定---//
$modversion['hasAdmin'] = 1;
$modversion['adminindex'] = 'admin/index.php';
$modversion['adminmenu'] = 'admin/menu.php';


//---前台主選單設定---//
$modversion['hasMain'] = 1;
//$modversion['sub'][1]['name'] = '';
//$modversion['sub'][1]['url'] = '';


//---模組自動功能---//
//$modversion['onInstall'] = "include/install.php";
//$modversion['onUpdate'] = "include/update.php";
//$modversion['onUninstall'] = "include/onUninstall.php";


//---樣板設定---//
$modversion['templates'] = array();
$i=1;
$modversion['templates'][$i]['file'] = 'demo_index.html';
$modversion['templates'][$i]['description'] = '模組首頁樣板';
$i++;
$modversion['templates'][$i]['file'] = 'demo_index_b3.html';
$modversion['templates'][$i]['description'] = '模組首頁樣板 for bootstrap3';

$i++;
$modversion['templates'][$i]['file'] = 'demo_adm_index.html';
$modversion['templates'][$i]['description'] = '後台管理頁樣板';
$i++;
$modversion['templates'][$i]['file'] = 'demo_adm_index_b3.html';
$modversion['templates'][$i]['description'] = '後台管理頁樣板 for bootstrap3';


//---偏好設定---//
$modversion['config'] = array();
//$i=0;
//$modversion['config'][$i]['name']	= '偏好設定名稱（英文）';
//$modversion['config'][$i]['title']	= '偏好設定標題（常數）';
//$modversion['config'][$i]['description']	= '偏好設定說明（常數）';
//$modversion['config'][$i]['formtype']	= '輸入表單類型';
//$modversion['config'][$i]['valuetype']	= '輸入值類型';
//$modversion['config'][$i]['default']	= 預設值;


//---搜尋---//
//$modversion['hasSearch'] = 1;
//$modversion['search']['file'] = "include/search.php";
//$modversion['search']['func'] = "搜尋函數名稱";

//---區塊設定---//
//$modversion['blocks'] = array();
//$modversion['blocks'][1]['file'] = "區塊檔.php";
//$modversion['blocks'][1]['name'] = 區塊名稱（常數）;
//$modversion['blocks'][1]['description'] = 區塊說明（常數）;
//$modversion['blocks'][1]['show_func'] = "執行區塊函數名稱";
//$modversion['blocks'][1]['template'] = "區塊樣板.html";
//$modversion['blocks'][1]['edit_func'] = "編輯區塊函數名稱";
//$modversion['blocks'][1]['options'] = "設定值1|設定值2";


//---評論---//
//$modversion['hasComments'] = 1;
//$modversion['comments']['pageName'] = '單一頁面.php';
//$modversion['comments']['itemName'] = '主編號';

//---通知---//
//$modversion['hasNotification'] = 1;



?>
