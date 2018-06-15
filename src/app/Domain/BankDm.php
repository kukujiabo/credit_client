<?php
namespace App\Domain;

class BankDm {

  public function getList($params) {
  
    return \App\request('App.Merchant.ListQuery', $params);
  
  }

}
