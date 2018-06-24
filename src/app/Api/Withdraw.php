<?php
namespace App\Api;

/**
 * 提现接口
 *
 * @author Meroc Chen <398515393@qq.com>
 */
class Withdraw extends BaseApi {

  public function getRules() {
  
    return $this->rules([
    
      'create' => [
      
        'money' => 'money|float|true||提现金额'
      
      ]
    
    ]); 
  
  }

  /**
   * 新建新的提现申请
   * @desc 新建新的提现申请
   *
   * @return int id
   */
  public function create() {
  
    return $this->dm->create($this->retriveRuleParams(__FUNCTION__)); 
  
  }

}
