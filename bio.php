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
                                        <select class="select-bio">
                                            <option>What ethnicity for you identify...</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </p>

                                    <label class="small-label">Hair color</label>
                                    <p>
                                        <select class="select-bio">
                                            <option>What color's your mop?</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </p>

                                    <label class="small-label">Eye color</label>
                                    <p>
                                        <select class="select-bio">
                                            <option>Lapis Lazuli or Viridian?</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </p>

                                    <label class="small-label">Body type</label>
                                    <p>
                                        <select class="select-bio">
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
                                <div class="inner-body">
                                    <p class="small-title-light">Set your work schedule</p>
                                    <p class="bio-text">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                        Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
                                        natoque penatibus et magnis dis parturient montes, nascetur
                                        ridiculus mus. Donec quam felis, ultricies nec, pellentesque
                                        eu, pretium quis, sem. Nulla consequat massa quis enim. Donec
                                        pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
                                        In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.

                                    </p>

                                    <div class="calendar">
                                        <ul class="calendar-week">
                                            <li><a href="">SUN</a></li>
                                            <li class="active"><a href="">MON</a></li>
                                            <li><a href="">TUE</a></li>
                                            <li><a href="">WED</a></li>
                                            <li><a href="">THUR</a></li>
                                            <li><a href="">FRI</a></li>
                                            <li><a href="">SAT</a></li>
                                        </ul>
                                        <div class="calendar-days">
                                            <div class="calendar-days-item">8A</div>
                                            <div class="calendar-days-item">8:30A</div>
                                            <div class="calendar-days-item">9A</div>
                                            <div class="calendar-days-item active">9:30A</div>
                                            <div class="calendar-days-item active">10A</div>
                                            <div class="calendar-days-item active">10:30A</div>
                                            <div class="calendar-days-item active">11A</div>
                                            <div class="calendar-days-item active">11:30A</div>
                                            <div class="calendar-days-item active">12A</div>
                                            <div class="calendar-days-item">12:30A</div>
                                            <div class="calendar-days-item">1P</div>
                                            <div class="calendar-days-item">1:30P</div>
                                            <div class="calendar-days-item">2P</div>
                                            <div class="calendar-days-item">2:30P</div>
                                            <div class="calendar-days-item">3P</div>
                                            <div class="calendar-days-item">3:30P</div>
                                            <div class="calendar-days-item">4P</div>
                                            <div class="calendar-days-item">4:30P</div>
                                            <div class="calendar-days-item">5P</div>
                                            <div class="calendar-days-item">5:30P</div>
                                            <div class="calendar-days-item">6P</div>
                                            <div class="calendar-days-item">6:30P</div>
                                            <div class="calendar-days-item">7P</div>
                                            <div class="calendar-days-item">7:30P</div>
                                            <div class="calendar-days-item">8P</div>
                                            <div class="calendar-days-item">8:30P</div>
                                            <div class="calendar-days-item">9P</div>
                                            <div class="calendar-days-item">9:30P</div>
                                            <div class="calendar-days-item">10P</div>
                                            <div class="calendar-days-item">10:30P</div>
                                            <div class="calendar-days-item">11P</div>
                                            <div class="calendar-days-item">11:30P</div>
                                            <div class="calendar-days-item">12P</div>
                                            <div class="calendar-days-item">12:30P</div>
                                            <div class="calendar-days-item">1A</div>
                                            <div class="calendar-days-item">1:30A</div>
                                            <div class="calendar-days-item">2A</div>
                                            <div class="calendar-days-item">2:30A</div>
                                            <div class="calendar-days-item">3A</div>
                                            <div class="calendar-days-item">3:30A</div>
                                            <div class="calendar-days-item">4A</div>
                                            <div class="calendar-days-item">4:30A</div>
                                            <div class="calendar-days-item">5A</div>
                                            <div class="calendar-days-item">5:30A</div>
                                            <div class="calendar-days-item">6A</div>
                                            <div class="calendar-days-item">6:30A</div>
                                            <div class="calendar-days-item">7A</div>
                                            <div class="calendar-days-item">7:30A</div>
                                        </div>
                                    </div>

                                    <p class="small-title-light">Customize your calendar</p>
                                    <p class="bio-text">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                        Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
                                        natoque penatibus et magnis dis parturient montes, nascetur
                                        ridiculus mus. Donec quam felis, ultricies nec, pellentesque
                                        eu, pretium quis, sem.

                                    </p>
                                </div>
                            </li>
                            <li><div class="accordion-title" id="job-details"><b>+</b> <span> Job Details</span></div>
                                <div class="inner-body">
                                    <div class="category-jobs">
                                        <p class="category-jobs-item category-jobs-item-1 active"></p>
                                        <p class="category-jobs-item category-jobs-item-2"></p>
                                        <p class="category-jobs-item category-jobs-item-3"></p>
                                        <p class="category-jobs-item category-jobs-item-4"></p>
                                        <p class="category-jobs-item category-jobs-item-5"></p>
                                        <p class="category-jobs-item category-jobs-item-6"></p>
                                        <p class="category-jobs-item category-jobs-item-7"></p>
                                        <p class="category-jobs-item category-jobs-item-8"></p>
                                        <p class="category-jobs-item category-jobs-item-9"></p>
                                        <p class="category-jobs-item category-jobs-item-10"></p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="rightPart">
                    <div class="users-avatars">
                        <div class="current-image">
                            <img src="/img/user.png">
                        </div>
                        <div class="smalls-avatars">
                            <img src="/img/user.png">
                            <img src="/img/user.png">
                            <img src="/img/user.png">
                            <img src="/img/user.png">
                            <img src="/img/user.png">
                            <button class="add-photo-profile">

                            </button>
                        </div>
                    </div>
                    <div class="user-profile-complete">
                        <div class="user-profile-complete-header">
                            Percent complete <i class="icon-info-white"></i>
                        </div>
                        <p class="user-profile-complete-next-step">
                            Next steps
                        </p>
                        <ul class="user-profile-complete-steps">
                            <li>Add photo +5%</li>
                            <li>Bio +15%</li>
                            <li>Search profile +5%</li>
                            <li>Schedule +20%</li>
                            <li>Job Details +15%</li>
                        </ul>
                    </div>
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

    $( ".select-bio" ).selectmenu({ width: 650 });


</script>
</body>
</html>