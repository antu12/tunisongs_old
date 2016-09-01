<?php
  /**
   *
   */
  class signup extends controller
  {

    function __construct()
    {
      parent::__construct();


      if (!isset($_POST['register'])) {
        $this->view->render('signup/index');
      }
      else{
        require 'models/signup_model.php';
        $this->model=new signup_model;
            if ($this->model->register()) {
                header('Location: /tuniSongs/',true, 303);
              }
              else{
                  $this->view->signUpMSG="Sorry This email is already registered! Please signIn";
              }
      }
    }
  }


 ?>
