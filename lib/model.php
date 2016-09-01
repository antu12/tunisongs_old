<?php
/**
 *
 */
class model
{
protected $database;

  function __construct()
  {
  //  echo "this is the base model<br>";
    $this->database=new database;
  }
}



 ?>
