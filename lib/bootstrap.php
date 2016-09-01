<?php
/**
 *This is bootstrap File is just for redirecting URL
 */
class bootstrap
{

  function __construct()  {
    @$location=rtrim($_GET['url'], "/");

      @$location=explode("/", $location);
      if ($location[0]==null) {
      @  $location[0]="index";
      }

      if (file_exists('controllers/'.$location[0].".php")) {

        require 'controllers/'.$location[0].".php";

       $controllers=new $location[0];

        if (isset($location[1])) {
          if (!isset($location[2])) {
            $location[2]=false;
          }
          if (method_exists($controllers, $location[1])) {

            $controllers->{$location[1]}($location[2]);
            return true;
          }
          else {
            $controllers->checking($location[1]);
            return true;
          }
        }
      }
      elseif ($location==null) {
        require 'controllers/index.php';
      }
      else{

        require 'controllers/error.php';
      }
  }
}

$bootstrap=new bootstrap;

 ?>
