<!DOCTYPE html>
<html lang="en">
    <head>
        <title> TeVi - Resources </title>
        <?php getBaseHead(); ?>
        <link rel="stylesheet" href="http://localhost/TeVi/public/style/Resources.css">
        <script src="../js/mobileMenu.js"></script>
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
                        <li>
                            <a href="#interaction"><span>3.2</span> User interaction</a>
                            <ol role="directory">
                                <li><a href="#mobile_nav_bar"><span>3.2.1</span> Modal Window</a></li>
                                <li><a href="#scroll_view"><span>3.2.2</span> Scroll</a></li>
                                <li><a href="#buttons"><span>3.2.3</span> Buttons</a></li>
                            </ol>
                        </li>
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
                        <li>
                            <a href="#arhitecture"><span>4.1</span> Overall architecture</a>
                            <ol role="directory">
                                <li>
                                    <a href="#TeVi"><span>4.1.1</span> TeVi</a>
                                    <ol role="directory">
                                        <li><a href="#public"><span>4.1.1.1</span> Public</a></li>
                                        <li>
                                            <a href="#app"><span>4.1.1.2</span> App</a>
                                            <ol role="directory">
                                                <li><a href="#init"><span>4.1.1.2.1</span> Init</a></li>
                                                <li><a href="#core"><span>4.1.1.2.2</span> Core</a></li>
                                                <li><a href="#views"><span>4.1.1.2.3</span> Views</a></li>
                                                <li><a href="#controllers"><span>4.1.1.2.4</span> Controllers</a></li>
                                            </ol>
                                        </li>
                                        <li>
                                            <a href="#the_charts"><span>4.1.1.3</span> The charts </a>
                                            <ol role="directory">
                                                <li><a href="#EXAMPLE"><span>4.1.1.3.1</span> Example</a></li>
                                            </ol>
                                        </li>
                                    </ol>
                                </li>
                                <li>
                                    <a href="#TeViAPI"><span>4.1.2</span> TeViAPI</a>
                                    <ol role="directory">
                                        <li><a href="#routeing"><span>4.1.2.1</span> Routeing</a></li>
                                        <li><a href="#routeing_steps"><span>4.1.2.2</span> Route Steps</a></li>
                                        <li><a href="#routeing_handler"><span>4.1.2.3</span> Routeing handler</a></li>
                                        <li><a href="#routeing_example"><span>4.1.2.4</span> Routeing example</a></li>
                                        
                                    </ol>
                                </li>
                            </ol>
                        </li>
                        <li><a href="#workflow"><span>4.2</span> Workflow</a></li>
                        <li><a href="#DB"><span>4.3</span> Database</a></li>
                        <li><a href="#cookies"><span>4.4</span> Cookies</a></li>
                    </ol> 
                </li>
                <li>
                    <a href="#guide"><span>5.</span> User guide</a>
                    <ol role="directory">
                        <li><a href="#guide_login"><span>5.1</span> Login</a></li>
                        <li><a href="#guide_register"><span>5.2</span> Register</a></li>
                        <li><a href="#guide_start"><span>5.3</span> Start</a></li>
                        <li><a href="#guide_homePage"><span>5.4</span> HomePage</a></li>
                        <li>
                            <a href="#guide_statistics"><span>5.5</span> Statistics</a>
                            <ol role="directory">
                                <li><a href="#pie_chart"><span>5.5.1</span> Pie Chart</a></li>
                                <li><a href="#map_chart"><span>5.5.2</span> Map</a></li>
                                <li><a href="#radius_chart"><span>5.5.3</span> Radius Chart</a></li>
                                <li><a href="#bar_chart"><span>5.5.4</span> Bar Chart</a></li>
                            </ol>
                        </li>
                        <li><a href="#guide_resources"><span>5.6</span> Resources</a></li>
                    </ol>
                </li>
                <li><a href="#acknowledgements"><span>6.</span> Acknowledgements</a></li>
                <li><a href="#references"><span>7.</span> References</a></li>
            </ol>
            
            <!--A description list, with terms and descriptions-->
            <dl>
                <dt>Authors</dt>
                    <dd>
                    <span typeof="schema:Person" >
                    <meta property="schema:givenName" content="Irina">
                    <meta property="schema:familyName" content="Calin"> 
                        <span property="schema:name">Irina Calin</span>
                    </span> &amp; 
                    <span typeof="schema:Person" >
                    <meta property="schema:givenName" content="Victor-Ionut">
                    <meta property="schema:familyName" content="Platon"> 
                        <span property="schema:name">Victor-Ionut Platon</span>
                    </span> &amp;
                    <span typeof="schema:Person" >
                    <meta property="schema:givenName" content="Bogdan-Mihail">
                    <meta property="schema:familyName" content="Peltea"> 
                        <span property="schema:name">Bogdan-Mihail Peltea</span>
                    </span>
                    </dd>
                <dt>Coordinator</dt>
                    <dd>
                    <span typeof="schema:Person" resource="https://profs.info.uaic.ro/~andrei.panu/">
                    <meta property="schema:givenName" content="Andrei">
                    <meta property="schema:familyName" content="Panu">
                    <a href="https://profs.info.uaic.ro/~andrei.panu/">
                        <span property="schema:name">Lect. Dr. Panu Andrei</span>
                    </a>
                    </span>
                    <span typeof="schema:Organization">
                        <span property="schema:legalName">@University Alexandru Ioan Cuza of Iasi, Faculty of Computer Science</span>
                    </span>
                    </dd>
                <dt>Bugs & Feedback</dt>
                    <dd>
                    <a href="https://github.com/Saranoja/TeVi?fbclid=IwAR0Xni66BoOZgYvNVofIuAt6RQtMZtzuFQlmIlvlifYfim4CsXiyIM-SvWw">Git Project</a>
                    </dd>
                <dt>Libraries</dt>
                    <dd>
                    <a href="https://www.amcharts.com/">amcharts</a>
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
                <p>
                    This section describes various features that allow authors to enable users to edit documents and
                    parts of documents interactively.
                </p>
                <section id="mobile_nav_bar">
                    <h5><span>3.2.1</span> Modal Window</h5>
                    <img class="big-picture" src="../img/Menu_button.PNG" alt="Mobile menu icon">
                    <p>
                        A modal window requires users to interact with it in some way before they can
                        return to the system.
                    </p>
                    <p>
                        Although it's only for mobile users, our website has a special navigation menu for them.
                        By clicking on the right-top button, a menu will be displayed from which the user can 
                        selec the page on which he/she wants to go.
                    </p>
                    <img class="big-picture" src="../img/Mobile_Menu.PNG" alt="Mobile menu icon">
                </section>
                <section id="scroll_view">
                    <h5><span>3.2.2</span> Scrolling elements into view</h5>
                    <p>
                        The resource page allows the user to go directly to it's topic of interest. By clicking on 
                        one of the elements in the list at the top of the screen the page current playback
                        position will move to the start of the given element.
                    </p>
                    <img class="big-picture" src="../img/Scroll_list.PNG" alt="Mobile menu icon">
                </section>
                <section id="buttons">
                    <h5><span>3.2.3</span> Buttons</h5>
                    <p>
                        Our website has the usual navigation buttons, whichs allow the user to move bettwen pages:
                    </p>
                    <img src="../img/Home.PNG" alt="Mobile menu icon">
                    <p>
                        Also it has buttons at the bottom of the Home page, at the footer of the page,
                        which will lead to an external page for each member of the project:
                    </p>
                    <img class="long-img" src="../img/Social.PNG" alt="Mobile menu icon">
                </section>

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
                <p>
                    Our project it's composed by 2 things: the TeVi, the app itself,
                    and the TeViAPI, the from scratch api of our application.
                </p>
                <img class="long-img" src="../img/Arhitecture/2apps.PNG" alt="Main Components">
                <section id="TeVi">
                    <h5><span>4.1.1</span> TeVi</h5>
                    <p>
                        In the TeVi folder we have our main app and a public version for users.
                        We used this method for security purpouse, so that we are the only ones who can acces the back code,
                        while a uses will have the public folder at their disposal for the app.
                    </p>
                    <img class="long-img" src="../img/Arhitecture/Main_Structure.PNG" alt="TeVi">
                    <section id="public">
                        <h6><span>4.1.1.1</span> Public</h6>
                        <p>
                            The public folder contains the design elements such as used images, styles and javascripts.
                            It also includes the index.php file which builds all the application.
                        </p>
                        <img class="long-img" src="../img/Arhitecture/public.PNG" alt="public">
                        <p>Inside the index.php their is just a method that builds the application:</p>
                        <figure typeof="schema:SoftwareSourceCode" rol="doc-example">
                                <pre>
                                    <code>
                                    require_once '../app/init.php';

                                    $app = new App;
                                    </code>
                                </pre>
                                <figcaption></figcaption>
                            </figure>
                        <p>
                            In order for this to work we included the core components of the app folder by
                            requiring the <a href="#init">init.php</a> file from it. From now on it's the app job to ensure the functionality of the website.
                        </p>
                    </section>
                    <section id="app">
                        <h6><span>4.1.1.2</span> App</h6>
                        <p>
                            The app folder contains our application/project. It uses the MVC structure for
                            efficiency and performance. 
                        </p>
                        <img class="big-picture" src="../img/Arhitecture/app.PNG" alt="app">
                        <section id="init">
                            <h7><span>4.1.1.2.1</span> Init</h7>
                            <p>
                                The init.php file is used initiate all the components of the app so each page can access and use them. 
                            </p>
                        </section>
                        <section id="core">
                            <h7><span>4.1.1.2.2</span> Core</h7>
                            <p>
                               The core folder is the, well, core of the application. In here we have a database folder
                               that contains the files which helps the app communicate with the database.It also has
                               the most important files: 
                            </p>
                            <ul>
                                <li>App, which is responsible for accessing each page</li>
                                <li>Controller, which bassically tells the application what to show</li>
                                <li>Model, which makes the functionality of the app, regarding the database services</li>
                            </ul>
                            <img class="long-img" src="../img/Arhitecture/Core.PNG" alt="Core">
                            <p>
                                Each time a new url is written, the App deconstructs that url,
                                verify it is exists in one of the controllers, call that controller with the specific method and params.
                            </p>
                            <figure typeof="schema:SoftwareSourceCode" rol="doc-example">
                                <pre>
                                    <code>
                                    class App{

                                        protected $controller = 'Login';
                                        protected $method = 'index';
                                        protected $params = [];

                                        public function __construct()
                                        {
                                            $url = $this->parseUrl();
                                            if(isset($url[0]) && file_exists('../app/controllers/'. $url[0] . '.php')){
                                                $this->controller =$url[0];
                                                unset($url[0]);
                                            }
                                            require_once '../app/controllers/'. $this->controller . '.php';
                                            $this->controller = new $this->controller;

                                            if(isset($url[1]) && method_exists($this->controller, $url[1]))
                                            {
                                                $this->method = $url[1];
                                                unset($url[1]);
                                            }

                                            $this->params = [];
                                            if($url){
                                                $this->params = array_values($url);
                                            }
                                            call_user_func_array([$this->controller,$this->method],$this->params);
                                        } 
                                    </code>
                                </pre>
                                <figcaption></figcaption>
                            </figure>
                            <p>Each controller uses the main Controller file. It has methods for displayin a view, use a model etc...</p>
                            <figure typeof="schema:SoftwareSourceCode" rol="doc-example">
                                <pre>
                                    <code>
                                    lass Controller {
                                    protected $response;
                                    protected $body;

                                    /** 
                                    * @return new model
                                    * @param $model name
                                    */
                                    protected function model($model) {
                                        require_once '../app/models/' . $model . '.php';
                                        return new $model;
                                    }

                                    protected function view($view, $data = []) {
                                        require_once '../app/views/' . $view . '.php';
                                    }

                                    function __construct() {
                                        $this->response['status'] = 405;
                                        $this->response['body'] = null;
                                    }
                                    </code>
                                </pre>
                                <figcaption></figcaption>
                            </figure>
                        </section>
                        <section id="views">
                            <h7><span>4.1.1.2.3</span> Views</h7>
                            <p>
                                The views are what is shown on the website. 
                                Each page that the user sees and which with he can interact is written here.
                            </p>
                            <img class="big-picture" src="../img/Arhitecture/views.PNG" alt="views">
                            <ul>
                                <li>about, contains the home page</li>
                                <li>charts, contains the charts that are showned when the user selects some options</li>
                                <li>login, is the login page, from which the user signs in</li>
                                <li>Regis, is the register page where someone can create an account</li>
                                <li>res, is the page where you are now, full of informtion about the site</li>
                                <li>start, is the first page of the website, where a user will be redirected</li>
                                <li>stats, contains the statistics page from which the user can select what he wants to generate</li>
                                <li>statsControllers, this might confuse you, but this folder has files that help us build the views much easily
                                    using php methods
                                </li>
                            </ul>
                        </section>
                        <section id="controllers">
                            <h7><span>4.1.1.2.4</span> Controllers</h7>
                            <p>
                                Controllers are responsible for what the website shows. They usually have just 1 method,
                                that redirects the browser to a view:
                            </p>
                            <img  src="../img/Arhitecture/Start_controller.PNG" alt="starts">
                            <p>
                                Each of this controllers extend the main Controller class. After the App calls a controller, they use 
                                the methods in the main Controllers class in order to display their conresponding view.
                            </p>
                        </section>
                    </section>
                    <section id="the_charts">
                        <h6><span>4.1.1.3</span> The Charts</h6>
                        <p>
                            To ensure the functionality of the charts we used an externl library in order to generate them.
                            After a user selects a type of chart he then select what he wants to see. We store this value in the local storage.
                            Then the filters, we also save them in the local storage.
                            After the users finishes the request we use the values stored in the local storage to create a query. 
                            We then use ajax to call the api with the created query, save the response it gives us and use it to create the chart.
                        </p>
                        <section id="EXAMPLE">
                            <h7><span>4.1.1.3.1</span> Example</h7>
                            <p>All the charts work in the same manner so it's enought to examplin 1 in order to make things clear.
                                In this example we choose the pie chart.
                            </p>
                            <p>
                                The step pages from the statistics is where we store the data the user chooses in the localstorage:
                            </p>
                            <figure typeof="schema:SoftwareSourceCode" rol="doc-example">
                                <pre>
                                    <code>
                                    // save the selected from step 2
                                    localStorage.clear();
                                    localStorage.setItem('select', '&lt;?php echo $groupBy; ?&gt;'); 

                                    //save the filters from step3
                                    localStorage.setItem('where', '&lt;?php echo $json; ?&gt;');
                                    </code>
                                </pre>
                                <figcaption></figcaption>
                            </figure>
                            <p>
                                Each chart has it's own javascript that handles the request:
                            </p>
                            <img  src="../img/Arhitecture/Charts.PNG" alt="CHARTS">
                            <p>
                                The pie chart works as follow:
                            </p>
                            <p>
                                We take the data in the local storage and use it to create the query:
                            </p>
                            <figure typeof="schema:SoftwareSourceCode" rol="doc-example">
                                <pre>
                                    <code>
                                        let globalJson = {
                                            "limit": "30",
                                            "select": [],
                                            "where": [],
                                            "groupBy": []
                                        };


                                        globalJson["select"].push({ "column": localStorage.getItem("select").replace("-", "_") });
                                        globalJson["select"].push({ "column": "count(".concat(localStorage.getItem("select").replace("-", "_")).concat(")") });

                                        var obj = JSON.parse(localStorage.getItem("where"));
                                        var keys = Object.keys(obj);


                                        keys.forEach(element => {

                                            let columns = "";

                                            obj[element].forEach(value => {
                                                // columns.concat(value,"','");
                                                columns = columns.replace("-", "_") + value + "','";
                                            });


                                            columns = columns.slice(0, -3);

                                            let jsonValue = "('".concat(columns, "')");

                                            globalJson["where"].push({
                                                "column": element.toString().replace("-", "_"),
                                                "operator": "in",
                                                "value": jsonValue
                                            });

                                        });

                                        console.log(globalJson);


                                        globalJson["groupBy"].push({ "column": localStorage.getItem("select").replace("-", "_") });

                                        createChart(globalJson);
                                    </code>
                                </pre>
                                <figcaption></figcaption>
                            </figure>
                            <p>
                                After this we send the request to the api and save the response in a variable(note that the query and the response must be json encoded!).
                            </p>
                            <figure typeof="schema:SoftwareSourceCode" rol="doc-example">
                                <pre>
                                    <code>
                                    async function fetchData(data = {}) {

                                    console.log("START FETCHING DATA");

                                    const response = await fetch("http://localhost/TeVi/api/query", {
                                        method: 'POST',
                                        headers: {
                                            'Content-Type': 'application/json',
                                            'Authorization': 'd82494f05d6917ba02f7aaa29689ccb444bb73f20380876cb05d1f37537b7892',
                                        },
                                        body: JSON.stringify(data)
                                    });

                                    return response.json();
                                    }
                                    </code>
                                </pre>
                                <figcaption></figcaption>
                            </figure>
                            <p>
                                We then just call the predefined methods of the library for the specific chart in order for it to create:
                            </p>
                            <figure typeof="schema:SoftwareSourceCode" rol="doc-example">
                                <pre>
                                    <code>
                                    function createChart(data = {}) {
                                    am4core.useTheme(am4themes_animated);

                                    var chart = am4core.create("chartdiv", am4charts.PieChart3D);
                                    chart.hiddenState.properties.opacity = 0; // this creates initial fade-in

                                    chart.legend = new am4charts.Legend();

                                    am4core.ready(fetchData(data).then(response => {
                                        console.log(JSON.stringify(response));

                                        if (Object.keys(response).length > 0) {
                                            chart.data = response;
                                            var series = chart.series.push(new am4charts.PieSeries3D());
                                            series.dataFields.value = "count(".concat(localStorage.getItem("select").replace("-", "_")).concat(")");
                                            series.dataFields.category = localStorage.getItem("select").replace("-", "_");
                                            chart.exporting.menu = new am4core.ExportMenu();
                                        }
                                        else {
                                            document.getElementById("response").textContent = "Sorry, there is no result available for your request. :(";
                                        }
                                    }));
                                    }
                                    </code>
                                </pre>
                                <figcaption></figcaption>
                            </figure>
                            <p>
                                The .js for each file is called on the last page of the statistics:
                            </p>
                            <figure typeof="schema:SoftwareSourceCode" rol="doc-example">
                                <pre>
                                    <code>
                                    <main>
                                    &lt;h3 id="response"&gt; Results for your request: &lt;/h3&gt;
                                    &lt;script src="http://localhost/TeVi/app/views/Charts/PieChart.js"&gt;&lt;/script&gt;
                                    &lt;div id="chartdiv"&gt;&lt;/div&gt;
                                    &lt;/main&gt;
                                    </code>
                                </pre>
                                <figcaption></figcaption>
                            </figure>
                        </section>
                    </section>
                </section>
                <section id="TeViAPI">
                    <h5><span>4.1.2</span> TeViAPI</h5>
                    <p>
                        For this project we had to create and use our own REST/GraphQL API. We used the same arhitecture as the main application:
                        1 folder with 2 subfolders; 1 for the api itself, all the logic and how it works, and one from where the user can use it, but 
                        can not see the actual back code.
                    </p>
                    <img  src="../img/Arhitecture/API_guide.PNG" alt="API FOLDERS">
                    <p>
                        In the folder with the user application we have just a script from which we create a new instance of the application. 
                        Beside that we configure the paths so the user can only acces this folder, no matter the url.
                    </p>
                    <figure typeof="schema:SoftwareSourceCode" rol="doc-example">
                        <pre>
                            <code>
                                require_once '../apiApp/init.php';
                                $app = new App;  
                             </code>
                        </pre>
                        <figcaption></figcaption>
                    </figure>
                    <p>
                        The main folder of the api is build using the mcv arhitecture: we have the core, controllers, models and services. We also 
                        got a init folder that we user for the entire application and a acces folder to modify the routes. 
                    </p>
                    <img  src="../img/Arhitecture/API_structure.PNG" alt="API structure">
                    <section id="routeing">
                        <h6><span>4.1.2.1</span> Routeing</h6>
                        <p>
                        The core folder has the main App script which we used in the user api. Here we created our own mini-framework for the routeing: 
                        </p>
                        <img  src="../img/Arhitecture/API_routeing.PNG" alt="API routeing">
                        <p>
                            The app and attack-routes are build to work together. The attack-routes has all the routes the user can user for the api:
                        </p>
                        <figure typeof="schema:SoftwareSourceCode" rol="doc-example">
                            <pre>
                                <code>
                                    $attacksRoutes = [
                                        [
                                            "method" => "POST", //performs a query on the db
                                            "middlewares" => ["isLoggedIn"],
                                            "route" => "query",
                                            "handler" => "getQueryResult"
                                        ],
                                        [
                                            "method" => "GET", //returns all attacks in the db
                                            "middlewares" => ["isLoggedIn"],
                                            "route" => "attacks",
                                            "handler" => "getAllAttacks"
                                        ],
                                        [
                                            "method" => "GET", //returns the attack with id=event_id
                                            "middlewares" => ["isLoggedIn", "isAdmin"],
                                            "route" => "attacks/:event_id",
                                            "handler" => "getAttack"
                                        ],
                                        [
                                            "method" => "POST", //inserts a new attack in the db
                                            "middlewares" => ["isLoggedIn", "isAdmin"],
                                            "route" => "attacks",
                                            "handler" => "insertAttack"
                                        ],
                                        [
                                            "method" => "PUT", //updates a row from the db
                                            "middlewares" => ["isLoggedIn", "isAdmin"],
                                            "route" => "attacks",
                                            "handler" => "updateAttack"
                                        ],
                                        [
                                            "method" => "DELETE", //deletes a row from the db based on the event_id
                                            "middlewares" => ["isLoggedIn", "isAdmin"],
                                            "route" => "attacks/:event_id",
                                            "handler" => "deleteAttack"
                                        ]
                                    ]; 
                                </code>
                            </pre>
                            <figcaption></figcaption>
                        </figure>
                        <p>
                            As you can see a route has a method, a route(the given url), middlewares(for security purpouses), and a handler(the one responsible
                            for the action the api will take).
                        </p>
                        <p>
                            The App takes a route the user gives to us and has to verify for all the routes we defined here if it makes with one and only one. 
                            It first verifies the method, then the route, the middlewares and if all is good it calls the handlers function. The data the user 
                            gives through query,body(as a json), and parameters for the route are saved and used by the handlers functions.
                        </p>
                    </section>
                    <section id="routeing_steps">
                        <h6><span>4.1.2.2</span> Route steps</h6>
                        <p>
                            When a url is given the app takes all the attacks_routes and goes through each one:
                        </p>
                        <figure typeof="schema:SoftwareSourceCode" rol="doc-example">
                            <pre>
                                <code>
                                $allRoutes = [
                                    ...$attacksRoutes
                                ];

                                foreach ($allRoutes as $routConfig) {
                                    if ($this->parseRequest($routConfig)) {
                                        exit;
                                    }
                                }
                                </code>
                            </pre>
                            <figcaption></figcaption>
                        </figure>
                        <p>
                            After this the process begins for each one.
                            First the method, we simply check the method with the route method:
                        </p>
                        <figure typeof="schema:SoftwareSourceCode" rol="doc-example">
                            <pre>
                                <code>
                                //check the methods match
                                if ($this->request_method != $routConfig['method']) {
                                    return false;
                                }
                                </code>
                            </pre>
                            <figcaption></figcaption>
                        </figure>
                        <p>
                            To verify the route we first build a regex for it, we att the params of the route that do not have ":"
                            at the start of them directly and for thouse that have we allow the user to insert any letters and numbers.
                        </p>
                        <figure typeof="schema:SoftwareSourceCode" rol="doc-example">
                            <pre>
                                <code>
                                //regex match
                                $regExpString = $this->routeExpToRegExp($routConfig['route']);

                                //function
                                function routeExpToRegExp($route)
                                {
                                    $regExpString = "";
                                    $parts = explode('/', $route);

                                    foreach ($parts as $p) {
                                        $regExpString .= '\/';
                                        if ($p[0] == ":") {
                                            $regExpString .= '([a-zA-Z0-9]+)';
                                        } else {
                                            $regExpString .= $p;
                                        }
                                    }
                                    $regExpString .= '(\?.*)?$';

                                    return $regExpString;
                                }
                                </code>
                            </pre>
                            <figcaption></figcaption>
                        </figure>
                        <p>
                            After we got the regex we can compare it to the given url, if it matches the process goes on, if not we try another route.
                        </p>
                        <figure typeof="schema:SoftwareSourceCode" rol="doc-example">
                            <pre>
                                <code>
                                //check the route match
                                if (preg_match("/$regExpString/", $url, $matches)) {
                                    $parts = explode('/', $routConfig['route']);
                                    $query = [];
                                    //Params
                                    $index = 1;
                                    foreach ($parts as $p) {
                                        if ($p[0] == ':') {
                                            $this->params[substr($p, 1)] = $matches[$index];
                                            $index++;
                                        }
                                    }
                                </code>
                            </pre>
                            <figcaption></figcaption>
                        </figure>
                        <p>
                            In the next step we verify if the user gave us a query like : "?item1=value1", and save all of them in an array:
                        </p>
                        <figure typeof="schema:SoftwareSourceCode" rol="doc-example">
                            <pre>
                                <code>
                                //query split from url
                                if (strpos($url, '?')) {
                                    $queryString = explode('?', $url)[1];

                                    if ($queryString) {
                                        $queryParts = explode('&', $queryString);
                                    }

                                    foreach ($queryParts as $part) {
                                        if (strpos($part, '=')) {
                                            $query[explode('=', $part)[0]] = explode('=', $part)[1];
                                        }
                                    }
                                }
                                </code>
                            </pre>
                            <figcaption></figcaption>
                        </figure>
                        <p>
                            After this we take the body(json) the user gave us and save it as well:
                        </p>
                        <figure typeof="schema:SoftwareSourceCode" rol="doc-example">
                            <pre>
                                <code>
                                //save body
                                $data = file_get_contents("php://input");
                                if (strlen($data)) {
                                    $data = json_decode($data, true);
                                } else {
                                    $data = NULL;
                                }
                                </code>
                            </pre>
                            <figcaption></figcaption>
                        </figure>
                        <p>
                            The last step is to check the middlewares, for each of them we call the functions that return true if the condition
                            to use the route is fulfilled and false if not. The api need one false to deny the use of the route.
                        </p>
                        <figure typeof="schema:SoftwareSourceCode" rol="doc-example">
                            <pre>
                                <code>
                                //verify middlewares
                                if (isset($routConfig['middlewares'])) {
                                    foreach ($routConfig['middlewares'] as $middlewareName) {
                                        $didPass = call_user_func($middlewareName, [
                                            "params" => $this->params,
                                            "query" => $query,
                                            "data" => $data
                                        ]);

                                        if (!$didPass) {
                                            exit();
                                        }
                                    }
                                }
                                </code>
                            </pre>
                            <figcaption></figcaption>
                        </figure>
                        <p>
                            After all steps are completed the app calls the handler withh all the data it saved, in order for the handler to use it.
                        </p>
                        <figure typeof="schema:SoftwareSourceCode" rol="doc-example">
                            <pre>
                                <code>
                                call_user_func($routConfig['handler'], [
                                    "params" => $this->params,
                                    "query" => $query,
                                    "data" => $data
                                ]);
                                </code>
                            </pre>
                            <figcaption></figcaption>
                        </figure>
                    </section>
                    <section  id = "routeing_handler">
                    <h6><span>4.1.2.3</span> Route Handler</h6>
                    <p>
                        When a handler is called we call it's function to deal with the input. The function calls the Controller. It then
                        calls the services to deal with the method. the service use the model to give back a response and a body(in form of json).
                    </p>
                    </section>
                    <section  id = "routeing_example">
                    <h6><span>4.1.2.3</span> Route Handler example</h6>
                    <p>
                        The user calls the "/attacks/:id" route. After the routeing process the handler is called it then calls the function:
                    </p>
                    <figure typeof="schema:SoftwareSourceCode" rol="doc-example">
                            <pre>
                                <code>
                                function getAttack($req)
                                {
                                    $controller = 'AttackController';
                                    require_once '../apiApp/controllers/' . $controller . '.php';
                                    $controller = new $controller;
                                    $response = $controller->getAttack($req);
                                    Response::status($response['status']);
                                    Response::json($response['body']);
                                }
                                </code>
                            </pre>
                        <figcaption></figcaption>
                    </figure>
                    <p>
                        The function tells the controller which calls it's own function to deal with the request:
                    </p>
                    <figure typeof="schema:SoftwareSourceCode" rol="doc-example">
                            <pre>
                                <code>
                                function getAttack($req){
                                $res = $this->emptyService('get')->getAttack($req);
                                $this->response['status'] = $res['status'];
                                $this->response['body'] = $res['body'];      
                                return $this->response;
                                </code>
                            </pre>
                        <figcaption></figcaption>
                    </figure>
                    <p>
                        It calls the service with the given method. After this the service looks at the model and calls the function there:
                    </p>
                    <figure typeof="schema:SoftwareSourceCode" rol="doc-example">
                            <pre>
                                <code>
                                public function getAttack($req) {
                                $attack = new Attack;
                                $this->response = $attack->getAttack($req);
                                return $this->response;
                                }   
                                public function getAttack($req)
                                {
                                    $this->result = mysqli_query($this->connection, "SELECT * FROM `data` WHERE " . key($req['params']) . "= " . $req['params']['event_id'] . " ");
                                    $this->response = array();

                                    try {
                                        while ($row = mysqli_fetch_assoc($this->result)) {
                                            $this->response[] = $row;
                                        }
                                    } catch (Exception $e) {
                                        $res['body'] = "Unexpected database error";
                                        $res['status'] = 500; //internal server error
                                        return $res;
                                    }

                                    if (sizeof($this->response) > 0) {
                                        $res['body'] = $this->response;
                                        $res['status'] = 200;
                                        return $res;
                                    }
                                    else {
                                        $res['body'] = "No data to show";
                                        $res['status'] = 404;
                                        return $res;
                                    }
                                }
                                </code>
                            </pre>
                        <figcaption></figcaption>
                    </figure>
                    <p>
                        The model takes the data and tells the handler what to show, for this we use a class response that handle the given response
                        from the model:
                    </p>
                    <figure typeof="schema:SoftwareSourceCode" rol="doc-example">
                            <pre>
                                <code>
                                class Response
                                {
                                    static function status($code)
                                    {
                                        http_response_code($code);
                                    }
                                    static function json($data)
                                    {
                                        header('Content-Type: application/json');
                                        echo json_encode($data, JSON_PRETTY_PRINT);
                                    }
                                }
                                </code>
                            </pre>
                        <figcaption></figcaption>
                    </figure>
                    </section>
                </section>
            </section>

            <section id="workflow">
                <h4><span>4.2</span> Workflow</h4>
                <p>
                    We used GitHub as our code management system. We created a repository where we stored our appliction.
                    GitHub is very easy to use and understand, we could coolaboare on the repository and help each other when needed.
                </p>
                <p>
                    GitHub Desktop was our main toll. Each of us used it and worked with it. All our pushes are directly to the main branch,
                    as all of use worked on diffrent thing most of the time. When we worked together we just meet with an only tool and
                    one of us had the control, while we all tried to solve the problems we wanted.
                </p>
            </section>
            <section id="DB">
                <h4><span>4.3</span> Database</h4>
                <p>
                    We used XAMPP for the localhost and database. phpMyAdmin is where we stored our data.
                    The database is very straight forward. It is called tevi and has 2 tables: data(where we store our data)
                    and users(for all our users accounts).
                </p>
            </section>
            <section id="cookies">
                <h4><span>4.4</span> Cookies</h4>
                <p>
                    The only cookie we use is for the user. If a user has a account we save a token for him in the database.
                    When a user logs in the token is set as a cookie. It last only for 10 minutes or if the browser is closed. 
                    The cookie is used only for the api to see the right a user has, we compare the value stored in the cookie with the values in 
                    the database and see if the user has rights. For admins is just a token for anyone who is an admin.
                </p>
            </section>
        </section>

        <section id="guide">
            <h3><span>5.</span> User guide</h3>
            <p>
                We create a toll for a flexible visualization of data on global terrorism. We want each user to understand
                how to use this toll and what requirements they need for some actions on the web page.
                This section is about learning how the site works. There are instructions with images for each page
                of the application. This will help a user of the website understand how it works and what it does.

            </p>
            <section id="guide_login">
                <h4><span>5.1</span> Login</h4>
                <p>
                    The login page is the one you will see on the web site. This page has 2 button, 1 for <a href="#guide_register"> register</a> (in case you don't have an account),
                    and one for entering as a guest, in case you don't want an account.
                </p>
                <p>
                    With an account you can login on the web site. Enter your credentials and you can start useing the website,
                    read about the idea, project, developers and learn a few things about the design. 
                    After login the <a href="#guide_start"> start</a> page will welcome you. 
                </p>
                <p>
                    Any invalid action like invalid username/password, blank username or/and password,
                    will trigger a message notify and you must try to login again. You can not receive your username or password directly
                    from the web page you have to contact one of us in case you forgot yor credentials. You can always make a new account 
                    if you consider it be easier, as well.
                </p>
                <img class="big-picture" src="../img/Arhitecture/Login_guide.PNG" alt="Login_page">
            </section>
            <section id="guide_register">
            
                <h4><span>5.2</span> Registration</h4>
                <p>
                    Any user can choose not to create an account an enter as guest, but this limits their actions.
                    Anyone can make an account just by entering a username and a password,but you will need a unique
                    username that does not already exists in the database. Any new created account will be a normal
                    user account. A normal user can see detail about the database but it can not change,
                    delete or add new ones.
                </p>
                <p>
                    Your account can be upgraded to an admin account by contacting one of the project developers and ask,
                    mentioning why, for what will you use it and how long do you need id. This is strictly for the safety
                    of our datas in the database, we don't want anyone to be able to change our datas.
                </p>
                <p>
                    If you already have an account you can go back to the <a href="#guide_login"> login</a> page and enter
                    your credentials. This button was added so user won't get stuck here if miss-clicked the button in the login.
                </p>
                <p>
                    Beside all of this any invalid action will have a specific message. If you try to register with a username
                    that already exist, blank username and/or password a message will notify you on the same page.
                </p>
                <img class="big-picture" src="../img/Arhitecture/Register_guide.PNG" alt="Register_page">
            </section>
            <section id="guide_start">
                <h4><span>5.3</span> Start</h4>
                <p>
                    The start page is where you land on, after <a href="#guide_login"> login</a>.
                    You can either go to a specific page: <a href="#guide_statistics">statistics</a>, <a href="#guide_resources">resources</a>
                    or you can "Get started" and navigate the home page.   
                </p>
                <p>
                    We designed this page in order to give sens to our website. Instead of going directly to a specific page,
                    you as a user can choose what you want to explore. If you are here just for our api, statistics or designd, you can
                    navigate there first.
                </p>
            </section>
            <section id="guide_homePage">
                <h4><span>5.4</span> HomePage</h4>
                <p>
                    On the HomePage you can find usefull informtions about the site, such as
                    a short summary about Terrorism and why we decided to design the website,
                    what is the team, who are we and links to our personal pages.
                </p>
                <p>
                    From here, much like from any web page from now on, you can go to any other web page by using the navigation
                    bar on the top of the page. This navigation bar is designed to always stay on the top of the website, so no matter 
                    how much you scroll down it will stay with you.
                </p>
                <p>
                    On the footer of the homepage are links to our personal pages, you can click any social media picture to go
                    to the specific website for a speciffic developer. Some of us have more social pages you can acces, search as
                    much as you like.
                </p>
            </section>
            <section id="guide_statistics">
                <h4><span>5.5</span> Statistics</h4>
                <p>
                    Our goal was to create a flexible web data visualizer. This page is where the magic happens.
                    It's design is as easier as we could think. You have to go through a series of 3 steps, where you 
                    have to choose:
                </p>
                <ol>
                    <li><span>1.</span> How to see the result</li>
                    <li><span>2.</span> What to see in the specified view</li>
                    <li><span>3.</span> What restrictions/filters you want to add</li>
                </ol>
                <p>
                    After these steps you will see the result.
                    You can then download it as a csv,png or svg, go to other page or start the process again. 
                </p>
                <p>    
                    At each step you can go back to a previous one, go to another page or go further ahead, all by using the buttons
                    at your disposal.
                    All types of views work differently, we've dedicated a section for each one!
                </p>
                <section id="pie_chart">
                    <h5><span>5.5.1</span> Pie Chart</h5>
                    <p>
                        After choosing the pie chart you can select one, and just one, field you would like to see. This is mainly
                        for clarity purpouses, a pie chart can't show many datas without looking confuseing. 
                    </p>
                    <p>
                        The filter page is next, here you can select from many option, what do you want to see in more detail. Select 
                        from any column, any property you want.
                    </p>
                    <p>
                        When done with selecting you can finish and see your result. If your request makes sense, and actually has at least 1
                        database value it will be shown in the form of a pie chart.
                    </p>
                </section>
                <section id="map_chart">
                    <h5><span>5.5.2</span> Map Chart</h5>
                    <p>
                        After choosing the map char you won't have an option as what you want to see. This view will always show you
                        the country and the total fatalities it had. 
                    </p>
                    <p>
                        The filter page is where you can customize this result. Choose from year, country and many more. 
                    </p>
                    <p>
                        When done with selecting you can finish and see your result. If your request makes sense, and actually has at least 1
                        database value it will be shown in the form of a map.
                    </p>
                </section>
                <section id="radius_chart">
                    <h5><span>5.5.3</span> Radius Chart</h5>
                    <p>
                        After choosing the radius chart you can select a maximum of 2 elements that you want to see. You will be 
                        notified if you try to select more.
                    </p>
                    <p>
                        The filter page is where you can select more precisesly what you want to see. You can choose from a variety of options. 
                    </p>
                    <p>
                        When done with selecting you can finish and see your result. If your request makes sense, and actually has at least 1
                        database value it will be shown in the form of a radius chart.
                    </p>
                </section>
                <section id="bar_chart">
                    <h5><span>5.5.4</span> Bar Chart</h5>
                    <p>
                        The Bar chart offers you another choice. Beside choosing what you want to see, you have to choose up
                        to 4 country you want to compare. Because it's a nar chart we decided tht here you can compare 
                        data from diffrent countries.
                    </p>
                    <p>
                        The next step it's again the filter one, where you add flavour for the results. You can select more precisesly
                        what you want to see and compare.
                     </p>
                     <p>
                        When done with selecting you can finish and see your result. If your request makes sense, and actually has at least 1
                        database value it will be shown in the form of a bar chart.
                    </p>
                </section>
            </section>
            <section id="guide_resources">
                <h4><span>5.6</span> Resources</h4>
                <p>
                    The Resource page is the "manual" of the website. For useres and programers alike, we created this page in order to help you.
                    No matter your intentions with our website: see data, use data, learn about de arhitecture, about he team, about our features
                    this pages is here to help.
                </p>
                <p>
                    With so much information we tried to keep it simple and usefull by useing a hierarchy, with all the information
                    displayed at the top of the page with clickable text that takes you to the desired subject. You can go to the  top of the page 
                    anytime useing the navigation bar, so don't worry to explore.
                </p>
                <img src="../img/Arhitecture/DB.PNG" alt="DB">
            </section>
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
                A special thanks to <a href="https://www.w3.org/" target="blank">W3C</a> which has great tool for verifying and
                correcting your html and css code.
            </p>
            <p>
                We would also like to thank the <a role="doc-ref" href="https://w3c.github.io/" target="blank"> W3C github</a> for their <a href="https://w3c.github.io/scholarly-html/" target="blank">Scholarly HTML</a> model 
                that helped us create the resource page.
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
                <dt id="Scholarly HTML">Scholarly HTML</dt>
                <dd property="schema:citation" typeof="schema:WebPage" resource="https://w3c.github.io/scholarly-html/">
                    <cite property="schema:name">
                        <a href="https://w3c.github.io/scholarly-html/" target="_blank">Scholarly HTML</a>
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