<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/17
 * Time: 15:05
 */

namespace app\api\validate;


use think\Exception;
use think\Request;
use think\Validate;

class BaseValidate extends Validate
{
    public function goCheck() {
        /**
         * 获取所有http请求的参数
         * 对这些参数进行校验
         */
        $request = Request::instance();

        $params = $request->param();

        $result = $this->check($params);

        if(!$result){
            $error = $this->error;
//            //抛出一个错误
            throw new Exception($error);
        }else{
            return true;
        }

    }
}