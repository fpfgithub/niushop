<?php
/**
 * @date : 2015.1.17
 * @version : v1.0.0.0
 */
namespace data\model;

use data\model\BaseModel as BaseModel;
/**
 * 商品sku 的回收站表
 * @author Administrator
 *
 */
class NsGoodsSkuDeletedModel extends BaseModel {

    protected $table = 'ns_goods_sku_deleted';
    protected $rule = [
        'sku_id'  =>  '',
    ];
    protected $msg = [
        'sku_id'  =>  '',
    ];

}