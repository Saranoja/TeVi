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
                    <h3>Short Summary</h3>
                    <p>In our overview of terrorism, we try to understand how the number of terrorist acts varies around the world and how it has changed over time. To do this, we need a clear and consistent definition of what terrorism is, and how it’s different from any other form of violence. This is not straightforward.</p>
                    <p>Terrorism is defined in the Oxford Dictionary as “the unlawful use of violence and intimidation, especially against civilians, in the pursuit of political aims.” We quickly see that this definition is unspecific and subjective. The issue of subjectivity in this case means that there is no internationally recognised legal definition of terrorism. Despite considerable discussion, the formation of a comprehensive convention against international terrorism by the <abbr title="United Nations">UN</abbr> has always been impeded by the lack of consensus on a definition.</p>
                    <p> The key problem is that terrorism is difficult to distinguish from other forms of political violence and violent crime, such as state-based armed conflict, non-state conflict, one-sided violence, hate crime, and homicide. The lines between these different forms of violence are often blurry. Here, we take a look at standard criteria of what constitutes terrorism, as well as how it might be distinguished from other forms of violence.</p>
                </div>
                <div class="pic">
                    <img src="Images/fatalities-from-terrorism.png" alt="Fatalities">
                </div>
            </section>
            <section class="team">
                <div class="first_column">
                    <h3> Project description. The team. </h3>
                    <video height="150" autoplay loop muted>
                        <source src="Images/IrinaWhite.mov">
                    </video>
                    <video height="150" autoplay loop muted>
                        <source src="Images/VicWhite.mov">
                    </video>
                    <p>Terrorism often dominates media coverage. We are informed about attacks as soon as they happen and many attacks claim the headlines. Whilst our attention is drawn to these events – just as the terrorists intend – such intense coverage can make it difficult to contextualize the true extent of terrorism. This is because the availability heuristic: our perceptions are heavily influenced by the most recent examples of it. We’re biased to recent events in the news because we can recall them quickly.</p>
                    <p> But how many people die from terrorism relative to other causes? </p>
                </div>
                <div class="second_column">
                    <p> TeVi is a flexible Web data visualizer regarding worldwide terrorism, based on our own REST API. The statistics, views and maps can be exported ans CSV, PNG or SVG. The system offers support for multi-criterial search of repported incidents, including details from other external resources. </p>
                    <p> To better understand the global picture we can draw upon data from the World Values Survey (WVS). The <abbr title="World Values Survey">WVS</abbr>  is a global research project running for decades, which assesses public opinion on a wide range of values and beliefs. For a range of questions it provides comparable data from across the world. </p>
                    <p> In its surveys from 2010 to 2014, it asked the question: “To what degree are you worried about the following? A terrorist attack.” Unfortunately not all countries were included in this particular question in the surveys. But the data is complete enough to provide perspectives across the world regions.</p>
                    <p> In the map we see the share of respondents who said they worry “very much” or “a great deal” about a terrorist attack. Similar to the results we presented above, 52% of US respondents said they were worried. But, compared to other countries this was relatively low. In some countries almost everyone said they were worried: Rwanda, Tunisia, Georgia, Malaysia and Haiti had over 90%. Across many countries in the Middle East, Southeast Asia, Africa and Latin America more than 8-in-10 said they were worried.</p>
                </div>
            </section>
            <footer>
                <div class="ipad_view">
                    <img src="Images/Project.png" alt="Worries">
                </div>
            </footer>
        </div>
    </body>
</html>