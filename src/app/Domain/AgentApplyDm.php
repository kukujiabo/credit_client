<?php
namespace App\Domain;

class AgentApplyDm {

  public function create($data) {
  
    return \App\request('App.AgentApply.Create', $params);
  
  }

  public function getDetail($data) {
  
    return \App\request('App.AgentApply.GetDetail', $params);
  
  }

}
