<?php
  /**
   *
   */
  class songs_model extends model
  {

    function __construct()
    {
      parent::__construct();
    }
    public function demo($songs_id){

      $sql="SELECT * FROM songs, albums, artist_songs, artist, user ";
        $sql.="where albums.album_id=songs.album_id and songs.songs_id=artist_songs.songs_id and artist_songs.artist_id=artist.artist_id ";
        $sql.="and artist.artist_id=user.user_id and songs.songs_id='{$songs_id}' LIMIT 1";
        //  echo $sql;
      return $this->database->fetch_result($this->database->perform_query($sql));
    }// End of function demo

    public function thatAlbum($songs_id){
      $sql="SELECT album_id from songs WHERE songs.songs_id='{$songs_id}'";
      $alb=$this->database->fetch_result($this->database->perform_query($sql));

      $sql="SELECT * FROM songs where songs.album_id='{$alb['album_id']}' and '{$songs_id}'!=songs.songs_id";

        // echo $sql;
        return $this->database->fetch_multiple_result($sql);
    }

    public function viewCount($songs_id)
    {
      $sql="SELECT total_downloaded from songs WHERE songs_id='{$songs_id}'";
      $td=$this->database->fetch_result($this->database->perform_query($sql));
      $a=(int)$td['total_downloaded']+1;
      $sql="UPDATE songs SET total_downloaded='{$a}' WHERE songs_id='{$songs_id}'";
      $this->database->perform_query($sql);
    }

  }

 ?>
