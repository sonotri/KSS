<?php
session_start();

//Caching 방지 
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");

//새로운 session start
if (isset($_GET['reset']) && $_GET['reset'] === '1') {
  session_regenerate_id(true);
  setcookie('PHPSESSID', session_id(), time() + 3600, '/');
}

//Create cookie and session
if (!isset($_COOKIE['PHPSESSID'])) {
  setcookie('PHPSESSID', session_id(), time() + 3600, '/'); 
}

if (isset($_COOKIE['PHPSESSID']) && is_numeric($_COOKIE['PHPSESSID'])) {
  header("Location: sub.php");
  exit();
}

if (isset($_COOKIE['PHPSESSID']) && ($_COOKIE['PHPSESSID']) === "BraveCookie") {
  echo "2f636c6170636c61702e706870";
  exit();
}
    ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>
  <body>
    <div style="text-align: center">
      <img src="dongdong.png" width="400" height="400" />
      <h5>This cat's name is Dongdong.</h5>
      <h5>Dongdong likes cookie-flavored churu</h5>
<!--if (isset($_COOKIE['PHPSESSID']) && is_numeric($_COOKIE['PHPSESSID']))-->
    </div>
  </body>
</html>
