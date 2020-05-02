<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title> TeVi - Resources </title>
        <link rel="icon" type="image/ico" href="Images/SEO.png" />
        <link rel="stylesheet" href="Styles/All.css">
        <link rel="stylesheet" href="Styles/Resources.css">

        <meta name="terrorism" content="all">
        <meta name="author" content="Irina Calin, Victor-Ionut Platon and Bogdan-Mihail Peltea">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A web global terrorism visualizer">
        <script src="Scripts/mobileMenu.js"></script>
    </head>
    <body id="whole_body">
        <div class="menu-info">
            <img class="img-logo" src="Styles/Backgrounds/LOGO.svg">
                <ul class="nav-area">
                <li><a href="HomePage.php" class="home">home</a></li>
                <li><a href="Stats.php">statistics</a></li>
                <li><a href="Resources.php">resources</a></li>
            </ul>
        </div>

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

        <div class="page_wrapper">
            <header class="upper_intro">   
                <div class="page_title">
                    <h1> TeVi </h1>
                    <h2> RESOURCES </h2>
                </div>
            </header>
            <div class="contentinfo">
                <dl>
                  <dt>Authors</dt>
                  <dd>
                    Irina Calin &amp; Victor-Ionut Platon &amp; Bogdan-Mihail Peltea
                  </dd>
                  <dt>Coordinator</dt>
                  <dd>
                    <a href="https://profs.info.uaic.ro/~andrei.panu/">  Lect. Dr. Panu Andrei </a> @University Alexandru Ioan Cuza of Iasi, Faculty of Computer Science
                  </dd>
                </dl>
            </div>
            <section typeof="sa:Abstract" id="abstract" role="doc-abstract">
                <h3>Abstract</h3>
                    <p>
                    In the past few decades, web technology has undergone a dramatic transition, from a few marked up web pages to the ability to do very specific work on a network without interruption.
                    </p>
            </section>
            <section typeof="sa:Introduction" id="introduction" role="doc-intro">
                <h3>Introduction</h3>
                <p>
                    TeVi is a flexible Web data visualizer regarding worldwide terrorism, based on our own REST API. The statistics, views and maps can be exported ans CSV, PNG or SVG. The system offers support for multi-criterial search of repported incidents, including details from other external resources.
                    Its purpose is to both help specialists and inform the public regarding terrorist attacks from the past 50 years. 
                </p>
            </section>
            <section typeof="sa:Structure" id="structure" role="doc-struct">
                <h3> Structure </h3>
                <p>
                    Our Web application should be three-tiered, based on the MVC architectural model. 
                    The web browser sends requests to the middle tier (written in PHP), which services them by making queries and updates against the database and generates a user interface.
                </p>
                <div class="pic">
                    <img src="Images/MVCdiagram.png" alt="MVC" height="220px">
                </div>
            </section>
            <section typeof="sa:Validation" id="validation" role="doc-struct">
                <h3> Validation </h3>
                <p>
                    TeVi's interface has been validated using W3C Validator for both the HTML part and the CSS part. We have also used CSS Lint in order to check the existence of any error.
                    For the whole project, we used Measure @web.dev. 
                </p>
            </section>
            <section typeof="sa:Remarks" id="remarks" role="doc-struct">
                <h3> Remarks regarding our design </h3>
                <div class="measures">
                    <div class="icon">
                        <img src="Images/Practices.svg" alt="BestPractices">
                        <h4> Best Practices </h4>
                        <p>  </p>
                    </div>
                    <div class="icon">
                        <img src="Images/SEO.svg" alt="SEO">
                        <h4> SEO </h4>
                        <p>  </p>
                    </div>
                    <div class="icon">
                        <img src="Images/Accessibility.svg" alt="Accessibility">
                        <h4> Accessibility </h4>
                        <p>  </p>
                    </div>
                    <div class="icon">
                        <img src="Images/Speed.svg" alt="Speed">
                        <h4> Hosting </h4>
                        <p>

                        </p>
                    </div>
                </div>
            </section>
            <section typeof="sa:References" id="references" role="doc-refs">
                <h3>References</h3>
                <ul class="ref_links">
                    <li class="bullet">
                        <a href="https://html.spec.whatwg.org/multipage/" target="_blank">HTML</a>
                    </li>
                    <li class="bullet">
                        <a href="https://study.com/academy/lesson/what-is-web-technology-definition-trends.html" target="_blank">Web Technologies</a>
                    </li>
                    <li class="bullet">
                        <a href="https://ourworldindata.org/terrorism" target="_blank">Our World in Data on Terrorism</a>
                    </li>
                    <li class="bullet">
                        <a href="https://www.kaggle.com/START-UMD/gtd" target="_blank">Kaggle</a>
                    </li>
                    <li class="bullet">
                        <a href="https://validator.w3.org/" target="_blank">W3C Validator</a>
                    </li>
                    <li class="bullet">
                        <a href="https://web.dev/measure/" target="_blank">Measure @web.dev</a>
                    </li>
                </ul>
            </section>
            <footer>
            </footer>
        </div>
    </body>
</html>