<?php
/**
 * AdminUserModel.php
 *
 * @date : 2015.1.17
 * @version : v1.0.0.0
 */
namespace data\model;

use data\model\BaseModel as BaseModel;

/**
 * 赠品发放记录
 */
class NSPromotionGiftGrantRecordsModel extends BaseModel
{

    protected $table = 'ns_promotion_gift_grant_records';

    protected $rule = [
        'uid' => ''
    ];

    protected $msg = [
        'uid' => ''
    ];
}