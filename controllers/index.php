<?php
/**
 *This controller class will handle all the Index page request
 * And also generate the view of all tpes of index with collaboration with index model .=D
 */
class index extends controller
{


  function __construct()
  {

    parent::__construct();
    require 'models/index_model.php';

    $this->model=new index_model;




    $this->checking('dorkar_nai');

  }
  public function checking($lala){
    self::latest_songs();
    self::show_top_songs();
    self::show_top_albums();
    if (isset($_SESSION['id'])) {
      $this->artist_module($_SESSION['id']);
      $this->user_module($_SESSION['id']);
    }
    $this->view->render('index/index');
  }

  public function latest_songs(){

    $this->view->latest_songs=$this->model->{__FUNCTION__}();

  }

  public function show_top_songs(){
    $this->view->show_top_songs=$this->model->{__FUNCTION__}();

  }

  public function show_top_albums(){
    $this->view->show_top_albums=$this->model->{__FUNCTION__}();

  }

  private function artist_module($user_id){

    $this->view->artist_sidebar=$this->model->{__FUNCTION__}($user_id);

  }

  private function user_module($user_id){
    $this->view->user_sidebar=$this->model->{__FUNCTION__}($user_id);

  }

  public function edit_info(){
    /*
    *
    *Just a simple array to update information of the database
    *
    */
    if (isset($_POST['edit_info'])) {
      if ($this->model->update_info()) {
        $location=basePath;
        header('Location: {$location}');
      }
      else {
        $this->view->update_message="There was an error!";
      }

    }
      elseif ($this->user_status) {

        $form_object=$this->model->artist_module($_SESSION['id']);

        if (empty($form_object)) {
          $form_object=$this->model->user_module($_SESSION['id']);
        }

    }
    else{
      $temp=basePath."login";
      header("Location: '{$temp}'");
    }

  }

  public function me(){
    /*
    *
    *This is just a basic method for showing your own sidebar
    *
    */

  }

  public function register_as_artist(){
    if (isset($_POST['register_as_artist'])) {
      $this->model->register_as_artist();
    }
  }

  public function up_load(){
    /*
    *
    *This function is private which with enable artist to upload their songs
    *
    */

    if (isset($_FILES['upSong'])) {

      $file_name = $_FILES['upSong']['name'];
      $file_size =$_FILES['upSong']['size'];
      $file_tmp =$_FILES['upSong']['tmp_name'];
      $file_type=$_FILES['upSong']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['upSong']['name'])));
      $song_id=time();
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"uploads/".$file_name);
         $newName=$song_id.".mp3";
         rename("uploads/".$file_name, $newName);

      }
      $this->model->insert_new_song($song_id);
    }

  }
  public function edit_song_details($song_id){
      if (empty($song_id)) {
        $l=basePath."index.php/";
          header("Location: '{$l}'");
      }
      else{
        $this->view->edit_song_details=$this->model->fill_up_song_details($song_id);
      }
  }



}



 ?>
