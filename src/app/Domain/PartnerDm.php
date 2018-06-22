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

  public function getReferenceList() {

    $data['reference'] = $this->_member->member_identity;
  
    return \App\request('App.Member.GetReferenceList', $data);
  
  }

  public function getReferenceCards() {
  
    $data['reference'] = $this->_member->member_identity;
  
    return \App\request('App.BusinessApply.GetReferenceList', $data);
  
  }

  public function getReferenceLoans() {
  
    $data['reference'] = $this->_member->member_identity;
  
    return \App\request('App.BusinessApply.GetReferenceList', $data);
  
  }

}
