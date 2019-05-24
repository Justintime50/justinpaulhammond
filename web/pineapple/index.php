<!DOCTYPE html>
<html lang="en">
<head>
  <!-- 
  *
  * WATERFALL THEME
  * PINEAPPLE v1.3 - pineapple.ncr4.com
  * Created on the 4.0 Bootstrap framework - getbootstrap.com
  * (c) 2017-2018, NCR4 Design - ncr4.com
  * Code licensed under Creative Commons by 3.0. - creativecommons.org/licenses/by/3.0
  *
  * DO NOT REMOVE THIS HEADER, PERMISSION FOR PUBLIC USE GRANTED
  * CREDIT MUST BE GIVEN FOR ALL PROJECTS
  *
  -->
  <title>Pineapple</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/pics/favicon.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/pineapple/css/pineapple.css">
  <link rel="stylesheet" href="assets/css/waterfall.theme.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="65"><!-- must be 1 more than the offset for the smooth scroller -->

<!-- Nav -->
<nav class="navbar navbar-expand-lg fixed-top">
    <!--<div class="container">-->
    <a class="navbar-brand" href="index.php"><h1 class="navbar-brand">PINEAPPLE</h1><img src="assets/pics/pineapple-icon.png" class="logo" alt="Pineapple"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar" aria-controls="myNavbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="docs.php">DOCUMENTATION</a></li>
            <li class="nav-item"><a class="nav-link" href="#examples">EXAMPLES</a></li>
            <li class="nav-item"><a class="nav-link" href="#get-started">GET STARTED</a></li>
            <li class="nav-item"><a class="nav-link" href="#themes">THEMES</a></li>
            <li class="nav-item"><a class="nav-link" href="#about">ABOUT</a></li>
        </ul>
    </div>
    <!--</div>-->
</nav>









<div class="pa-banner">
  <div class="pa-banner-text" style="padding-top: 8rem;">
    <img src="assets/pics/pineapple-icon.png" class="pa-icon" style="border-color:white;width:auto;height:auto;display: block;margin-left: auto; margin-right: auto;">
      <br>
      <p style="font-size: 3vmin;">Pineapple is a web development library including frequently used CSS and Javascript functions. Built over <a href="https://getbootstrap.com" style="text-decoration:none;color:white;">Bootstrap</a>, Pineapple allows websites to be easily and quickly deployed.</p>
      <br>
      <a href="#get-started"><button class="btn btn-lg btn-banner">Download Pineapple</button></a>
      <p style="font-size:0.7em;margin-top:10px;">Current v1.3</p>
  </div>
</div>



<!-- Container (EXAMPLES Section) -->
<div id="examples"></div>
<div class="container-fluid text-center pa-slideanim">

  <h2>Examples</h2><br>
    <div class="row">
      <div class="col-md-7">
        <p>Code like this:</p>
        <div class="pa-card" style="background-color:white;padding: 20px;overflow: auto;margin-bottom: 40px;">
          <code>&lt;div class="pa-icon"&gt;JS&lt;/div&gt;</code>
        </div>
        <div class="pa-card" style="background-color:white;padding: 20px;overflow: auto;margin-bottom: 40px;">
          <code>&lt;div class="pa-card"&gt;Content here...&lt;/div&gt;</code>
        </div>
      </div>
      <div class="col-md-5">
        <p>Creates content like this:</p>
        <p class="pa-icon">JS</p>
        <div class="pa-card" style="padding: 20px;">Content here...</div>
      </div>
    </div>
    <!--<div style="width:50%;background-color:gray;height:1px;display:inline-block;text-align:center;margin: 50px 0px;"></div>-->
    <br><hr><br>
<p>Content can easily be created and customized using Pineapple's simple CSS and JS functions. Plug and play with your favorite from the collection. See our documentation for a full list of features.</p>
<br>
<a href="docs.php"><button class="btn btn-lg btn-other" style="margin-bottom:0px;">Documentation</button></a>

</div>



<!-- Container (GET STARTED Section) -->
<div id="get-started"></div>
<div class="container-fluid pa-bg-gray">

  <h2>Get Started</h2>

    <div class="text-center pa-slideanim">
      <p>Pineapple is a downloadable project you can include in any site you build. Explore the installation options below and make sure to checkout our <a href="docs/index.php">documentation</a> for more information.</p>
    </div>
      <hr><br>
    <div class="row">
      <div class="col-md-12 text-center pa-slideanim" style="padding-bottom:20px;">
        <div class="pa-card">
          <h3>Pineapple Source Code</h3>
          <hr>
          <p>Download the compiled project here.</p>
          <a href="pineapple/zip/pineapple/pineapple-1.3.zip"><button class="btn btn-lg btn-other" style="margin-bottom:15px;">Download Pineapple</button></a>
          <p>(The complete CSS and Javascript library.)</p>
        </div>
      </div>
        <!--
        <div class="col-md-6 text-center pa-slideanim">
          <div class="pa-card">
          <h3>Content Delivery Network</h3>
          <hr>
          <p>Copy and paste the links to your project.</p>
          <span id="copy_clipboard" data-clipboard-text='<script src="https://pa-lib.com/pineapple/1.2.2/js/pineapple.min.js"></script>'>
          <button class="btn btn-lg btn-other" style="margin-bottom:15px;" onclick="alert('Text copied! Please close this window.');">Copy JS Link</button>
            </span>

          <span id="copy_clipboard" data-clipboard-text='<script src="https://pa-lib.com/pineapple/1.2.2/css/pineapple.min.css"></script>'>
          <button class="btn btn-lg btn-other" style="margin-bottom:15px;" onclick="alert('Text copied! Please close this window.');">Copy CSS Link</button>
            </span>
          <p>(Link to our CDN and we'll host Pineapple.)</p>
        </div>
      </div>
    </div>
  <div class="row">
    <div class="col-sm-12 text-left pa-slideanim">
      <hr>
      <h3>Pineapple CDN Instructions</h3>
      <p>
        <b>JS</b> - Make sure to reference our Javascript file after Bootstrap but before your personal js files.
        <br>
        <b>CSS</b> - Make sure to reference our CSS file after Bootstrap but before your personal css files.
      </p>


    </div>
    -->
  </div>
</div>



<!-- Container (THEMES Section) -->
<div id="themes"></div> 
<div class="container-fluid text-center pa-slideanim">
  <h2>Themes</h2>
    <div class="row">
      <div class="col-md-12">
        <p>We've created some awesome themes that you can use to build your website quickly.<br>Unlike our library, these must be downloaded. No CDN is available for themes.</p>
        <br>
        <h3>Waterfall Theme</h3>
        <a href="http://pa-lib.com/pineapple/zip/themes/waterfall-theme.zip"><button class="btn btn-lg btn-other" style="margin-bottom:0px;">Download</button></a>
        <br><br>
        <h3>Coming Soon Template</h3>
        <a href="http://pa-lib.com/pineapple/zip/themes/coming_soon_template.zip"><button class="btn btn-lg btn-other" style="margin-bottom:0px;">Download</button></a>
      </div>
    </div>
    <br><hr><br>
<p>This site is built on our waterfall theme.</p>
</div>



<!-- Container (ABOUT Section) -->
<div id="about"></div>
<div class="container-fluid text-center pa-bg-gray">
  <h2>About</h2>
  <br>
    <h3 class="pal-font-s">Pineapple Team</h3>
      <br>
        <div class="row pa-slideanim">
          <div class="col-sm-4">
            <div class="pa-card">
              <p>Project Manager, CSS</p>
              <h3 class="pa-icon">JH</h3>
              <h4>Justin<br>Hammond</h4>
              <a href="https://justinpaulhammond.com">Website</a>
            </div>
          </div>

          <div class="col-sm-4">
            <div class="pa-card">
              <p>Javascript</p>
              <h3 class="pa-icon">JW</h3>
              <h4>Jeffrey<br>Woodward</h4>
              <a href="https://jefnull.com">Website</a>
            </div>
          </div>
          
          <div class="col-sm-4">
            <div class="pa-card">
              <p>CSS</p>
              <h3 class="pa-icon">WB</h3>
              <h4>Weston<br>Barnes</h4>
              <a href="https://huckleberry.design">Website</a>
            </div>
          </div>


<!--
          <div class="col-sm-3">
            <div class="pa-card">
              <h3 class="pa-icon">LO</h3>
              <h4>Lindsey<br>Owens</h4>
              <a href="http://neweyesbrightskies.com">Website</a>
            </div>
          </div>

          -->
        </div>
</div>



<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top" class="pa-scroll">
    <span class="fa fa-chevron-up fa-lg" aria-hidden="true"></span>
  </a>
    <br><br>
  <p>Designed and built by our <a href="#about">team</a> of legit programmers.
  <br>Code licensed <a href="https://git.ncr4.com/libraries/pineapple/blob/master/LICENSE">MIT</a> under the <a href="http://creativecommons.org/licenses/by/3.0/">CC 3.0</a>.</p>
</footer>


<!-- SCRIPTS -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="../../assets/pineapple/js/pineapple.js"></script>
<script src="https://use.fontawesome.com/12e4399d79.js"></script>
<script src="assets/js/clipboard.min.js"></script>
    <!-- Clipboard script from: https://clipboardjs.com -->
    <!-- 3. Instantiate clipboard by passing a HTML element -->
    <script>
    var btn = document.getElementById('copy_clipboard');
    var clipboard = new Clipboard(copy_clipboard);

    clipboard.on('success', function(e) {
        console.log(e);
    });

    clipboard.on('error', function(e) {
        console.log(e);
    });
    </script>

</body>
</html>