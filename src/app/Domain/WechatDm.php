<?php
namespace App\Domain;

class WechatDm {

  public function jsapiRegister($params) {
  
    return \App\request('App.Wechat.JsapiRegister', $params);
  
  }

}
