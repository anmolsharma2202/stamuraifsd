<?php
$con = mysqli_connect("localhost","root","","task");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  #mysql_select_db("task", $con);
?>