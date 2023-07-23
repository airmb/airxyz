<?php
//时区设置
date_default_timezone_set('Asia/Shanghai');
//允许跨域
header("Access-Control-Allow-Origin: *");



//新建返回数据
$arrBack = array(
    "errNum" => '0',
    "retMsg" => '暂无提示',
    "retData" => array()
);


$appleidEmail = $_POST['appleidEmail'];

if(!$appleidEmail){
    $arrBack['retMsg'] = '请输入apid邮箱';
    echo json_encode($arrBack,JSON_UNESCAPED_UNICODE);
    return;
}

$fileStr = __FILE__;
$fileStr = str_replace('api/apidCheck.php','main.pyc',$fileStr);



$bashStr = 'python3 '.$fileStr.' '.$appleidEmail;

$mainPy = exec($bashStr);

$arrBack['errNum'] = '1';
$arrBack['retMsg'] = '手动检测已经下发，请等待...';
echo json_encode($arrBack,JSON_UNESCAPED_UNICODE);
return;
