<!DOCTYPE html>
<html>
<head>
<?php include('header.php');?>

<script type="text/javascript" src="fadeslideshow.js">
/***********************************************
* Ultimate Fade In Slideshow v2.0- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for this script and 100s more
***********************************************/
</script><script>
var mygallery=new fadeSlideShow({
	wrapperid: "gameshow", //ID of blank DIV on page to house Slideshow
	dimensions: [320, 320], //width/height of gallery in pixels. Should reflect dimensions of largest image
	imagearray: [
		["assets/Pics/Big_Pics/the_ghost_tomb-ss1-b.png", "http://www.box.com/s/qriqpo3b1dj96zgj5iad", "", "The Ghost Tomb"],
		["assets/Pics/Big_Pics/the_ghost_tomb-ss2-b.png", "http://www.box.com/s/qriqpo3b1dj96zgj5iad", "", "The Ghost Tomb"],
		["assets/Pics/Big_Pics/the_ghost_tomb-ss3-b.png", "http://www.box.com/s/qriqpo3b1dj96zgj5iad", "", "The Ghost Tomb"] //<--no trailing comma after very last image element!
	],
	displaymode: {type:'auto', pause:2500, cycles:0, wraparound:false},
	persist: false, //remember last viewed slide and recall within same session?
	fadeduration: 600, //transition duration (milliseconds)
	descreveal: "none",
	togglerid: ""
})
</script>
</head>
<body>

<header class="container">
	<a href="index.php">
		<img src="assets/Pics/Site/SWG_Logo.png" class="logo" alt="SilverWolf Games Logo" title="SilverWolf Games" />
		<img src="assets/Pics/Site/SWG_Header.png" alt="SilverWolf Games" title="SilverWolf Games" />
	</a>
</header>

<!--Nav Bar-->
<?php include('nav.php');?>

<!--Body-->
<div class="container-fluid">
	<div class="games">
		<h2>The Ghost Tomb</h2>

		<div class="row">
			<div class="col-m-3">
				<div id="gameshow"></div>
			</div>
			<div class="col-md-9">
				<ul>
					<li><b>Category:</b> Arcade</li>
					<li><b>Description:</b> This is the first in a series of three. Collect the DNA to progress through 20 levels.</li>
				</ul>
				<a href="assets/games/The_Ghost_Tomb.exe" class="btn btn-success">Download</a>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid">
	<div class="game-list">
		<h6>Games</h6>
			<hr />
			<h2><a href="fire-swarm.php">Fire Swarm</a></h2>
			<h2><a href="madness.php">Madness</a></h2>
			<h2><a href="the-great-maze.php">The Great Maze</a></h2>
			<h2><a href="the-ghost-tomb.php">The Ghost Tomb</a></h2>
			<h2><a href="the-ghost-tomb_2.php">The Ghost Tomb II</a></h2>
			<h2><a href="the-ghost-tomb_3.php">The Ghost Tomb III</a></h2>
	</div>
</div>

<?php include('footer.php');?>
</body>
</html>