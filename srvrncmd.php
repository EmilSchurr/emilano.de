<?php
include_once('crenew.php');
if($s == true){
  if($_GET['satis'] == 'start'){
    if(shell_exec('screen -ls | grep satis') == null){
      echo shell_exec("*****/srvcmd/satisstart.sh");
    } else {
      echo 'Satisfactory Server is already running. Pleas stop it first';
    }
  }
  if($_GET['satis'] == 'stop'){
    echo shell_exec("*****/srvcmd/satisstop.sh");
  }
  if($_GET['satis'] == 'update'){
    echo shell_exec("*****/srvcmd/satisupdate.sh");
  }
  if($_GET['agatha'] == 'stop'){
    echo shell_exec("screen -S agatha -X kill");
  }
  if($_GET['agatha'] == 'start'){
    if(shell_exec('screen -ls | grep agatha') == null){
      echo shell_exec("*****/agatha/agatha.sh");
    } else {
      echo 'Agatha is already in her office. Please distract her first.';
    }
  }
} else {
    echo '<META HTTP-EQUIV="refresh" content="0;URL=../login.php?w=Y">';
}
?>
<META HTTP-EQUIV="refresh" content="3;URL=../../admin/dashboard"><br>redirecting...
