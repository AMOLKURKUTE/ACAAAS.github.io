<?php
      $host='localhost';
      $user='root';
      $pass="";
      $dbname='village';


      $con=mysqli_connect($host,$user,$pass,$dbname);
      mysqli_select_db($con,$dbname);
?>