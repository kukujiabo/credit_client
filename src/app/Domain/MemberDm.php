<?php
namespace App\Domain;

use App\Library\RedisClient;

/**
 * 会员接口域
 *
 * @author Meroc Chen <398515393@qq.com> 2018-02-18
 */
class MemberDm {

  protected $_member; 

  public function __construct() {
  
    $requestHeader = getallheaders();
  
    $auth = RedisClient::get('member_auth', $requestHeader['CX-TOKEN']);

    $this->_member = $auth;

  }

  /**
   * 检查token有效性
   */
  public function checkToken() {
  
    return $this->_member->id;
  
  }

  /**
   * 注册
   */
  public function register($params) {
  
    return \App\request('App.Member.Register', $params);
  
  }

  /**
   * 账号密码登录
   */
  public function loginViaPassword($params) {
  
    return \App\request('App.Member.LoginViaPassword', $params);
  
  }

  /**
   * 会员信息编辑
   */
  public function editMember($params) {

    $params['id'] = $this->_member->id;
  
    return \App\request('App.Member.EditMember', $params);
  
  }

  /**
   * 短信验证码登录
   */
  public function loginViaCode($params) {
  
    return \App\request('App.Member.LoginViaCode', $params);
  
  }

  /**
   * 更新会员密码
   */
  public function updatePassword($params) {

    $params['member_id'] = $this->_member->id;
  
    return \App\request('App.Member.UpdatePassword', $params);
  
  }

  /**
   * 检查账号是否存在
   */
  public function existAccount($params) {
  
    return \App\request('App.Member.ExistAccount', $params);
  
  }

  /**
   * 微信登录
   */
  public function wechatMiniLogin($params) {
  
    return \App\request('App.Member.WechatMiniLogin', $params);
  
  }

  /**
   * 查询会员列表
   */
  public function listQuery($params) {
  
    return \App\request('App.Member.ListQuery', $params);
  
  }

  /**
   *
   */
  public function wechatPubLogin($params) {
  
    return \App\request('App.Member.wechatPubLogin', $params);
  
  }

  public function getQrcode($params) {
  
    $params['member_id'] = $this->_member->id;

    return \App\request('App.Member.GetMemberQrCode', $params);
  
  }


  public function checkPartner($params) {
  
    $params['member_id'] = $this->_member->id;

    return \App\request('App.Member.CheckPartner', $params);
  
  }

  public function resetPassword($params) {
  
    return \App\request('App.Member.ResetPassword', $params); 
  
  }

  public function checkVip() {

    $params = [
    
      'member_id' => $this->_member->id
    
    ];
  
    return \App\request('App.Member.CheckVip', $params); 
  
  }

}
