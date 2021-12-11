<!doctype html>
<html lang="en">
  <?php
    include_once('header.php')
  ?>
    <br>
    <main role="main" class="container">
        <div class="p-5 mb-4 bg-light rounded-3" style="background-image: url(assets/pcb_.jpg); no-repeat right right; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
          <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">emiLANo Server</h1>
            <p class="col-md-8 fs-4">New redesign with toggleable darkmode by system settings <br> toggle your pc/phone darkmode to enjoy!</p>
            <button class="btn btn-primary btn-lg" type="button">About</button>
          </div>
        </div>
        <div class="row align-items-md-stretch">
          <div class="col-md-6">
            <div class="h-100 p-5 bg-light border rounded-3">
              <h2>Gameserver, Bots and Services</h2>
              <p>Edit Satisfactory, Minecraft Server deine Bot preferences. <br> Log in to use restricted Services<br> You are currently not logged in</p>
              <button class="btn btn-outline-light" type="button">Services & Server</button>
            </div>
          </div>
          <div class="col-md-6">
            <div class="h-100 p-5 bg-light border rounded-3">
              <h2>Archive</h2>
              <p>Download old Worlds from Gameservers. <br>Log in with to use</p>
              <form action="archive.php"><button href="archive.php" class="btn btn-outline-light" type="submit">Archive</button></form>
            </div>
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
