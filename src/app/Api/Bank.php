<?php
namespace App\Api;

/**
 * 银行接口
 *
 * @author Meroc Chen <398515393@qq.com> 2018-06-10
 */
class Bank extends BaseApi {

  public function getRules() {
  
    return $this->rules([
    
      'getList' => [
      
        'name'  => 'name|string|false||名称',
        'fields'  => 'fields|string|false||名称',
        'order'  => 'order|string|false||名称',
        'page'  => 'page|int|false|1|页码',
        'page_size'  => 'page_size|int|false|10|每页条数'
      
      ]
    
    ]);
  
  }

  /**
   * 查询银行列表接口
   * @desc 查询银行列表接口
   *
   * @return array list
   */
  public function getList() {
  
    return $this->dm->getList($this->retriveRuleParams(__FUNCTION__)); 
  
  }


}
