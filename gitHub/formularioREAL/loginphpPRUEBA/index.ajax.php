<?php
  include_once "header.php";
 ?>

<section class="main-container">
  <div class="main-wrapper">
    <h2>Sistema de revisión de postulaciones ATM </h2>
  </div>
 <form method="post" action="/codeigniter/index.php/main/subidas">
  <?php
  if (isset($_GET['login'])){


  if($_GET['login']==='empty'){
    $mensaje= 'uno de tus campos esta vacío';
  }
  if($_GET['login']==='error'){
    $mensaje= 'usuario o contraseña no existen';
  }
  if($_GET['login']==='fuerza'){
    $mensaje= 'Inicio de Sesión Requerido';
  }


}



if (isset($mensaje)){
    echo ("<script language='javascript'>alert('$mensaje');</script>");
}

  if(isset($_SESSION['admin'])){
    if($_SESSION['admin']==1){



    ?>

      <input type="hidden" name="admin" value="1">

    <h2>Bienvenido Administrador
  </h2>

    <br>


    <br>
        <button class="menu" onclick="window.location.href='listusr.php'">USUARIOS</button>

    <?php
  }
  else{

    if($_SESSION['admin']==0){

    echo '<h2>Bienvenido Usuario</h2>';

    ?>
    <input type="hidden" name="admin" value="0">



    <?php
  }

  }





   ?>


      <button class="signup-form button menu" type="submit" >POSTULACIONES</button>


   </form>

<!--     <button class="menu" onclick="window.location.href='/codeigniter/index.php/main/subidas'">POSTULACIONES</button>
-->
</section>


<?php
}
  include_once "footer.php";
 ?>
