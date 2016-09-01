<?php
  /**
   *Just a simple login controller
   */
  class login extends controller
  {

    function __construct()
    {
      parent::__construct();

      if (isset($_SESSION['id'])) {
          header('Location: /tuniSongs/',true, 303);

      }
      elseif (!isset($_POST['login'])) {
        $this->view->render('login/index');
      }
      else{
        require 'models/login_model.php';
        $this->model=new login_model;
        $r=$this->model->login();
              if ($r) {
                header('Location: /tuniSongs/',true, 303);
              }else{
                $this->view->loginError="Invalid ID/Password";
                header('Location: /tuniSongs/login/',true, 303);
              }
      }

  }// End of constructor function

}

 ?>
