<!DOCTYPE html>
<html id="myPage">
  <head>
  <?php include 'header.php';?>
  <!-- 
  //////////////////////////////////////////////////////////////////////////////
  // WEDDING STORY THEME v1.1 (2/15/17)
  // ADAPTED FROM WEDDING TO PERSONAL USE
  // Theme Created By Justin Hammond Web Design - www.justinpaulhammond.com/web
  // Created on the 3.0 Bootstrap framework - www.getbootstrap.com
  // Copyright (c) 2017 Justin Hammond Web Design
  //
  // DO NOT REMOVE THIS HEADER, DO NOT USE WITHOUT PERMISSION
  //////////////////////////////////////////////////////////////////////////////
  -->
  <title>Justin Hammond Web Design</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <style>
  html {
      overflow-x: hidden;
    }
  body {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color: #818181;
      overflow: none;
  }
  </style>

<body onload = "init()">

<div class="container text-center">
  <br><br>
<h1>Justin Hammond Web Design<br>Contracts</h1>


<br>
<h3>Please select which contract you are digitally signing.</h3>
<br>
<a href="index.php"><button class="btn btn-primary btn-sm">Back to JH Web Design</button></a>
<br><br><hr>

  <a href="#website" onclick = "loadPage('website-contract.php')"><button class="btn btn-default btn-lg">Website Contract</button></a>
  <a href="#launch" onclick = "loadPage('launch-agreement.php')"><button class="btn btn-default btn-lg">Launch &#38; Hosting Agreement</button></a>

<hr>

</div>

<div class="container text-center" id="content">

<!-- Loading... -->

</div>

<footer class="container-fluid text-center">
  <div class="col-sm-12">
    <p>&#169; <?php echo date("Y");?> JH Web Design, All rights reserved.<br>Design: <a href="https://justinpaulhammond.com/web">Justin Hammond Web Design</a></p>
  </div>
</footer>
<br>

<!-- SCRIPTS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="assets/scripts/ajax.js"></script><!-- AJAX SCRIPT -->

</body>
</html>