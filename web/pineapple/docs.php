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
  <title>Pineapple Docs</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/pics/favicon.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/pineapple/css/pineapple.css">
  <link rel="stylesheet" href="assets/css/waterfall.theme.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <style>


/* Colors go from first, middle, to last in gradient order*/
.pa-banner {
  background-image: linear-gradient(141deg, #2cb5e8, #1fc8db, #007dda);
  background-image: -webkit-linear-gradient(141deg, #2cb5e8, #1fc8db, #007dda);
  background-image: -o-linear-gradient(141deg, #2cb5e8, #1fc8db, #007dda);
}
button{
    text-transform:uppercase;
    margin-top:-8px;
}
code {
    color: red;
    /*min-height: 20px;*/
    padding: 3px;
    /*margin-bottom: 20px;*/
    background-color: #f5f5f5;
    border: 1px solid #e3e3e3;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
    font-size:14px;

}
body {
    font-size:16px;
}



  </style>

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
            <li class="nav-item"><a class="nav-link" href="#">DOCUMENTATION</a></li>
            <li class="nav-item"><a class="nav-link" href="index.php#examples">EXAMPLES</a></li>
            <li class="nav-item"><a class="nav-link" href="index.php#get-started">GET STARTED</a></li>
            <li class="nav-item"><a class="nav-link" href="index.php#themes">THEMES</a></li>
            <li class="nav-item"><a class="nav-link" href="index.php#about">ABOUT</a></li>
        </ul>
    </div>
    <!--</div>-->
</nav>









<div class="pa-banner">
  <div class="pa-banner-text" style="padding-top: 8rem;">
    <!--<img src="assets/pics/pineapple-icon.png" class="pa-icon" style="border-color:white;width:auto;height:auto;display: block;margin-left: auto; margin-right: auto;">-->
      <h1>Documentation</h1>
      <br>
      <p style="font-size: 3vmin;">Welcome to the Pineapple Library documentation. Here you'll find easy installation guides, features of Pineapple, and information about our themes and more.</p>
  </div>
</div>


<!-- Container (EXAMPLES Section) -->
<div id="examples"></div>
<div class="container-fluid text-center pa-slideanim">

    <h2>Installation</h2>

    <p>Pineapple must be downloaded and placed in your project directory. Something like this:</p>
    <p><code>&lt;link rel="stylesheet" href="pineapple/1.3/css/pineapple.min.css"&gt;</code></p>
</div>



<!-- Container (EXAMPLES Section) -->
<div id="examples" ></div>
<div class="container-fluid text-center pa-slideanim pa-bg-gray">

<h2>Themes</h2>

    <p>We've created some awesome themes to use as templates when creating your site. Each theme runs on Pineapple and Bootstrap 4.0. Input your content into our themes to quickly build a site, customizable as needed.</p>

    <ul class="text-left">
        <li><b>Pineapple themes require Bootstrap 4.0 or newer.</b></li>
        <li><b>Pineapple themes require Pineapple 1.0.1 or newer.</b></li>
    </ul>

    <br><hr><br>

    <h3>Waterfall Theme</h3>
    <ul class="text-left">
        <li>Simple website, single page.</li>
        <li>"Waterfall" effect created by the page sliding into the users view.</li>
    </ul>

    <hr><br>

    <h3>Coming Soon Theme</h3>
    <ul class="text-left">
        <li>This theme is a great placeholder for your site while you develop it.</li>
    </ul>
</div>



<!-- Container (EXAMPLES Section) -->
<div id="examples" ></div>
<div class="container-fluid text-center pa-slideanim">

    <h2>SASS/CSS</h2>

    <ul class="text-left">
        <li>Our themes use SASS to quickly manipulate CSS. Please visit <a href="http://sass-lang.com">http://sass-lang.com</a> for more info on using SASS.</li>
        <li>If you do not plan to use SASS, simply replace the SASS variables with your values (EX: change '$primary-color' to 'red')</li>
        <li><b>Files are used as follows:</b></li>
        <ul>
            <li>Code is entered into theme.scss file.</li>
            <li>Code is then compiled from SASS to CSS with a 3rd party program such as Koala (<a href="http://koala-app.com">http://koala-app.com</a>).</li>
            <li>Reference your .css file in your project and your SASS code will be loaded as a css file (the reason for compiling the file.)</li>
        </ul>
    </ul>

</div>


<!-- Container (EXAMPLES Section) -->
<div id="examples" ></div>
<div class="container-fluid text-center pa-slideanim pa-bg-gray">

    <h2>Pineapple Usage</h2>

    <h3>CSS</h3>
    <br><br>


    <h4>Banners</h4>
    <ul class="text-left">
        <li><b>Banner:</b> Pineapple's premier feature! Include the <code>.pa-banner</code> class to a container to create a fully scalable landing page image and appropriate text-scaling.</li>
        <li><b>Banner Darken:</b> The <code>.pa-banner-darken</code> class will darken your banner image to allow text overlayed over the banner to be seen easier.</li>
        <li><b>Banner Heading:</b> The <code>.pa-banner-heading</code> scales a header title in the banner nicely.</li>
        <li><b>Banner Sub-Heading:</b> The <code>.pa-banner-sub-heading</code> scales a sub-heading title in the banner nicely.</li>
        <li><b>Banner Text:</b> The <code>.pa-banner-text</code> scales normal paragraph text well in the banner.</li>
        <li><b>Banner Logo:</b> The <code>.pa-banner-logo</code> scales and centers a logo image over the banner background well on desktop and mobile.</li>
    </ul>

    <br><hr><br>

    <h4>Misc</h4>

    <ul class="text-left">
        <li><b>Gray Background:</b> The <code>.pa-bg-gray</code> class applies a gray background to the container.</li>
        <li><b>Icons:</b> The <code>.pa-icon</code> class applies an icon border to content inside a container.</li>
        <li><b>Font Sizes:</b> The <code>.pa-font-*</code> class applies different dynamic font sizes to your element. (Available sizes: xs, sm, md, lg, xl. Replace the * with your size.)</li>
        <li><b>Cards:</b> The <code>.pa-card</code> class applies a card border/pop-up to the contents of the container.</li>
        <li><b>Slanted Section:</b> Wrap a <code>.pa-slanted-content</code> div in a <code>.pa-slanted-container</code> div to create a slanted break in the page.</li>
        <li><b>Animate Bottom:</b> The <code>.pa-animate-bottom</code> class will give any object a sliding in effect from the bottom of the screen. This is a simple way to add some visual effects to your page. Best if used on the <code>&lt;body&gt;</code> tag.</li>
        <li><b>Slideanim Effect:</b> The <code>.pa-slideanim</code> class will give any object a sliding in effect once the screen has scrolled down over its location. This is a simple way to add some visual effects to your page.</li>
        <li><b>Social Icons:</b> The <code>.fa</code> and <code>.fa-facebook</code> classes added to a div will create a social icon. Also, wrap them in a <code>.pa-social</code> div to style them properly. Replace Facebook with: facebook, twitter, google, linkedin, youtube, instagram, pinterest, snapchat-ghost, skype.</li>
        <li><b>Full Width/Height Youtube Embeding:</b> If you need a Youtube video to scale to the size of it's container completely, wrap its <code>&lt;iframe&gt;</code> with the <code>.pa-videoWrapper</code> class.</li>
        <li><b>Bootstrap 3.0 "Well" Class:</b> We loved the BS 3.0 "well" class so much we brought it back in Pineapple. Simply use the <code>.pa-well</code> class on a container to create the opposite of a Pineapple card.</li>
    </ul>

    <br><hr><br>

    <h4>Loader</h4>

    <ul class="text-left">

        <li><b>Loader:</b> The .pa-loader and .pa-loaderDiv are used to create a loading spiral image upon opening your page. This is great if you have external content that needs to load and you want something graphical to display while this happens.</li>

        <br>

        You can do this by using the following just after your <body> tag:<br>
        <code>&lt;div id="pa-loader"&gt;&lt;/div&gt;</code>

        <br>

        <code>&lt;div id="pa-loaderDiv"&gt;</code><br>

        <br>

        <li>(Place the end <code>&lt;div&gt;</code> tag at the bottom of your page content you want hidden while the loading spinner is on screen.
        <b>Required:</b> You must also put <code>onload="pineapple.pageLoader()"</code> in your page body tag.
                Optional function: In connection with this, if you'd like your page to scroll up from the bottom after the loader has finished, you can use the <code>.pa-animate-bottom</code> class on the <code>.pa-loaderDiv</code> tag.</li>

        </ul>

    <br><hr><br>

    <h4>CSS/Javascript</h4>

    <ul class="text-left">
        <li><b>Live Thumbnails:</b> <code>&lt;div class="pa-live-thumbnail-container"&gt; &lt;div class="pa-live-thumbnail"&gt; &lt;iframe src="https://pa-lib.com" onload="this.style.opacity = 1"&gt;&lt;/iframe&gt; &lt;a href="https://pa-lib.com"&gt;&lt;/a&gt; &lt;/div&gt; &lt;/div&gt;</code></li>
        <li>Create live thumbnails of any website with the above example code.</li>
<br>
        <li><b>Fading Navbar:</b> Add <code>.pa-nav-fade</code> to the nav tag to have the navbar fade in after scrolling past a full screen banner image. You can define your own value for when it should fade by adding a simple script to your page. Ex: <code>&lt;script&gt;pineapple.navFadeValue = 1000;&lt;/script&gt;</code></li>
<br>
        <li><b>Full Screen BS Carousel:</b> <code>&lt;div id="bannerCarousel" class="carousel slide" data-ride="carousel" data-interval="3000" data-pause="false"&gt; &lt;div class="carousel-inner" role="listbox"&gt; &lt;div class="carousel-item active"&gt; &lt;h1 class="pa-banner-text"&gt;IMAGE 1&lt;/h1&gt; &lt;/div&gt; &lt;div class="carousel-item"&gt; &lt;h1 class="pa-banner-text"&gt;IMAGE 2&lt;/h1&gt; &lt;/div&gt; &lt;div class="carousel-item"&gt; &lt;h1 class="pa-banner-text"&gt;IMAGE 3&lt;/h1&gt; &lt;/div&gt; &lt;/div&gt; &lt;/div&gt;</code></li>
        <li>Add your image reference in a custom class as follows. The number in the parentheses represents the slide number in order of appearance. Add as many as you desire <code>.carousel-item:nth-child(1) { background-image: url("https://mdbootstrap.com/images/regular/nature/img%20(54).jpg");}</code></li>
    </ul>


    <br><hr><br>

    <h3>Javascript</h3>
    <br>


    <ul class="text-left">
        <li><b>Smooth Scroller:</b> Add <code>data-offset="pixels"</code> element to your <code>&lt;body&gt;</code> tag. Whenever a nav link (with the class "nav-link") or a button is selected on the same page as its anchor, the page will smoothly scroll to that portion of the page and highlight the nav link if possible. Additionally you can add the <code>.pa-scroll</code> class to any item with an anchor to have it scroll to that spot on the page.</li>
        <li><b>Countdown Timer:</b> Built into Pineapple is the ability to create a customized countdown timer. Simply add this javascript to the end of your page and call it with the unique ID. <code>&lt;script&gt;pineapple.countdown.init("2018-12-15","timer","Timer has expired");&lt;/script&gt;</code>. The first section is the time for the countdown (year, month, day), the next section is the timer id which can be called wherever on your page. The last section is the message to be displayed once your time has expired.</li>
        <li><b>Page Loader:</b> Define a variable for the amount of time the page loader will show. Default value is 1500 (1.5 seconds). This looks like this: <code>WOODWARD, ADD THE SYNTAX TO CUSTOMIZE THE TIME FOR THE PAGE LOADER</code></li>
    </ul>


</div>



<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top" class="pa-scroll">
    <span class="fa fa-chevron-up fa-lg" aria-hidden="true"></span>
  </a>
    <br><br>
  <p>Designed and built by our <a href="../index.php#about">team</a> of legit programmers.
  <br>Code licensed <a href="https://git.ncr4.com/libraries/pineapple/blob/master/LICENSE">MIT</a> under the <a href="http://creativecommons.org/licenses/by/3.0/">CC 3.0</a>.</p>
</footer>


<!-- SCRIPTS -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
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