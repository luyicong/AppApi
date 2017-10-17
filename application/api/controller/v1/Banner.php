<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/11
 * Time: 17:00
 */

namespace app\api\controller\v1;


use app\api\validate\IDMustBePostiveInt;

class Banner
{
    /**
     * 获取指定id的banner信息
     * @url /banner/:id
     * @http GET
     * @id banner的id
     */
    public function getBanner($id) {

        (new IDMustBePostiveInt())->goCheck();

//        if(!$result){
//            echo $validate->getError();
//        }
            echo $id;
    }
}