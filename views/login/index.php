
    <div class="login-block">

      <h1>Login</h1>
      <?php
      echo $this->loginError;
        if(isset($this->loginError)){ ?>
          <p> <?php echo $this->loginError;?></p>
          <?php
        }
        ?>
    <form action="/tuniSongs/login/" method="post">
      <input type="text" name="user_name" placeholder="Username" id="username" >
      <input type="password" name="password" placeholder="Password" id="password">
      <input type="submit" name="login" value="login Please" id="submit">
    </form>
      <a id="rh" href="/tuniSongs/signup/">Or Register Here</a>

    </div>
