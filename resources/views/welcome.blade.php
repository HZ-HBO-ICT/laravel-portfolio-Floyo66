<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $("button").click(function () {
                $("#divfade").fadeIn("slow");
            });
        });
    </script>
    <link rel="stylesheet" href="css/StyleSheet.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

    <!-- awesome font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
    <!-- Hoofd css code -->

</head>
<!-- fade kijken-->
<body>

<!--Navigatie bar-->
<nav class="navigatiebar divfade">

    <div class="title-name">
        <h2>Home</h2>
    </div>

    <!--de links-->

    <ul class="navigate-links">
        <li>
            <a href="/" class="navigate-link button"> Home </a>
        </li>
        <li>
            <a href="/profile" class="navigate-link"> Profile </a>
        </li>
        <li>
            <a href="/dashboard" class="navigate-link"> Dashboard </a>
        </li>
        <li>
            <a href="/faq" class="navigate-link"> FAQ </a>
        </li>
        <li>
            <a href="/blog" class="navigate-link"> Blog </a>
            <ul>
                <li>
                    <a href="/post1" class="navigatie-link, dropdown"> Post </a>
                </li>
            </ul>
        </li>
    </ul>
</nav>
<!--end navigation-->
<!--end of the links-->
<div class="container-overflow">
    <!--sidebar-->
    <input type="checkbox" id="check">
    <label for="check">
        <i class="fas fa-bars" id="btn"></i>
        <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
        <header>Usefull Sites</header>
        <ul>
            <li><a href="https://hz.nl/over-de-hz/regelingen-documenten-1/onderwijs-en-examenregelingen"><i
                        class="fas fa-school"></i>CER</a></li>
            <li><a href="#"><i class="fas fa-calendar-week"></i>IR</a></li>
            <li><a href="https://learn.hz.nl/my/"><i class="fas fa-university"></i>Learn </a></li>
            <li><a
                    href="https://teams.microsoft.com/_?culture=nl-nl&country=NL&lm=deeplink&lmsrc=homePageWeb&cmpid=WebSignIn#/school/conversations/Algemeen?threadId=19:2e2afa0286b04932be16cb8ad2d9d2c0@thread.skype&ctx=channel"><i
                        class="fas fa-user-friends"></i>Teams </a></li>
            <li><a href="https://apps.hz.nl/angular/studievoortgang/studiestatus"><i class="fas fa-tasks"></i>Study
                    Progress</a></li>
            <li><a href="https://github.com/Flootjevd"><i class="fab fa-github"></i>Github</a></li>


        </ul>

    </div>
    <!--end sidebar-->
    <!--grid mid section-->
    <div class="wrapper-upper-mid-section">
        <div class="box1">Why ICT?</div>
        <div class="box2 img-Layout " img alt='photo of me in the field'>Photo test</div>
        <div class="box6">The reason i chose ICT is because my field of interest is mainly focused around programming.
            During the years
            that i studied mechatronics we did alot of projects, from automated bridges, to Automated Guiding vehicles and
            eventually even a hoverboard. During these projects i was almost always responsible for the coding part of the
            projects. This caused me
            to have gained alot of experience with arduino IDE (python), Codeblocks(C/C++) and raspPi(linux/python). These
            were the parts i enjoyed the most from the program course. I mainly disliked the physics part of Mechatronics,
            so
            the dynamics and statics.</div>
        <div class="box3">
            The most interesting project during this time was the hoverboard. During this project it was my
            duty to create a vision system using a raspberryPi-cam which followed certain markers. This Vision system was
            entirely created in python, but the hard part was figuring out how to create a propper grid, which the
            hoverboard
            could use in its driving system. In the photo, which can be seen in this block, you can see the "aruco-marker"
            being tracked and the corresponding grid showing around it. This grid is created by making an array of data
            points following the black and white corners of the markers.
        </div>
        <div class="box5">
            When the data points are created there was one more hard part which i was also responsible for, the
            datacommunication between the raspberrypi and the arduino. Although it was not easy to figure out, i eventually
            found a way to send data from the raspberrypi(slave) to the arduino(master). I made it work by doing something
            pretty funny, instead of immidiately trying to create a connection between the two devices i started by creating
            a virtual master and virtual slave in my local Spyder server. This made things way easier and gave my team a
            good view of how it looked(i was pretty proud of that part).

        </div>
        <div class="box4">
            <video autoplay controls>
                <source src="Videos/Vision-Grid.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            The grid displayed on the screen and the data points beside it.
        </div>
        <div class="box7">
            <video autoplay controls>
                <source src="Videos/End-Result.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            The end-result.
        </div>

    </div>
    <div class="wrapper-lower-mid-section">
        <div class="box1">After ICT?</div>
        <div class="box2">I am very intrested in the cyber security part of this study. The main reason is that you keep
            hearing on the news that companies, universities and people get hacked for money or data all the time. So i'm
            hoping to find a job in this area if possible. Furthermore i am also intrested in pursuing a masters degree in
            this area, but i have yet to decide which one, as there are alot of options and i personnally have to broaden my
            view a bit more.</div>
    </div>
    <!--end grid mid section-->


    <!--bottom bar-->
    <div class="bottom-bar">
        <ul>
            <li><a href="FloBroNoHomo#1557" class="bottom-logos fab fa-discord"></a></li>
            <li><a href="https://www.twitch.tv/grflows" class="bottom-logos fab fa-twitch"></a></li>
            <li><a href="https://steamcommunity.com/profiles/76561198280032104/" class="bottom-logos fab fa-steam"></a></li>
            <li><a href="https://www.instagram.com/floooo0o/" class="bottom-logos fab fa-instagram"></a></li>
            <li><a href="#" class="bottom-logos fab fa-whatsapp"></a></li>
        </ul>

    </div>
    <!--end bottom bar-->

</div>

    <!--als we hoobit theme doen:
  <div class="img-hobbitdoor thick-green-border">
  </div>
-->
</body>

</html>
