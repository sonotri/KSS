<?php
require 'vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$flag = getenv('FLAG');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div style="text-align: center">
      <img src="dondongflag.png" width="400" height="400" >
      <h5>Congratulation~~~</h5>
      <p style="color:white">flag is "<?php echo $flag; ?>"</p>
    </div>
</body>
</html>
