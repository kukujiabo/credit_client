<?php
namespace App\Domain;

class MemberAlipayAccount {

  public function create($data) {
  
    return \App\request('App.MemberAlipayAccount.Create', $data);
  
  }

}
