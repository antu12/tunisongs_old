<?php

 // var_dump($this->aTop_songs);
 ?>
 <div class="box">


 		<div class="jumbo">
 			<div class="propic">
         <img src=" <?php echo $this->info['picture']; ?>" alt="Profile Picture">
       </div>
       <div class="about">
       <h1><?php echo $this->info['first_name']." ".$this->info['last_name']; ?></h1>
         <h3 style="margin-bottom: 0;">About</h3><hr>
         <p>
           <?php echo $this->info['about']; ?>
         </p>
       </div>
 		</div>
    <center>
    <div class="jumbo">
      <table>
        <tr>
          <td>
            Name
          </td>
          <td>
            Album
          </td>
          <td>
            Release
          </td>
        </tr>
        <?php
            for ($i=0; $i <count($this->asongs['songs_id']) ; $i++) {
          ?>

            <tr>
                <td>
                  <a href="<?php echo basePath.'songs/'.$this->asongs['songs_id'][$i]; ?>">

                  <?php echo $this->asongs['song_name'][$i]; ?>
                </a>
                </td>

                <td>
                  <a href="<?php echo basePath.'albums/'.$this->asongs['album_id'][$i]; ?>">
                  <?php echo $this->asongs['album_name'][$i]; ?>
                </a>
                </td>

                <td>
                    <?php  echo date("Y", $this->asongs['release_time'][$i])?>
                </td>
            </tr>

    <?php

            }// End of for loop
     ?>
      </table>
    </div>
  </center>
 	</div>
  <div class="artist_published">
  <h3 class="shead">Latest</h3><hr>
    <table>
      <?php
          for ($i=0; $i <count($this->aLatest_release['songs_id']) ; $i++) {
        ?>
      <tr>
        <td>
          <a href="<?php echo basePath.'songs/'.$this->aLatest_release['songs_id'][$i]; ?>">
            <?php echo $this->aLatest_release['song_name'][$i] ?>
          </a>
        </td>
      </tr>
      <?php
    }//end of for
     ?>
    </table>
    <h3 class="shead">All time Top</h3><hr>
    <table>
      <?php
          for ($i=0; $i <count($this->aTop_songs['songs_id']) ; $i++) {
        ?>
      <tr>
        <td>
          <a href="<?php echo basePath.'songs/'.$this->aTop_songs['songs_id'][$i]; ?>">
            <?php echo $this->aTop_songs['song_name'][$i] ?>
          </a>
      </td>
      </tr>
      <?php
    }//end of for
     ?>
    </table>
  </div>
