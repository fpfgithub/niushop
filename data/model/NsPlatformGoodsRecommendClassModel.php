<?php
/**
 * @date : 2015.1.17
 * @version : v1.0.0.0
 */
namespace data\model;

use data\model\BaseModel as BaseModel;
/**
 * 平台商品推荐类型
 * @author Administrator
 *
 */
class NsPlatformGoodsRecommendClassModel extends BaseModel {

    protected $table = 'ns_platform_goods_recommend_class';
    protected $rule = [
        'class_id'  =>  '',
    ];
    protected $msg = [
        'class_id'  =>  '',
    ];
  

}