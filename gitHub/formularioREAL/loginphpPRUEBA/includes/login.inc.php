<?php

session_start();

if(isset($_POST['submit'])){

  include 'dbh.inc.php';

  $uid=mysqli_real_escape_string($conn,$_POST['uid']);

    $pwd=mysqli_real_escape_string($conn,$_POST['pwd']);

    //Error Handlers

    if(empty($uid) || empty($pwd)){
      header("Location: ../index.ajax.php?login=empty");
      exit();


    }else{
      $sql="SELECT * FROM users WHERE user_uid='$uid' or email='$uid'";
      $result= mysqli_query($conn,$sql);
      $resultCheck=mysqli_num_rows($result);
      if($resultCheck < 1){
        header("Location: ../index.ajax.php?login=error");
        exit();

      } else{
        if($row = mysqli_fetch_assoc($result)){
          //De-hashing the password
          $hashedPwdCheck=password_verify($pwd,$row['password']);
          if($hashedPwdCheck == false){
            header("Location: ../index.ajax.php?login=error");
            exit();
          }
 elseif($hashedPwdCheck == true){
  //Log in the user here
  $_SESSION['u_id']=$row['id'];
  $_SESSION['u_first']=$row['first_name'];
  $_SESSION['u_last']=$row['last_name'];
  $_SESSION['u_email']=$row['email'];
  $_SESSION['u_uid']=$row['user_uid'];
  $_SESSION['admin']=$row['admin'];


  header("Location: ../index.ajax.php?login=success");
  exit();

}

          }

        }
      }
    }

else{
  header("Location: ../index.ajax.php?login=error");
  exit();

}

 ?>
