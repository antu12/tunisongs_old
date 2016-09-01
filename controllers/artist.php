<?php
/**
 *
 */
class artist extends controller
{

  function __construct()
  {
  //  echo "Welcome from artist controller<br>";
    parent::__construct();
    require 'models/artist_model.php';
    $this->model=new artist_model;


  }

  public function checking($artist_id){
  //  $this->view->title_name=self::info($artist_id)['user_id']."  Tuni Songs";
    self::info($artist_id);
    self::songs($artist_id);
    self::latest_release($artist_id);
    self::top_songs($artist_id);
    $this->view->render('artist/index');
  }


  public function info($artist_id){

    // var_dump($this->model->{__FUNCTION__}($artist_id));
    $this->view->info=$this->model->{__FUNCTION__}($artist_id);

  }// Returns a view

  public function songs($artist_id){
    /**
    * Returns an array of all songs published by that artist
    */
    $this->view->asongs=$this->model->{__FUNCTION__}($artist_id);

  }// End of function songs

  public function latest_release($artist_id){
    /**
    *
    * Information about latest Songs from that artist
    */
  $this->view->aLatest_release=$this->model->{__FUNCTION__}($artist_id);

  }// End of function latest Release

  public function top_songs($artist_id){
    /**
    *
    * List of  top  Songs from that artist
    */
  $this->view->aTop_songs=$this->model->{__FUNCTION__}($artist_id);

  }// End fo function top_sngs

}

 ?>
