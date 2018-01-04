<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\Route;
use think\View;
//自定义路由 Route类
//Route::rule('photos/create','photo/create','get');
//Route::rule('photos',function (){
//    return 'post photos';
//},'post');
//Route::put('photos',function (){
//    return 'put photos';
//});
//Route::rule('photos', function(){
//    return '闭包函数处理photos请求';
//},'get');
//注册资源控制器路由
//Route::get('blogs',function (){
//    $view=new view();
//    $view->assign('name','zhangsan');
//    return $view->fetch('index@photo/index');
//});
////@前为模块名称，后面为路径
//Route::get('posts/:id',function($id){
//    //:id表示动态参数
//    //使用view()辅助函数显示视图
//    return view('index@photo/index',[
//        'id'  =>   $id,
//        'name' => 'zhangsan'
//    ]);
//});
Route::resource('users','index/User',[
    'bind_model'  =>  [
        //模型类的完整名称
        'user'=>'app\common\model\User'
    ]
]);
Route::resource('photos','index/Photo');
return [
    //使用数组方式定义路由，必须位于文件最后位置
    '__pattern__' => [
        'name' => '\w+',
    ],
    '[hello]'     => [
        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],

];
