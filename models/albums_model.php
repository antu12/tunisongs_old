<?php

/**
 *
 */
class albums_model extends model
{

  function __construct()
  {
    parent::__construct();
  }

  public function albumInfo($album_id){
    $sql="SELECT * FROM albums , songs , artist , artist_songs , user where albums.album_id=songs.album_id ";
      $sql.="and songs.songs_id=artist_songs.songs_id and artist_songs.artist_id=artist.artist_id ";
      $sql.="and artist.artist_id=user.user_id and albums.album_id='{$album_id}'";
// echo $sql;
      return $this->database->fetch_multiple_result($sql);


  }// End of album info

  public function albumSong($album_id){

    $sql="SELECT * FROM songs where songs.album_id='{$album_id}'";

      //  echo $sql;
      return $this->database->fetch_multiple_result($sql);
  }

}

 ?>
