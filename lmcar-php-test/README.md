# lmcar-php-test
\src\Service\Common.php 

geoHelperAddress()函数

最好不要随意的在代码中间return，尽量保证一个函数一个return即可

$response = $geoHelper->convert_addresses($param);
建议写在一个单独的函数或者类里面




checkStatusCallback() 函数
$code_arr = ['909', '915', '916']; 
$open_status_arr = ['901' => 1, '902' => 2, '903' => 3];
建议写在配置文件里
return $order_id.'-'.$open_status_arr[$status]; 建议返回数组格式而不是字符串拼接
