<?php
namespace App\Api;

/**
 * 入驻申请接口
 *
 * @author Meroc Chen <398515393@qq.com>
 */
class BusinessApply extends BaseApi {

  public function getRules() {
  
    return $this->rules([
    
      'create' => [

        'type' => 'type|string|true||申请类型',
        'relat_id' => 'relat_id|int|true||相关id',
        'name' => 'name|string|true||商户全称',
        'address' => 'address|string|true||商户地址',
        'contact' => 'contact|string|true||联系人',
        'phone' => 'phone|string|true||联系人电话',
        'wechat' => 'wechat|string|false||微信号',
        'reference' => 'reference|string|false||推荐人编号',
        'brief' => 'brief|string|true||商户简介'
      
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

}
