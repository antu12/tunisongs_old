<div class="logo">
  <h1>TuniSongs</h1>

<div class="container-1">
  <input type="search" id="search" placeholder="Search...for Everything" onkeypress="searchQ(event)" autocomplete="off">
</div>
</div>


<script>
  function searchQ(e){
        if(e.keyCode === 13){
           window.location='http://localhost/tunisongs/search/'+document.getElementById('search').value;
        }

        return false;
    }
  </script>
