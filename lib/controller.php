<?php
/**
 *
 */
class controller {
  public $view;
  public $model;
  function __construct()
  {
    //echo "This is the Main Controller Class<br>";
    $this->view=new view;
  }
}



 ?>
