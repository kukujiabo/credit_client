<?php
namespace App\Domain;

class WechatDm {

  protected $_member; 

  public function __construct() {
  
    $requestHeader = getallheaders();
  
    $auth = RedisClient::get('member_auth', $requestHeader['CX-TOKEN']);

    $this->_member = $auth;

  }

  public function jsapiRegister($params) {
  
    return \App\request('App.Wechat.JsapiRegister', $params);
  
  }

  public function getPubTmpQrcode() {

    if ($this->_member) {

      $params = [ 'member_id' => $this->_member->id ];

      return \App\request('App.Wechat.GetPubTmpQrdcode', $params);
    
    }
  
    return null;
  
  }

}
