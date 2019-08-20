<?php
  include_once "header.php";

  if(($_SESSION['admin'])==1){




 ?>

 <section class="main-container">
   <div class="main-wrapper">
     <h2>Crear Usuario</h2>
     <form class="signup-form" action="includes/signup.inc.php" method="POST">
       <input type="text" name="first" placeholder="Nombre">

         <input type="text" name="last" placeholder="Apellido">
           <input type="text" name="email" placeholder="E-mail">
           <input type="text" name="uid" placeholder="Usuario">
               <input type="password" name="pwd" placeholder="Password">
               <input id="check" value="on" type="checkbox" name="admin" ><b id="frase">Permisos de Eliminación</b></button>

                 <button type="submit" name="submit" >Registrar</button>
     </form>




 <?php
 if(isset($_GET['signup'])){
   if ($_GET['signup']==='success'){

    echo '<b style="color:green">USUARIO REGISTRADO CON EXITO</b>';

  }
  if ($_GET['signup']==='empty'){

    echo '<b style="color:red">UNO DE LOS CAMPOS ESTA VACÍO</b>';


  }
  if ($_GET['signup']==='invalid'){

    echo '<b style="color:red">UNO DE LOS CAMPOS TIENE CARACTERES NO PERMITIDOS</b>';


  }
  if ($_GET['signup']==='email'){

    echo '<b style="color:red">EL MAIL NO ES VALIDO</b>';


  }
  if ($_GET['signup']==='usertaken'){

    echo '<b style="color:red">USUARIO YA REGISTRADO</b>';


  }
}

 }
 else echo 'NO PASE';
   include_once "footer.php";
  ?>
</div>

</section>
