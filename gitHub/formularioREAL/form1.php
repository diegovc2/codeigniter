

 <?php
 session_start(); // this MUST be called prior to any output including whitespaces and line breaks!
 $GLOBALS['ct_recipient']   = 'YOU@EXAMPLE.COM'; // Change to your email address!
 $GLOBALS['ct_msg_subject'] = 'Securimage Test Contact Form';
 $GLOBALS['DEBUG_MODE'] = 1;
 // CHANGE TO 0 TO TURN OFF DEBUG MODE
 // IN DEBUG MODE, ONLY THE CAPTCHA CODE IS VALIDATED, AND NO EMAIL IS SENT
 // Process the form, if it was submitted
 include('process_si_contact_form.php');



 process_si_contact_form();
 ?>

 <!DOCTYPE HTML>
 <html>

 <head>

   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <link rel="stylesheet" href="css/materialize.css">
   <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 <title>Formulario de Postulacion</title>
 <link rel="shortcut icon" href="http://atmspa.cl/wp-content/themes/atm-spa-theme/img/favicon.ico" type="image/x-icon">
 </head>

 <header>


     <nav>
   <div class="nav-wrapper #eeeeee grey lighten-3">

    <a href="http://www.atmspa.cl" class="brand-logo"><img id="logo" src="imgs/atmspa-logo-r.svg" style="
    height: 64px;
    margin-top: 15px;
"> </a>

   </div>
 </nav>

 </header>

     <body>
       <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
         <script src="jquery.rut.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

           <div class="container">
             <!-- Page Content goes here -->

       <section class="body">



<br>
<br>

<div class="row valign-wrapper ">
<div  class="col offset-s2 valign">
<div class="card-panel yellow">

<span class="card-title">
¡Gracias por visitar nuestra página! </span>
<p>A continuación, podrás agregar tus datos curriculares para así añadirlos automáticamente a nuestra base de datos.</p>
<p>Al final del cuestionario, deberás adjuntar tu CV en formato PDF.</p>
<p>Te pedimos rellenar la información de la forma más fidedigna posible, de tal manera que nuestra búsqueda resulte eficiente. El envío de datos incorrectos puede causar que no tomemos en cuenta tu postulación.</p>

</p>



</div>
</div>
</div>

<br>
<br>

      <form method="post" action="" id="contact_form" onsubmit="return processForm()" enctype="multipart/form-data">
        <input type="hidden" name="do" value="contact" />





        <div  class="input-field col s12">
    <input type="text" name="name" id="name"  required>
    <label id="lblnombre" >Nombre</label>

  </div>

<div class="row">
  <div class="input-field col s12">

<input type="text" name="apellidos" id="apellidos"  required>
<label>Apellidos</label>

</div>
</div>

    <div class="input-field col s12">
 <input required type="text" id="rut" name="rut" class="tooltipped" data-tooltip="Minimo 7 Dígitos">
 <label>RUT</label>
</div>


    <br></br>

    <!--SELECCION DE TIPO DE POSTULACION:
        POR DEFAULT ESTA YA CHEKEADO COMO TRABAJADOR
        SI QUIEREN DEJARLO EN PRACTICA, POSTULANTE Y TRABAJADOR
        DEBEN DESCOMENTAR LA ZONA DE ABAJO. TAMBIEN EN EL INPUT DE MIEMBRO ACTUAL
        DEBEN SACAR LA OPCION CHECKED-->

    <p>


      <div>
          <!--
      <input type="radio" name="practica" id="practicante" value="Practicante">
      <label for="practicante">Solicitud de Práctica</label>

      <input type="radio" name="practica"  id="postulante" value="Postulante">
      <label for="postulante">Solicitud de Trabajo</label>

	  -->
      <input checked type="radio" name="practica"  id="miembro" value="Miembro">
      <label for="miembro">Miembro Actual</label>

    </div>
    </p>


<div class="row">
    <div class="input-field col s12 l6">
      <label class="active">Región</label>

    <select  id="regiones" name="regiones">
      <option selected disabled value=""></option>

    </select>
  </div>

      <div class="input-field col s12 l6 ">
        <label class="active">Comuna</label>

      <select  id="comunas" name="comunas"></select>
      <option selected disabled value=""></option>

    </div>

  </div>

  <div class="input-field col s12">

  <input type="text" id="direccion" name="direccion" class="tooltipped" data-tooltip="Ingrese Calle y Número"  required>
  <label>Domicilio</label>

</div>





<br>
<div class="row">

<div class="input-field col s12 l6">
  <label>Teléfono Principal (Fijo o Móvil)</label>
  <br>
  <br>
<div class="input-field col s6">

  <input
 type="tel" id="codigo" name="codigo" placeholder="+569" pattern="[\+][0-9]{3}"  required  maxlength="4">
 <label class="active">Código</label>

</div>

<div class="input-field col s6 ">
      <input id="telefono" data-tooltip="8 Dígitos" class="tooltipped" title="Sólo Números y un m�nimo de 8 caracteres" type="tel" name="telefono" placeholder="1111111" pattern="[0-9]{8}"  required  maxlength="8"/>
      <label class="active">Teléfono</label>

</div>

</div>

<br>

<div class="input-field col s12 l6">
<label>Teléfono Opcional</label>
<br>
<br>
<div class="input-field col s6">

  <input
 type="tel" id="codigo2" name="codigo2" placeholder="+569" pattern="[\+][0-9]{3}"   maxlength="4">
 <label class="active">Código</label>

</div>

<div class="input-field col s6 ">

      <input id="telefono2" data-tooltip="8 Dígitos" class="tooltipped" title="Sólo Números y un mínimo de 8 caracteres" type="tel" name="telefono2" placeholder="1111111" pattern="[0-9]{8}"    maxlength="8"/>
      <label class="active">Teléfono</label>

</div>

</div>

<div class="row">

<div class="input-field col s12">
    <label>Correo Electrónico</label>
    <input id="email" name="email" type="email" class="tooltipped" data-tooltip="ejemplo@dominio.com"required>
</div>

</div>

<h2>DATOS ACADÉMICOS</h2>


<div class="row">
  <label>Instituto de Educación Superior</label>

<select name="universidad"  onchange='checkOtro(this.value);' id="universidad" class="form-control">


  <option selected value=""></option>
  <option value="0">Otra</option>
	<option value="PONTIFICIA U. CATÓLICA DE CHILE">PONTIFICIA U. CATÓLICA DE CHILE</option>
  <option value="U. DE CHILE">U. DE CHILE</option>
	<option value="U. DE CONCEPCIÓN">U. DE CONCEPCIÓN</option>
	<option value="PONTIFICIA U. CATÓLICA DE VALPARAÍSO">PONTIFICIA U. CATÓLICA DE VALPARAÍSO</option>
	<option value="U. TÉCNICA FEDERICO SANTA MARÍA">U. TÉCNICA FEDERICO SANTA MARÍA</option>
	<option value="U. DE SANTIAGO DE CHILE">U. DE SANTIAGO DE CHILE</option>
	<option value="U. AUSTRAL DE CHILE">U. AUSTRAL DE CHILE</option>
	<option value="U. CATÓLICA DEL NORTE">U. CATÓLICA DEL NORTE</option>
	<option value="U. DE LA SERENA">U. DE LA SERENA</option>
	<option value="U. DE ATACAMA">U. DE ATACAMA</option>
	<option value="U. DE VALPARAÍSO">U. DE VALPARAÍSO</option>
	<option value="U. DE ANTOFAGASTA">U. DE ANTOFAGASTA</option>
	<option value="U. DE LA FRONTERA">U. DE LA FRONTERA</option>
	<option value="U. DE MAGALLANES">U. DE MAGALLANES</option>
	<option value="U. DE TALCA">U. DE TALCA</option>
	<option value="U. GABRIELA MISTRAL">U. GABRIELA MISTRAL</option>
	<option value="U. DIEGO PORTALES">U. DIEGO PORTALES</option>
	<option value="U. CENTRAL DE CHILE">U. CENTRAL DE CHILE</option>
	<option value="U. DE TARAPACÁ">U. DE TARAPACÁ</option>
	<option value="U. ARTURO PRAT">U. ARTURO PRAT</option>
	<option value="U. METROPOLITANA DE CIENCIAS DE LA EDUCACIÓN">U. METROPOLITANA DE CIENCIAS DE LA EDUCACIÓN</option>
	<option value="U. DE PLAYA ANCHA DE CIENCIAS DE LA EDUCACIÓN">U. DE PLAYA ANCHA DE CIENCIAS DE LA EDUCACIÓN</option>
	<option value="U. FINIS TERRAE">U. FINIS TERRAE</option>
	<option value="U. LA REPÚBLICA">U. LA REPÚBLICA</option>
	<option value="U. MAYOR">U. MAYOR</option>
	<option value="U. ACADEMIA DE HUMANISMO CRISTIANO">U. ACADEMIA DE HUMANISMO CRISTIANO</option>
	<option value="U. BOLIVARIANA">U. BOLIVARIANA</option>
	<option value="U. DEL BÍO-BÍO">U. DEL BÍO-BÍO</option>
	<option value="U. DE LAS AMÉRICAS">U. DE LAS AMÉRICAS</option>
	<option value="U. ADOLFO IBÁÑEZ">U. ADOLFO IBÁÑEZ</option>
	<option value="U. ANDRÉS BELLO">U. ANDRÉS BELLO</option>
	<option value="U. DE ARTE Y CIENCIAS SOCIALES ARCIS">U. DE ARTE Y CIENCIAS SOCIALES ARCIS</option>
	<option value="U. ADVENTISTA DE CHILE">U. ADVENTISTA DE CHILE</option>
	<option value="U. DEL DESARROLLO">U. DEL DESARROLLO</option>
	<option value="U. SAN SEBASTIÁN">U. SAN SEBASTIÁN</option>
	<option value="U. UCINF">U. UCINF</option>
	<option value="U. AUTÓNOMA DE CHILE">U. AUTÓNOMA DE CHILE</option>
	<option value="U. DE ACONCAGUA">U. DE ACONCAGUA</option>
	<option value="U. DE LOS ANDES">U. DE LOS ANDES</option>
	<option value="U. DEL PACÍFICO">U. DEL PACÍFICO</option>
	<option value="U. BERNARDO O`HIGGINS">U. BERNARDO O`HIGGINS</option>
	<option value="U. CATÓLICA CARDENAL RAÚL SILVA HENRÍQUEZ">U. CATÓLICA CARDENAL RAÚL SILVA HENRÍQUEZ</option>
	<option value="U. DE VIÑA DEL MAR">U. DE VIÑA DEL MAR</option>
	<option value="U. PEDRO DE VALDIVIA">U. PEDRO DE VALDIVIA</option>
	<option value="U. SANTO TOMÁS">U. SANTO TOMÁS</option>
	<option value="U. SEK">U. SEK</option>
	<option value="U. DE ARTES, CIENCIAS Y COMUNICACIÓN UNIACC">U. DE ARTES, CIENCIAS Y COMUNICACIÓN UNIACC</option>
	<option value="U. CATÓLICA DEL MAULE">U. CATÓLICA DEL MAULE</option>
	<option value="U. CATÓLICA DE LA SANTÍSIMA CONCEPCIÓN">U. CATÓLICA DE LA SANTÍSIMA CONCEPCIÓN</option>
	<option value="U. TECNOLÓGICA DE CHILE INACAP">U. TECNOLÓGICA DE CHILE INACAP</option>
	<option value="U. CATÓLICA DE TEMUCO">U. CATÓLICA DE TEMUCO</option>
	<option value="U. TECNOLÓGICA METROPOLITANA">U. TECNOLÓGICA METROPOLITANA</option>
	<option value="U. DE LOS LAGOS">U. DE LOS LAGOS</option>
	<option value="U. IBEROAMERICANA DE CIENCIAS Y TECNOLOGÍA">U. IBEROAMERICANA DE CIENCIAS Y TECNOLOGÍA</option>
	<option value="U. ALBERTO HURTADO">U. ALBERTO HURTADO</option>
	<option value="U. MIGUEL DE CERVANTES">U. MIGUEL DE CERVANTES</option>
	<option value="U. CHILENO-BRITÁNICA DE  CULTURA">U. CHILENO-BRITÁNICA DE  CULTURA</option>
	<option value="U. LOS LEONES">U. LOS LEONES</option>
	<option value="I.P. AGRARIO ADOLFO MATTHEI">I.P. AGRARIO ADOLFO MATTHEI</option>
	<option value="I.P. INACAP">I.P. INACAP</option>
	<option value="I.P. ESC. DE CONTADORES AUDITORES DE STGO.">I.P. ESC. DE CONTADORES AUDITORES DE STGO.</option>
	<option value="I.P. DE ARTES Y COMUNICACIÓN ARCOS">I.P. DE ARTES Y COMUNICACIÓN ARCOS</option>
	<option value="I.P. GUILLERMO SUBERCASEAUX">I.P. GUILLERMO SUBERCASEAUX</option>
	<option value="I.P. LIBERTADOR DE LOS ANDES">I.P. LIBERTADOR DE LOS ANDES</option>
	<option value="I.P. PROVIDENCIA">I.P. PROVIDENCIA</option>
	<option value="I.P. DUOC UC">I.P. DUOC UC</option>
	<option value="I.P. IPEGE">I.P. IPEGE</option>
	<option value="I.P. ESCUELA MODERNA DE MÚSICA">I.P. ESCUELA MODERNA DE MÚSICA</option>
	<option value="I.P. IACC">I.P. IACC</option>
	<option value="I.P. SANTO TOMÁS">I.P. SANTO TOMÁS</option>
	<option value="I.P. ALEMÁN WILHELM VON HUMBOLDT">I.P. ALEMÁN WILHELM VON HUMBOLDT</option>
	<option value="I.P. DIEGO PORTALES">I.P. DIEGO PORTALES</option>
	<option value="I.P. DEL VALLE CENTRAL">I.P. DEL VALLE CENTRAL</option>
	<option value="I.P. VIRGINIO GÓMEZ">I.P. VIRGINIO GÓMEZ</option>
	<option value="I.P. LA ARAUCANA">I.P. LA ARAUCANA</option>
	<option value="I.P. DE CIENCIAS Y ARTES INCA-CEA">I.P. DE CIENCIAS Y ARTES INCA-CEA</option>
	<option value="I.P. CIISA">I.P. CIISA</option>
	<option value="I.P. LOS LEONES">I.P. LOS LEONES</option>
	<option value="I.P. DE LOS LAGOS">I.P. DE LOS LAGOS</option>
	<option value="I.P. AIEP">I.P. AIEP</option>
	<option value="I.P. EATRI">I.P. EATRI</option>
	<option value="I.P. CARLOS CASANUEVA">I.P. CARLOS CASANUEVA</option>
	<option value="I.P. INSTITUTO NACIONAL DEL FÚTBOL">I.P. INSTITUTO NACIONAL DEL FÚTBOL</option>
	<option value="I.P. ESUCOMEX">I.P. ESUCOMEX</option>
	<option value="I.P. DE CHILE">I.P. DE CHILE</option>
	<option value="I.P. CÁMARA DE COMERCIO DE SANTIAGO">I.P. CÁMARA DE COMERCIO DE SANTIAGO</option>
	<option value="I.P. HELEN KELLER">I.P. HELEN KELLER</option>
	<option value="I.P. LATINOAMERICANO DE COMERCIO EXTERIOR">I.P. LATINOAMERICANO DE COMERCIO EXTERIOR</option>
	<option value="I.P. PROJAZZ">I.P. PROJAZZ</option>
	<option value="I.P. INTERNACIONAL DE ARTES CULINARIAS Y SERVICIOS">I.P. INTERNACIONAL DE ARTES CULINARIAS Y SERVICIOS</option>
	<option value="I.P. ESCUELA DE CINE DE CHILE">I.P. ESCUELA DE CINE DE CHILE</option>
	<option value="I.P. VERTICAL">I.P. VERTICAL</option>
	<option value="I.P. ESCUELA DE MARINA MERCANTE PILOTO PARDO">I.P. ESCUELA DE MARINA MERCANTE PILOTO PARDO</option>
	<option value="I.P. DE ARTES ESCENICAS KAREN CONNOLLY">I.P. DE ARTES ESCENICAS KAREN CONNOLLY</option>
	<option value="C.F.T. LOS LEONES">C.F.T. LOS LEONES</option>
	<option value="C.F.T. ENAC">C.F.T. ENAC</option>
	<option value="C.F.T. ANDRÉS BELLO">C.F.T. ANDRÉS BELLO</option>
	<option value="C.F.T. SANTO TOMÁS">C.F.T. SANTO TOMÁS</option>
	<option value="C.F.T. INACAP">C.F.T. INACAP</option>
	<option value="C.F.T. ESTUDIO PROFESOR VALERO">C.F.T. ESTUDIO PROFESOR VALERO</option>
	<option value="C.F.T. IPROSEC">C.F.T. IPROSEC</option>
	<option value="C.F.T. EDUCAP">C.F.T. EDUCAP</option>
	<option value="C.F.T. INSTITUTO TECNOLÓGICO DE CHILE">C.F.T. INSTITUTO TECNOLÓGICO DE CHILE</option>
	<option value="C.F.T. CÁMARA DE COMERCIO DE SANTIAGO">C.F.T. CÁMARA DE COMERCIO DE SANTIAGO</option>
	<option value="C.F.T. DE EST. SUP.Y CAPACITACIÓN PROFESIONAL LAPLACE">C.F.T. DE EST. SUP.Y CAPACITACIÓN PROFESIONAL LAPLACE</option>
	<option value="C.F.T. CEDUC - UCN">C.F.T. CEDUC - UCN</option>
	<option value="C.F.T. CEITEC">C.F.T. CEITEC</option>
	<option value="C.F.T. UCEVALPO">C.F.T. UCEVALPO</option>
	<option value="C.F.T. ALPES">C.F.T. ALPES</option>
	<option value="C.F.T. DE LA INDUSTRIA GRÁFICA O C.F.T.  INGRAF">C.F.T. DE LA INDUSTRIA GRÁFICA O C.F.T.  INGRAF</option>
	<option value="C.F.T. DEL MEDIO AMBIENTE">C.F.T. DEL MEDIO AMBIENTE</option>
	<option value="C.F.T. ICEL">C.F.T. ICEL</option>
	<option value="C.F.T. INST. CENTRAL DE CAPACITACIÓN EDUCACIONAL ICCE">C.F.T. INST. CENTRAL DE CAPACITACIÓN EDUCACIONAL ICCE</option>
	<option value="C.F.T. LOTA-ARAUCO">C.F.T. LOTA-ARAUCO</option>
	<option value="C.F.T. SAN AGUSTÍN DE TALCA">C.F.T. SAN AGUSTÍN DE TALCA</option>
	<option value="C.F.T. PROANDES">C.F.T. PROANDES</option>
	<option value="C.F.T. U. VALPO.">C.F.T. U. VALPO.</option>
	<option value="C.F.T. UDA">C.F.T. UDA</option>
	<option value="C.F.T. ESANE DEL NORTE">C.F.T. ESANE DEL NORTE</option>
	<option value="C.F.T. LOS LAGOS">C.F.T. LOS LAGOS</option>
	<option value="C.F.T. LUIS ALBERTO VERA">C.F.T. LUIS ALBERTO VERA</option>
	<option value="C.F.T. JUAN BOHON">C.F.T. JUAN BOHON</option>
	<option value="C.F.T. DE TARAPACÁ">C.F.T. DE TARAPACÁ</option>
	<option value="C.F.T. TEODORO WICKEL">C.F.T. TEODORO WICKEL</option>
	<option value="C.F.T. ALFA">C.F.T. ALFA</option>
	<option value="C.F.T. INSTITUTO SUPERIOR ALEMÁN DE COMERCIO INSALCO">C.F.T. INSTITUTO SUPERIOR ALEMÁN DE COMERCIO INSALCO</option>
	<option value="C.F.T. MASSACHUSETTS">C.F.T. MASSACHUSETTS</option>
	<option value="C.F.T. PRODATA">C.F.T. PRODATA</option>
	<option value="C.F.T. PROFASOC">C.F.T. PROFASOC</option>
	<option value="C.F.T. MANPOWER">C.F.T. MANPOWER</option>
	<option value="C.F.T. ESCUELA CULINARIA FRANCESA">C.F.T. ESCUELA CULINARIA FRANCESA</option>
	<option value="ACADEMIA NAC. EST. POLÍTICOS Y ESTRATÉGICOS ANEPE">ACADEMIA NAC. EST. POLÍTICOS Y ESTRATÉGICOS ANEPE</option>
	<option value="ESCUELA MILITAR DEL GENERAL BERNARDO O'HIGGINS">ESCUELA MILITAR DEL GENERAL BERNARDO O'HIGGINS</option>
	<option value="ESCUELA NAVAL ARTURO PRAT">ESCUELA NAVAL ARTURO PRAT</option>
	<option value="ESC. DE GRUMETES ALEJANDRO NAVARRETE CISTERNA">ESC. DE GRUMETES ALEJANDRO NAVARRETE CISTERNA</option>
	<option value="ESCUELA DE AVIACIÓN">ESCUELA DE AVIACIÓN</option>
	<option value="ESCUELA TÉCNICA AERONAUTICA">ESCUELA TÉCNICA AERONAUTICA</option>

</select>
<input type="text" name="color" id="color" style='display:none;'/>
</div>



<div id="titulos" class="row scale-transition">
  <label id="lbltitulos" class="scale-transition">Títulos</label>

<div class="input-field col s12 ">
  <i class="material-icons prefix">mode_edit</i>
<textarea data-length="400"  placeholder="Ej:Agronomía Universidad del Desarrollo 2014"  class="tooltipped materialize-textarea scale-transition " name="titulos" data-tooltip="Especificar por favor grado académico" maxlength="400"></textarea>
</div>
</div>


<div id="cursos" class="row scale-transition">

  <label class="scale-transition" id="lblcursos">Cursos y Diplomados</label>

<div class="input-field col s12 ">
  <i class="material-icons prefix">mode_edit</i>
<textarea  data-length="400" placeholder="Ej: Magister en Dibujo Técnico en la SEK 1999"  class="scale-transition tooltipped materialize-textarea " id="media" name="cursos" data-tooltip="Especificar año e institución" maxlength="400"></textarea>
</div>
</div>

<label>Otros Estudios</label>

<div class="row">
<div class="input-field col s12 ">
  <i class="material-icons prefix">mode_edit</i>
<textarea data-length="400" data-tooltip="Ingresar nombre de universidad/instituto y su año de egreso" placeholder="2009 Universidad Las Américas Agronomía"  class="tooltipped materialize-textarea " name="media"  maxlength="400"></textarea>
</div>
</div>


<div id="especialidad" class="row scale-transition">
  <h2>Especialidades</h2>

    <div class="input-field col s12 ">
      <i class="material-icons prefix">mode_edit</i>
    <textarea data-length="400" placeholder="Ej: Más de 3 años en estudios de Suelos" class="tooltipped materialize-textarea " name="areaesp" data-tooltip="Ingrese su especialidad complementándola con sus años de experiencia en el área" id="areaesp" maxlength="400"></textarea>
    </div>
</div>

<h2>Reseña Laboral</h2>

<div class="row">

    <div class="input-field col s12 ">
      <i class="material-icons prefix">mode_edit</i>
    <textarea data-length="400"  class="tooltipped materialize-textarea "
    placeholder="Ej: Trabajé durante 5 años en CODELCO, en el sector de Topografía de la mina de los Cobres" name="areainteres" id="" data-tooltip="Describa Aquí" maxlength="400"></textarea>
    </div>
</div>






<div id="añoegreso" class="row scale-transition">
  <div class="input-field col s12">

    <div class="input-field col s12">
      <label class="active">Años de Experiencia</label>

    <select   name="añoegreso">
      <option  value="0">Recien Egresado</option>
      <option  value="1">1</option>
      <option  value="2">2</option>
      <option  value="3">3</option>
      <option  value="4">4</option>
      <option  value="5">5</option>
      <option  value="6">6</option>
      <option  value="7">7</option>
      <option  value="8">8</option>
      <option  value="9">9</option>
      <option  value="10">10 o más</option>

    </select>


    </div>
  </div>
</div>

<label>Adjunte su CV (sólo archivos .pdf menores a 2 MB)</label>
<br>
<br>
<div class="file-field input-field">
  <div class="subir">
   <div class="btn #e65100 orange darken-4">
     <span>Subir Archivo</span>
     <input type="file" name="fileToUpload" id="fileToUpload" required/>
   </div>
 </div>
   <div class="file-path-wrapper">
     <input class="file-path validate"  name ="path" type="text">
   </div>
 </div>
<br></br>
<br>
<br>


  <p>
     <div class="card-panel orange">
       <span class="card-title white-text"><h5>INGRESE EL CODIGO DE SEGURIDAD</h5></span>

    <?php require_once 'securimage/securimage.php'; echo Securimage::getCaptchaHtml(array('input_name' => 'ct_captcha')); ?>
  </div>
  </p>


<br></br>
<div class="row center-align">

<div id="submit" class="row scale-transition">
  <button id="btnsubmit" class="btn-large waves-effect waves-light #e65100 orange darken-4" name="action">
      <input type="submit"  name="submit"/>
      <i class="material-icons right">send</i>
    </button>

  </div>
  <div id="barra" class="row scale-transition scale-out">

  <div  class="progress">
    <div class="indeterminate"></div>
   </div>

 </div>

</div>




</form>


<script type="text/javascript">


    $.noConflict();



    function reloadCaptcha()
    {

      if (typeof window.captcha_image_audioObj !== 'undefined') captcha_image_audioObj.refresh(); document.getElementById('captcha_image').src = '/gitHub/formularioREAL/securimage/securimage_show.php?' + Math.random();
      this.blur();
       return false
    }

    function checkOtro(val){
 var element=document.getElementById('ddlInstitucion');
 var element2=document.getElementById('color');

 if(val=='0')
   element2.style.display='block';
 else
   element2.style.display='none';
}

function closeLoading(){
jQuery(document).ready(function($) {
    $('#barra').removeClass('scale-in').addClass('scale-out');
      $('#barra').prop('enabled', false);
  $('#submit').removeClass('scale-out').addClass('scale-in');
});

return false;


}

    function processForm()
    {



        var fd = new FormData(document.getElementById("contact_form"));
        jQuery.ajax({
          url: "form1.php",
          type: "POST",
          data: fd,
          processData: false,  // tell jQuery not to process the data
          contentType: false,
          dataType: 'json'


        }).done(function(data) {
            if (data.error == 0) {

              window.location.href="exito.php";


            } else {
                alert("Hubo un error con su cuestionario.\n\n"+(data.message));

              jQuery('#captcha_code').val('');

              reloadCaptcha();


              closeLoading();



            }   // tell jQuery not to set contentType
          })
          .fail(function(data) { alert (JSON.stringify(data)); })


        return false;
    }
</script>

</section>



<script  src="js/index.js"></script>


<script>


(function($){

  $(document).ready(function() {
    $('select').material_select();
    $('.tooltipped').tooltip();



  });

  $(function() {
  $("#regiones").on('change', function() {


      // re-initialize material-select
      //$('#comunas').material_select();
      $("#comunas").material_select();

      //$('select').material_select();

  });
  });

  function rellena(){
           var fd = new FormData(document.getElementById("contact_form"));

           jQuery.ajax({
             url: 'rellena.php',
             type: "POST",
             data: fd,
             processData: false,  // tell jQuery not to process the data
             contentType: false,
             dataType: 'json'


           }).done(function(data) {

             $('#name').val(data[0].nombre);
             $('#apellidos').val(data[0].apellidos);
             $('#regiones').val(data[0].region);
             $('#comuna').val(data[0].comunas);
             $('#direccion').val(data[0].direccion);

             var telefono= data[0].telefono;
             var codigo=telefono.substr(0,4);
             var fono=telefono.substr(4);
             $('#telefono').val(fono);
             $('#codigo').val(codigo);

             var telefono2= data[0].telefono2;
             var codigo2=telefono2.substr(0,4);
             var fono2=telefono2.substr(4);

             $('#codigo2').val(codigo2);
             $('#telefono2').val(fono2);


             $('#email').val(data[0].email);
             $('#universidad').val(data[0].universidad);
             $('#añoegreso').val(data[0].añoegreso);
             $('#universidad').val(data[0].educacion_superior);
             $('#titulos').val(data[0].titulos);
             $('#media').val(data[0].cursos);
             $('#areaesp').val(data[0].areaesp);
             $('#areainteres').val(data[0].areainteres);
             $('#añoegreso').val(data[0].añoegreso);

              //alert (JSON.stringify(data[0].nombre));
                // tell jQuery not to set contentType
             })
             .fail(function(data) { alert (JSON.stringify(data)); })


           return false;

         }



$('#rut').blur(function(){



      rellena();



});


  $(function() {
    $('input:radio[name="practica"]').change(function() {

      if(this.checked && this.value == 'Practicante'){
  $('#cursos').removeClass('scale-in').addClass('scale-out');
  $('#lbltitulos').html("Carrera");
  $('#especialidad').removeClass('scale-in').addClass('scale-out');
  $('#añoegreso').removeClass('scale-in').addClass('scale-out');
  $('#cursos').hide();
  $('#especialidad').hide();
  $('#añoegreso').hide();
  $('#cursos').prop('disabled', true);
  $('#especialidad').prop('disabled', true);
  $('#añoegreso').prop('disabled', true);




}else{
  $('#cursos').show();
  $('#especialidad').show();
  $('#añoegreso').show();
  $('#cursos').removeClass('scale-out').addClass('scale-in');
  $('#titulos').removeClass('scale-out').addClass('scale-in');
  $('#especialidad').removeClass('scale-out').addClass('scale-in');
  $('#añoegreso').removeClass('scale-out').addClass('scale-in');
  $('#lbltitulos').html("Títulos");
  $('#cursos').prop('enabled', true);
  $('#especialidad').prop('enabled', true);
  $('#añoegreso').prop('enabled', true);
}
});




  });

  $(function(){

    $('#contact_form').submit(function(){
      $('#submit').removeClass('scale-in').addClass('scale-out');
      $('#submit').prop('disabled', true);
      $('#barra').removeClass('scale-out').addClass('scale-in');







    });




  });



  $(function() {

    $("input#rut").rut();

    $("#rut").rut({
         formatOn: 'keyup',
        minimumLength: 7, // validar largo mínimo; default: 2
          validateOn: 'change' // si no se quiere validar, pasar null
        });


      $("#rut").rut().on('rutValido', function(e, rut, dv) {
        this.setCustomValidity('');

      });

      $("#rut").rut().on('rutInvalido', function(e) {


        this.setCustomValidity('Rut inválido');


});

  });



})(jQuery);



</script>

</div>
</body>

<footer class="page-footer white">
  <div class="footer-copyright #f5f5f5 orange">
    <div class="container grey-text">
    </div>
  </div>
          <div class="container">


            <div class="row" style="padding-top:80px;">
              <div class="col l2 s2">
                <img style="height:64px;" src="imgs/atmspa-logo-r.svg">
                <ul>
                  <li>Luis Thayer Ojeda # 0115, Of. 1101 </li>
                  <li>Providencia - Santiago, Chile</li>
                  <li></li>
                  <li>(56 2) 2945 8900</li>
                  <li> info@atmsa.cl</li>

                </ul>
              </div>
            </div>


          </div>


        </footer>



</html>
