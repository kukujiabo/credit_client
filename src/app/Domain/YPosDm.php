<?php
namespace App\Domain;

use App\Library\RedisClient;

class YPosDm {

  protected $_member; 

  public function __construct() {
  
    $requestHeader = getallheaders();
  
    $auth = RedisClient::get('member_auth', $requestHeader['CX-TOKEN']);

    $this->_member = $auth;

  }

  public function create($data) {

    $data['member_id'] = $this->_member->id;
  
    return \App\request('App.Withdraw.Create', $data);
  
  }


}
