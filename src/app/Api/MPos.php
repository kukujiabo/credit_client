<?php
namespace App\Api;

class MPos extends BaseApi {

  public function getRules() {
  
    return $this->rules([
    
      'getList' => [
      
        'pos_name' => 'pos_name|string|false||POS机',
        'page' => 'page|int|false||页码',
        'page_size' => 'page_size|int|false||每页条数',
      
      ]
    
    ]); 
  
  }

  /**
   * 获取列表
   * @desc 获取列表
   *
   * @return array list
   */
  public function getList() {
  
    return $this->dm->getList($this->retriveRuleParams(__FUNCTION__)); 
  
  }

}
