<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta charset="utf-8">
	<title>jQuery UI Dialog - Default functionality</title>
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
        <script src="http://jarallax.com/download/jarallax-min-0.2.js" type="text/javascript"></script>
        <script src="js/animations.js"></script>
        
	<script>
        $(document).ready(function(){
            $(document).on('click','.signIn',function(){
                $( "#popUps" ).load( "/popUps/login.html" );
                $(".back").removeClass("hide");
            });
            $(document).on('click','.become-handyboy-button',function(){
                $( "#popUps" ).load( "/popUps/register.html" );
                $(".back").removeClass("hide");
            });
            $(document).on('click','.ui-icon-closethick',function(){
                $(".back").addClass("hide");
            });
            $(document).on('click','.ui-dialog-titlebar-close',function(){
                $(".back").addClass("hide");
            });

/*
                var lastScrollTop = 0;
                $(window).scroll(function(event){
                    var st = $(this).scrollTop();
                    if (st > lastScrollTop){
                        $("html, body").animate({scrollTop:st+500}, '1000', 'swing', function() {});
                    } else {
                        $("html, body").animate({scrollTop:st-500}, '1000', 'swing', function() {});
                    }
                    lastScrollTop = st;
                });
*/




        });
	</script>

        <link rel='stylesheet' href="/css/vendor/jquery-ui.css"/>
        <!--<link rel='stylesheet' href="http://code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css"/>-->
        <link rel="stylesheet" href="/fonts/font.css"/>
        <link rel="stylesheet" href="/css/style.css"/>
        
</head>
<body onload="init()">
<div class="wrapper">
    <div class="video" >
    <video id="video_background" class="video-background-top" preload="auto" autoplay="true" loop="loop" poster="img/main/BG.png">
            <source  src="floatinghandyboybrightdarkredbig2.mp4" type='video/mp4'>
    </video></div>
    <div class="container header">
        <div class="leftPart">
            <div class="logo-white"></div>
            <h1 class="extraLarge">Handsome. <br> delivered.</h1>

            <div class="buy-button buy-button-top">
                <a href="" class="app-store"></a>
                <a href="" class="google-play"></a>
            </div>
        </div>
        <div class="rightPart">
            <ul class="topMenu">
                <li><span>|</span><a href="">Help</a></li>
                <li><span>|</span><a href="">FAQ</a></li>
                <li><span>|</span><a class="become-handyboy-button">Become a handyboy</a></li>
                <li><span>|</span><a class="signIn"><i class="icon-lock-small" ></i> Sing in</a></li>
            </ul>

            <div class="moto-xx"></div>
        </div>
    </div>
    <div class="topMenuSecond-container">
    <div class="container">
    <ul class="topMenuSecond">
        <li class="brand"><a href=""></a></li>
        <li class="active"><a href="">How it Works</a></li>
        <li ><a href="">Safety</a></li>
        <li ><a href="">Mobile</a></li>
        <li ><a class="red become-handyboy-button">Become a HandyBoy</a></li>
    </ul>
        </div>
    </div>
    <div class="container">
        <div class="screen-two">
        <h2 class="captionLight">So... How does it work?</h2>
        <div class="image firstImage"></div>
        </div>
        <div class="screen-three">
            <div class="leftPart">
                <div class="textAnimationOne">
                <p class="oneCaption">WHAT IS THIS</p>
                <p class="twoCaption"> HANDYBOY?</p></div>
            </div>
            <div class="rightPart">
                <div class="image secondImage"></div>
            </div>
        </div>

        <div class="screen-four">

            <div class="image  thirdImage"></div>
            <ul>
                <li class="blockAnimate-1">Ready
                    <ul>
                        <li>Browse through job <br>
                            categories and find the <br>
                            right guy in your area.<br>
                            Search by location,<br>
                            availability, and<br>
                            keywords!</li>
                    </ul>
                </li>
                <li class="blockAnimate-2">Aim
                    <ul>
                        <li>
                            Check out his bio<br>
                            and photos - read his<br>
                            reviews and keep<br>
                            shopping<br>
                            for more!
                        </li>
                    </ul>
                </li>
                <li class="blockAnimate-3">Hire!
                    <ul>
                        <li class="last">Schedule in advance or<br>
                            book him right now. Our <br>
                            guys can be at your door<br>
                            in minutes.</li>
                    </ul>
                </li>
            </ul>
        </div>

        <div class="screen-five">
            <div class="leftPart">
                <div class="image fiveImage"></div>
            </div>
            <div class="rightPart">

                <h2 class="textAnimation-2">Safe and Easy to Use</h2>
                <p class="textAnimation-3">The best guys in your area are just a few clicks away</p>
            </div>
        </div>

        <table class="screen-six">
            <tr>
                <td valign="middle"><img src="img/main/profile_card_icon.png"></td>
                <td>HandyBoys are pre-selected and approved. Our review-based system helps you pick and expect the best. Satisfaction guaranteed!</td>
                <td valign="middle" ><img src="img/main/credit_card_icon.png"></td>
                <td>Never worry about carrying cash. Automaticaly charge payments and tips through your credit card.</td>
            </tr>
            <tr>
                <td valign="middle" ><img src="img/main/phone_icon.png"></td>
                <td>Our Help Desk is always available for your questions and concerns</td>
                <td valign="middle"><img src="img/main/lock_icon.png"></td>
                <td>Be Confident!  We use the most current and sophisticated data security system available..</td>
            </tr>
        </table>

    </div>
    <div class="video-bottom">
        <video id="video_background" class="video-background-bottom" preload="auto" autoplay="true" loop="loop" poster="img/main/BG.png">
            <source  src="floatinghandyboybrightdarkredbig2.mp4" type='video/mp4' >
        </video></div>
    <div class="screen-seven">
        <div class="container">
        <div class="leftPart">
            <div class="image sixImage"></div>
        </div>
        <div class="rightPart">
            <h2 class="textAnimationThree">Download the HandyBoy<i class="tm">tm</i>
                App and browse our guys on the go.</h2>
            <div class="buy-button buy-button-bottom">
                <a href="" class="app-store"></a>
                <a href="" class="google-play"></a>
            </div>
        </div>
        </div>
    </div>
</div>
<div class="footer">
    <div class="container">
<ul>
    <li>© HandyBOY </li>
    <li><a href="">TERMS</a> </li>
    <li><a href="">PRIVACY</a> </li>
</ul>
</div>
</div>
    <div class="back hide"></div>
    <div id="popUps"></div>

<a class="become-handyboy become-handyboy-button"><p>Become a HandYBoy!<i class="icon-red-arrow"></i> </p></a>
</body>
</html>