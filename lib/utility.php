<?php
/**
 *
 */
class utility
{

  function __construct()
  {
  }

  private function getRandomID(){
    $time=time();
      $digit=10- (string)strlen($lastID+1);

      $str=(string)($lastID+1);

      for ($i=0; $i < $digit; $i++) {
        $temp=rand(64, 122);
        if($temp>90 && $temp<97){
        $i--;
        }else{

        $str.=chr($temp);
        }
      }

      return $str;
    }//END OF GETRANDOMID
}


 ?>
