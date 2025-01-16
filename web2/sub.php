<?php
session_start();

//Caching 방지 
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");

session_destroy(); 
setcookie('PHPSESSID', '', time() - 3600, '/'); // cookie 만료료
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>
  </head>
  <body>
    <script>
      alert("Dongdong has a cookie! The cookie's name is...");
      //+session reset
      window.location.href = "main.php?reset=1";
      <h5>...BraveCookie</h5>
    </script>
  </body>
</html>
