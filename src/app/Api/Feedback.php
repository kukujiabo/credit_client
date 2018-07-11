<?php
namespace App\Api;

/**
 * 反馈意见
 *
 * @author Meroc Chen <398515393@qq.com>
 */
class Feedback extends BaseApi {

  public function getRules() {
  
    return $this->rules([
    
      'addFeedback' => [
      
        'content' => 'content|string|true||内容',
      
      ],

      'getList' => [
      
        'page' => 'page|int|false||页码',

        'page_size' => 'page_size|int|false||每页条数',
      
      ]
    
    ]); 
  
  }

  /**
   * 添加反馈
   * @desc 添加反馈
   *
   * @return int id
   */
  public function addFeedback() {
  
    return $this->dm->addFeedback($this->retriveRuleParams(__FUNCTION__)); 
  
  }

  /**
   * 查询反馈列表
   * @desc 查询反馈列表
   *
   * @return array list
   */
  public function getList() {
  
    return $this->dm->getList($this->retriveRuleParams(__FUNCTION__));
  
  }

}
