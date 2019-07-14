<!DOCTYPE html>
<html lang="en">
<head>
  <!-- 
  //////////////////////////////////////////////////////////////////////////////
  // WEDDING STORY THEME v1.1 (2/15/17)
  // Theme Created By Justin Hammond Web Design - www.justinpaulhammond.com/web
  // Created on the 3.0 Bootstrap framework - www.getbootstrap.com
  // Copyright (c) 2017 Justin Hammond Web Design
  //
  // DO NOT REMOVE THIS HEADER, DO NOT USE WITHOUT PERMISSION
  //////////////////////////////////////////////////////////////////////////////
  -->
  <title>J&#38;C's Wedding</title>
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
  h2 {
      font-size: 24px;
      text-transform: uppercase;
      color: #390042;
      font-weight: 600;
      margin-bottom: 30px;
      text-align: center;
  }
  h4 {
      font-size: 19px;
      line-height: 1.375em;
      color: #303030;
      font-weight: 400;
      margin-bottom: 30px;
  }  
  .jumbotron {
      background-image: url("banner.jpg");
      text-align: center;
      border-bottom: 10px solid #390042;
      padding: 10% 6% 20% 6%;
      background-repeat: no-repeat;
      background-attachment: fixed;
      color:white;
      text-shadow: 0 0 20px black;
      position: relative;
      background-size: 100%;
      /*background-position: 0px 75px;*/
      /*margin: -25px 0px;*/
      /*-webkit-background-size: cover; /* For WebKit */
      /*-moz-background-size: cover;    /* Mozilla */
      /*-o-background-size: cover;      /* Opera */
      /*background-size: cover;         /* Generic */
  }
  @media (max-width: 900px) {/* tells browser what size screen to collapse on */
  .jumbotron {
      background-image: url("banner-small.jpg");
      text-align: center;
      border-bottom: 10px solid #390042;
      padding: 15% 15% 20% 15%;
      background-repeat: no-repeat;
      background-attachment: fixed;
      position: relative;
      background-position: 0px 25px;
      color:white;
      text-shadow: 0 0 20px black;
      background-size: 130%;
      /*background-position: -80px 0px;*/
      /*-webkit-background-size: cover; /* For WebKit */
      /*-moz-background-size: cover;    /* Mozilla */
      /*-o-background-size: cover;      /* Opera */
      /*background-size: cover;         /* Generic */
      /*margin: -25px 0px;*/
    }
  }

/*****************************/
/***** DARKEN BANNER FIX *****/
/* http://stackoverflow.com/questions/36389481/how-to-darken-the-background-image-in-css */
  .jumbotron:after {
      content: " ";
      z-index: 0;
      display: block;
      position: absolute;
      height: 100%;
      top: 0;
      left: 0;
      right: 0;
      background: rgba(0, 0, 0, 0.25);
  }
  .jumbotron-text {
      position: relative;
      z-index: 10;
  }

  .container-fluid {
      padding: 60px 50px;
  }
  .bg-grey {
      background-color: #f6f6f6;
  }
  .logo-small {
      color: #390042;
      font-size: 50px;
  }
  .logo {
      color: #390042;
      font-size: 200px;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail img {
      width: 100%;
      height: 100%;
      margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
      background-image: none;
      color: #390042;
  }
  .carousel-indicators li {
      border-color: #390042;
  }
  .carousel-indicators li.active {
      background-color: #390042;
  }
  .item h4 {
      font-size: 19px;
      line-height: 1.375em;
      font-weight: 400;
      font-style: italic;
      margin: 70px 0;
  }
  .item span {
      font-style: normal;
  }
  .panel {
      border: 1px solid #390042; 
      border-radius:0 !important;
      transition: box-shadow 0.5s;
  }
  .panel:hover {
      box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
      border: 1px solid #390042;
      background-color: #fff !important;
      color: #390042;
  }
  .panel-heading {
      color: #fff !important;
      background-color: #390042 !important;
      padding: 25px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
  }
  .panel-footer {
      background-color: white !important;
  }
  .panel-footer h3 {
      font-size: 32px;
  }
  .panel-footer h4 {
      color: #aaa;
      font-size: 14px;
  }
  .panel-footer .btn {
      margin: 15px 0;
      background-color: #390042;
      color: #fff;
  }
  .navbar {
      margin-bottom: 0;
      background-color: #390042;
      z-index: 9999;
      border: 0;
      font-size: 14px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: #390042 !important;
      background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }
  .navbar-default .navbar-toggle:hover {
      background-color: #390042;
  }
  .icon-bar {
      background-color:white !important;
  }
  footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color: #390042;
  }
  .slideanim {visibility:hidden;}
  .slide {
      animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 1s;
      -webkit-animation-duration: 1s;
      visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
      width: 100%;
      margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
      font-size: 150px;
    }
  }
  .btn-default {
      background-color: transparent;
      color: #390042;
      border-color: #390042;
  }
  .btn-banner {
      color: white;
      border-color: white;
  }
  .btn-banner:hover {
      background-color: #390042;
      color: white;
      border-color: white;
  }
  .btn-other {
      color: #390042;
      border-color: #390042;
  }
  .btn-other:hover {
      background-color: white;
      color: #390042;
      border-color: #390042;
  }



/*****************************/
/***** YOUTUBE VIDEO FIX *****/
/* https://css-tricks.com/NetMag/FluidWidthVideo/Article-FluidWidthVideo.php */
.videoWrapper {
  position: relative;
  padding-bottom: 56.25%; /* 16:9 */
  padding-top: 25px;
  height: 0;
}
.videoWrapper iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}


/*****************************/
/***** IPAD COLLAPSE FIX *****/
/* http://stackoverflow.com/questions/31392219/navbar-not-collapse-on-ipad-bootstrap-3 */
@media (max-width: 1200px) {/* tells browser what size screen to collapse on */
    .navbar-header {
        float: none;
    }
    .navbar-left,.navbar-right {
        float: none !important;
    }
    .navbar-toggle {
        display: block;
    }
    .navbar-collapse {
        border-top: 1px solid transparent;
        box-shadow: inset 0 1px 0 rgba(255,255,255,0.1);
    }
    .navbar-fixed-top {
        top: 0;
        /*border-width: 0 0 1px;*/
        /*THIS MESSES WITH TOP/BOTTOM MARGIN*/
    }
    .navbar-collapse.collapse {
        display: none!important;
    }
    .navbar-nav {
        float: none!important;
        margin-top: 7.5px;
    }
    .navbar-nav>li {
        float: none;
    }
    .navbar-nav>li>a {
        padding-top: 10px;
        padding-bottom: 10px;
    }
    .collapse.in{
        display:block !important;
          height: 100%;
    }
}
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage" style="font-size:3vmin;">J&#38;C's Wedding</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#proposal">THE PROPOSAL</a></li>
        <li><a href="#ourstory">OUR STORY</a></li>
        <li><a href="#venue">RECEPTION</a></li>
        <li><a href="#registry">GIFT REGISTRY</a></li>
        <li><a href="#announcement">ANNOUNCEMENT</a></li>
        <!--<li><a href="#rsvp">RSVP</a></li>-->
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <div class="jumbotron-text">
  <h1 style="font-size:9vmin;padding-bottom:50px;">Justin and Camie</h1>
    <!-- Countdown start -->
      <h3 style="font-size:3.5vmin;">6/2/17</h3>
      <h3 id="timer" style="font-size:3.5vmin;padding-bottom:80px;"></h3><!-- Display the countdown timer in an element -->
    <!-- Countdown end-->
    <a href="#announcement"><button class="btn btn-default btn-lg btn-banner">Wedding Announcement</button></a>
    <br><br>

    <a href="#registry"><button class="btn btn-default btn-lg btn-banner">Gift Registry</button></a>
    <br>
</div>
</div>


<!-- Container (PROPOSAL Section) -->
<div id="proposal" class="container-fluid">
  <h2>The Proposal</h2><br>
  <div class="row">
    <div class="col-sm-7">
      <p><strong>Justin Hammond</strong>
      <p>For the longest time we have talked about going on <b>adventures</b> with each other. The notion that <b>adventure</b> is out there was exciting to us. We wanted to explore the world, experience what life had to offer, and get lost in the magical moments that only two people in love could experience. I took this to heart when I planned <b>the proposal.</b> We called all of our dates <b>adventures.</b> We often joked about how we would be like the couple off of the <b>Disney movie UP.</b> With that in mind I decided to pull <b>the proposal, Disney style!</b></p>
      <p>I decided to blindfold Camie before we arrived at our location so she couldn't see what was to come. I walked her through the back halls of <b>Provo Town Center</b> up the stairs and left her there with instructions to take off the blindfold in two minutes. I ran down the stairs and passed through the maze of <b>balloons with pictures</b> attached to them of our past <b>adventures</b> as I entered <b><a href="http://rockwellicecream.com">Rockwell Ice Cream</a> in Provo</b> (the owner let us in after it closed so we could pull this off.) She then had a story of how we met read to her as she discovered all the pictures and balloons on her way down to me. When she finally arrived at the ice cream shop, she knew what was going on. I then asked if she would adventure with me and <b>be my wife.</b></p>
      <br>
    </div>
    <div class="col-sm-5">
      <img src="kneel.jpg" style="max-width:100%;">
    </div>
  </div>
  
  <br><hr><br>

  <div class="row">
    <div class="col-sm-5">
      <img src="ring.jpg" style="max-width:100%;">
    </div>
    <div class="col-sm-7">
      <br><p><strong>Camie Hegsted</strong></p>
      <p>Justin told me he wanted to celebrate my birthday and Valentine's Day separately, so we went to dinner at Tucanos on Saturday night. Our reservation was at 8pm, we finished after 9, then went to hang out at my apartment for a while. He said the "next event" was a little later, but he wouldn't say what it was. Around 11, we leave, and I'm thinking, "Where in the world are we going at 11 o'clock at night?!" He blindfolded me in the car and I felt us drive to south Provo.</p>
      <p>Unbeknownst to me, he drove to Provo Towne Center just north of the temple. They have the cutest little shops, which all connect via a backdoor hallway. Among them is my favorite ice cream parlor, Rockwell Ice Cream.</p>
      <p>Justin takes me out of the car, still blindfolded, and leads me up the sidewalk, through the Rockwell shop (it closed before 11, so it was empty), through the hallway, up a flight of stairs, and then he sat me down on a bench. As soon as we sat down, I knew what was happening. He claims that he felt perfectly calm, and I still couldn't see him, but he <b>radiated</b> nerves. He sat with me for a minute, then stood up and said, "Alright, count to two minutes, then take off the blindfold and come downstairs." Then he left. I waited <b>almost</b> two minutes... then I went down. At the bottom were two of our choir friends - Jake was holding a video camera, and Nick started reading Justin's and my "adventure story," as I followed a trail of balloons, each with a picture of an adventure of ours taped to it. I was barely holding it together, it was so sweet of him. The trail led back to Rockwell. I entered, and there was Justin, standing in the middle of the parlor. He said to me, "From the day we met, I knew I wanted to be with you forever. Will you adventure with me, *cue the knee* and be my wife?"</p>
      <p>And I said yes!</p>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12 text-center">
      <br><hr><br>
      <h2>View the Complete Proposal</h2><br>
      <div class="videoWrapper">
        <iframe width="560" height="350" src="https://www.youtube.com/embed/03Xu8uDodDg" frameborder="0" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</div>


<!-- Container (OUR STORY Section) -->
<div id="ourstory" class="container-fluid bg-grey">
  <h2>Our Story</h2><br>
  <div class="row">
    <div class="col-sm-7">
      <p>Once upon a time Justin set out on the greatest adventure of his life. He started by serving a mission in Washington. He there met Kim Duncan. Kim and Justin then both attended UVU when they returned.</p>
      <p>While at UVU, Justin joined the institute non-audition choir and sung for the young single adult devotional of the church in early 2016.</p>
      <p>Riding up to this event on the bus, he decided to sit by Kim – Kim was sitting by non-other than Camie.</p>
      <p>From the moment Justin saw Camie, he knew he needed to ask her out… but he was too scared and never even got her number.</p>
      <p>Fast forward a few weeks – Kim asked Justin to go to a fire pit with some friends. He bumped into Camie again and got to know her there. He then asked for her number!... but didn’t ask her out <b>all</b> summer.</p>
      <p>When school started in the fall of 2016, Justin saw Camie at the institute dance and decided three times was a sign. He ran across the gym during the next slow song and asked her to dance.</p>
      <p>At the end of the night, Justin decided he couldn’t let her slip away again. He finally asked if she would “like to go on an adventure” with him. Camie responded with “I would love to” – Justin knew he was in!</p>
      <p>To the electric maze at UVU they went with Kim and AJ. There they learned all about each other as they got lost in the maze.</p>
      <p>Justin decided to ask her out again and again – going on adventures like a One Republic concert at Vivint, asking her to be his girlfriend with “Master Justin”, a photo op at Thanksgiving Point, seeing the lights at Luminaria, decorating pumpkins and being with family at Halloween and Thanksgiving, the lights on Temple Square, singing in the Forgotten Carols, meeting each other’s families and having Sunday dinners, recording songs in studio with Lex, babysitting Kim’s nieces as their second adventure together, shooting guns at the range, seeing Broadway music, defusing bombs with seconds to spare, decorating Christmas trees, going to the temple, laughing at comedy shows, and playing piano – there was never a dull moment between these two.</p>
      <br>
    </div>
    <div class="col-sm-5">
      <img src="banner-small.jpg" style="max-width:100%;">
    </div>
  </div>
</div>


<!-- Container (VENUE Section) -->
<div id="venue" class="container-fluid text-center">
  <h2>RECEPTION</h2>
  <br>
  <div class="row slideanim">
    <div class="col-sm-6" style="padding: 0px 30px;">
      <h3>Address</h3>
      <p>11623 N Sunset Hills Dr<br>Highland, UT 84003</p>
      <h3>Time</h3>
      <p>6/2/17<br>6:30pm-9pm</p>
      <h3>Food</h3>
      <p>Light food and dessert will be served.</p>
      <h3>Instructions</h3>
      <p>Come around to the backyard of the house through the gate on the left side of the house. We will have a spot to place gifts there and a guestbook we would love for you to sign.</p>
      <br>
    </div>
    <div class="col-sm-6">
      <!-- Add Google Maps -->
      <iframe width="100%" height="450" frameborder="0" style="border:0" src="#" allowfullscreen></iframe>
    </div>
  </div>
</div>


<!-- Container (RSVP Section) -->
<!--<div id="rsvp" class="container-fluid bg-grey">
  <h2 class="text-center">RSVP</h2><br>
  <div class="row">
    <div class="col-sm-5">
      <p>If you plan to attend the reception, please fill out this form to reserve your spot and receive your invitation.</p>
      <p>Please register as a party and not individually. Please do <b>NOT</b> submit this form multiple times for each individual attending.</p> 
      <p><span class="glyphicon glyphicon-map-marker"></span>&nbsp;&nbsp;Alpine, Utah</p>
      <p><span class="glyphicon glyphicon-phone"></span>&nbsp;&nbsp;(801) 898-2058</p>
      <p><span class="glyphicon glyphicon-envelope"></span>&nbsp;&nbsp;&nbsp;justinpaulhammond.com</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Full Name" type="text">
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email">
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Number of people attending" type="number" min="1" value="1">
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
</div>-->


<!-- Container (RSVP Section) -->
<div id="registry" class="container-fluid bg-grey text-center">
  <h2 class="text-center">Gift Registry</h2><br>
      <div class="row">
        <div class="col-sm-6">
          <a href="https://www.bedbathandbeyond.com:443/store/giftregistry/view_registry_guest.jsp?registryId=544327284&eventType=Wedding&pwsurl=" target="_blank"><button class="btn btn-default btn-lg btn-other">Bed Bath &#38; Beyond Registry</button></a> 
        </div>
        <div class="col-sm-6">
          <a href="https://www.amazon.com/wedding/justin-hammond-camille-hegsted-salt-lake-city-june-2017/registry/17Y3UYLH2ITRF" target="_blank"><button class="btn btn-default btn-lg btn-other">Amazon Registry</button></a>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Container (ANNOUNCEMENT Section) -->
<div id="announcement" class="container-fluid">
  <h2>Wedding Announcement</h2><br>
  <div class="row">
    <div class="col-sm-6">
      <p>Please enter your mailing address and email address to receive an announcement for our wedding.</p>
      <p>We will be sending invitations by mail <b>and</b> email a few weeks after you enter your information.</p>
      <br>
    </div>
    <form action="#" method="post">
    <div class="col-sm-6 slideanim">
      <div class="row">
        <div class="col-sm-12 form-group">
          <input class="form-control" name="name" placeholder="Mailing Recipient (Name)" type="text">
        </div>
        <div class="col-sm-12 form-group">
          <input class="form-control" name="street" placeholder="Street" type="text">
        </div>
        <div class="col-sm-12 form-group">
          <input class="form-control" name="city" placeholder="City" type="text">
        </div>
        <div class="col-sm-12 form-group">
          <select class="form-control" name="state">
          <option value="AL">Alabama</option>
          <option value="AK">Alaska</option>
          <option value="AZ">Arizona</option>
          <option value="AR">Arkansas</option>
          <option value="CA">California</option>
          <option value="CO">Colorado</option>
          <option value="CT">Connecticut</option>
          <option value="DE">Delaware</option>
          <option value="DC">District Of Columbia</option>
          <option value="FL">Florida</option>
          <option value="GA">Georgia</option>
          <option value="HI">Hawaii</option>
          <option value="ID">Idaho</option>
          <option value="IL">Illinois</option>
          <option value="IN">Indiana</option>
          <option value="IA">Iowa</option>
          <option value="KS">Kansas</option>
          <option value="KY">Kentucky</option>
          <option value="LA">Louisiana</option>
          <option value="ME">Maine</option>
          <option value="MD">Maryland</option>
          <option value="MA">Massachusetts</option>
          <option value="MI">Michigan</option>
          <option value="MN">Minnesota</option>
          <option value="MS">Mississippi</option>
          <option value="MO">Missouri</option>
          <option value="MT">Montana</option>
          <option value="NE">Nebraska</option>
          <option value="NV">Nevada</option>
          <option value="NH">New Hampshire</option>
          <option value="NJ">New Jersey</option>
          <option value="NM">New Mexico</option>
          <option value="NY">New York</option>
          <option value="NC">North Carolina</option>
          <option value="ND">North Dakota</option>
          <option value="OH">Ohio</option>
          <option value="OK">Oklahoma</option>
          <option value="OR">Oregon</option>
          <option value="PA">Pennsylvania</option>
          <option value="RI">Rhode Island</option>
          <option value="SC">South Carolina</option>
          <option value="SD">South Dakota</option>
          <option value="TN">Tennessee</option>
          <option value="TX">Texas</option>
          <option value="UT" selected>Utah</option>
          <option value="VT">Vermont</option>
          <option value="VA">Virginia</option>
          <option value="WA">Washington</option>
          <option value="WV">West Virginia</option>
          <option value="WI">Wisconsin</option>
          <option value="WY">Wyoming</option>
        </select>
        </div>
        <div class="col-sm-12 form-group" style="padding-bottom:30px;">
          <input class="form-control" name="zip" placeholder="Zip" type="text">
        </div>
        <div class="col-sm-12 form-group">
          <input class="form-control" name="email" placeholder="Email" type="email">
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12 form-group">
          <br>
          <button class="btn btn-default btn-lg" name="invitation" type="submit" disabled>Submit</button>
        </div>
      </div>
    </div>
  </div>
</div>
</form>


<footer class="container-fluid text-center bg-grey">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <!-- FOOTER MUST REMAIN, DO NOT ALTER OR REMOVE -->
  <p>Wedding Story Theme: <a href="https://justinpaulhammond.com/web">Justin Hammond Web Design</a></p>
  <p>&#169; <?php echo date("Y");?> JHWD, All rights reserved.</p>
  <!-- FOOTER MUST REMAIN, DO NOT ALTER OR REMOVE -->
</footer>


<!-- SCRIPTS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
//
// SLIDEANIM SCRIPT
//

$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link + announcement button
  $(".navbar a, footer a[href='#myPage'], a[href='#announcement'], a[href='#registry']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

<script>
//
// COUNTDOWN TIMER SCRIPT
//

// Set the date we're counting down to
var countDownDate = new Date("June 2, 2017 09:40:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();

  // Find the distance between now an the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("timer").innerHTML = days + " days,&nbsp; " + hours + " hours,&nbsp; "
  + minutes + " minutes,&nbsp; " + seconds + " seconds ";

  // If the count down is finished, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("timer").innerHTML = "WE ARE MARRIED!";
  }
}, 1000);
</script>
</body>
</html>