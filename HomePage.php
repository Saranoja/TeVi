<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title> TeVi - Home Page </title>

        <link rel="stylesheet" href="Styles/HomePage.css">

        <meta name="terrorism" content="all">
        <meta name="author" content="Irina Calin and Victor-Ionut Platon">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A web global terrorism visualizer">
    </head>
    <body id="whole_body">
        <div class="page_wrapper">
            <header class="upper_intro">
                <div class="page_title">
                    <h1> TeVi </h1>
                    <h2> A global terrorism visualizer.</h2>
                </div>
                <nav class="navigation">
                    <ul class="nav_bar">
                        <li><a class="nav_option" id="hover" href="#home">Home</a></li>
                        <li><a class="nav_option" href="Stats.php">Statistics</a></li>
                        <!-- <li><a class="nav_option" href="Maps.php">Maps</a></li> -->
                        <li><a class="nav_option" href="Resources.php">Resources</a></li>
                    </ul>
                    <form>
                        <input type="search" placeholder="Search...">
                        <input type="submit" value="Submit">
                    </form>
                </nav>
            </header>
            <section class="summary">
                <div class="text">
                    <h3>Short Summary - Abstract </h3>
                    <p> Terrorism often dominates media coverage. We are informed about attacks as soon as they happen and many attacks claim the headlines. Whilst our attention is drawn to these events – just as the terrorists intend – such intense coverage can make it difficult to contextualize the true extent of terrorism. This is because the availability heuristic: our perceptions are heavily influenced by the most recent examples of it. We’re biased to recent events in the news because we can recall them quickly.</p>
                    <p> But how many people die from terrorism relative to other causes? How often do these attacks happen, who makes them happen and what do they use? </p>
                </div>
                <div class="pic">
                    <img src="Images/fatalities.png" alt="Fatalities">
                </div>
            </section>
            <section class="team">
                <div class="first_column">
                    <h3> The project. The team. </h3>
                    <video height="150" autoplay loop muted>
                        <source src="Images/IrinaWhite.mov">
                    </video>
                    <video height="150" autoplay loop muted>
                        <source src="Images/VicWhite.mov">
                    </video>
                    <p> In our overview of terrorism, we try to understand how the number of terrorist acts varies around the world and how it has changed over time. To do this, we need a clear and consistent definition of what terrorism is, and how it’s different from any other form of violence. This is not straightforward.</p>

                </div>
                <div class="second_column">
                    <p> And so we designed TeVi. </p>
                    <p> TeVi is a flexible Web data visualizer regarding worldwide terrorism, based on our own RESTful API. The statistics, views and maps can be exported as CSV, PNG or SVG. The system offers support for multi-criterial search of repported incidents, including details from external resources, like Kaggle's GTD. </p>
                    <p> To better understand the global picture we can draw upon data from the World Values Survey (WVS). The <abbr title="World Values Survey">WVS</abbr>  is a global research project running for decades, which assesses public opinion on a wide range of values and beliefs. For a range of questions it provides comparable data from across the world. </p>
                </div>
            </section>
            <footer>
                <div class="ipad_view">
                    <img src="Images/Coding.gif" alt="Fatalities">
                </div>
            </footer>
        </div>
    </body>
</html>