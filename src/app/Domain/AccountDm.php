<?php
namespace App\Domain;

use App\Library\RedisClient;

class AccountDm {

  protected $_member; 

  public function __construct() {
  
    $requestHeader = getallheaders();
  
    $auth = RedisClient::get('member_auth', $requestHeader['CX-TOKEN']);

    $this->_member = $auth;

  }

  public function getDetail() {

    if (!$this->_member) {
    
      return NULL;
    
    } else {
    
      $data['member_id'] = $this->_member->id;
    
    }
  
    return \App\request('App.Account.GetDetail', $data);
  
  }
  
  public function getList() {
  
    if (!$this->_member) {
    
      return [];
    
    } else {
    
      $data['member_id'] = $this->_member->id;
    
    }
  
    return \App\request('App.AccountLog.GetList', $data);
  
  }

}
