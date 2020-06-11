<!DOCTYPE html>
<html lang="en">

<head>
    <title> TeVi - Home Page </title>
    <?php getBaseHead(); ?>
    <link rel="stylesheet" href="../style/HomePage.css">
    <script src="../js/mobileMenu.js"></script>
</head>

<body id="whole_body">
    <?php getMenuInfo();
    initModal(); ?>

    <div class="page_wrapper">
        <header class="upper_intro">
            <div class="page_title">
                <h1> TeVi </h1>
                <h2> A GLOBAL TERRORISM VISUALIZER </h2>
            </div>
        </header>
        <section class="summary">
            <div class="text">
                <h3>Short Summary - Abstract </h3>
                <p> Terrorism often dominates media coverage. We are informed about attacks as soon as they happen and many attacks claim the headlines. Whilst our attention is drawn to these events – just as the terrorists intend – such intense coverage can make it difficult to contextualize the true extent of terrorism. This is because the availability heuristic: our perceptions are heavily influenced by the most recent examples of it. We’re biased to recent events in the news because we can recall them quickly.</p>
                <p> But how many people die from terrorism relative to other causes? How often do these attacks happen, who makes them happen and what do they use? </p>
            </div>
            <div class="pic">
                <img src="../img/undraw_statistic_chart_38b6.svg" alt="DataAnalysis">
            </div>
        </section>
        <section class="team">
            <div class="first_column">
                <div class="pic">
                    <img src="../img/undraw_online_transactions_02ka.svg" alt="DataAnalysis">
                </div>
            </div>
            <div class="second_column">
                <p> And so we designed TeVi. </p>
                <p> TeVi is a flexible Web data visualizer regarding worldwide terrorism, based on our own RESTful API. The statistics, views and maps can be exported as CSV, PNG or SVG. The system offers support for multi-criterial search of repported incidents, including details from external resources, like Kaggle's GTD. </p>
                <p> To better understand the global picture we can draw upon data from the World Values Survey (WVS). The <abbr title="World Values Survey">WVS</abbr> is a global research project running for decades, which assesses public opinion on a wide range of values and beliefs. For a range of questions it provides comparable data from across the world. </p>
            </div>
        </section>
        <section class="team">
            <div class="first_column">
                <h3> The project. The team. </h3>
                <p> In our overview of terrorism, we try to understand how the number of terrorist acts varies around the world and how it has changed over time. To do this, we need a clear and consistent definition of what terrorism is, and how it’s different from any other form of violence. This is not straightforward.</p>

            </div>
            <div class="second_column">
                <div class="pic">
                    <img src="../img/undraw_work_together_h63l.svg" alt="DataAnalysis">
                </div>
            </div>
        </section>
        <footer>
            <section class='social'>
                <h4>
                    Where can you find us? 😄
                </h4>
                <div class="social_wrap">
                    <div class="social_irina">
                        <h5>
                            Irina Calin 🕵️‍♀️:
                        </h5>
                        <div class='social_links'>
                            <a href="https://www.linkedin.com/in/irina-c-4aa058115/" target="_blank" class='img_link w-inline-block'> <img src='http://localhost/TeVi/public/img/linkedin.png' alt="linkedin"> </a>
                            <a href="https://github.com/Saranoja" target="_blank" class='img_link w-inline-block'> <img src='http://localhost/TeVi/public/img/git.png' alt="github"> </a>
                            <a href="https://www.facebook.com/irina.psqa" target="_blank" class='img_link w-inline-block'> <img src='http://localhost/TeVi/public/img/facebook.png' alt="facebook"> </a>
                        </div>
                    </div>
                    <div class="social_victor">
                        <h5>
                            Victor-Ionut Platon 🕵️‍♂️:
                        </h5>
                        <div class='social_links'>
                            <a href="https://github.com/Victronic" target="_blank" class='img_link w-inline-block'> <img src='http://localhost/TeVi/public/img/git.png' alt="github"> </a>
                            <a href="https://www.facebook.com/victor.platon.5686" target="_blank" class='img_link w-inline-block'> <img src='http://localhost/TeVi/public/img/facebook.png' alt="facebook"> </a>
                        </div>
                    </div>
                    <div class="social_bogdan">
                        <h5>
                            Bogdan-Mihail Peltea 🕵️‍♂️:
                        </h5>
                        <div class='social_links'>
                            <a href="https://github.com/BogdanMhi" target="_blank" class='img_link w-inline-block'> <img src='http://localhost/TeVi/public/img/git.png' alt="github"> </a>
                            <a href="https://www.facebook.com/mhibogdan" target="_blank" class='img_link w-inline-block'> <img src='http://localhost/TeVi/public/img/facebook.png' alt="facebook"> </a>
                        </div>
                    </div>
                </div>
                <div class="additional_info">
                    <p> Project developed for the 2nd year Web Technologies Course at the Faculty of Computer science, UAIC Iasi. </p>
                </div>
            </section>
        </footer>
    </div>
</body>

</html>