<?php
/**
 *
 */
class login_model extends model{

  function __construct()
  {
    parent::__construct();
  }

  public function login(){
    $user_name=$_POST['user_name'];
    $password=$_POST['password'];

    $sql="select * from authentication where user_name= '{$user_name}' and password='{$password}'";
    $res=$this->database->perform_query($sql);
    $res=$this->database->fetch_result($res);
    if ($res==null) {
      return false;
    }

    $sql="select user_id from user where user_name= '{$user_name}'";
    $res=$this->database->perform_query($sql);
    $res=$this->database->fetch_result($res);
    $_SESSION['id']=$res['user_id'];
    return true;
  }
}


 ?>
