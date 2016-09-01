<?php //var_dump($this->demo);
// echo $this->demo['song_name'];
?>
<div class="box">
		<div class="info">
			<h1><?php echo $this->demo['song_name'];?></h1>
			<table>
				<tr>
					<th>Artist:</th>
					<td>

						<a href="<?php echo basePath.'artist/'.$this->demo['artist_url']; ?>">
							<?php echo $this->demo['first_name']." ".$this->demo['last_name']; ?>
						</a>

					</td>
				</tr>
				<tr>
					<th>Album:</th>
					<td><?php echo $this->demo['album_name']; ?></td>
				</tr>
				<tr>
					<th>Realeased Date:</th>
					<td><?php echo date('M,Y',$this->demo['release_time']);?></td>
				</tr>
				<tr>
					<th>Total Downloaded:</th>
					<td><?php echo $this->demo['total_downloaded']; ?></td>
				</tr>
				<tr>
					<th>Price:</th>
					<td>৳ <?php echo $this->demo['price']; ?> <a id="buy" href="<?php echo $this->demo['location']; ?>" download>BUY </a></td>

				</tr>

			</table>

		</div>

		<div class="youtube">
			<iframe width="500" height="300" src="<?php echo $this->demo['youtube_Link']; ?>" frameborder="0" allowfullscreen></iframe>
		</div>

		<?php
	     //var_dump($this->ssongs);
	    if (isset($this->thatAlbum) && !empty($this->thatAlbum)) {

	  ?>

		<br>
	  <h1 class="shead">Songs in this album</h1> <hr>
	   <table>
	     <tr>
	       <th>Name</th>
	       <th>Release Year</th>
	     </tr>

	      <?php
	          for ($i=0; $i <count($this->thatAlbum['song_name']); $i++) {
	        ?>

	          <tr>
	              <td>
	                <a href="<?php echo basePath.'songs/'.$this->thatAlbum['songs_id'][$i]; ?>">

	                <?php echo $this->thatAlbum['song_name'][$i]; ?>
	              </a>
	              </td>

	              <td>
	                  <?php  echo date("Y", $this->thatAlbum['release_time'][$i])?>
	              </td>
	          </tr>

	  <?php

	          }// End of for loop
	    }// End of isset the if
	   ?>
</table>

	</div>
