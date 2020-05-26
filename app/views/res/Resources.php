<!DOCTYPE html>
<?php 
include_once "../StatsControllers/headInit.php";
include_once "../StatsControllers/menuInit.php";
include_once "../StatsControllers/modalInit.php";
?>
<html lang="en">
    <head>
        <title> TeVi - Resources </title>
        <?php getBaseHead(); ?>
        <link rel="stylesheet" href="../styles/Resources.css">
        <script src="js/mobileMenu.js"></script>
    </head>
    <body id="whole_body">
        <?php getMenuInfo(); initModal(); ?>

        
        <header class="upper_intro">   
            <div class="page_title">
                <h1> TeVi </h1>
                <h2> RESOURCES </h2>
            </div>
        </header>


        <div role="contentinfo">   
            <ol role="directory">
                <li><a href="#abstract"><span>1.</span> Abstract</a> </li>
                <li><a href="#introduction"><span>2.</span> Introduction</a> </li>
                <li>
                    <a href="#mainRequirements"><span>3.</span> Main requirements</a> 
                    <ol role="directory">
                        <li>
                            <a href="#features"><span>3.1</span> Main features of the app</a>
                            <ol role="directory">
                                <li><a href="#framework"><span>3.1.1</span> Framework-uri</a></li>
                                <li><a href="#structure"><span>3.1.2</span> Structure - MVC</a></li>
                                <li><a href="#storage"><span>3.1.3</span> Storage</a></li>
                                <li>
                                    <a href="#interface"><span>3.1.4</span> User Interface</a>
                                    <ol role="directory">
                                        <li><a href="#html"><span>3.1.4.1</span> HTML</a></li>
                                        <li><a href="#css"><span>3.1.4.2</span> CSS</a></li>
                                        <li><a href="#ajax"><span>3.1.4.3</span> Ajax</a></li>
                                    </ol>
                                </li>
                                <li><a href="#others"><span>3.1.5</span> Other mandatory requirements</a></li>
                                <li><a href="#validation"><span>3.1.6</span> Validation</a></li> 
                            </ol>
                        </li>
                        <li><a href="#interaction"><span>3.2</span> User interaction</a></li>
                        <li>
                            <a href="#remarks"><span>3.3</span> Remarks regarding our design</a>
                            <ol role="directory">
                                <li><a href="#practices"><span>3.3.1</span> Best Practices</a></li>
                                <li><a href="#SEO"><span>3.3.2</span> SEO</a></li>
                                <li><a href="#accessibility"><span>3.3.3</span> Accessibility</a></li>
                                <li><a href="#performance"><span>3.3.4</span> Performance</a></li>
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
                    <a href="https://github.com/Saranoja/TeVi?fbclid=IwAR0Xni66BoOZgYvNVofIuAt6RQtMZtzuFQlmIlvlifYfim4CsXiyIM-SvWw">Git Project</a>
                    </dd>
                <dt>License</dt>
                    <dd>
                    licente utilizate
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
        </section>

        <section id="introduction" role="doc-introduction">
            <h3><span>2.</span> Introduction</h3>
            <p>
                TeVi is a flexible Web data visualizer regarding worldwide terrorism, based on our own REST API. The statistics,
                views and maps can be exported ans CSV, PNG or SVG. The system offers support for multi-criterial search of repported incidents,
                including details from other external resources.
                Its purpose is to both help specialists and inform the public regarding terrorist attacks from the past 50 years. 
            </p>
        </section>

        <section id="mainRequirements">
            <h3><span>3.</span> Main requirements</h3>
            <p>
                Create a Web tool for flexible visualization of global terrorism data, based on its own REST / GraphQL API.
                The statistics and visualizations generated - minimum 3 modes + cartographic renderings, by regions,
                using profile Web services - can be exported in CSV, PNG and SVG formats.
                The system will also provide support for multi-criteria search for reported incidents,
                including additional details on weapons used - external data sources will be used.
            </p>
            <section id="features">
                <h4><span>3.1</span> Main features of the app</h4>
                <p>
                
                </p>
                <section id="framework">
                    <h5><span>3.1.1</span> Frmework-uri</h5>
                    <p class="bold">We can not use frameworks at the server or client level!</p>
                    <p>
                        Frameworks should be avoided in the learning phase of a discipline.
                        They hide details, often favor superficiality and usually have a relatively short life.
                    </p>
                    <p>
                        Students at the beginning must be prepared to know and deepen the vision,
                        concepts and methodologies essential for a field of interest.
                        An FII graduate should not be likened to a “worker” with a computer - that is,
                        a simple user of tools (programming, design, testing, maintenance, ...).
                        This graduate must prove that he is able to create (design, implement, develop),
                        evaluate (compare and / or critique) and improve such tools - in our case, those aimed at Web technologies.
                    </p>
                </section>
                <section id="structure">
                    <h5><span>3.1.2</span> Structure - MVC</h5>
                    <p>The MVC (Model-View-Controller) pattern separates the code in three conceptual units:</p>
                    <ul>
                        <li>The Model represents the business logic;</li>
                        <li>The View represents a widget in the UI: a button, text box, etc.;</li>
                        <li>
                            The Controller provides for coordination between the view and the model. This means it:
                            <ul>
                                <li>Decides what views to show, and with what data;</li>
                                <li>Translates user actions (ie. click of a button) into business logic.</li>
                            </ul>
                        </li>
                    </ul>
                    <p>Other important concepts to know about the original MVC pattern is that:</p>
                    <ul>
                        <li>The view uses the Model data objects directly, to show their data;</li>
                        <li>When the model data changes, it triggers an event that immediately updates the View;</li>
                        <li>Each view is, typically, associated to one controller;</li>
                        <li>Each screen can contain several pairs of view & controller;</li>
                        <li>There could be multiple views for each controller.</li>
                    </ul>
                    <p>
                        Our Web application should be three-tiered, based on the MVC architectural model. 
                        The web browser sends requests to the middle tier (written in PHP), which services
                        them by making queries and updates against the database and generates a user interface.
                    </p>
                    <img src="../img/MVCdiagram.png" alt="MVC">
                </section>
                <section id="storage">
                    <h5><span>3.1.3</span> Storage</h5>
                    <p>
                        For our project we have choose to use <a href="https://guides.github.com/" target="blank">GitHub</a> as our
                        online storage system and management of the source code.
                    </p>
                    <p>
                        For data storage and management, we used relational database servers, queried via SQL.
                    </p>
                </section>
                <section id="interface">
                    <h5><span>3.1.4</span> User Interface</h5>
                    <p>
                    </p>
                    <section id="html">
                        <h6><span>3.1.4.1</span> HTML</h6>
                        <p>TeVi is marked in HTML5 for the client side, the application / website interface.</p>
                        <p>
                            HTML5 is the latest evolution of the standard that defines HTML. The term represents two different concepts.
                            It is a new version of the language HTML, with new elements, attributes, and behaviors, and a larger set of
                            technologies that allows the building of more diverse and powerful Web sites and applications.
                        </p>
                        <p>
                            Designed to be usable by all Open Web developers HTML5 comes with a lot of features and advantages.
                            Such features includes a lot of sections and outliners, form, imporvement in iframe, and much more.
                            It provides both online support, with 
                            <a href="https://developer.mozilla.org/en-US/docs/Web/API/WebSockets_API" target="blank">Web Sockets</a>,
                            <a href="https://developer.mozilla.org/en-US/docs/Web/API/Server-sent_events/Using_server-sent_events" target="blank">Derver-set events</a>,
                            <a href="https://developer.mozilla.org/en-US/docs/Web/API/WebRTC_API" target="blank">WebRTC</a> ;
                            and offline support with application cache and offline events.
                            Multimedia support with new &lt;audio&gt; and &lt;video&gt; elements embed and allow the manipulation of new multimedia content.
                            2D/3D Graphics and Effects with the new <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/canvas" target="blank">&lt;canvas&gt;</a> element;
                        </p>
                    </section>
                    <section id="css">
                        <h6><span>3.1.4.2</span> CSS</h6>
                        <p>
                            We used CSS for styling our html pages. CSS has been extended to be able to style elements in a much more complex way.
                            This is often referred as CSS3.    
                        </p>
                        <p>CSS comes with a lot of cool features such as:</p>
                        <ul>
                            <li>New background styling features</li>
                            <li>More fancy borders</li>
                            <li>Animating your style</li>
                            <li>Typography improvement</li>
                            <li>New presentational layouts</li>
                        </ul>
                    </section>
                    <section id="ajax">
                        <h6><spam>3.1.4.3</spam> Ajax</h6>
                        <p></p>
                        <p>Ajax (Asynchronous JavaScript And XML) is not a programming language, instead it uses a combination of:</p> 
                        <ul>
                            <li>A browser built-in XMLHttpRequest object (to request data from a web server)</li>
                            <li>JavaScript and HTML DOM (to display or use the data)</li>
                        </ul>
                        <p>How Ajax works?</p> 
                        <ol>
                            <li><span>1.</span> An event occurs in a web page (the page is loaded, a button is clicked)</li>
                            <li><span>2.</span> An XMLHttpRequest object is created by JavaScript</li>
                            <li><span>3.</span> The XMLHttpRequest object sends a request to a web server</li>
                            <li><span>4.</span> The server processes the request</li>
                            <li><span>5.</span> The server sends a response back to the web page</li>
                            <li><span>6.</span> The response is read by JavaScript</li>
                            <li><span>7.</span> Proper action (like page update) is performed by JavaScript</li>
                        </ol>
                        <img class="big-picture" src="../img/Ajax_Schema.png" alt="Ajax"> 

                    </section>
                </section>
                <section id="others"> 
                    <h5><span>3.1.5</span> Other mandatory requirements</h5>
                    <ul>
                        <li>Adopting the principles of responsive web design.</li>
                        <li>Data import / export using open formats - minimum, CSV.</li>
                        <li>Existence of its own web application management module.</li>
                        <li>Approach based on (micro) services.</li>
                    </ul>
                </section>
                <section id="validation">
                    <h5><span>3.1.5</span> Validation</h5>
                    <p>
                        TeVi's interface has been validated using W3C Validator for both the 
                        <a role="doc-ref" href="https://validator.w3.org/" target="blank"> HTML</a> part and the
                        <a role="doc-ref" href="https://jigsaw.w3.org/css-validator/" target="blank"> CSS</a> part.
                        We have also used 
                        <a href="http://csslint.net/" target="blank">CSS Lint</a> in order to check the existence of any error.
                        For the whole project, we used 
                        <a role="doc-ref" href="https://web.dev/measure/" target="blank"> Measure @web.dev</a>. 
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
                    <img src="../img/Practices.svg" alt="BestPractices">
                    <p>HTML:</p>
                    <ul>
                        <li>Always Declare a Doctype</li>
                        <li>Use Meaningful Title Tags</li>
                        <li>Use Descriptive Meta Tags</li>
                        <li>Separate Content from Presentation</li>
                        <li>Minify and Unify CSS</li>
                        <li> Minify, Unify and Move Down JavaScript</li>
                        <li>Use Heading Elements Wisely</li>
                        <li>Use the Right HTML Element at the Right Place</li>
                        <li>Don’t Use Divs for Everything</li>
                        <li>Use an Unordered List for Navigation</li>
                        <li>Close Your Tags</li>
                        <li>Use Lower Case Markup</li>
                        <li>Use Alt Attributes with img</li>
                        <li>Validate Your Code</li>    
                    </ul>
                    <p>CSS:</p>
                    <ul>
                        <li>Make it Readable</li>
                        <li>Organize the Stylesheet with a Top-down Structure</li>
                        <li>Combine Elements</li>
                        <li>Create Your HTML First</li>
                        <li>Use Shorthand</li>
                        <li>Comment your CSS</li>
                        <li>Alphabetize your Properties</li>
                        <li>Validate Your CSS</li>
                        <li>Avoid Extra Selectors</li>
                    </ul>
                </section>
                <section id="SEO">
                    <h5><span>3.3.2</span> SEO</h5>
                    <img src="../img/SEO.svg" alt="SEO">
                    <p></p>
                    <ul>
                        <li>Create High-Quality Content</li>
                        <li>Create an Accessible Website</li>
                        <li>
                            Structure Your Website Properly
                            <ul>
                                <li>Add a Page Title and Description</li>
                                <li>Use Meaningful URLs</li>
                                <li>Keep Your Website Organized</li>
                            </ul>
                        </li>
                    </ul>
                </section>
                <section id="accessibility">
                    <h5><span>3.3.3</span> Accessibility</h5>
                    <img src="../img/Accessibility.svg" alt="Accessibility">
                    <p>
                        Accessibility (often abbreviated to A11y—as in "a" then 11 characters then "y")
                        in Web development means enabling as many people as possible to use Web sites,
                        even when those people's abilities are limited in some way.
                    </p>
                </section>
                <section id="performance">
                    <h5><span>3.3.4</span> Performance</h5>
                    <img src="../img/Speed.svg" alt="Performance">
                    <p>
                        Ultimately, user-perceived performance is the only performance that matters.
                        Users provide inputs to the system through touch, movement, and speech. In return,
                        they perceive outputs through sight, touch, and hearing. Performance is the quality
                        of system outputs in response to user inputs.
                    </p>
                    <ul>
                        <li>Responsiveness</li>
                        <li>Framerate</li>
                        <li>Memory usage</li>
                        <li>Power usage</li>
                    </ul>
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
            <p>
                Our team would like to thank 
                <a href="https://developer.mozilla.org/en-US/" target="blank">MDN</a> for all the information and help
                it provides for new and old web developers not only with guides and practices, but with a nice community
                that is there to stay for a long time.
                We learned a lor from the sites tutorials about HTML,CSS and much more.
            </p>
            <p>
                A special thanks for <a href="https://www.w3.org/" target="blank">W3C</a> which has great tool for verifying and
                correcting your html and css code.
            </p>

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
                <dt id="webTeh">W3C Validators</dt>
                <dd property="schema:citation" typeof="schema:WebPage" resource="https://validator.w3.org/">
                    <cite property="schema:name">
                        <a href="https://validator.w3.org/" target="_blank">HTML Validator</a> 
                        <a href="https://jigsaw.w3.org/css-validator/" target="_blank">CSS Validator</a>
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