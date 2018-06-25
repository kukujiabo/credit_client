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

}
