<?php

  // var_dump($this->albumSong);
 ?>
 <div class="box">


 		<div class="jumbo">
 			<div class="propic">
         <img src=" <?php echo $this->albumInfo['cover'][0]; ?>" alt="Cover Picture">
       </div>
       <div class="about">
       <h1><?php echo $this->albumInfo['album_name'][0]; ?></h1>
       <p>

         <?php echo "<strong>Artist:</strong>"." ".$this->albumInfo['first_name'][0]." ".$this->albumInfo['last_name'][0]; ?>
       </p>
         <h3 style="margin-bottom: 0;">About</h3><hr>
         <p>
           <?php echo $this->albumInfo['description'][0]; ?>
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
            Release
          </td>
        </tr>
        <?php
            for ($i=0; $i <count($this->albumSong['songs_id']) ; $i++) {
          ?>

            <tr>
                <td>
                  <a href="<?php echo basePath.'songs/'.$this->albumSong['songs_id'][$i]; ?>">

                  <?php echo $this->albumSong['song_name'][$i]; ?>
                </a>
                </td>

                <td>
                    <?php  echo date("Y", $this->albumSong['release_time'][$i])?>
                </td>
            </tr>

    <?php

            }// End of for loop
     ?>
      </table>
    </div>
  </center>
 	</div>
