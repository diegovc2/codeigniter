<?php
session_start();

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>

  <style>

    /*html5doctor.com Reset Stylesheet
    v1.6.1
    Last Updated: 2010-09-17
    Author: Richard Clark - http://richclarkdesign.com
    Twitter: @rich_clark
    */

    html, body, div, span, object, iframe,
    h1, h2, h3, h4, h5, h6, p, blockquote, pre,
    abbr, address, cite, code,
    del, dfn, em, img, ins, kbd, q, samp,
    small, strong, sub, sup, var,
    b, i,
    dl, dt, dd, ol, ul, li,
    fieldset, form, label, legend,
    table, caption, tbody, tfoot, thead, tr, th, td,
    article, aside, canvas, details, figcaption, figure,
    footer, header, hgroup, menu, nav, section, summary,
    time, mark, audio, video {
        margin:0;
        padding:0;
        border:0;
        outline:0;
        font-size:100%;
        vertical-align:baseline;
        background:transparent;
    }


    body {
        line-height:1;
    }

    article,aside,details,figcaption,figure,
    footer,header,hgroup,menu,nav,section {
        display:block;
    }

    nav ul {
        list-style:none;
    }

    blockquote, q {
        quotes:none;
    }
    th{
      padding-top: 12px;
        padding-bottom: 12px;
        text-align: center;
        background-color: #4CAF50;
        color: white;
    }

    th, td{

      border-bottom: 1px solid black;

    }

    tr{

      text-align: center;
    margin-top:5px;
    height: 10px;

    }

    blockquote:before, blockquote:after,
    q:before, q:after {
        content:'';
        content:none;
    }
    #check{

      width: 20%;

    }

    #frase{

      font-size: 26px;

    }

    a {
        margin:0;
        padding:0;
        font-size:100%;
        vertical-align:baseline;
        background:transparent;
    }

    /* change colours to suit your needs */
    ins {
        background-color:#ff9;
        color:#000;
        text-decoration:none;
    }

    .menu{
      margin: 10px auto auto auto;
      float:none;
    }

    /* change colours to suit your needs */
    mark {
        background-color:#ff9;
        color:#000;
        font-style:italic;
        font-weight:bold;
    }

    del {
        text-decoration: line-through;
    }

    abbr[title], dfn[title] {
        border-bottom:1px dotted;
        cursor:help;
    }

    table {
      overflow-x:auto;
      border: 1px solid black;
        border-collapse:collapse;
        border-spacing:0;
    }

    tr:hover{

      background-color: #ddd;
    }

    /* change border colour to suit your needs */
    hr {
        display:block;
        height:1px;
        border:0;
        border-top:1px solid #cccccc;
        margin:1em 0;
        padding:0;
    }

    input, select {
        vertical-align:middle;
    }

    /*MY CODE*/

    .main-wrapper{
      margin: 0 auto;
      width: 1000px;

    }

    body{
      background-color: #ccc;
    }

    header nav{
      width:100%;
      height: 60px;
      background-color: white;
    }

    header nav ul{
      float:left;
    }

    header nav ul li{
      float:left;
      list-style: none;
    }

    a{

      text-decoration: none;
    }
    header nav ul li a{
    font-family: arial;
    font-size: 16 px;
    color: #111;
    line-height: 63px;
    }

    header .nav-login{
      float:right;
    }

    header .nav-login form{
      float:left;
      padding-top: 15px;
    }
    header .nav-login form input {
      float: left;
      padding-top: 15px;
      width:  140px;
      height: 30px;
      padding: 0px 10px;
      margin-right: 10px;
      border: none;
      background-color: #ccc;
      font-family: arial;
      font-size: 14px;
      color: #111;
      line-height: 30px;
    }

    header .nav-login form button  {
      float: left;
      width:  60px;
      height: 30px;
      margin-right: : 10px;
      border: none;
      background-color: #f3f3f3;
      font-family: arial;
      font-size: 14px;
      color: #111;
      cursor:pointer;
    }

    header .nav-login form button:hover  {
      background-color: #ccc;
    }


    button:hover{
      background-color: #ccff99;
    }

    button{
      float: left;
      width:  auto;
      height: 30px;
      margin-right: : 10px;
      border: none;
      background-color: #f3f3f3;
      font-family: arial;
      font-size: 14px;
      color: #111;
      cursor:pointer;
    }

    header .nav-login  a{
      margin-left: 10px;
      float:left;
      display: bloack;
      width: 60px;
      height: 60px;
      border: none;
      background-color: white;
    font-family: arial;
    font-size: 16 px;
    color: #111;
    line-height: 63px;
    cursor: pointer;
    }

    body

    .main-container {
      padding-top: 60px;
    }
    .main-container h2{
      font-family: arial;
      font-size: 40px;
      color: #111;
      line-height: 50px;
      text-align: center;
    }

    /*SIGNUP.PHP*/
    .signup-form{

      padding-top: 20px;

    }
    .signup-form input{
      width:90%;
      height: 40px;
      padding: 0px 5%;
      margin-bottom: 5px;
      border: none;
      background-color: #fff;
      font-family: arial;
      font-size: 16px;
      color: #111;
      line-height: 40px;
    }

    .signup-form button, button{
      display: block;
      margin: 0 auto;
      width:30%;
      height: 40px;
      border: none;
      background-color: #222;
      font-family: arial;
      font-size: 16px;
      color: #111;
      cursor: pointer;
      color: white;
    }

    .signup-form button:hover, button:hover{
      background-color: #111;
      }



  </style>
  <body>

<header>
  <nav>
    <div class="main-wrapper">
      <ul>
        <li><a href="/codeigniter/gitHub\formularioREAL\loginphpPRUEBA\index.ajax.php">Home</a></li>
      </ul>
      <div class="nav-login">
        <?php
        if(isset($_SESSION['u_uid'])){

          echo '<form action="\codeigniter\gitHub/formularioREAL\loginphpPRUEBA/includes/logout.inc.php" method="POST">

              <button type="submit" name="submit">Logout</button>

            </form>';

        } else{
          echo '<form action="\codeigniter\gitHub/formularioREAL\loginphpPRUEBA/includes/login.inc.php" method="POST">
            <input type="text" name="uid" placeholder="Username/e-mail">
              <input type="password" name="pwd" placeholder="Password">
              <button type="submit" name="submit">Login</button>
            </form>
            <a href="signup.php">Sign Up</a>';

        }
        ?>


      </div>
    </div>
  </nav>
</header>
