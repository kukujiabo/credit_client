<?php
namespace App\Api;

/**
 * 合伙人申请接口
 *
 * @author Meroc Chen
 */
class AgentApply extends BaseApi {

  public function getRules() {
  
    return $this->rules([
    
      'create' => [
      
        'name' => 'name|string|true||姓名',
        'phone' => 'phone|string|true||电话',
        'city' => 'city|string|true||城市',
        'identity' => 'identity|string|true||身份证号'
      
      ],

      'getDetail' => [
      
      ]
  
    ]); 
  
  }

  /**
   * 新建申请
   * @desc 新建申请
   *
   * @return int id
   */
  public function create() {
  
    return $this->dm->create($this->retriveRuleParams(__FUNCTION__)); 
  
  }

  /**
   * 查询申请详情
   * @desc 查询申请详情
   *
   * @return array data
   */
  public function getDetail() {
  
    return $this->dm->getDetail($this->retriveRuleParams(__FUNCTION__));
  
  }

}
