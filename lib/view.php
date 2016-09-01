<?php
/**
 *
 */
class view
{

  // all decleared variables
    public $latest_songs;
    public $top_songs;
    public $top_albums;
    public $update_message;
    public $artist_sidebar;
    public $user_sidebar;
    // Aboves are needed for index controller

    public $demo;
    public $thatAlbum;

    // These two are for songs controller

    public $signUpMSG;

    //This one is for signup controller

    public $loginError;

    //This one os for login error showing

    public  $sartist=array();
    public $ssongs;
    public $salbums;

    //Those three are for search controller

    public $info;
    public $aSongs;
    public $aLatest_release;
    public $aTop_songs;

    //These are for artist controller
    public $albumInfo;



  function __construct()
  {
    //  echo "This is the main View<br>";
  }

  public function render($fileName){
    require_once('views/all_heads/index.php');
    require_once('views/search_bar/index.php');
    require_once'views/'.$fileName.'.php';
  }

  public function sidebar(){
    require_once('views/sidebar/index.php');
  }


}

 ?>
