<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件

//用户自定义函数位于文件中，自定义函数会被自动加载
/**首字母大写   添加Controller后缀
 * @param $str    待处理的字符串
 * @return string   返回处理以后的字符串
 */
if (!function_exists('formatStr')){
    function formatStr($str)
    {
        $str =ucfirst($str);
        $str .='Controller';
        return $str;
    }
}
