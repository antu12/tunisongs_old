<?php
/**
 *
 */
class index_model extends model{

  function __construct()
  {
    parent::__construct();
  }

  public function latest_songs(){
      $week=time()-7*24*60*60;
      $sql="SELECT * FROM songs, artist_songs, artist, albums, user where songs.release_time <= {$week} and user.user_id=artist.artist_id and ";
        $sql.="artist.artist_id=artist_songs.artist_id AND songs.songs_id=artist_songs.songs_id AND songs.album_id=albums.album_id order by songs.release_time limit 10";
      return $this->database->fetch_multiple_result($sql);
  }

  public function show_top_songs(){

    $sql="SELECT * FROM songs, artist_songs, artist, albums, user where artist.artist_id=artist_songs.artist_id and user.user_id=artist.artist_id ";
      $sql.="AND songs.songs_id=artist_songs.songs_id AND songs.album_id=albums.album_id order by songs.total_downloaded  limit 10";
    // echo $sql;
    return $this->database->fetch_multiple_result($sql);

  }

  public function show_top_albums(){
    $sql="SELECT * FROM songs, artist_songs, artist, albums, user where artist.artist_id=artist_songs.artist_id and user.user_id=artist.artist_id ";
      $sql.="AND songs.songs_id=artist_songs.songs_id AND songs.album_id=albums.album_id order by albums.release_date  limit 10";

    return $this->database->fetch_multiple_result($sql);
  }

  public function artist_module($user_id){
    $sql="SELECT * from user, artist, dashboard, artist_songs, songs, albums where user.user_id='{$user_id}' and ";
      $sql.="dashboard.user_id=user.user_id and user.user_id=artist.artist_id and artist.artist_id=artist_songs.artist_id ";
      $sql.="AND artist_songs.songs_id=songs.songs_id and songs.album_id=albums.album_id";
      // echo $sql;
      return $this->database->fetch_multiple_result($sql);
  }

  public function user_module($user_id){
    $sql="SELECT * FROM user";
    return $this->database->fetch_result($this->database->perform_query($sql));
  }


  public function update_info(){
    $s=$_SESSION['id'];
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $email=$_POST['email'];
    $user_name=$_POST['user_name'];

    if (isset($_POST['about'])) {
      $about=$_POST['about'];
      $picture=$_POST['picture'];
      $auser_id=$_POST['user_id'];

      $sql="UPDATE user, artist SET user.first_name='{$first_name}', user.last_name='{$last_name}', user.email='{$email}', user.user_name='{$user_name}', ";
        $sql.="artist.about='{$about}', artist.picture='{$picture}', artist.user_id='{$auser_id}' WHERE user.user_id='{$s}' AND artist.artist_id=user.user_id";
    }
    else {
      $sql="UPDATE user SET first_name='{$first_name}', last_name='{$last_name}', email='{$email}', user_name='{$user_name}' ";
        $sql.="where user_id='{$user_id}'";
    }
      return $this->database->perform_query($sql);
  }

  public function register_as_artist(){
    $s=$_SESSION['id'];

    $sql="insert into artist values ('{$s}')";

    $this->database->perform_query($sql);
    $u=basePath."edit_info/";
    header("Location : '{$u}'");
  }// End of register as artist function

  public function insert_new_song($song_id){
    $l=basePath.$song_id.".mp3";
    return $this->database->perform_query("INSERT INTO songs (songs_id, location) values ('{$song_id}', '{$l}')");
  }// End of insert new song method

  public function fill_up_song_details($song_id){
  $name=$_POST['Sname'];
  $release_time=time();
  $status=$_POST['Sstatus'];
  $price=$_POST['Sprice'];
  $album_id=$_POST['album_id'];
  $youtube_link=$_POST['youtube_link'];

  $sql="update songs SET name='{$name}', release_time={$release_time}, status={$status}, price={$price}, album_id='{$album_id}', youtube_link='{$youtube_link}'";
    $sql=" where songs_id='{$song_id}'";

    return $this->database->perform_query($sql);

  }

}



 ?>
