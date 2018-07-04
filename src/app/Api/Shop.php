<?php
namespace App\Api;

/**
 * 信用卡接口
 *
 * @author Meroc Chen <398515393@qq.com>
 */
class Shop extends BaseApi {

  public function getRules() {
  
    return $this->rules([
    
      'getDetail' => [
      
        'id' => 'id|int|true||信用卡id',
      
      ],

      'focusShop' => [
      
        'shop_id' => 'shop_id|int|true||信用卡id'
      
      ],

      'cancelFocus' => [
      
        'id' => 'id|int|true||关注id'
      
      ],

      'getFocusUnionList' => [

        'member_id' => 'member_id|int|false||会员id',
        'shop_id' => 'shop_id|int|false||信用卡id',
        'focus' => 'focus|int|false||关注状态',
        'fields' => 'fields|int|false||字段',
        'order' => 'fields|int|false||排序',
        'page' => 'page|int|false||页码',
        'page_size' => 'page_size|int|false||每页条数'

      ],

      'getFocusCount' => [
      
        'shop_id' => 'shop_id|int|true||信用卡id'
      
      ],

      'listQuery' => [

        'mid' => 'mid|int|false||商户id',
        'min_credit' => 'min_credit|int|false||最小额度',
        'max_credit' => 'max_credit|int|false||最大额度',
        'status' => 'status|int|false||状态',
        'order' => 'order|string|false||排序',
        'fields' => 'fields|string|false||字段',
        'page' => 'page|int|false||页码',
        'page_size' => 'page_size|int|false||每页条数',
      
      ],

      'getCardCommissionList' => [
      
        'mid' => 'mid|int|false||商户id',
        'min_credit' => 'min_credit|int|false||最小额度',
        'max_credit' => 'max_credit|int|false||最大额度',
        'status' => 'status|int|false||状态',
        'order' => 'order|string|false||排序',
        'fields' => 'fields|string|false||字段',
        'page' => 'page|int|false|1|页码',
        'page_size' => 'page_size|int|false|20|每页条数',
      
      ]
    
    
    ]);
  
  }

  /**
   * 查询信用卡详情
   * @desc 查询信用卡详情
   *
   * @return array data
   */ public function getDetail() {
  
    return $this->dm->getDetail($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 关注店铺
   * @desc 关注店铺
   *
   * @return int id
   */
  public function focusShop() {
  
    return $this->dm->focusShop($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 取消关注
   * @desc 取消关注
   *
   * @return int num
   */
  public function cancelFocus() {
  
    return $this->dm->cancelFocus($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 用户关注信用卡列表接口
   * @desc 用户关注信用卡列表接口
   *
   * @return array list
   */
  public function getFocusUnionList() {
  
    return $this->dm->getFocusUnionList($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 查询信用卡关注量
   * @desc 查询信用卡关注量
   *
   * @return array list
   */
  public function getFocusCount() {
  
    return $this->dm->getFocusCount($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 查询信用卡列表
   * @desc 查询信用卡列表
   *
   * @return array list
   */
  public function listQuery() {
  
    return $this->dm->listQuery($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 查询信用卡佣金列表
   * @decs 查询信用卡佣金列表
   *
   * @return array list
   */
  public function getCardCommissionList() {
  
    return $this->dm->getCardCommissionList($this->retriveRuleParams(__FUNCTION__));  
  
  }

}
