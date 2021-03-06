<?php
session_start(); // this MUST be called prior to any output including whitespaces and line breaks!
$GLOBALS['ct_recipient']   = 'YOU@EXAMPLE.COM'; // Change to your email address!
$GLOBALS['ct_msg_subject'] = 'Securimage Test Contact Form';
$GLOBALS['DEBUG_MODE'] = 1;
// CHANGE TO 0 TO TURN OFF DEBUG MODE
// IN DEBUG MODE, ONLY THE CAPTCHA CODE IS VALIDATED, AND NO EMAIL IS SENT
// Process the form, if it was submitted

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

<body>

<header>
    <nav class="top-nav">
  <div class="nav-wrapper #eeeeee grey lighten-3">

    <ul id="nav-mobile" class="left hide-on-med-and-down">
      <li><a href="http://www.atmspa.cl" class="brand-logo vertical">HOME</a></li>
    </ul>
  </div>
</nav>
</header>

      <main>

      <script src="https://code.jquery.com/jquery-2.1.2.min.js"></script>
        <script src="jquery.rut.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

          <div class="container">
            <!-- Page Content goes here -->

      <section class="body">
