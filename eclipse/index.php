<!DOCTYPE html>
<html lang="en">
<head>
    <title>Eclipse Space Simulator</title>
    <?php include 'header.php';?>

    <style>
        body {
            font-family: 'Space Mono', monospace;
            background-color: #242424;
            color: #eee;
        }
        .pa-banner {
            background-image: url('eclipse-bg.jpg');
        }
        .bg-blue {
            background-color: #007dda;
            color: #fff;
            a,a:focus,a:active,a:visited {
                color: #fff;
            }
            a:hover {
                opacity: 0.8;
            }
        }
        .container {
            padding: 40px 0px;
        }
        h1 {
            font-size: 10vmin;
        }

    </style>
</head>

<body id="home" data-spy="scroll" data-target=".navbar" data-offset="60">

<!-- CONTENT -->
<div class="pa-banner">
    <div class="pa-banner-text">
        <h1>Eclipse</h1>
        <h2>Space Simulator Coming Soon</h2>
    </div>
</div>

<div class="container text-center">
    <h2>Gather your Crew</h2>
    <p>Prepare to have an expereince like none other. Climb aboard the bridge of your own space ship, go on daring adventures of espionage, space battles, diplomacy, rescue, research, and much more. YOU dictate how the story plays out by the choices you make. Come and experience one of our unique missions that will immerse you in a world, millions of miles from home.</p>
    <hr><br>
    <h2>See the Teaser</h2>
    <iframe width="720" height="480" src="https://www.youtube.com/embed/8BRTibsn99I" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>

<div class="bg-blue">
<div class="container">
    <h2>Missions</h2>

    <div class="row text-center">
        <div class="col-md-4">
            <h3><i class="fas fa-user fa-4x"></i><br>Missing Ambassador</h3>
            <p>The ambassador's ship has gone missing. You must escort 2 battle cruisers to the last known location to investigate.</p>
            <button class="btn btn-lg">Book Now<br>(Coming Soon)</button>
        </div>
        <div class="col-md-4">
            <h3><i class="fas fa-robot fa-4x"></i><br>Rogue AI</h3>
            <p>Your onboard computer has gone rogue. Your crew must deal with the external pressures of flying a spaceship, as well as the internal pressures of the rogue AI.</p>
            <button class="btn btn-lg">Book Now<br>(Coming Soon)</button>
        </div>
        <div class="col-md-4">
            <h3><i class="fas fa-question-circle fa-4x"></i><br>Diplomacy</h3>
            <p>Coming Soon</p>
            <button class="btn btn-lg">Book Now<br>(Coming Soon)</button>
        </div>
    </div>
</div>
</div>

<div class="container text-center">
    <h2>About</h2>
    <p>Project Eclipse strives to provide an unparalleled emmersive space simulator experience. We are beta testing our concept in the hopes to launch a physical location soon. The initial project will be comprised of remote flights users can join from home the comfort of their own home. We look forward to flying with you!</p>
</div>

<hr>
<?php include 'footer.php';?>

</body>
</html>