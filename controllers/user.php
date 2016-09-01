<?php
class user extends controller
{

  function __construct()
  {
    parent::__construct();
    require 'models/user_model.php';
    $this->model=new user_model;

    $this->view->render('user/index');
  }
}

?>
