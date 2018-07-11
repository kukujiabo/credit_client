<?php
namespace App\Domain;

class FeedbackDm {

  public function addFeedback($params) {
  
    return \App\request('App.Feedback.AddFeedback', $params);
  
  }

  public function getList($params) {
  
    return \App\request('App.Feedback.GetList', $params);
  
  }

}
