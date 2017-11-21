<?php
  include_once "header.php";
 ?>

<section class="main-container">
  <div class="main-wrapper">
    <h2>Sistema de revisión de postulaciones ATM </h2>
  </div>

  <?php
  if (isset($_GET['login'])){


  if($_GET['login']==='empty'){
    $mensaje= 'uno de tus campos esta vacío';
  }
  if($_GET['login']==='error'){
    $mensaje= 'usuario o contraseña no existen';
  }
  if($_GET['login']==='fuerza'){
    $mensaje= 'No se meta a la fuerza porfavor';
  }


}


if (isset($mensaje)){
    echo ("<script language='javascript'>alert('$mensaje');</script>");
}

  if(isset($_SESSION['admin'])){
    if($_SESSION['admin']==1){

    ?>

    <h2>Bienvenido Administrador
  </h2>

    <br>

    <button class="menu" onclick="window.location.href='/codeigniter/index.php/main/subidas'">POSTULACIONES</button>
    <br>
        <button class="menu" onclick="window.location.href='listusr.php'">USUARIOS</button>

    <?php
  }
  else{

    echo 'Bienvenido Usuario';

  }
  }




   ?>
</section>


<?php
  include_once "footer.php";
 ?>
