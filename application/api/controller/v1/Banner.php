<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/11
 * Time: 17:00
 */

namespace app\api\controller\v1;


use think\Validate;

class Banner
{
    /**
     * 获取指定id的banner信息
     * @url /banner/:id
     * @http GET
     * @id banner的id
     */
    public function getBanner($id) {

        $data = [
            'name'  => 'thinkphp1111111111111111111',
            'age'   => 121,
        ];

        $rule = [
            'name|姓名'  => 'require|max:10',
            'age|年龄'   => 'number|between:1,120'
        ];

        $validate = new Validate($rule);

        $result = $validate->check($data);

        if(!$result){
            echo $validate->getError();
        }
//
    }
}