<!DOCTYPE html>
<html lang="en" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta charset="utf-8">
    <title>jQuery UI Dialog - Default functionality</title>
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script  src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
    <script type="text/javascript" src="/js/scripts.js"></script>

    <link rel='stylesheet' href="/css/vendor/jquery-ui.css"/>
    <link rel="stylesheet" href="/fonts/font.css"/>
    <link rel="stylesheet" href="/css/style.css"/>
</head>
<body>
<div class="wrapper">
    <header>

        <div class="header-top">
            <div class="container">

                <ul class="topMenu">
                    <li><span>|</span><a href="">Home</a></li>
                    <li><span>|</span><a href="">About us</a></li>
                    <li><span>|</span><a href="">Help</a></li>
                    <li><a  href="" >
                            <img class="icon-user" src="img/user.png">
                            <i class="icon-caret"></i>
                            <i class="dropdown-user-menu">Michele M </i></li>
                </ul>
                <a href="">
                    <div class="basket">0</div>
                </a>

            </div>
        </div>
        <div class="container">
            <div class="logo-white"></div>
        </div>
    </header>
    <main>
        <div class="container">
            <ul class="breadcrumbs">
                <li><a href="">Home</a><span class="divider">/</span></li>
                <li><a href="">Handyboy</a><span class="divider">/</span></li>
                <li>Profile</li>
            </ul>
            <div class="bio">
                <div class="leftPart">
                    <h1>Michele M</h1>
                    <h2>San Diego, California</h2>
                    <h3>HANDYBOY <b> #fd4684</b></h3>

                    <div class="accordion">
                        <ul>
                            <li><div class="accordion-title active" id="edit-bio"> <b>-</b> <span> Bio</span></div>
                                <div class="inner-body open" style="display:block;">
                                    <label class="small-label">Height</label>
                                    <p>
                                        <input type="text" class="input-text bio-form-height" placeholder="Inches">
                                        <input type="text" class="input-text bio-form-height-inches">
                                    </p>
                                    <label class="small-label">Ethnicity</label>
                                    <p>
                                        <select class="select">
                                            <option>What ethnicity for you identify...</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </p>

                                    <label class="small-label">Hair color</label>
                                    <p>
                                        <select class="select">
                                            <option>What color's your mop?</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </p>

                                    <label class="small-label">Eye color</label>
                                    <p>
                                        <select class="select">
                                            <option>Lapis Lazuli or Viridian?</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </p>

                                    <label class="small-label">Body type</label>
                                    <p>
                                        <select class="select">
                                            <option>How are you built/sculped?</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </p>
                                    <label class="small-label">Search profile</label>
                                    <textarea  class="textarea" placeholder="Tell about you - have fun and be yourself. This is the first
                                    thing a potential client will read about you!">

                                    </textarea>
                                </div>
                            </li>
                            <li><div class="accordion-title" id="work-schedule"><b>+</b> <span> Work Schedule</span></div>
                                <div class="inner-body"> Two Two Two Two</div>
                            </li>
                            <li><div class="accordion-title" id="job-details"><b>+</b> <span> Job Details De</span></div>
                                <div class="inner-body"> Three Three Three Three</div>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="rightPart">
                    <img src="img/user.png">
                </div>


            </div>
            <button class="btn-dark-standard edit-back"><i class="icon-arrow-back"></i> Back</button>
            <button class="btn-dark-standard work-schedule-next">Work Schedule<i class="icon-arrow-next"></i></button>
        </div>
    </main>
</div>
<footer>
    <div class="container">
        <ul>
            <li><a href="">Blog</a> </li>
            <li><a href="">About</a> </li>
            <li><a href="">Events</a> </li>
            <li><a href="">Help</a> </li>
        </ul>
    </div>
</footer>

<script>

    $( ".select" ).selectmenu({ width: 570 });


</script>
</body>
</html>