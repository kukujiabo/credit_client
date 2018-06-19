<?php
namespace App\Domain;

use App\Library\RedisClient;

class AgentApplyDm {

  protected $_member; 

  public function __construct() {
  
    $requestHeader = getallheaders();
  
    $auth = RedisClient::get('member_auth', $requestHeader['CX-TOKEN']);

    $this->_member = $auth;

  }

  public function create($data) {

    $data['member_id'] = $this->_member->id;
  
    return \App\request('App.AgentApply.Create', $data);
  
  }

  public function getDetail($data) {
  
    $data['member_id'] = $this->_member->id;

    return \App\request('App.AgentApply.GetDetail', $params);
  
  }

}
