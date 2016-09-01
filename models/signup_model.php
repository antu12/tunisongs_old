<?php

/**
 *
 */
class signup_model extends model
{

  function __construct()
  {
    parent::__construct();
  }

  public function register(){
    $user_id=(string) time().mt_rand();
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $email=$_POST['email'];
    $user_name=$_POST['user_name'];
    $password=$_POST['password'];
    $verified=0;
    $reg_time=time();

    if (!empty($this->database->fetch_result($this->database->perform_query("SELECT email from user where email='{$_POST["email"]}'")))) {
        return false;
    }

    $sql="insert into user values ('{$user_id}', '{$first_name}', '{$last_name}', '{$email}', '{$user_name}')";
  //  echo $sql;
    $res=$this->database->perform_query($sql);

    $sql="insert into authentication values ('{$user_name}', '{$password}', '{$verified}', '{$reg_time}')";
    $res=$this->database->perform_query($sql);
    $this->database->sendMail("Welcome to tuniSongs!",$_POST['email'], "Your account has been successfully created.<br><br><br>. Thank You <br> TuniSongs Team");
    $_SESSION['id']=$user_id;
    return true;
  }



}


 ?>
