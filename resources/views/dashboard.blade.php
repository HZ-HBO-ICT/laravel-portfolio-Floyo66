
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/StyleSheet.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

    <!-- awesome font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
    <!-- main css code -->

</head>

<body>

<!--navigation bar-->
<nav class="navigatiebar">

    <div class="title-name">
        <h2>Dashboard</h2>
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
<!--end navigation bar-->
<!--einde van de links-->
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
        <li><a href="https://teams.microsoft.com/_?culture=nl-nl&country=NL&lm=deeplink&lmsrc=homePageWeb&cmpid=WebSignIn#/school/conversations/Algemeen?threadId=19:2e2afa0286b04932be16cb8ad2d9d2c0@thread.skype&ctx=channel"><i class="fas fa-user-friends"></i>Teams </a></li>
        <li><a href="https://apps.hz.nl/angular/studievoortgang/studiestatus"><i class="fas fa-tasks"></i>Study Progress</a></li>
        <li><a href="https://github.com/Flootjevd"><i class="fab fa-github"></i>Github</a></li>


    </ul>

</div>
<!--end sidebar-->
<!--bottem Bar-->

<!--end bottem bar-->
<!--Table-->
<table class="styling-border-table">
    <caption>Study Monitor</caption>
    <tr>
        <th>Quartile</th>
        <th>Course</th>
        <th>EC</th>
        <th>Assessment</th>
        <th>Grade</th>

    </tr>
    <tr>
        <td rowspan="3" , style="background-color:rgb(87, 87, 87)">1</td>
        <td style="background-color:rgb(87, 87, 87)">Programme and Career Orientation</td>
        <td style="background-color:rgb(87, 87, 87)">2,5</td>
        <td style="background-color:rgb(87, 87, 87)">Assessment</td>
        <td style="background-color:rgb(87, 87, 87); color:red">...</td>
    </tr>
    <tr>
        <td>Computer Science Basics</td>
        <td>5</td>
        <td>Written exam</td>
        <td style="color:red">...</td>
    </tr>
    <tr>
        <td style="background-color:rgb(87, 87, 87)">Programming Basics</td>
        <td style="background-color:rgb(87, 87, 87)">5</td>
        <td style="background-color:rgb(87, 87, 87)">Case study exam</td>
        <td style="background-color:rgb(87, 87, 87); color:red">...</td>
    </tr>
    <tr>
        <td rowspan="2">2</td>
        <td rowspan="2">Project Oriented Programming</td>
        <td rowspan="2">10</td>
        <td>Case Study</td>
        <td style="color:red">...</td>
    </tr>
    <tr>
        <td>Project</td>
        <td style="color:red">...</td>
    </tr>
    <tr>
        <td rowspan="4" , style="background-color:rgb(87, 87, 87)">3</td>
        <td style="background-color:rgb(87, 87, 87)">Framework Development 1</td>
        <td style="background-color:rgb(87, 87, 87)">5</td>
        <td style="background-color:rgb(87, 87, 87)">Case Study</td>
        <td style="background-color:rgb(87, 87, 87); color:red">...</td>
    </tr>
    <tr>
        <td rowspan="3" , style="background-color:rgb(87, 87, 87)">Framework Project 1</td>
        <td rowspan="3" , style="background-color:rgb(87, 87, 87)">7,5</td>
        <td style="background-color:rgb(87, 87, 87)">Project</td>
        <td style="background-color:rgb(87, 87, 87); color:red">...</td>
    </tr>
    <tr>
        <td style="background-color:rgb(87, 87, 87)">Assesment</td>
        <td style="background-color:rgb(87, 87, 87); color:red">...</td>
    </tr>
    <tr>
        <td style="background-color:rgb(87, 87, 87)">Report</td>
        <td style="background-color:rgb(87, 87, 87); color:red">...</td>
    </tr>
    <tr>
        <td rowspan="3">3</td>
        <td rowspan="3">Framework Project 2</td>
        <td rowspan="3">10</td>
        <td>Portfolio</td>
        <td style="color:red">...</td>
    </tr>
    <tr>
        <td>Project</td>
        <td style="color:red">...</td>
    </tr>
    <tr>
        <td>Assesment</td>
        <td style="color:red">...</td>
    </tr>
</table>

<!--end table-->
<!--Progress Bar (maybe add javascript simulation later)-->
<div class="progress-bar" style="--width: 5" data-label="BSA Loading...">
</div>
<!--end Progress bar-->
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
<!--als we hobbit theme doen:
<div class="img-hobbitdoor thick-green-border">

</div>
-->

</body>

</html>
