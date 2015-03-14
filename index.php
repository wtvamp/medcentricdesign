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
    <div class="top"></div>
    <div class="whitespace">
        <img alt="logo" src="http://lorempixel.com/300/100/city" id="logo"></img>
        <div class="Slogan">
            <div>Focused On Your Health</div>
            <div class="TOPhone">Call Today 305-555-4789</div>
        </div>
    </div>
    <div style="clear:both;"></div>
    <div class="nav">
        <div class="nav-content">
            <ul>
                <li class="nav-button">
                    <a href="Default.aspx" class="rollHome" title="Home">
                        <span class="displace">Home</span>
                    </a>
                </li>
                <li class="nav-button">
                    <a href="Default.aspx" class="rollProducts" title="Products">
                        <span class="displace">Products & Services & Stuff</span>
                    </a>
                </li>
                <li class="nav-button">
                    <a href="Default.aspx" class="rollWhyMed" title="Why Med Centric">
                        <span class="displace">Why Med Centric</span>
                    </a>
                </li>
                <li class="nav-button">
                    <a href="Default.aspx" class="rollContact" title="Contact">
                        <span class="displace">Contact Us</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="topBorder2"></div>
</header>
<div class="Image">
    <div class="left">
        <img src="http://lorempixel.com/150/300/city" alt="cityL" class="align-left" />
    </div>
    <div class="center">
        <img src= " " alt="cityC" class="center" />
    </div>
    <div class="right">
        <img src="http://lorempixel.com/150/300/city" alt="cityR" class="align-right" />
    </div>
</div>
<div style="clear:both;"></div>
<!--Images for lower menu-->
<div class="container">
    <div class="thumbnail">
        <img src="http://lorempixel.com/160/118/city" style="float: left; width: 15%; margin-right: 3%;
		margin-bottom: 0.5em; margin-left: 150pt;">
        <img src="http://lorempixel.com/160/118/city" style="float: left; width: 15%; margin-right: 3%;
		margin-bottom: 0.5em;">
        <img src="http://lorempixel.com/160/118/city" style="float: left; width: 15%; margin-right: 3%;
		margin-bottom: 0.5em;">
        <img src="http://lorempixel.com/160/118/city" style="float: left; width: 15%; margin-right: 3%;
		margin-bottom: 0.5em;">
    </div>
</div>
<div style="clear:both;"></div>
<div id="footer">
    <table class="footerTable">
        <tbody>
        <tr>
            <td style="padding-top: 0px; vertical-align: middle">
                <center>
                    <table>
                        <tbody>
                        <tr>
                            <td>
                                <a href="Default.aspx" class="footer">Home | </a>
                            </td>
                            <td>
                                <a href="Member.aspx" class="footer"> Member Login | </a>
                            </td>
                            <td>
                                <a href="Enroll.aspx" class="footer"> Enroll | </a>
                            </td>
                            <td>
                                <a href="Contact.aspx" class="footer"> Contact</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </center>
            </td>
        </tr>
        </tbody>
    </table>
    <ul class="footerDisclaimer">
        <li>Copyright Med Centric Credit, Inc. 2015 Version: 0.8b2.0</li>
        <a href="/index.php?r=site/pages&amp;view=privacy">Privacy Policy</a>
        <a href="/index.php?r=site/pages&amp;view=terms">Terms of Use</a>
    </ul>
</div>
</body>
</html>