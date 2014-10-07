<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta charset="utf-8">
    <title>jQuery UI Dialog - Default functionality</title>
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
    <script src="/js/scripts.js"></script>

    <link rel='stylesheet' href="/css/vendor/jquery-ui.css"/>
    <!--<link rel='stylesheet' href="http://code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css"/>-->
    <link rel="stylesheet" href="/fonts/font.css"/>
    <link rel="stylesheet" href="/css/style.css"/>

</head>
<body onload="init()">
<div class="wrapper">
    <div class="video">
        <video id="video_background" class="video-background-top" preload="auto" autoplay="true" loop="loop"
               poster="img/main/BG.png">
            <source src="floatinghandyboybrightdarkredbig2.mp4" type='video/mp4'>
        </video>
    </div>
    <div class="container header">
        <div class="leftPart">
            <div class="logo-white"></div>
            <h1 class="extraLarge main">Work it your way</h1>
            <ul class="header-list">
                <li>Pick your own hours</li>
                <li>Set your own prices</li>
                <li>Be your own boss</li>
            </ul>

            <button class="btn-dark become-handyboy-button">Apply to be handyboy</button>
            <p class="info">
                If you have already created an account, <a href="">click here to sign in.</a><br>
                Or, <a href="">contact us</a> if you have any questions!
            </p>
        </div>
        <div class="rightPart">
            <ul class="topMenu">
                <li><span>|</span><a href="">Help</a></li>
                <li><span>|</span><a href="">FAQ</a></li>
                <li><span>|</span><a class="become-handyboy-button">Become a handyboy</a></li>
                <li><span>|</span><a class="signIn"><i class="icon-lock-small"></i> Sing in</a></li>
            </ul>

            <div class="phone"></div>
        </div>
    </div>
    <div class="container">
        <h2 class="darkLargeTitle main">What is handy boy?</h2>

        <div class="play-button"></div>
        <div class="what-is-handyboy"></div>
        <h3 class="darkLargeTitle main">Why join?</h3>

        <p class="textTwo">
            <b>Safe</b> and <b>easy</b> to use. Once you're accepted? you're up and working in less than 24 hours.
        </p>
    </div>
    <div class="container why-join">

        <div class="why-joins">
            <ul class="partLeft">
                <li><p><b>Get to work</b><br>
                        And make your free time work for you. Our state-of-the-art Available Now feature will get you
                        more gigs, more often.</p>

                    <div class="icon-phone"></div>
                </li>
                <li><p><b>Get help</b><br>
                        Our customer support team is always available for your questions and concerns.</p>

                    <div class="icon-dialog"></div>
                </li>
                <li><p><b>Get paid easily</b><br>
                        Your payments are automatically deposited into the bank account of your choice.</p>

                    <div class="icon-cart"></div>
                </li>
            </ul>
            <div class="image-phone"></div>
            <ul class="partRight">
                <li>
                    <div class="icon-star"></div>
                    <p><b>Be informed</b><br>
                        See a customer’s reviews and ratings before accepting a job</p>
                </li>
                <li>
                    <div class="icon-lock"></div>
                    <p><b>Stay secure</b><br>
                        Keep a record of your work with our chat feature and integrated GPS system.</p>
                </li>
                <li>
                    <div class="icon-earl"></div>
                    <p><b>Stay organized</b><br>
                        With our real-time booking system and our live updating calendar, it’s easy to keep track of
                        your upcoming gigs and work schedule.</p>
                </li>
            </ul>

        </div>
    </div>


    <div class="formRegistration">
        <div class="container">
            <h3 class="darkLargeTitle">Apply today</h3>

            <form>
                <div class="partLeft">
                    <img src="/img/main/profile_avatar.png"/>

                    <div class="upload">
                        <input type="file " style="color:red"/>
                    </div>
                </div>
                <div class="partRight">
                    <table>
                        <tr>
                            <td><label>First Name:</label></td>
                            <td><input type="text"></td>
                        </tr>
                        <tr>
                            <td><label>Last Name:</label></td>
                            <td><input type="text"></td>
                        </tr>
                        <tr>
                            <td><label>Phone:</label></td>
                            <td><input type="text"></td>
                        </tr>
                        <tr>
                            <td><label>Age:</label><p class="small">MM/DD/YYYY</p></td>
                            <td>
                                <ul>
                                    <li><input type="text">/ </li>
                                    <li><input type="text">/ </li>
                                    <li><input type="text"></li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td><label>Email:</label></td>
                            <td><input type="text"></td>
                        </tr>
                        <tr>
                            <td><label>City or Zip: <p class="small">Why do we need this?</p></label></td>
                            <td><input type="text"></td>
                        </tr>

                    </table>
                </div>
                <input type="submit" value="Send SMS Verification!" class="btn-dark">
            </form>


        </div>

    </div>
    <div class="container">
        <p class="info-login">
            If you have already created an account, <a href="">click here to sign in.</a><br>
            Or, <a href="">contact us</a> if you have any questions!
        </p>
        <div class="frequently">
            <h3 class="darkLargeTitle main">Frequently Asked Questions</h3>
            <ul>
                <li>How do i get paid?</li>

                <li>Is HandyBoy safe?</li>

                <li>How does the application process work?</li>

                <li>What are HandyBoy’s requirements?</li>

                <li>Can I just work on HandyBoy for a few hours in my off-time?</li>
            </ul>

            <a href="">See other commonly asked questions</a>


        </div>
        <center><a href="" class="btn-red main">Apply now</a></center>

    </div>


    <div class="footer">
        <div class="container">
            <ul>
                <li>© HandyBOY</li>
                <li><a href="">TERMS</a></li>
                <li><a href="">PRIVACY</a></li>
                <li><a href="">Service Contract</a></li>
            </ul>
        </div>
    </div>
    <div class="back hide"></div>
    <div id="popUps"></div>

</body>
</html>