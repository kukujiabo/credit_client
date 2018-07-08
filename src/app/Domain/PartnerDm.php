<?php
namespace App\Domain;

use App\Library\RedisClient;

class PartnerDm {

  protected $_member; 

  public function __construct() {
  
    $requestHeader = getallheaders();
  
    $auth = RedisClient::get('member_auth', $requestHeader['CX-TOKEN']);

    $this->_member = $auth;

  }

  public function getReferenceList($data) {

    $data['reference'] = $this->_member->member_identity;
  
    return \App\request('App.Member.GetReferenceList', $data);
  
  }

  public function getReferenceCards($data) {
  
    $data['member_id'] = $this->_member->id;
  
    return \App\request('App.BusinessApply.GetReferenceCards', $data);
  
  }

  public function getReferenceLoans($data) {
  
    $data['reference'] = $this->_member->member_identity;
  
    return \App\request('App.BusinessApply.GetReferenceLoans', $data);
  
  }

}
