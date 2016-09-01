<?php
		echo $_SESSION['id'];
	if (isset($_SESSION['id'])) {
		$this->sidebar();
	}
?>
<center>
<div class="songs_chart">
	<div class="top">
	<h3 style="margin-bottom: 0;">Top Songs</h3><hr>
	<table >
		<tr>
			<th>Name</th>
			<th>Artist</th>
			<th>Album</th>
			<th>Release</th>

		</tr>
    <?php
        for ($i=0; $i <count($this->show_top_songs['songs_id']) ; $i++) {
      ?>

        <tr>
            <td>
              <a href="<?php echo basePath.'songs/'.$this->show_top_songs['songs_id'][$i]; ?>">

              <?php echo $this->show_top_songs['song_name'][$i]; ?>
            </a>
            </td>

            <td>
              <a href="<?php echo basePath.'artist/'.$this->show_top_songs['artist_url'][$i]; ?>">

              <?php echo $this->show_top_songs['first_name'][$i]." ".$this->show_top_songs['last_name'][$i]; ?>
            </a>
            </td>

            <td>
              <a href="<?php echo basePath.'albums/'.$this->show_top_songs['album_id'][$i]; ?>">
              <?php echo $this->show_top_songs['album_name'][$i]; ?>
            </a>
            </td>

            <td>
                <?php  echo date("Y", $this->show_top_songs['release_time'][$i]); ?>
            </td>
        </tr>

<?php

        }// End of for loop
 ?>
 </table>
	</div>



	<div class="top">
	<h3 style="margin-bottom: 0;">Latest Songs</h3><hr>
	<table>
		<tr>
      <th>Name</th>
			<th>Artist</th>
			<th>Album</th>
			<th>Release</th>

		</tr>

    <?php
        for ($i=0; $i <count($this->latest_songs['songs_id']) ; $i++) {
      ?>

        <tr>
            <td>
              <a href="<?php echo basePath.'songs/'.$this->latest_songs['songs_id'][$i]; ?>">

              <?php echo $this->latest_songs['song_name'][$i]; ?>
            </a>
            </td>

            <td>
              <a href="<?php echo basePath.'artist/'.$this->latest_songs['artist_url'][$i]; ?>">

              <?php echo $this->latest_songs['first_name'][$i]." ".$this->latest_songs['last_name'][$i]; ?>
            </a>
            </td>

            <td>
              <a href="<?php echo basePath.'albums/'.$this->latest_songs['album_id'][$i]; ?>">
              <?php echo $this->latest_songs['album_name'][$i]; ?>
            </a>
            </td>

            <td>
                <?php  echo date("Y", $this->latest_songs['release_time'][$i])?>
            </td>
        </tr>

<?php

        }// End of for loop
 ?>

	</table>
	</div>
	</div>
	</center>
