<?php
namespace App\Api;

/**
 * 合伙人接口
 *
 * @author Meroc Chen 
 */
class Partner extends BaseApi {

  public function getRules() {
  
    return $this->rules([
    
      'getReferenceList' => [
      
      
      ]
    
    ]);
  
  }

  /**
   * 查询下级合伙人接口
   * @desc 查询下级合伙人接口
   *
   * @return array list
   */
  public function getReferenceList() {
  
    return $this->dm->getReferenceList($this->retriveRuleParams(__FUNCTION__)); 
  
  }


}
