<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Building next version of emiLANo">
    <meta name="author" content="hyperabstrakt">
    <meta http-equiv="Pragma" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="CACHE-CONTROL" content="NO-CACHE">
    <link rel="icon" href="../assets/favicon.ico" type="image/png">
    <title>emiLANo</title>
    <!-- The page supports both dark and light color schemes, default is DARK. -->
    <meta name="color-scheme" content="dark">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-dark-5@1.1.3/dist/css/bootstrap-night.min.css" rel="stylesheet">
    <!-- Optional Meta Theme Color is also supported on Safari and Chrome -->
    <meta name="theme-color" content="#eeeeee" media="(prefers-color-scheme: dark)">
    <!--<meta name="theme-color" content="#111111" media="(prefers-color-scheme: light)">-->
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background-color: #404040;">
      <div class="container">
        <a class="navbar-brand" href="index.php">
          <img src="https://emilano.de/assets/hyper_logo_w.png" width="33" height="33" class="d-inline-block align-top" alt="">
           emiLANo
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarsExample09">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="saas">Services & Server</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://nextcloud.emilano.de">Nextcloud</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://emilano.de/vertretung">Vertretung</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://emilano.de/essen">Essen</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://emilano.de/admin/dashboard">Admin</a>
            </li>
          </ul>
          <?php
      include_once('assets/content/crenew.php');
      //echo $s;
if($s == true) {
  echo '<button class="btn btn-outline-success my-2 my-sm-0" onclick="window.location.href="https://emilano.de/login"" role="buton">Willkommen ';
  echo $id;
  echo '</button> ';
}
    else{
      //echo '<META HTTP-EQUIV="refresh" content="0;URL=login.php?r=/essen.php">';
      echo '<button class="btn btn-outline-success my-2 my-sm-0" onclick="window.location.href="https://emilano.de/login"" role="buton">Anmelden</button>';
    }
?>
      </div>
      </div>
    </nav>
