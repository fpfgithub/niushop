<?php
/**
 * @date : 2015.1.17
 * @version : v1.0.0.0
 */
namespace data\model;

use data\model\BaseModel as BaseModel;

class NsOrderGoodsViewModel extends BaseModel {

    protected $table = 'ns_order_goods';
    /**
     * 获取列表返回数据格式
     * @param unknown $page_index
     * @param unknown $page_size
     * @param unknown $condition
     * @param unknown $order
     * @return unknown
     */
    public function getOrderGoodsViewList($page_index, $page_size, $condition, $order){
    
        $queryList = $this->getOrderGoodsViewQuery($page_index, $page_size, $condition, $order);
        $queryCount = $this->getOrderGoodsViewCount($condition);
        $list = $this->setReturnList($queryList, $queryCount, $page_size);
        return $list;
    }
    /**
     * 获取列表
     * @param unknown $page_index
     * @param unknown $page_size
     * @param unknown $condition
     * @param unknown $order
     * @return \data\model\multitype:number
     */
    public function getOrderGoodsViewQuery($page_index, $page_size, $condition, $order)
    {
        $viewObj = $this->alias('nog')
        ->join('ns_order no','nog.order_id=no.order_id','left')
        ->field('nog.goods_name, nog.sku_name, nog.num, no.pay_time, no.create_time, no.user_name, no.order_no');
        $list = $this->viewPageQuery($viewObj, $page_index, $page_size, $condition, $order);
        return $list;
    }
    /**
     * 获取列表数量
     * @param unknown $condition
     * @return \data\model\unknown
     */
    public function getOrderGoodsViewCount($condition)
    {
        $viewObj = $this->alias('nog')
        ->join('ns_order no','nog.order_id=no.order_id','left')
        ->field('nog.goods_name, nog.sku_name, nog.num, no.pay_time');
        $count = $this->viewCount($viewObj,$condition);
        return $count;
    }
    
    public function getShippingList($page_index, $page_size, $condition, $order){
        $viewObj = $this->alias("nog")
        ->join("ns_order no","nog.order_id = no.order_id","left")
        ->join('ns_goods_sku ngs','nog.sku_id = ngs.sku_id','left')
        ->field('nog.goods_name,nog.sku_id,nog.sku_name,SUM(nog.num) as num,ngs.code,ngs.stock')
        ->group('nog.sku_id');
        $list = $this->viewPageQuery($viewObj, $page_index, $page_size, $condition, $order);
        return $list;
    }
}
