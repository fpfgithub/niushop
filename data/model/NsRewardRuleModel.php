<?php
/**
 * @date : 2015.1.17
 * @version : v1.0.0.0
 */
namespace data\model;

use data\model\BaseModel as BaseModel;
/**
 * 奖励规则表
 * @author Administrator
 *
 */
class NsRewardRuleModel extends BaseModel {

    protected $table = 'ns_reward_rule';
    protected $rule = [
        'shop_id'  =>  '',
    ];
    protected $msg = [
        'shop_id'  =>  '',
    ];

}