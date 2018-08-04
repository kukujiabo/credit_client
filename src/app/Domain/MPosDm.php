<?php
namespace App\Domain;

class MPosDm {

  public function getList($data) {
  
    return \App\request('App.PosMechine.GetList', $data);
  
  }

}
