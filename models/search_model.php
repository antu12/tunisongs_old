<?php

  /**
   *
   */
  class search_model extends model
  {

    function __construct()
    {
      parent::__construct();

    }

    public function artist($squery){
      $sql="SELECT * from artist , user where artist.artist_id=user.user_id and ";
        $sql.="user.first_name LIKE '%{$squery}%' or user.last_name LIKE '%{$squery}%'";

       return $this->database->fetch_multiple_result($sql);
    }

    public function songs($squery){
      $sql="SELECT * from songs , artist , artist_songs, user where songs.song_name LIKE '%{$squery}%' and";
       $sql.=" songs.songs_id=artist_songs.songs_id and artist_songs.artist_id=artist.artist_id and artist.artist_id=user.user_id";
        //echo $sql;
        return $this->database->fetch_multiple_result($sql);
    }

    public function albums($squery){
      $sql="SELECT * from albums , songs , artist_songs , artist , user where albums.album_name LIKE '%{$squery}%' and";
        $sql.=" songs.songs_id=artist_songs.songs_id and artist_songs.artist_id=artist.artist_id";
        $sql.=" and albums.album_id=songs.album_id and artist.artist_id=user.user_id";
        // echo $sql;
        return $this->database->fetch_multiple_result($sql);
    }

  }


 ?>
