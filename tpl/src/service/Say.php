<?php
namespace ${PROJECT_NAMESPACE}\Service;
/**
 * Say 演示示例
 * @copyright Copyright (c) 2014 oneniceapp.com, Inc. All Rights Reserved
 * @author 雷果国<leiguoguo@oneniceapp.com> 
 */
class Say extends \FS_Service {

    /**
     * 演示纯粹的Service
     * @param string $name 打招呼的人名
     * @access public
     * @return json {
     *     "code": 0,
     *     "data": "Hello xxx",
     * }
     */
    public function hello($name) {
        return $this->succ('Hello ' . $name);
    }

}
