

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

<p class="caption">
  Bienvenido a la página de postulación.
  Aca podras dejar tu Currículum. Una vez enviado quedará en nuestra
  base de datos. Si envia CV por segunda vez se editarán los datos iniciales
</p>


</div>
</div>
</div>

<br>
<br>

      <form method="post" action="" id="contact_form" onsubmit="return processForm()" enctype="multipart/form-data">
        <input type="hidden" name="do" value="contact" />

        <p>
      <input type="checkbox" id="practica" name="practica"/>
      <label for="practica">Solicitud de Práctica</label>
    </p>


        <div class="input-field col s12">
    <input type="text" name="name"  required>
    <label>Nombre</label>

  </div>

<div class="row">
  <div class="input-field col s12">

<input type="text" name="apellidos"  required>
<label>Apellidos</label>

</div>
</div>

    <div class="input-field col s12">
 <input required type="text" id="rut" name="rut" class="tooltipped" data-tooltip="Minimo 7 Dígitos">
 <label>Rut</label>
</div>


    <br></br>



<div class="row">
    <div class="input-field col s6">
      <label class="active">Region</label>

    <select  id="regiones" name="regiones">
      <option selected disabled value=""></option>

    </select>
  </div>

      <div class="input-field col s6 ">
        <label class="active">Comuna</label>

      <select  id="comunas" name="comunas"></select>
      <option selected disabled value=""></option>

    </div>

  </div>

  <div class="input-field col s12">

  <input type="text" name="direccion" class="tooltipped" data-tooltip="Ingrese Calle y Número"  required>
  <label>Direccion</label>

</div>

<div class="row">
  <label>Universidad</label>

<select name="universidad" onchange='checkOtro(this.value);' id="universidad" class="form-control">


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

<div class="row">
  <div class="input-field col s12">

  <input type="text" id="añoegreso" name="añoegreso" class="tooltipped" data-tooltip="Año en el que sacó su Titulo"  required>
  <label>Año de Egreso</label>
</div>
</div>

<br>
<div class="row">

  <label>Telefono Principal</label>
  <br>
<div class="input-field col s1">

  <input
 type="tel" id="codigo" name="codigo" placeholder="+569" pattern="[\+][0-9]{3}"  required  maxlength="4">
 <label class="active">Codigo</label>

</div>

<div class="input-field col s4 ">
      <input id="telefono" data-tooltip="8 Dígitos" class="tooltipped" title="Sólo Números y un m�nimo de 8 caracteres" type="tel" name="telefono" placeholder="1111111" pattern="[0-9]{8}"  required  maxlength="8"/>
      <label class="active">Telefono</label>

</div>

</div>
<br>
<div class="row">

<label>Telefono Opcional</label>
<br>
<div class="input-field col s1">

  <input
 type="tel" id="codigo2" name="codigo2" placeholder="+569" pattern="[\+][0-9]{3}"   maxlength="4">
 <label class="active">Codigo</label>

</div>

<div class="input-field col s4 ">

      <input id="telefono2" data-tooltip="8 Dígitos" class="tooltipped" title="Sólo Números y un mínimo de 8 caracteres" type="tel" name="telefono2" placeholder="1111111" pattern="[0-9]{8}"    maxlength="8"/>
      <label class="active">Telefono</label>

</div>

</div>

<div class="row">

<div class="input-field col s12">
    <label>Email</label>
    <input name="email" type="email" class="tooltipped" data-tooltip="ejemplo@dominio.com"required>
</div>

</div>

<h2>DATOS ACADEMICOS</h2>



<label>Enseñanza Superior</label>

<div class="row">
<div class="input-field col s6 ">
  <i class="material-icons prefix">mode_edit</i>
<textarea data-length="400" data-tooltip="Ingresar nombre de universidad/instituto y su año de egreso"  class="tooltipped materialize-textarea " name="media"  maxlength="400"></textarea>
</div>
</div>


<label>Titulos</label>

<div class="row">
<div class="input-field col s6 ">
  <i class="material-icons prefix">mode_edit</i>
<textarea data-length="400"  class="tooltipped materialize-textarea " name="titulos" data-tooltip="Especificar por favor grado académico" maxlength="400"></textarea>
</div>
</div>

<label>Cursos y diplomados</label>

<div class="row">

<div class="input-field col s6 ">
  <i class="material-icons prefix">mode_edit</i>
<textarea data-length="400"  class="tooltipped materialize-textarea " name="cursos" data-tooltip="Especificar año e institución" maxlength="400"></textarea>
</div>
</div>

<div class="row">
 <div class="input-field col s3 ">
   <input type="text" id="nombretab" name="nombretab" placeholder="nombre del curso"  required>

 </div>
 <div class="input-field col s3 ">
   <input type="text" id="instab" name="instab" placeholder="Institución"  required>

 </div>
 <div class="input-field col s3 ">
   <input type="number" id="añotab" name="añotab" placeholder="Duración (años) del curso"  required>

 </div>

 <button class="btn waves-effect waves-light #e65100 orange darken-4"  onClick="updateTabla()">
      <i class="material-icons">add</i>
 </button>

 </div>

 <table id="tablauni" class="responsive-table striped">
     <thead>
       <tr>
           <th>Nombre</th>
           <th>Institución</th>
           <th>Año</th>
           <th></th>
       </tr>
     </thead>

     <tbody>
       <tr>
         <td></td>
         <td></td>
         <td></td>
       </tr>

     </tbody>
   </table>




<h2>Areas de Interés</h2>

<div class="row">

    <div class="input-field col s6 ">
      <i class="material-icons prefix">mode_edit</i>
    <textarea data-length="400"  class="tooltipped materialize-textarea " name="areainteres" data-tooltip="Describa Aquí" maxlength="400"></textarea>
    </div>
</div>

<h2>Areas de Especialidad</h2>

<div class="row">

    <div class="input-field col s6 ">
      <i class="material-icons prefix">mode_edit</i>
    <textarea data-length="400"  class="tooltipped materialize-textarea " name="areaesp" data-tooltip="Describa Aquí" maxlength="400"></textarea>
    </div>
</div>

<label>Adjunte su CV (sólo archivos .pdf)</label>
<br>
<br>
<div class="file-field input-field">
   <div class="btn #e65100 orange darken-4">
     <span>Subir Archivo</span>
     <input type="file" name="fileToUpload" id="fileToUpload" required/>
   </div>
   <div class="file-path-wrapper">
     <input class="file-path validate"  name ="path" type="text">
   </div>
 </div>
<br></br>
    <label>Ingrese el codigo de seguridad</label>
<br>
<br>


  <p>
    <?php require_once 'securimage/securimage.php'; echo Securimage::getCaptchaHtml(array('input_name' => 'ct_captcha')); ?>
  </p>


<br></br>
<div class="row">
  <button class="btn waves-effect waves-light #e65100 orange darken-4" name="action">
      <input type="submit"  name="submit"/>
      <i class="material-icons right">send</i>
    </button>

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


 function updateTabla(){

   var nombre=document.getElementById('nombretab');
   var añotab=document.getElementById('añotab');


   var instab=document.getElementById('instab');

   var table = document.getElementById("tablauni");
   var row=table.insertRow(1);
   var cell1=row.insertCell(0);
   var cell2=row.insertCell(1);
   var cell3=row.insertCell(2);
   var elim=row.insertCell(3);
   cell1.innerHTML=nombre.value;
   cell2.innerHTML=añotab.value;
   cell3.innerHTML=nombre.value;
   elim.innerHTML= /* "<button class='btn waves-effect waves-light #e65100 orange darken-4'  onClick='updateTabla()'>
        <i class='material-icons'>add</i>
   </button>";*/
 "<button class='btn' oncliCk='borrarFila(this)'>  <i class='material-icons'>close</i> </button>"


 }

 function borrarFila(o){
   var p=o.parentNode.parentNode;
       p.parentNode.removeChild(p);
 }

 function getTabla(){

   var array=[];
   var conta=0;

 var oTable = document.getElementById('tablauni');

     //gets rows of table
     var rowLength = oTable.rows.length;

     //loops through rows
     for (i = 1; i < rowLength-1; i){

       //gets cells of current row
        var oCells = oTable.rows.item(i).cells;

        //gets amount of cells of current row
        array[conta]=[];
        var cellLength = oCells.length;

        //loops through each cell in current row
        for(var j = 0; j < cellLength-1; j){

               // get your cell info here

               var cellVal = oCells.item(j).innerHTML;

               array[conta].push(cellVal);
            }

            conta;
     }

   return array;

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
            if (data.error === 0) {

              window.location.href="exito.php";
            } else {
                alert("Hubo un error con su cuestionario.\n\n" + data.message);

                if (data.message.indexOf('Incorrect security code') >= 0) {
                    jQuery('#captcha_code').val('');
                }
                reloadCaptcha();

            }   // tell jQuery not to set contentType
          });


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
