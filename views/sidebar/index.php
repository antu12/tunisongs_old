<?php
$profile=basePath."/artist/".$this->artist_sidebar['artist_url'];
// echo var_dump($this->artist_sidebar);
?>

<?php

  if(isset($this->user_sidebar) && !empty($this->user_sidebar)){
?>

<aside class="sidebar">
<ul>
  <li><a class="active" href="<?php echo basePath; ?>">Home</a></li>
  <li><a href="localhost/tunisongs/edit_info/">Edit Info</a></li>

<?php
if(!isset($this->artist_sidebar)){
  ?>
    <form action="localhost/tuniSongs/register_as_artist">
      <input type="submit" name="register_as_artist" value="Register as artist">
    </form>
  <?php
}

else if(isset($this->artist_sidebar) && !empty($this->artist_sidebar)){
?>

<li><a href="http://tunisongs.azurewebsites.net/upload.php">Upload Song</a></li>
<?php

}
?>
</aside>
<?php
}//end of if tag

?>
