<?php
namespace App\Api;

/**
 * 会员支付宝账户接口
 * @desc 会员支付宝账户接口
 *
 * @return 
 */
class MemberAlipayAccount extends BaseApi {

  public function getRules() {
  
    return $this->rules([
    
      'create' => [
      
        'account' => 'account|string|true||支付宝账户',

        'real_name' => 'real_name|string|true||真实姓名'
      
      ],

      'getDetail' => [
      
      
      ]
    
    ]);
  
  }

  /**
   * 新建账户
   * @desc 新建账户
   *
   * @return
   */
  public function create() {
  
    return $this->dm->create($this->retriveRuleParams(__FUNCTION__));
  
  }

  public function getDetail() {
  
    return $this->dm->getDetail($this->retriveRuleParams(__FUNCTION__)); 
  
  }


}
