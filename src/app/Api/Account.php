<?php
namespace App\Api;

/**
 * 会员帐户接口
 *
 * @author 
 */
class Account extends BaseApi {

  public function getRules() {
  
    return $this->rules([
    
      'getDetail' => [
      
      
      ],

      'getList' => [
      
        'page' => 'page|int|false||页码',

        'page_size' => 'page_size|int|false||每页条数'

      ],

      'cashApply' => [
      
        'cash' => 'cash|float|true||提现金额'
      
      ]
    
    ]);
  
  }

  /**
   * 查询账户详情
   * @desc 查询账户详情
   *
   * @return array data
   */
  public function getDetail() {
  
    return $this->dm->getDetail($this->retriveRuleParams(__FUNCTION__)); 
  
  }

  /**
   * 查询账户列表
   */
  public function getList() {
  
    return $this->dm->getList($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 代理提现
   * @desc 代理提现
   *
   * @return int id
   */
  public function cashApply() {
  
    return $this->dm->cashApply($this->retriveRuleParams(__FUNCTION__));
  
  }

}
