<?php
namespace App\Api;

/**
 * 赠品接口
 * @desc 赠品接口
 *
 * @author Meroc Chen <398515393@qq.com> 2018-06-07
 */
class Reward extends BaseApi {

  public function getRules() {
  
    return $this->rules([
    
      'getDetail' => [
      
        'id' => 'id|int|true||赠品id'
      
      ],

      'rewardShopUnionList' => [
      
        'reward_name' => 'reward_name|string|false||赠品名称',
        'shop_name' => 'shop_name|string|false||门店名称',
        'shop_id' => 'shop_id|int|false||门店id',
        'fields' => 'fields|string|false|*|字段',
        'order' => 'order|string|false|created_at desc|排序',
        'page' => 'page|int|false|1|页码',
        'page_size' => 'page_size|int|false|20|每页条数'
      
      ],

      'getList' => [
      
        'reward_name' => 'reward_name|int|false|1|贷款名称',
        'status' => 'status|int|false|1|贷款状态',
        'page' => 'page|int|false|1|页码',
        'page_size' => 'page_size|int|false|10|每页条数',
      
      ],

      'loanCommisionList' => [
      
        'reward_name' => 'reward_name|string|false||贷款名称',
        'reward_code' => 'reward_code|string|false||贷款编码',
        'page' => 'page|int|false||页码',
        'page_size' => 'page_size|int|false||每页条数',
        'fields' => 'fields|string|false||字段',
        'order' => 'order|string|false||排序'
      
      ],

      'auditLoanList' => [
      
        'loan_id' => 'loan_id|int|false||贷款id',

        'fields' => 'fields|string|false||字段',

        'order' => 'order|string|false||排序',

        'page' => 'page|int|false||页码',

        'page_size' => 'page_size|int|false||每页条数'
      
      ]
    
    ]);
  
  }

  /**
   * 赠品门店联合列表
   * @desc 赠品门店联合列表
   *
   * @return array list
   */
  public function rewardShopUnionList() {
  
    return $this->dm->rewardShopUnionList($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 查询赠品详情
   * @desc 查询赠品详情
   *
   * @return array data
   */
  public function getDetail() {

    return $this->dm->getDetail($this->retriveRuleParams(__FUNCTION__));

  }

  /**
   * 查询赠品列表
   * @desc 查询赠品列表
   *
   * @return array list
   */
  public function getList() {
  
    return $this->dm->getList($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 带佣金的贷款列表
   * @desc 带佣金的贷款列表
   *
   * @return array list
   */
  public function loanCommisionList() {
  
    return $this->dm->loanCommisionList($this->retriveRuleParams(__FUNCTION__));  
  
  }

  /**
   * 贷款脱敏数据接口
   * @desc 贷款脱敏数据接口
   *
   * @return array list
   */
  public function auditLoanList() {
  
    return $this->dm->auditLoanList($this->retriveRuleParams(__FUNCTION__)); 
  
  }

}
