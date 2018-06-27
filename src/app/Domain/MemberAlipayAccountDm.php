<?php
namespace App\Domain;

use App\Library\RedisClient;

class MemberAlipayAccountDm {

  protected $_member; 

  public function __construct() {
  
    $requestHeader = getallheaders();
  
    $auth = RedisClient::get('member_auth', $requestHeader['CX-TOKEN']);

    $this->_member = $auth;

  }

  public function create($data) {
  
    return \App\request('App.MemberAlipayAccount.Create', $data);
  
  }

}
