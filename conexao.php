<?php
  $servename = "us-cdbr-east-04.cleardb.com";
  $database = "heroku_fb572d9119229b8";
  $username = "bdf6b07da17311";
  $password = "421addf8";

  $conexao = mysqli_connect($servename, $username, $password, $database);

?>

mysql://bdf6b07da17311:421addf8@us-cdbr-east-04.cleardb.com/heroku_fb572d9119229b8?reconnect=true