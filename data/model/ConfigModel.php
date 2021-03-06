<?php
/**
 * ConfigModel.php
 *
 * @date : 2015.1.17
 * @version : v1.0.0.0
 */

namespace data\model;

use data\model\BaseModel as BaseModel;
/**
 * 第三方配置表
 */
class ConfigModel extends BaseModel {

    protected $table = 'sys_config';
    protected $rule = [
        'id'  =>  '',
        'value' => 'no_html_parse',
    ];
    protected $msg = [
        'id'  =>  '',
        'value' => '',
    ];

}