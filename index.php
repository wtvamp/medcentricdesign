<?php
/**
 * Created by PhpStorm.
 * User: warrenthompson
 * Date: 3/14/15
 * Time: 3:01 PM
 */
?>

<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>The Medcentric Test</title>
    <meta name="description" content="medcentric">
    <meta name="author" content="kenny">
    <link rel="stylesheet" type="text/css" href="CSS/html5reset.css">
    <link rel="stylesheet" type="text/css" href="CSS/MainLayout.css">
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Dancing+Script'>
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<body>

<header>
    <!-- This is the container with the logo and phone number -->
    <div class="logoContainer">
        <img id="logo" alt="Med Centric Credit Logo" src="/Images/MedCentric.jpg"  />
        <div class="slogan">
            <div>Focused On Your Health</div>
            <div class="topPhone">Call Today 305-555-4789</div>
        </div>
    </div>

    <!-- This is the top navigation menu -->
    <nav>
        <ul>
            <li>
                <a href="Default.aspx" title="Home">
                    Home
                </a>
            </li>
            <li>
                <a href="Default.aspx" title="Products">
                   Products & Services & Stuff
                </a>
            </li>
            <li>
                <a href="Default.aspx" title="Why Med Centric">
                    <span class="displace">Why Med Centric</span>
                </a>
            </li>
            <li>
                <a href="Default.aspx" title="Contact">
                    <span class="displace">Contact Us</span>
                </a>
            </li>
        </ul>
    </nav>
</header>

<!-- The center portion with the giant city images on each side, and will eventually have a slideshow in the middle -->
<div class="grid mainContent">
    <div class="col-1-3">
        <img src="http://lorempixel.com/150/300/city" alt="Left Placeholder Image of City" />
    </div>
    <div class="col-2-3">
        JAVASCRIPT SLIDESHOW GOES HERE
    </div>
    <div class="col-1-3">
        <img src="http://lorempixel.com/150/300/city" alt="Right Placeholder Image of City" />
    </div>
</div>

<!-- The lower images.  We have an outer grid that divides the page into thirds. -->
<div class="grid lowerImageMenu">
    <div class="col-1-3">
        &nbsp; <!-- Dummy Height -->
    </div>
    <div class="col-2-3">
        <!-- The the middle column of the outer grid, we add an inner grid of five columns. -->
        <div class="grid internalImages grid-pad">
            <div class="col-1-5"><img src="http://lorempixel.com/160/118/city" /></div>
            <div class="col-1-5"><img src="http://lorempixel.com/160/118/city" /></div>
            <div class="col-1-5"><img src="http://lorempixel.com/160/118/city" /></div>
            <div class="col-1-5"><img src="http://lorempixel.com/160/118/city" /></div>
            <div class="col-1-5"><img src="http://lorempixel.com/160/118/city" /></div>
        </div>
    </div>
    <div class="col-1-3">
        &nbsp; <!-- Dummy Height -->
    </div>
</div>

<!-- The preferred partners images has a grid AND a navigation menu -->
<div class="preferredPartners">

    <!-- We have an outer grid that divides the page into thirds. -->
    <div class="grid">
        <div class="col-1-3">
            &nbsp; <!-- Dummy Height -->
        </div>
        <div class="col-2-3">
            <!-- The the middle column of the outer grid, we add an inner grid of five columns. -->
            <div class="grid preferredPartnersImages">
                <div class="col-1-5"><img src="http://lorempixel.com/160/118/city" /></div>
                <div class="col-1-5"><img src="http://lorempixel.com/160/118/city" /></div>
                <div class="col-1-5"><img src="http://lorempixel.com/160/118/city" /></div>
                <div class="col-1-5"><img src="http://lorempixel.com/160/118/city" /></div>
                <div class="col-1-5"><img src="http://lorempixel.com/160/118/city" /></div>
            </div>
        </div>
        <div class="col-1-3">
            &nbsp; <!-- Dummy Height -->
        </div>
    </div>

    <!-- Then we have a navigation menu that copies the one above.  Some CSS overrides make it look slightly different -->
    <nav>
        <ul>
            <li>
                <a href="" title="Home">
                    <span>Home</span>
                </a>
            </li>
            <li>
                <a href="" title="Products">
                    <span>Products & Services & Stuff</span>
                </a>
            </li>
            <li>
                <a href="" title="Why Med Centric">
                    <span>Why Med Centric</span>
                </a>
            </li>
            <li>
                <a href="" title="Contact">
                    <span>Contact Us</span>
                </a>
            </li>
        </ul>
    </nav>
</div>

<!-- Footer and copyright information -->
<footer>Copyright Med Centric Credit, Inc. 2015 Version: 0.8b3.0 |
    <a href="/index.php?r=site/pages&amp;view=privacy">Privacy Policy</a> |
    <a href="/index.php?r=site/pages&amp;view=terms">Terms of Use</a>
</footer>

</body>
</html>