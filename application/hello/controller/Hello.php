<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/11
 * Time: 11:49
 */
namespace app\hello\controller;

use think\Request;

class Hello
{
    //第一种获取路由请求参数的方式
    public function index()
    {
        //获取所有传过来的参数
        $param = Request::instance()->param();
        //获取地址栏？后面的参数，可以指定获取特定的某一个get('id')
        $param = Request::instance()->get();
        //获取路由路径里面传的参数,可以指定获取特定的某一个route('id')
        $param = Request::instance()->route();
        //不区分求方式，什么请求方式都可以
        $id = Request::instance()->param('id');

        $name = Request::instance()->param('name');

        $all = input('param.');//获取所有参数

        $all = input('param.name');//获取某一个参数

        echo $id;
        echo '|';
        echo $name;

//        return 'hello!';
    }
    //第二种获取路由请求参数的方式
    public function abc($id,$name)
    {
        echo $id;
        echo '|';
        echo $name;
//        return 'abc';
    }
}
