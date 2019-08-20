

<?php
/* ESTA ES LA PAGINA QUE INGRESA LOS DATOS A LA BASE DE DATOS. TOMA LAS VARIABLES DE FORM1.PHP Y LAS SUBE A LA BASE.
TAMBIEN INCLUYE EL ENVIADOR DE MAIL*/



date_default_timezone_set("America/Santiago");


function process_si_contact_form()
{
  try{



    if ($_SERVER['REQUEST_METHOD'] == 'POST' && @$_POST['do'] == 'contact') {
        // if the form has been submitted
        foreach($_POST as $key => $value) {
            if (!is_array($key)) {
                // sanitize the input data
                if ($key != 'ct_message') $value = strip_tags($value);
                $_POST[$key] = htmlspecialchars(stripslashes(trim($value)));
            }
        }
        $captcha = @$_POST['ct_captcha']; // the user's entry for the captcha code

        $files=$_FILES["fileToUpload"];



        $errors = array();  // initialize empty error array

        // Only try to validate the captcha if the form has no errors
        // This is especially important for ajax calls


        if (sizeof($errors) == 0) {
            require_once dirname(__FILE__) . '/securimage/securimage.php';
            $securimage = new Securimage();
            if ($securimage->check($captcha) == false) {

                $return = array('error' => 404, 'message' => 'Codigo incorrecto');
                die(json_encode($return));

            }
        }

        if (sizeof($errors) == 0) {

            if (isset($GLOBALS['DEBUG_MODE']) && $GLOBALS['DEBUG_MODE'] == false) {
                // send the message with mail()
            }

            include 'dbh.inc.php';


            $name=$_POST['name'];
            $apellidos=$_POST['apellidos'];
            $direccion=$_POST['direccion'];
          $rut=$_POST['rut'];
          $comuna=$_POST['comunas'];
          $region=$_POST['regiones'];
          $codigo=$_POST['codigo'];
          $telefono=$_POST['telefono'];
          $telefonocomp=$codigo.$telefono;




          $añoegreso=$_POST['añoegreso'];

          //<---OPCIONALES-->

          if (isset($_POST['telefono2'])){
          $telefono2=$_POST['telefono2'];
          $codigo2=$_POST['codigo2'];

          $telefonocomp2=$codigo2.$telefono2;
        }else{
            $telefono2="";
            $codigo2="";
              $telefonocomp2="";
        }


        if(!(isset($_POST['practica'])))
          $practica="";
          else $practica=$_POST['practica'];


          $email=$_POST['email'];
          $media=$_POST['media'];



  if(!(isset($_POST['universidad'])))
            {
              $return = array('error' => 9, 'message' => 'Debe Seleccionar una Universidad');
              die(json_encode($return));

            }else{
              $universidad= $_POST['universidad'];

            }

            if($region===""){

                $return = array('error' => 10, 'message' => 'Debe Seleccionar una Region');
                die(json_encode($return));
          }

                      if($comuna===""){

                          $return = array('error' => 11, 'message' => 'Debe Seleccionar una Comuna');
                          die(json_encode($return));
                    }



          $titulos=$_POST['titulos'];
          $cursos=$_POST['cursos'];
                $areainteres=$_POST['areainteres'];
                $areaesp=$_POST['areaesp'];
                $fecha=$date = date("d/m/Y G:i");
                $from='From:TangledDemo';
                $to='diegoveloso34@hotmail.com';
                $subject='Hello';
                $body="From: $name\n E-Mail: $email\n Message";






                    $target_dir = "uploads"."/";
                    $nombre_archivo = $_FILES['fileToUpload']['name'];

                    $target_file = $target_dir . basename($nombre_archivo);
                    $uploadOk = 1;
                    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
                    $partes=pathinfo($nombre_archivo);
                    $base=$partes['filename'];
                    $extension= $partes['extension'];


                    $correccion=array("-",".","/",":"," ","'\'");
                    $rutstr=str_replace($correccion,"",trim($rut));
                    $trapellidos=str_replace($correccion,"",trim($apellidos));
                    $trnombre=str_replace($correccion,"",trim($name));
                    $trfecha= str_ireplace($correccion,"",(trim($fecha)));

                    $nombre_archivo=$trapellidos.$trnombre.$rutstr.$trfecha.".".$extension;
                    $correccion=array("-","/",":"," ","'\'");
                    $nombre_archivo= str_ireplace($correccion,"",(trim($nombre_archivo)));
                    $target_file =$target_dir.$nombre_archivo;

                    if ($region==="") {
                      $return = array('error' => 8, 'message' => 'Debe Seleccionar una Region');
                        $uploadOk = 0;
                        die(json_encode($return));

                    }

                    if ($comuna==="") {
                      $return = array('error' => 9, 'message' => 'Debe Seleccionar una Comuna');
                        $uploadOk = 0;
                        die(json_encode($return));

                    }



                    // Check file size
                    if ($_FILES["fileToUpload"]["size"] > 2000000) {
                      $return = array('error' => 3, 'message' => 'Archivo muy Grande');
                        $uploadOk = 0;
                      //  $return=3;
                        die(json_encode($return));

                    }


                    // Allow certain file formats
                    if($imageFileType != "pdf") {
                     $return = array('error' => 4, 'message' => 'Solo se admiten archivos pdf');
                        $uploadOk = 0;
                        die(json_encode($return));

                    }

                    $consulta="select numero from postulaciones where rut='$rut'";
                    $rpta=mysqli_query($conn,$consulta);

                      if(mysqli_num_rows($rpta)){
                      $numero=mysqli_fetch_row($rpta);
                      if($numero[0]<=5){
                      $numero[0]++;
                      }
                      else{
                      /*
                        PARA HACER

                      $nombrear=$numero[1];
                           $uploadOk = 0;
                           $subearchivo = 0;
                           rename($target_file.$nombrear,$target_file.$_FILES["fileToUpload"]["tmp_name"]);
*/
                      }
                    }
                    else $numero[0]=0;


                    // Check if $uploadOk is set to 0 by an error
                    if ($uploadOk == 0) {
                    // if everything is ok, try to upload file
                  } else {


                                              $sql=("REPLACE into postulaciones
                                                (practica,
                                                nombre,
                                                apellidos,
                                                rut,
                                                region,
                                                comuna,
                                                direccion,
                                                telefono,
                                                telefono2,
                                                email,
                                                universidad,
                                                añoegreso,
                                                educacion_superior,
                                                titulos,
                                                cursos,
                                                areainteres,
                                                areaesp,
                                                link,
                                                fecha,
                                                numero) values
                                              ('$practica',
                                                '$name',
                                                '$apellidos',
                                                '$rut',
                                                '$region',
                                                '$comuna',
                                                '$direccion',
                                                '$telefonocomp',
                                                '$telefonocomp2',
                                                '$email',
                                                '$universidad',
                                                '$añoegreso',
                                                '$media',
                                                '$titulos',
                                                '$cursos',
                                                '$areainteres',
                                                '$areaesp',
                                                '$nombre_archivo',
                                                '$fecha',
                                                $numero[0])");



try{
                                              $result=mysqli_query($conn,$sql);

                                          }catch(Exception $e){
         print_R($e);
         die();
     }

                                            if (mysqli_affected_rows($conn)>0){
                                                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                                                   $return = array('error' => 0, 'message' => "OK");
                                                  include("test.php");
                                                  die(json_encode($return));




                                      }

                                        else     $return = array('error' => 3, 'message' => 'Archivo muy Grande');
                                        die(json_encode($return));




                    }

                    else $return = array('error' => 321, 'message' => mysqli_error($conn).$sql);

                    }




        die(json_encode($return));



                    }





        }//POST

      }catch(Exception $e){
               print_R($e);
               die();
           }
      } // function process_si_contact_form()


?>
