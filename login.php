<?php
    if(!isset($_COOKIE['token'])) {
      $token = base64_encode(openssl_random_pseudo_bytes(32));
      setcookie("token", $token, time() + (86400 * 6), "/");
    }
?>
<!doctype html>
<html lang="en">
  <?php
    include_once('header.php')
  ?>
    <br>
    <main role="main" class="container">
    <div class="d-flex justify-conten-center" style="text-align: center;">
        <div class="col-sm-4 mx-auto">
        <?php
      if($_GET['x'] == x) {
          echo('<div class="alert alert-danger alert-dismissible fade show" role="alert">Wrong password or Username, or no Account. <a href="https://nextcloud.emilano.de" class="alert-link">Create an Account</a> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
      } else {
        if($_GET["x"] == s){
        echo('<div class="alert alert-success alert-dismissible fade show" role="alert">Login success <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
      }
    }
    if(isset($_GET["r"])) {
      $redir = $_GET["r"];
      echo $redir;
    }
    echo '<form action="assets/content/auth.php?r=';
    echo $redir;
    echo '" method="post">'
    ?>
    <img class="mb-4" src="assets/hyper_logo_w.png" alt="" width="72" height="72">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input type="username" class="form-control" id="id" name="id" placeholder="username">
      <label for="floatingInput">Username</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="pw" name="pw" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>
    <br>
    <div class="checkbox mb-3" style="text-align: left;">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <br>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
  </form>
  <br><br>
    <a href="https://nextcloud.emilano.de">Account managment</a>
  </div>
  </div>
          <br>
          <?php
           include_once('footer.php')
          ?>
          <br>
      </div>
    </main>
  </body>
</html>
