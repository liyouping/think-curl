<?php
header("Content-type:text/html; charset=utf-8");
require '../src/Curl.php';

/**
 * 获取指定日期的节假日信息
 * 工作日对应结果为 0, 休息日对应结果为 1, 节假日对应的结果为 2 
 */
$data = ['date' => '20180520'];
$res = \lyp\curl\Curl::http('https://api.goseek.cn/Tools/holiday', $data,'POST');
var_dump($res);