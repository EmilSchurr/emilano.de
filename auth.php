<?php
//Use Nextcloud users to authenticate outside of Nextcloud using nextclouds oc_* tabels
$id = $_POST['id'];
setcookie('user', $id, time() + (86400 * 6), "/"); //Safari doesn´t allow for cookies of moree than 7 days
$session = $_COOKIE['session'];
$conn = new mysqli("SERVER", "USER", "PASSWORD", "DATABASE"); //authenticate on nextclouds database
$token = $_COOKIE['token'];
function success() {
    if(isset($_GET["r"])) {
        $redir = $_GET["r"];
        echo '<script>window.location = "http://emilano.de'; echo $redir; echo '"</script>';
    } else {
    echo "<script>window.location = 'http://emilano.de/login.php?x=s'</script>";
    }
}
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT `uid` FROM `oc_accounts` WHERE `uid` = '$id'";
$result = $conn->query($sql);
$resultasc = mysqli_fetch_assoc($result);
$resultstring = $resultasc['uid'];
if ($resultstring == $id) {
    $sql = "SELECT `password` FROM `oc_users` WHERE `uid` = '$id'";
    $result = $conn->query($sql);
    $resultasc = mysqli_fetch_assoc($result);
    $resultstring = $resultasc['password'];
    $sub = substr($resultstring, 2);
    if (password_verify($_POST["pw"], $sub)) { //Password is valid
        $conn = new mysqli("SERVER", "USER", "PASSWORD", "DATABASE"); //authenticate on website's own database
        $result = $conn->query("SELECT `uid` FROM `usr_token` WHERE `uid` = '$id' AND `session` = '$session'"); // see if user with this device exists
        if ($conn->connect_error) {
            echo 'Datenbank Fehler';
            die("Connection failed: " . $conn->connect_error);
        } else {
        $resultasc = mysqli_fetch_assoc($result);
        $resultstring = $resultasc['uid'];
        echo $resultstring;
    }
    if($resultstring == $id) { //user is activated
        $sql = "UPDATE `usr_token` SET `token`='$token' WHERE `uid`='$id' AND `session` = '$session'"; //renew token if session is valid on this device
        $conn->query($sql);
            if ($conn->connect_error) {
                $error = $conn->connect_error;
                 echo "<script>window.location = 'http://emilano.de/login.php?w=$error'</script>";
        } else {
            success();
        }
    } else {
        $sql = "INSERT INTO `usr_token`(`uid`, `session`, `token`) VALUES ('$id','$session','$token')"; //first time user
        $conn->query($sql);
        if ($conn->connect_error) {
            $error = $conn->connect_error;
            echo "<script>window.location = 'http://emilano.de/login.php?w=$error'</script>";
        } else {
            success();
        }
    }
} else { //Invalid password
    echo "<script>window.location = 'http://emilano.de/login.php?x=x'</script>";
} 
} else {
    echo "<script>window.location = 'http://emilano.de/login.php?x=x'</script>";
}
$conn->close();
?>
