<?php
namespace App\Domain;

class MemberAlipayAccountDm {

  public function create($data) {
  
    return \App\request('App.MemberAlipayAccount.Create', $data);
  
  }

}
