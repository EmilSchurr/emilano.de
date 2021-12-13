<?php
      include_once('../assets/content/crenew.php');
      //echo $s;
    if($s !== true) {
      echo '<META HTTP-EQUIV="refresh" content="0;URL=/login.php?r=/admin/dashboard.php">';
    }
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Admin Panel for Bots and Servers">
    <meta name="author" content="hyperabstrakt">
    <meta http-equiv="Pragma" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="CACHE-CONTROL" content="NO-CACHE">
    <link rel="icon" href="../assets/favicon.ico" type="image/png">
    <META HTTP-EQUIV="refresh" content="120">
    <title>emiLANo - Admin Dashboard</title>
    <!-- The page supports both dark and light color schemes, default is DARK. -->
    <meta name="color-scheme" content="dark">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-dark-5@1.1.3/dist/css/bootstrap-night.min.css" rel="stylesheet">
    <!-- Optional Meta Theme Color is also supported on Safari and Chrome -->
    <meta name="theme-color" content="#eeeeee" media="(prefers-color-scheme: dark)">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background-color: #1c6513;">
      <div class="container">
        <a class="navbar-brand" href="../../index.php">
          <img src="../assets/hyper_logo_w.png" width="33" height="33" class="d-inline-block align-top" alt="">
           Admin Dashboard
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarsExample09">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="https://nextcloud.emilano.de">Nextcloud</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="/vertretung.php">Vertretung</a></li>
                        <li><a class="dropdown-item" href="/essen.php">Essen</a></li>
                      </ul>
                    </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Admin</a>
            </li>
          </ul>
          <?php
      include_once('../assets/content/crenew.php');
      //echo $s;
if($s == true) {
  echo '<button class="btn btn-outline-success my-2 my-sm-0" onclick=\'window.location.href="https://emilano.de/login"\' role="buton">Willkommen ';
  echo $id;
  echo '</button> ';
}
?>
      </div>
      </div>
    </nav>
    <?php
      include_once('../assets/content/crenew.php');
      //echo $s;
    if($s == true) {
        
    }
    else{
        echo '<META HTTP-EQUIV="refresh" content="0;URL=/login.php?r=/admin/dashboard.php">';
    }
?>
    <br>
    <main role="main" class="container">
    <div>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">This site is still in progress<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>
            <div class="bd-example">
            <div class="row  row-cols-1 row-cols-md-2 g-4">
              <div class="col">
                <div class="card">
                  <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text></svg>

                  <div class="card-body">
                    <h5 class="card-title">Welcome to the emiLANo Admin Panel</h5>
                    <p class="card-text">From here you can restart, update and manage most gameservers and bots.</p>
                    <a href="#" class="btn btn-primary">Do something</a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Satisfactory Server</h5>
                    <p class="card-text">Be sure to <strong> stop </strong>the server <strong> before updating</strong> or restarting.</p><br>
                    <a href="../assets/content/srvrncmd.php?satis=stop" class="btn btn-danger">Stop FactoryServer</a> 
                    <a href="../assets/content/srvrncmd.php?satis=update" class="btn btn-warning">Upadte FactoryServer</a> 
                    <a href="../assets/content/srvrncmd.php?satis=start" class="btn btn-success">Start FactoryServer</a>
                  </div>
                  <div class="card-footer text-muted">
                    Status:
                    <?php
                      $satiss = shell_exec('screen -ls | grep satis');
                      if($satiss == null){
                        echo '<f style="color:tomato;">not running</f>';
                      } else {
                        echo '<f style="color:mediumseagreen;">running</f>'; echo $satiss;
                      }
                    ?>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Minecraft Servers</h5>
                    <p class="card-text">Choose wich server to run. Note that due to hardware limitations only one can run while other gameservers are running.</p><br>
                    <f style="color:red;">CVE-2021-44228</f><f style="color:tomato;"> "Log4Shell" Code Injection & Execution vulnerability - Do not start any Minecraft servers at the moment.</f>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item"> <a href="../assets/content/srvrncmd.php?mc=stop" class="btn btn-danger">Stop</a> <a href="../assets/content/srvrncmd.php?mc=start" class="btn btn-success">Start</a>  Corona3 - Minecraft 1.17 <br>Status: <?php $satiss = shell_exec('screen -ls | grep corona3');if($satiss == null){echo '<f style="color:tomato;">not running</f>';} else {echo '<f style="color:mediumseagreen;">running</f>'; echo $satiss;}?></li>
                    <li class="list-group-item"> <a href="../assets/content/srvrncmd.php?mc=stop" class="btn btn-danger">Stop</a> <a href="../assets/content/srvrncmd.php?mc=start" class="btn btn-success">Start</a>  Tekkit -  <br>Status: <?php $satiss = shell_exec('screen -ls | grep tekkit');if($satiss == null){echo '<f style="color:tomato;">not running</f>';} else {echo '<f style="color:mediumseagreen;">running</f>'; echo $satiss;}?></li>
                    <li class="list-group-item"> <a href="../assets/content/srvrncmd.php?mc=stop" class="btn btn-danger">Stop</a> <a href="../assets/content/srvrncmd.php?mc=start" class="btn btn-success">Start</a>  Corona2 - Minecraft 1.12  <br>Status: <?php $satiss = shell_exec('screen -ls | grep corona2');if($satiss == null){echo '<f style="color:tomato;">not running</f>';} else {echo '<f style="color:mediumseagreen;">running</f>'; echo $satiss;}?></li>
                  </ul>
                  <div class="card-body">
                    <a href="../archive.php" class="card-link">all Worldsaves</a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card">
                  <div class="row g-0">
                    <div class="col-md-4">
                    <img class="card-img-top" src="../assets/AgathaBaker-GTAO.png" alt="Card image cap">

                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">Agatha</h5>
                        <p class="card-text">Hello, this is Agatha, the casino and resort manager.</p> <a href="../../bot/agatha">Command Upload</a><br><br>
                        <a href="../assets/content/srvrncmd.php?agatha=stop" class="btn btn-danger">Stop Agatha</a> 
                        <a href="../assets/content/srvrncmd.php?agatha=start" class="btn btn-success">Start Agatha</a>
                      </div>
                      <div class="card-footer text-muted">
                    Status:
                    <?php
                      $satiss = shell_exec('screen -ls | grep agatha');
                      if($satiss == null){
                        echo '<f style="color:tomato;">not running</f>';
                      } else {
                        echo '<f style="color:mediumseagreen;">running</f>'; echo $satiss;
                      }
                    ?>
                  </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div>
          </div>

          <br>
          <?php
           include_once('../footer.php')
          ?>
          <br>
      </div>
    </main>
  </body>
</html>
