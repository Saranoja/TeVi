<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="Styles/StartPage.css">
        <title>TeVi</title>
    </head>
    <body>
          
        <img class="img-left" src="Styles/Backgrounds/bg-left.svg">
        <img class="img-right" src="Styles/Backgrounds/bg-right.svg">
        <img class="img-right-mobile" src="Styles/Backgrounds/bg-right-mobile.svg">

        <ul class="nav-area">
            <!-- <li><a href="HomePage.php">home</a></li>
            <li>|</li> -->
            <li><a href="Stats.php">statistics</a></li>
            <li>|</li>
            <li><a href="Resources.php">resources</a></li>
        </ul>

        <button onclick="openPopout()" id="menu" class="mobile-menu" type="button"></button>

        <!--    Pop-out menu-->
        <div class="bg-modal">
            <div class="modal-contents">

                <div onclick="closePopout()" class="close">+</div>
                <form action="">
                    <ul class="mobile-menu-text">
                        <li><a href="HomePage.php">home</a></li>
                        <li><a href="Stats.php">statistics</a></li>
                        <li><a href="Resources.php">resources</a></li>
                    </ul>
                </form>
             </div>
        </div>

        <div class="wrapper">
            <div class="info-page">
                <h5>TeVi</h5>
                <p>A global terrorism <br>visualizer</p>
            </div>
            <div clas="button-wrap">
                <button onclick="location.href='HomePage.php'" class="get-started-button" type="button">Get started</button>
            </div>
            <div class="extra-info">
                <p >TeVi is a flexible Web data visualizer regarding worldwide terrorism, based on our own RESTful API. The statistics, views and maps can be exported as CSV, PNG or SVG.</p>
            </div>
        </div>

        <script src="Scripts/mobileMenu.js"></script>
    </body>
</html>
