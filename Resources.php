<!DOCTYPE html>
<?php 
include_once "StatsControllers/headInit.php";
include_once "StatsControllers/menuInit.php";
include_once "StatsControllers/modalInit.php";
?>
<html lang="en">
    <head>
        <title> TeVi - Resources </title>
        <?php getBaseHead(); ?>
        <link rel="stylesheet" href="Styles/Resources.css">
        <script src="Scripts/mobileMenu.js"></script>
    </head>
    <body id="whole_body">
        <?php getMenuInfo(); initModal(); ?>

        
        <header class="upper_intro">   
            <div class="page_title">
                <h1> TeVi </h1>
                <h2> RESOURCES </h2>
            </div>
        </header>


        <div class="contentinfo">   
            <ol role="directory">
                <li><a href="#abstract"><span>1.</span> Abstract</a> </li>
                <li><a href="#introduction"><span>2.</span> Introduction</a> </li>
                <li>
                    <a href="#mainRequirements"><span>3.</span> Main requirements</a> 
                    <ol role="directory">
                        <li>
                            <a href="#features"><span>3.1</span> Main features of the app</a>
                            <ol role="directory">
                                <li><a href="#structure"><span>3.1.1</span> Structure</a></li>
                                <li><a href="#validation"><span>3.1.1</span> Validation</a></li> 
                            </ol>
                        </li>
                        <li><a href="#interaction"><span>3.2</span> User interaction</a></li>
                        <li>
                            <a href="#remarks"><span>3.3</span> Remarks regarding our design</a>
                            <ol role="directory">
                                <li><a href="#practices"><span>3.3.1</span> Best Practices</a></li>
                                <li><a href="#SEO"><span>3.3.2</span> SEO</a></li>
                                <li><a href="#accessibility"><span>3.3.3</span> Accessibility</a></li>
                                <li><a href="#hosting"><span>3.3.4</span> Hosting</a></li>
                            </ol>
                        </li>
                    </ol>
                </li>
                <li>
                    <a href="#projectProgress"><span>4.</span> Project progress</a>
                    <ol>
                        <li><a href="#arhitecture"><span>4.1</span> Overall architecture</a></li>
                        <li><a href="#stages"><span>4.2</span> Intermediate stages of project development</a></li>
                        <li><a href="#howToUse"><span>4.3</span> How to use the chosen source code management system</a></li>
                    </ol> 
                </li>
                <li><a href="#guide"><span>5.</span> User guide</a></li>
                <li><a href="#acknowledgements"><span>6.</span> Acknowledgements</a></li>
                <li><a href="#references"><span>7.</span> References</a></li>
            </ol>
            
            <!--A description list, with terms and descriptions-->
            <dl>
                <dt>Authors</dt>
                    <dd>
                    Irina Calin &amp; Victor-Ionut Platon &amp; Bogdan-Mihail Peltea
                    </dd>
                <dt>Coordinator</dt>
                    <dd>
                    <a href="https://profs.info.uaic.ro/~andrei.panu/">  Lect. Dr. Panu Andrei </a> @University Alexandru Ioan Cuza of Iasi, Faculty of Computer Science
                    </dd>
                <dt>Bugs & Feedback</dt>
                    <dd>
                        <p>link git</p>
                    </dd>
                <dt>License</dt>
                    <dd>
                    <p>licente utilizate</p>
                    </dd>
            </dl>
        </div>

        <section typeof="sa:Abstract" id="abstract" role="doc-abstract">
            <h3><span>1.</span> Abstract</h3>
                <p>
                In the past few decades, web technology has undergone a dramatic transition,
                from a few marked up web pages to the ability to do very specific work on a
                network without interruption.
                </p>


                <p>Our high-level goals are to:</p>
                <ul>
                    <li>
                    Sa se creeze un instrument Web de
                    vizualizare flexibila a datelor privitoare la terorismul global,
                    pe baza unui API REST/GraphQL propriu
                    </li>
                    <li>Statisticile si vizualizarile generate – minim 3 maniere + redari cartografice,
                        pe regiuni, recurgand la servicii Web de profil – vor putea fi exportate in formatele CSV, PNG si SVG.
                    </li>
                    <li>Sistemul va oferi suport si pentru cautarea multi-criteriala de incidente raportate,
                        inclusiv detalii suplimentare privind armele folosite – se va recurge la surse de date externe.</li>
                </ul>
        </section>

        <section id="introduction" role="doc-introduction">
            <h3><span>2.</span> Introduction</h3>
            <p>
                TeVi is a flexible Web data visualizer regarding worldwide terrorism, based on our own REST API. The statistics, views and maps can be exported ans CSV, PNG or SVG. The system offers support for multi-criterial search of repported incidents, including details from other external resources.
                Its purpose is to both help specialists and inform the public regarding terrorist attacks from the past 50 years. 
            </p>
        </section>

        <section id="mainRequirements">
            <h3><span>3.</span> Main requirements</h3>
            <p><p>
            <section id="features">
                <h4><span>3.1</span> Main features of the app</h4>
                <p></p>
                <section id="structure">
                    <h5><span>3.1.1</span> Structure</h5>
                    <p>
                    Our Web application should be three-tiered, based on the MVC architectural model. 
                    The web browser sends requests to the middle tier (written in PHP), which services
                    them by making queries and updates against the database and generates a user interface.
                    </p>
                    <img src="Images/MVCdiagram.png" alt="MVC">
                </section>
                <section id="validation">
                    <h5><span>3.1.2</span>Validation</h5>
                    <p>
                    TeVi's interface has been validated using W3C Validator for both the HTML part and the CSS part.
                    We have also used CSS Lint in order to check the existence of any error.
                    For the whole project, we used Measure @web.dev. 
                    </p>
                </section>
            </section>
            <section id="interaction">
                <h4><span>3.2</span> User interaction</h4>
                <p></p>
            </section>
            <section id="remarks">
                <h4><span>3.3</span> Remarks regarding our design</h4>
                <p></p>
                <section id="practices">
                    <h5><span>3.3.1</span> Best Practices</h5>
                    <img src="Images/Practices.svg" alt="BestPractices">
                    <p></p>
                </section>
                <section id="SEO">
                    <h5><span>3.3.2</span> SEO</h5>
                    <img src="Images/SEO.svg" alt="SEO">
                    <p></p>
                </section>
                <section id="accessibility">
                    <h5><span>3.3.3</span> Accessibility</h5>
                    <img src="Images/Accessibility.svg" alt="Accessibility">
                    <p></p>
                </section>
                <section id="hosting">
                    <h5><span>3.3.4</span> Hosting</h5>
                    <img src="Images/Speed.svg" alt="Hosting">
                    <p></p>
                </section>
            </section>
        </section>

        <section id="projectProgress">
            <h3><span>4.</span> Project progress</h3>
            <p></p>
            <section id="arhitecture">
                <h4><span>4.1</span> Architecture</h4>
                <p></p>
            </section>
            <section id="stages">
                <h4><span>4.2</span> Intermediate stages of project development</h4>
                <p><p>
            </section>
            <section id="howToUse">
                <h4><span>4.3</span> How to use the chosen source code management system</h4>
                <p></p>
            </section>
        </section>

        <section id="guide">
            <h3><span>5.</span> User guide</h3>
            <p></p>
        </section>

        <section id="acknowledgements">
            <h3><span>6.</span> Acknowledgements</h3>
            <p></p>
        </section>

        <section id="references">
            <h3><span>7.</span> References</h3>
            <dl>
                <dt id="HTML" >HTML</dt>
                <dd property="schema:citation" typeof="schema:WebPage" resource="https://html.spec.whatwg.org/multipage/">
                    <cite property="schema:name">
                        <a href="https://html.spec.whatwg.org/multipage/" target="_blank">HTML Living Standrad</a>
                    </cite>
                </dd>
                <dt id="webTeh">Web Technologies</dt>
                <dd property="schema:citation" typeof="schema:WebPage" resource="https://study.com/academy/lesson/what-is-web-technology-definition-trends.html">
                    <cite property="schema:name">
                        <a href="https://study.com/academy/lesson/what-is-web-technology-definition-trends.html" target="_blank">Web Technologies</a>
                    </cite>
                </dd>
                <dt id="webTeh">Our World in Data on Terrorism</dt>
                <dd property="schema:citation" typeof="schema:WebPage" resource="https://ourworldindata.org/terrorism">
                    <cite property="schema:name">
                        <a href="https://ourworldindata.org/terrorism" target="_blank">Our World in Data on Terrorism</a>
                    </cite>
                </dd>
                <dt id="webTeh">Kaggle</dt>
                <dd property="schema:citation" typeof="schema:WebPage" resource="https://www.kaggle.com/START-UMD/gtd">
                    <cite property="schema:name">
                        <a href="https://www.kaggle.com/START-UMD/gtd" target="_blank">Kaggle</a>
                    </cite>
                </dd>
                <dt id="webTeh">W3C Validator</dt>
                <dd property="schema:citation" typeof="schema:WebPage" resource="https://validator.w3.org/">
                    <cite property="schema:name">
                        <a href="https://validator.w3.org/" target="_blank">W3C Validator</a>
                    </cite>
                </dd>
                <dt id="webTeh">Measure @web.dev</dt>
                <dd property="schema:citation" typeof="schema:WebPage" resource="https://web.dev/measure/">
                    <cite property="schema:name">
                        <a href="https://web.dev/measure/" target="_blank">Measure @web.dev</a>
                    </cite>
                </dd>
                <!-- Model
                <dt id=""></dt>
                <dd property="schema:citation" typeof="schema:WebPage" resource="">
                    <cite property="schema:name">
                        <a href="" target="_blank"></a>
                    </cite>
                </dd>
                -->
            </dl>
        </section>
    </body>
</html>