<?php
namespace App\Api;

/**
 * 会员接口
 * @author Meroc Chen <398515393@qq.com> 2018-02-15
 */
class Member extends BaseApi {

  public function getRules() {
  
    return $this->rules([
    
      'register' => [
      
        'mobile' => 'mobile|string|true||手机号',

        'member_name' => 'member_name|string|true||会员名称',

        'password' => 'password|string|true||会员密码',

        'token' => 'token|string|false||当前session令牌'
      
      ],

      'checkToken' => [
      
      
      ],

      'loginViaPassword' => [
      
        'mobile' => 'mobile|string|true||手机号',

        'password' => 'password|string|true||密码'
      
      ],

      'editMember' => [
      
        'member_name' => 'member_name|string|false||会员名称',

        'portrait' => 'portrait|string|false||用户头像',

        'wx_city' => 'wx_city|string|false||城市名称',

        'wx_province' => 'wx_province|string|false||省份名称',

        'sex' => 'sex|int|false||性别'
      
      ],

      'updatePassword' => [
      
        'old_password' => 'old_password|true||旧密码',

        'new_password' => 'new_password|true||新密码'
      
      ],

      'listQuery' => [
      
        'reference' => 'reference|string|false||会员推荐码'
      
      ],

      'loginViaCode' => [
      
        'mobile' => 'mobile|string|true||手机号',

        'code' => 'code|string|true||验证码',
      
      ],

      'existAccount' => [
      
        'account' => 'account|string|true||账号'
      
      ],

      'wechatMiniLogin' => [
      
        'app_name' => 'app_name|string|true||引用名称',

        'code' => 'code|string|true||微信code',

        'share_code' => 'share_code|string|false||分享编号',

        'member_name' => 'member_name|string|false||会员名称',

        'portrait' => 'portrait|string|false||会员头像',

        'gender' => 'gender|int|false||会员性别'
      
      ],

      'wechatPubLogin' => [
      
        'code' => 'code|string|true||微信code',

        'reference' => 'reference|string|false||推荐人'
      
      ],

      'getQrcode' => [
      
        'url' => 'url|string|true||生成二维码的链接'
      
      ],

      'checkPartner' => [
      
      ]
    
    ]);
  
  }

  /**
   * 会员注册
   * @desc 会员注册
   * 
   * @return 
   */
  public function register() {

    return $this->dm->register($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 账号密码登录
   * @desc 账号密码登录
   *
   * @return
   */
  public function loginViaPassword() {
  
    return $this->dm->loginViaPassword($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 编辑会员信息
   * @desc 编辑会员信息
   *
   * @return
   */
  public function editMember() {
  
    return $this->dm->editMember($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 更新会员密码
   * @desc 更新会员密码
   *
   * @return
   */
  public function updatePassword() {
  
    return $this->dm->updatePassword($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 验证码登录
   * @desc 验证码登录
   *
   * @return
   */
  public function loginViaCode() {
  
    return $this->dm->loginViaCode($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 查看账号是否存在
   * @desc 查看账号是否存在
   *
   * @return
   */
  public function existAccount() {
  
    return $this->dm->existAccount($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 微信小程序登录
   * @desc 微信小程序登录
   *
   * @return array data
   */
  public function wechatMiniLogin() {
  
    return $this->dm->wechatMiniLogin($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 查询列表
   * @desc 查询列表
   *
   * @return array list
   */
  public function listQuery() {
  
    return $this->dm->listQuery($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 微信公众号登陆
   * @desc 微信公众号登陆
   *
   * @return 
   */
  public function wechatPubLogin() {
  
    return $this->dm->wechatPubLogin($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 检查token有效性
   * @desc 检查token有效性
   *
   * @return
   */
  public function checkToken() {
  
    return $this->dm->checkToken();
  
  }

  /**
   * 获得二维码
   * @desc 获得二维码
   *
   * @return string
   */
  public function getQrcode() {
  
    return $this->dm->getQrcode($this->retriveRuleParams(__FUNCTION__));
  
  }

  public function checkPartner() {
  
    return $this->dm->checkPartner($this->retriveRuleParams(__FUNCTION__));
  
  }

}
