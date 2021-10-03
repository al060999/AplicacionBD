<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
  <head>
    <!--Import Google Icon Font-->
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <!--Import materialize.css-->
    <link
      type="text/css"
      rel="stylesheet"
      href="css/materialize.min.css"
      media="screen,projection"
    />

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Compiled and minified CSS -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"
    />

    <!--Para que acepte acento y ñ-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  </head>
  <style>
    footer {
      background: #202020;
      color: white;
      font-size: 12px;
      padding: 20px 0;
      text-align: center;
      font-size: 1rem;
      padding-bottom: 20px;
    }
  </style>

  <body>
      
      <?php include 'views/header.php' ?>
      
      <div class="container">
          <?php include 'controller/routing.php' ?>
      </div>

      <?php include 'views/footer.php' ?>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
  </body>
</html>
