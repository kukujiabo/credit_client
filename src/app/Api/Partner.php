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

        'member_name' => 'member_name|string|false||会员名称',
        'page' => 'page|int|false|1|页码',
        'page_size' => 'page_size|int|false|10|每页条数'
      
      ],

      'getReferenceCards' => [
      
        'name' => 'name|string|false||办卡人姓名',
        'card_name' => 'card_name|string|false||信用卡名称',
        'page' => 'page|int|false|1|页码',
        'page_size' => 'page_size|int|false|10|每页条数'

      ],

      'getReferenceLoans' => [
      
        'name' => 'name|string|false||申请人姓名',
        'loan_name' => 'loan_name|string|false||小贷名称',
        'page' => 'page|int|false||页码',
        'page_size' => 'page_size|int|false||每页条数'

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

  /**
   * 查询合伙人办理信息用卡
   * @desc 查询合伙人办理信息用卡
   *
   * @return 
   */
  public function getReferenceCards() {
  
    return $this->dm->getReferenceCards($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 查询合伙人办理贷款信息
   * @desc 查询合伙人办理贷款信息
   *
   * @return
   */
  public function getReferenceLoans() {
  
    return $this->dm->getReferenceLoans($this->retriveRuleParams(__FUNCTION__));
  
  }

}
