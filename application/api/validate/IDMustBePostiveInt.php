<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/17
 * Time: 17:04
 */

namespace app\api\validate;

class IDMustBePostiveInt extends  BaseValidate
{
    protected $rule = [
        'id' => 'require|isPostiveInteger'
    ];
    //自定义验证规则，用于验证正整数
    protected function isPostiveInteger($value,$rule='',$data='',$field='')
    {
        if(is_numeric($value) && is_int($value + 0) && ($value + 0)>0){
            return true;
        }else{
            return $field.'必须是正整数';
        }
    }
}