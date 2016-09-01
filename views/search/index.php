
 <div class="box">
<!-- Artist Search -->
<?php

  if (isset($this->sartist) && !empty($this->sartist)) {

?>


<h1 class="shead">Artist Found for <?php echo " ".'"'.$this->squery.'"'; ?></h1> <hr>
 <table>
   <tr>
     <th>

     </th>
     <th>Name</th>
     <th>About</th>
   </tr>

    <?php
        for ($i=0; $i <count($this->sartist['artist_url']) ; $i++) {
      ?>

        <tr>
          <td> <img class="spic" src="<?php echo $this->sartist['picture'][$i]; ?>" alt="" />

          </td>
            <td>
              <a href="<?php echo basePath.'artist/'.$this->sartist['artist_url'][$i]; ?>">

              <?php echo $this->sartist['first_name'][$i]." ".$this->sartist['last_name'][$i]; ?>
            </a>
            </td>
            <td>
                <?php  echo $this->sartist['about'][$i]?>
            </td>
        </tr>

<?php

        }// End of for loop
  }// End of isset the if
 ?>

 </table>

<!-- Song Search -->
 <?php
    //var_dump($this->ssongs);
   if (isset($this->ssongs) && !empty($this->ssongs)) {

 ?>


 <h1 class="shead">Songs Found for <?php echo " ".'"'.$this->squery.'"'; ?></h1> <hr>
  <table>
    <tr>
      <th>Name</th>
      <th>Artist</th>
      <th>Album</th>
      <th>Release Year</th>
    </tr>

     <?php
         for ($i=0; $i <count($this->ssongs['songs_id']) ; $i++) {
       ?>

         <tr>
             <td>
               <a href="<?php echo basePath.'songs/'.$this->ssongs['songs_id'][$i]; ?>">

               <?php echo $this->ssongs['song_name'][$i]; ?>
             </a>
             </td>

             <td>
               <a href="<?php echo basePath.'artist/'.$this->ssongs['artist_url'][$i]; ?>">

               <?php echo $this->ssongs['first_name'][$i]." ".$this->ssongs['last_name'][$i]; ?>
             </a>
             </td>

             <td>
               <a href="<?php echo basePath.'albums/'.$this->ssongs['album_id'][$i]; ?>">
               <?php echo $this->ssongs['album_name'][$i]; ?>
             </a>
             </td>

             <td>
                 <?php  echo date("Y", $this->ssongs['release_time'][$i])?>
             </td>
         </tr>

 <?php

         }// End of for loop
   }// End of isset the if
  ?>

  <!-- Album Search -->
   <?php
      //var_dump($this->salbums);
     if (isset($this->salbums) && !empty($this->salbums)) {

   ?>

   </table>

   <h1 class="shead">Albums Found for <?php echo " ".'"'.$this->squery.'"'; ?></h1> <hr>
    <table>
      <tr>
        <th>Name</th>
        <th>Artist</th>
        <th>Release Year</th>
      </tr>

       <?php
           for ($i=0; $i <count($this->salbums['album_id']) ; $i++) {
         ?>

           <tr>
               <td>
                 <a href="<?php echo basePath.'albums/'.$this->salbums['album_id'][$i]; ?>">

                 <?php echo $this->salbums['album_name'][$i]; ?>
               </a>
               </td>

               <td>
                 <a href="<?php echo basePath.'artist/'.$this->salbums['artist_url'][$i]; ?>">

                 <?php echo $this->salbums['first_name'][$i]." ".$this->salbums['last_name'][$i]; ?>
               </a>
               </td>

               <td>
                   <?php  echo date("Y", $this->salbums['release_date'][$i])?>
               </td>
           </tr>

   <?php

           }// End of for loop
     }// End of isset the if
    ?>
  </table>






 </div><!-- End of box -->
