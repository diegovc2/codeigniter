<?php


  include 'dbh.inc.php';

$dataArray=array();
  $rut=$_POST['rut'];
  $resultados="select * from postulaciones where RUT='$rut'";
  $result=mysqli_query($conn,$resultados) or die(json_encode(mysqli_error($conn)));

  while($array = mysqli_fetch_assoc($result)){
      $dataArray[] = $array;
  }

 //$array=mysqli_fetch_array($result);

die(json_encode($dataArray));







 ?>
