<?php
namespace App\Domain;

use App\Library\RedisClient;

class FeedbackDm {

  protected $_member; 

  public function __construct() {
  
    $requestHeader = getallheaders();
  
    $auth = RedisClient::get('member_auth', $requestHeader['CX-TOKEN']);

    $this->_member = $auth;

  }

  public function addFeedback($params) {

    if (!$this->_member) {
    
      return null;
    
    }

    $params['member_id'] = $this->_member->id;
  
    return \App\request('App.Feedback.AddFeedback', $params);
  
  }

  public function getList($params) {

    if (!$this->_member) {
    
      return null;
    
    }

    $params['member_id'] = $this->_member->id;
  
    return \App\request('App.Feedback.GetList', $params);
  
  }

}
