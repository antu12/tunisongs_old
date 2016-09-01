<?php
/**
 *
 */
class albums extends controller
{

  function __construct()
  {
    parent::__construct();
    require 'models/albums_model.php';
    $this->model=new albums_model;


  }

  public function checking($album_id){
    self::albumInfo($album_id);
    self::albumSong($album_id);
    $this->view->render('albums/index');
  }

  public function albumInfo($album_id){
    $this->view->albumInfo=$this->model->albumInfo($album_id);
  }
  public function albumSong($album_id){
    $this->view->albumSong=$this->model->albumSong($album_id);
  }

}


 ?>
