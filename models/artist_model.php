<?php
  /**
   *
   */
  class artist_model extends model
  {

    function __construct()
    {
      parent::__construct();
    }

    public function info($artist_id){
      $sql="SELECT user.first_name, user.last_name, artist.about, artist.picture from ";
        $sql.="user , artist where artist.artist_id=user.user_id and artist.artist_url='{$artist_id}' LIMIT 1";
        // echo $sql;

        return $this->database->fetch_result($this->database->perform_query($sql));
    }// Returns a array of information about that artist

    public function songs($artist_id){
      /**
      * Returns an array of all songs published by that artist
      */
      $sql="SELECT * FROM songs, albums , artist_songs, artist where artist_songs.songs_id=songs.songs_id and artist_songs.artist_id=artist.artist_id ";
        $sql.="and songs.album_id=albums.album_id and artist.artist_url='{$artist_id}'";
        return $this->database->fetch_multiple_result($sql);
    }// End of function songs

    public function latest_release($artist_id){
      /**
      *
      * Information about latest Songs from that artist
      */
      $sql="SELECT * FROM songs, albums , artist_songs, artist where artist_songs.songs_id=songs.songs_id and artist_songs.artist_id=artist.artist_id ";
        $sql.="and songs.album_id=albums.album_id and artist.artist_url='{$artist_id}' ORDER BY songs.release_time DESC LIMIT 10";

      return $this->database->fetch_multiple_result($sql);
    }// End of function latest Release

    public function top_songs($artist_id){
      /**
      *
      * List of  top  Songs from that artist
      */
      $sql="SELECT * FROM songs, albums , artist_songs, artist where artist_songs.songs_id=songs.songs_id and artist_songs.artist_id=artist.artist_id ";
        $sql.="and songs.album_id=albums.album_id and artist.artist_url='{$artist_id}' ORDER BY songs.total_downloaded DESC LIMIT 10";
        // ech  o $sql;
      return $this->database->fetch_multiple_result($sql);
    }// End fo function top_sngs
  }

 ?>
