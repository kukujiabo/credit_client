<?php
namespace App\Domain;

class MemberTurnoverDm {

  protected $_member; 

  public function __construct() {
  
    $requestHeader = getallheaders();
  
    $auth = RedisClient::get('member_auth', $requestHeader['CX-TOKEN']);

    $this->_member = $auth;

  }

  public function getList($params) {

    if (!$this->_member->id) {
    
      return null;

    }

    $params['member_id'] = $this->_member->id;
  
    return \App\request('App.BusinessApply.Create', $params);
  
  }

}
