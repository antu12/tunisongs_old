<?php

class songs extends controller
{

  function __construct()
  {
    parent::__construct();
    require 'models/songs_model.php';
    $this->model=new songs_model;

  }

  public function checking($songs_id){
    self::demo($songs_id);
    self::thatAlbum($songs_id);
    self::viewCount($songs_id);
    $this->view->render('songs/index');
  }

  public function demo($songs_id){
      $this->view->demo=$this->model->{__FUNCTION__}($songs_id);
  }// End of demo

  private function thatAlbum($songs_id){
    $this->view->thatAlbum=$this->model->{__FUNCTION__}($songs_id);
  }// End of thatAlbum

  public function viewCount($songs_id)
  {
    $this->view->viewCount=$this->model->{__FUNCTION__}($songs_id);
  }
}


 ?>
