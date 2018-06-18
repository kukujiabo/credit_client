<?php
namespace App\Api;

/**
 * 会员资金流水
 *
 * @author Meroc Chen <398515393@qq.com>
 */
class MemberTurnover extends BaseApi {

  public function getRules() {
  
    return $this->rules([
    
      'getList' => [
      
        'page' => 'page|int|true||页码',
        'page_size' => 'page_size|int|true||每页条数',
        'order' => 'order|string|false||排序',
        'fields' => 'fields|string|false||字段'
      
      ]
    
    ]);
  
  }

  /**
   * 查询列表
   * @desc 查询列表
   *
   * @return array list
   */
  public function getList() {
  
    return $this->dm->getList($this->retriveRuleParams(__FUNCTION__));
  
  }

}
