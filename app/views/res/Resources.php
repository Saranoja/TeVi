<!DOCTYPE html>
<html lang="en">

<head>
    <title> TeVi - Resources </title>
    <?php getBaseHead(); ?>
    <link rel="stylesheet" href="../style/Resources.css">
    <script src="../js/mobileMenu.js"></script>
</head>

<body id="whole_body">
    <?php getMenuInfo();
    initModal(); ?>

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
                            <li><a href="#structure"><span>3.1.1</span> Structure - MVC</a></li>
                            <li><a href="#storage"><span>3.1.2</span> Storage</a></li>
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
                            <li><a href="#design_motivation"><span>3.3.5</span> Design motivaton</a></li>
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
                    <li><a href="#the_team"><span>4.5</span> Workload</a></li>
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
                <span typeof="schema:Person">
                    <meta property="schema:givenName" content="Irina">
                    <meta property="schema:familyName" content="Calin">
                    <span property="schema:name">Irina Calin</span>
                </span> &amp;
                <span typeof="schema:Person">
                    <meta property="schema:givenName" content="Victor-Ionut">
                    <meta property="schema:familyName" content="Platon">
                    <span property="schema:name">Victor-Ionut Platon</span>
                </span> &amp;
                <span typeof="schema:Person">
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
        </dl>
    </div>

    <section typeof="sa:Abstract" id="abstract" role="doc-abstract">
        <h3><span>1.</span> Abstract</h3>
        <p>
            In the past few decades, web technology has undergone a dramatic transition,
            from a few marked up web pages to the ability to do very specific work on a
            network without interruption. In this world, the internet is an essential
            platform, whether its for developing or for consumer use.
            When developing a website, typically three main languages come into play.
            These languages are JavaScript, CSS, and HTML.
        </p>
    </section>

    <section id="introduction" role="doc-introduction">
        <h3><span>2.</span> Introduction</h3>
        <p>
            TeVi is a flexible Web data visualizer regarding worldwide terrorism, based on our own RESTful API. The statistics,
            charts and maps can be exported as PNG, SVG, JPG, PDF, CSV, XLSX, HTML, JSON. The system offers support for multi-criterial search of repported incidents,
            including details from other external resources.
            Its purpose is to both help specialists and inform the public regarding terrorist attacks from the past 50 years.
        </p>
    </section>

    <section id="mainRequirements">
        <h3><span>3.</span> Main requirements</h3>
        <p>
            Create a Web tool for flexible visualization of global terrorism data, based on its own REST / GraphQL API.
            The statistics and visualizations generated - minimum 3 types + cartographic renderings, by regions,
            using profile Web services - should be exported in CSV, PNG and SVG formats.
            The system will also provide support for multi-criterial search for reported incidents,
            including additional details on weapons used - external data sources will be used.
        </p>
        <section id="features">
            <h4><span>3.1</span> Main features of the app</h4>
            <p>

            </p>
            <section id="structure">
                <h5><span>3.1.1</span> Structure - MVC</h5>
                <p>The MVC (Model-View-Controller) pattern separates the code in three conceptual units:</p>
                <ul>
                    <li>The Model represents the business logic;</li>
                    <li>The View represents a widget in the UI: a button, text box, etc.;</li>
                    <li>
                        The Controller provides for coordination between the view and the model. Which translates to:
                        <ul>
                            <li>Decides what views to show, and with what data;</li>
                            <li>Translates user actions (i.e. click of a button) into business logic.</li>
                        </ul>
                    </li>
                </ul>
                <p>Other important concepts to know about the classic MVC pattern:</p>
                <ul>
                    <li>The view uses the Model data objects directly, to show their data;</li>
                    <li>When the model data changes, it triggers an event that immediately updates the View;</li>
                    <li>Each view can be, typically, associated to one controller;</li>
                    <li>Each screen can contain several pairs of view & controller;</li>
                    <li>There could be multiple views for each controller.</li>
                </ul>
                <p>
                    Our Web application should be three-tiered, based on the MVC architectural model.
                    The web browser sends requests to the middle tier (written in PHP), which services
                    them by performing queries and updates against the database and generates a user interface.
                </p>
                <img src="../img/MVCdiagram.png" id="mvc" alt="MVC">
            </section>
            <section id="storage">
                <h5><span>3.1.2</span> Storage</h5>
                <p>
                    For our project we have chosen <a href="https://guides.github.com/" target="blank">GitHub</a> as our
                    online storage system and management of the source code.
                </p>
                <p>
                    For data storage and management, we used relational database servers (PhpMyAdmin), queried via SQL.
                </p>
            </section>
            <section id="interface">
                <h5><span>3.1.4</span> User Interface</h5>
                <section id="html">
                    <h6><span>3.1.4.1</span> HTML</h6>
                    <p>TeVi is marked in HTML5 for the client side, the application interface.</p>
                    <p>
                        HTML5 is the latest evolution of the standard that defines HTML. The term represents two different concepts.
                        It is a new version of the language HTML, with new elements, attributes, and behaviors, and a larger set of
                        technologies that allows the building of more diverse and powerful Web sites and applications.
                    </p>
                    <p>
                        Designed to be usable by all Open Web developers, HTML5 comes with a lot of features and advantages.
                        Such features include a lot of sections and outliners, form and much more.
                        It provides both online support, with
                        <a href="https://developer.mozilla.org/en-US/docs/Web/API/WebSockets_API" target="blank">Web Sockets</a>,
                        <a href="https://developer.mozilla.org/en-US/docs/Web/API/Server-sent_events/Using_server-sent_events" target="blank">Server-set events</a>,
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
                    <p>
                        We of course used css to style our web pages. We tried to use the best practices we could. Everything from buttons,
                        colours, images, fonts, etc. are styled with CSS, including the responsiveness of the pages.
                    </p>
                </section>
                <section id="ajax">
                    <h6>
                        <spam>3.1.4.3</spam> Ajax
                    </h6>
                    <p></p>
                    <p>Ajax (Asynchronous JavaScript And XML) is not a programming language, instead it uses a combination of:</p>
                    <ul>
                        <li>A browser built-in XMLHttpRequest object (to request data from a web server)</li>
                        <li>JavaScript and HTML DOM (to display or use the data)</li>
                    </ul>
                    <p>How does Ajax work?</p>
                    <ol>
                        <li><span>1.</span> An event occurs in a web page (the page is loaded, a button is clicked)</li>
                        <li><span>2.</span> An XMLHttpRequest object is created by JavaScript</li>
                        <li><span>3.</span> The XMLHttpRequest object sends a request to a web server</li>
                        <li><span>4.</span> The server processes the request</li>
                        <li><span>5.</span> The server sends a response back to the web page</li>
                        <li><span>6.</span> The response is read by JavaScript</li>
                        <li><span>7.</span> Proper action (like page update) is performed by JavaScript</li>
                    </ol>
                    <p>
                        We used ajax for our charts:
                    </p>
                    <ol>
                        <li><span>1.</span> The user clicks the finish button on the stats page</li>
                        <li><span>2.</span> A request is created in javascript (depending on the type of chart), including a request body in JSON format</li>
                        <li><span>3.</span> The request is sent to the api </li>
                        <li><span>4.</span> The api server processes the request </li>
                        <li><span>5.</span> The server sends a response back to the web page</li>
                        <li><span>6.</span> The response is fetched via JavaScript</li>
                        <li><span>7.</span> The chart model is created using the data the user requested</li>
                    </ol>
                </section>
            </section>
            <section id="others">
                <h5><span>3.1.5</span> Other mandatory requirements</h5>
                <ul>
                    <li>Adopting the principles of responsive web design.</li>
                    <li>Data import/export using open formats - at least CSV.</li>
                    <li>Existence of a web application administration module.</li>
                    <li>Approach based on (micro)services.</li>
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
                This section describes various features the users interacts with during the usage of the application.
            </p>
            <section id="mobile_nav_bar">
                <h5><span>3.2.1</span> Modal Window</h5>
                <p>
                    A modal window requires users to interact with it in some way before they can
                    return to the system.
                </p>
                <p>
                    Although it's only for mobile users, our website has a special navigation menu for them.
                    By clicking on the right-top button, a menu will be displayed from which the user can
                    selec the page on which he/she wants to go.
                </p>
                <p>
                    In the same category we have the help button for stats. This button will show a more detalied
                    explanation for each filed you select:
                </p>
                <img src="../img/Arhitecture/help_button.PNG" class="long-img" alt="Mobile menu icon">
            </section>
            <section id="scroll_view">
                <h5><span>3.2.2</span> Scrolling elements into view</h5>
                <p>
                    The resource page allows the user to go directly to it's topic of interest. By clicking on
                    one of the elements in the list at the top of the screen the page current playback
                    position will move to the start of the given element.
                </p>
                <img class="big-picture" src="../img/Scroll_list.PNG" alt="scroll">
            </section>
            <section id="buttons">
                <h5><span>3.2.3</span> Buttons</h5>
                <p>
                    Our website has the usual navigation buttons, whichs allow the user to move bettwen pages:
                </p>
                <p>
                    The charts give you the option to download them. After your search is done you can press the button
                    in the top right corner to download the chart in a format:
                </p>
                <p>
                    You can also play with the legend of the chart and modify it.
                </p>
            </section>

        </section>
        <section id="remarks">
            <h4><span>3.3</span> Remarks regarding our design</h4>
            <p></p>
            <section id="practices">
                <h5><span>3.3.1</span> Best Practices</h5>
                <img src="../img/Practices.svg" class="svgs" alt="BestPractices">
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
                <img src="../img/SEO.svg" class="svgs" alt="SEO">
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
                <img src="../img/Accessibility.svg" class="svgs" alt="Accessibility">
                <p>
                    Accessibility (often abbreviated to A11y—as in "a" then 11 characters then "y")
                    in Web development means enabling as many people as possible to use Web sites,
                    even when those people's abilities are limited in some way. We tried to pick high
                    contrast colours for that, together with suggestive icons.
                </p>
            </section>
            <section id="performance">
                <h5><span>3.3.4</span> Performance</h5>
                <img src="../img/Speed.svg" class="svgs" alt="Performance">
                <p>
                    Ultimately, user-perceived performance is the only performance that matters.
                    Users provide inputs to the system through touch, movement, and clicks. In return,
                    they perceive outputs through sight. Performance is the quality
                    of system outputs in response to user inputs.
                    Managing a huge amount of data, we tried to improve the User Experience by different
                    microinteractions (i.e. loading screens) and also to be as efficient as possible
                    when interrogating the database.
                </p>
            </section>
            <section id="design_motivation">
                <h5><span>3.3.5</span> Design motivation</h5>
                <p>
                    TeVi was designed to be easy to access, such that a regular user can directly operate with the application,
                    whereas a newcomer can choose to be guided in order to understand the application usage.
                    The user interface was designed in an intuitive way, together with a neutral coluor palette, with increased
                    readability and high accesibility.
                    In order to receive a result, the user has to go through 3 steps so that the process is adapted to its needs.
                </p>
            </section>
        </section>

    </section>

    <section id="projectProgress">
        <h3><span>4.</span> Project progress</h3>
        <p></p>
        <section id="arhitecture">
            <h4><span>4.1</span> Architecture</h4>
            <img src="../img/Diagram.svg" class="diagram" alt="Performance">
            <p>
                Our project has 2 components: TeVi, the app itself, and the API.
            </p>
            
            <section id="TeVi">
                <h5><span>4.1.1</span> TeVi</h5>
                <p>
                    TeVi is composed of app and public directories, making use of .htaccess files for restrictions and url sanitizing.
                    We used this method for security purposes, so that the server files are accessible only from inside the code.
                </p>
                <section id="public">
                    <h6><span>4.1.1.1</span> Public</h6>
                    <p>
                        The public directory contains the which should be accessible to the user, such as images, styles and javascript files.
                        It also includes the index.php file which builds the whole application.
                    </p>
                    <p>Inside the index.php file there is just a method that builds the application:</p>
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
                        In order for this to work we included the core components of the app directory by
                        requiring the <a href="#init">init.php</a> file from it. From now on it's the app's job to ensure the functionality of the website.
                    </p>
                </section>
                <section id="app">
                    <h6><span>4.1.1.2</span> App</h6>
                    <p>
                        The app directory contains our application/project. It is based on the MVC architecture model.
                    </p>
                    <section id="init">
                        <h7><span>4.1.1.2.1</span> Init</h7>
                        <p>
                            The init.php file is used to initiate all the components of the app so each page can access and use them.
                        </p>
                    </section>
                    <section id="core">
                        <h7><span>4.1.1.2.2</span> Core</h7>
                        <p>
                            The core directory is the backbone of the application. It also has
                            the most important files:
                        </p>
                        <ul>
                            <li>App, which is responsible for accessing each page</li>
                            <li>Controller, which bassically tells the application what to show</li>
                            <li>Model, which provides the functionality of the app, regarding the database services</li>
                        </ul>
                        <p>
                            Each time a new url is written, the App deconstructs that url,
                            verifies its existence and calls the required controller with the specific method and params.
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
                        <p>Each controller uses the main Controller file. It has methods for displaying a view, using a model etc...</p>
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
                            Each page that the user sees and which with he can interact is defined here.
                        </p>
                        <ul>
                            <li>about - contains a descriptive page</li>
                            <li>charts - contains the charts that are shown when the user selects some options</li>
                            <li>login - contains the login page, from which the user signs in</li>
                            <li>Regis - containsthe register page where someone can create an account</li>
                            <li>res - contains this very page, with details and information regarding the project</li>
                            <li>start - contains the "root" page of the website, where a user will be redirected after registration</li>
                            <li>stats - contains the statistics page from which the user can select what he wants to generate</li>
                            <li>statsControllers - contains utility files, used in the views in order to avoid duplicate code
                            </li>
                        </ul>
                    </section>
                    <section id="controllers">
                        <h7><span>4.1.1.2.4</span> Controllers</h7>
                        <p>
                            Controllers are responsible for the behaviour of the application.
                        </p>
                        <p>
                            Each of these controllers extend the Controller superclass and manage views whilst making use of the written methods.
                        </p>
                    </section>
                </section>
                <section id="the_charts">
                    <h6><span>4.1.1.3</span> The Charts</h6>
                    <p>
                        To ensure the functionality of the charts we used an external library in order to generate them - amCharts.
                        After a user selects a type of chart, he then selects what he wants to see. We store these values in the local storage.
                        Then the filters, we also save them in the local storage.
                        After the users finishes the request, we use the values stored in the local storage to create a query.
                        We then use ajax to call the api with the created query, save the response and use it to create the chart.
                    </p>
                    <section id="EXAMPLE">
                        <h7><span>4.1.1.3.1</span> Example</h7>
                        <p>All the charts work in the same manner. This is a snippet for the pie chart:</p>
                        <p>
                            The step pages from the statistics is where we store the data the user chooses in the localstorage:
                        </p>
                        <figure typeof="schema:SoftwareSourceCode" rol="doc-example">
                            <pre>
                                    <code>
                                    // save the dataset choice from step 2
                                    localStorage.clear();
                                    localStorage.setItem('select', '&lt;?php echo $dataset; ?&gt;'); 

                                    //save the filters choice from step3
                                    localStorage.setItem('where', '&lt;?php echo $filters; ?&gt;');
                                    </code>
                                </pre>
                            <figcaption></figcaption>
                        </figure>
                        <p>
                            Each chart has its own javascript that handles the request, since our application is multipage.
                            The pie chart works as it follows:
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

                                        var obj = JSON.parse(localStorage.getItem("filters"));
                                        var keys = Object.keys(obj);

                                        keys.forEach(element => {

                                            let columns = "";

                                            obj[element].forEach(value => {
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

                                        globalJson["groupBy"].push({ "column": localStorage.getItem("select").replace("-", "_") });

                                        createChart(globalJson);
                                    </code>
                                </pre>
                            <figcaption></figcaption>
                        </figure>
                        <p>
                            After this we send the request to the api and save the response in a variable(note that the query and the response must be json encoded).
                        </p>
                        <figure typeof="schema:SoftwareSourceCode" rol="doc-example">
                            <pre>
                                    <code>
                                    async function fetchData(data = {}) {

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
                            We then just call the predefined methods of the library for the specific chart in order for it to generate:
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
                    </section>
                </section>
            </section>
            <section id="TeViAPI">
                <h5><span>4.1.2</span> TeViAPI</h5>
                <p>
                    For this project we had to create and use our own RESTful API. We used almost the same structure as for the main application,
                    making use of .htaccess for restrictions on resource access.
                    The root of the api is built using the MVC arhitecture: we have the core, controllers, models and services
                </p>
                <section id="routing">
                    <h6><span>4.1.2.1</span> Routing</h6>
                    <p>
                        The app and attack-routes are built to work together. The attack-routes file has all the routes the user can access via the API:
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
                        A route has a method attached, a route (the given path), middlewares (for security purposes), and a handler (the one responsible
                        with the service which will be invoked).
                    </p>
                </section>
                <section id="routing_steps">
                    <h6><span>4.1.2.2</span> Route steps</h6>
                    <p>
                        For a given URL, the app takes all the attacks_routes and goes through each one:
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
                <section id="routeing_handler">
                    <h6><span>4.1.2.3</span> Route Handler</h6>
                    <p>
                        When a handler is called we call its function to deal with the input. The function calls the Controller. It then
                        calls the services to deal with the method. The services use the models to return a response and a body.
                    </p>
                </section>
                <section id="routeing_example">
                    <h6><span>4.1.2.3</span> Route Handler example</h6>
                    <p>
                        The user calls the "/attacks/:id" route.
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
                        The function calls the controller which calls its own function to deal with the request:
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
                </section>
            </section>
        </section>
        <section id="workflow">
            <h4><span>4.2</span> Workflow</h4>
            <p>
                We used GitHub as our code management system. We created a repository where we stored our appliction.
                GitHub is very easy to use and understand, we could collaborate on the repository and help each other when needed.
            </p>
        </section>
        <section id="DB">
            <h4><span>4.3</span> Database</h4>
            <p>
                We used XAMPP for the localhost and database. phpMyAdmin is where we stored our data.
                The database is very straightforward. It is called tevi and has 2 tables: data (where we store our attacks)
                and users (for the management of the clients).
            </p>
        </section>
        <section id="cookies">
            <h4><span>4.4</span> Cookies</h4>
            <p>
                The only cookie we actually use plays a role in the authentification process. Each user has a corresponding token stored in the database.
                When a user logs in, this token is set as a cookie. It lasts only for 10 minutes or until the browser is closed.
                This way, the API can only be used by registered users and only in order to visualize data.
                Users with administrative roles own a special token in the database and so they can perform actions such as insertions/updates/deletions.
            </p>
        </section>
        <section id="the_team">
            <h4><span>4.5</span> Workflow</h4>
            <section id="Front_end">
                <h5><span>4.5.1</span> The Frontend module</h5>
                <ul>
                    <li>The main structure of the webpages was done by Irina Calin & Victor Platon</li>
                    <li>The general theme of the application was designed by Bogdan Peltea</li>
                    <li>The Start page was implemented by Bogdan Peltea</li>
                    <li>The About page was implemented by Irina Calin</li>
                    <li>The Loading screen was designed by Bogdan Peltea</li>
                    <li>The Resources page was written by Platon Victor and reviewed by Irina Calin</li>
                    <li>The 3 steps in the statistics section were projected by Irina Calin (logically) & Bogdan Peltea (visually)</li>
                    <li>The responsiveness of the pages was shared work</li>
                    <li>The Login & Signup pages were designed by Victor Platon</li>
                    <li>The encryption of the data was implemented by Victor Platon </li>
                </ul>
            </section>
            <section id="Back_end">
                <h5><span>4.5.2</span> The Backend module</h5>
                <ul>
                    <li>The main stucture & hierarchy was projected by Irina Calin</li>
                    <li>The data visualisation types (i.e. charts) were done by Irina Calin & Victor Platon </li>
                    <li>The localstorage interaction was managed by Bogdan Peltea</li>
                    <li>The database connection was designed by Irina Calin</li>
                    <li>The database completion script was written by Irina Calin</li>
                </ul>
            </section>
            <section id="Back_end">
                <h5><span>4.5.3</span> The API</h5>
                <p>

                </p>
                <ul>
                    <li>The main architecture of the API was implemented by Irina Calin </li>
                    <li>The open API specification was implemented by Irina Calin</li>
                    <li>The database connection was designed by Irina Calin</li>
                    <li>The query management was implemented by Irina Calin</li>
                    <li>The routes were designed by Irina Calin</li>
                    <li>GET methods were implemented by Victor Platon</li>
                    <li>PUT & DELETE methods were implemented by Bogdan Peltea</li>
                    <li>The services implementation was done by Irina Calin</li>
                    <li>The OpenAPI specification was written by Irina Calin</li>
                    <li>The middlewares were implemented by Victor Platon</li>
                </ul>
            </section>
        </section>
    </section>

    <section id="guide">
        <h3><span>5.</span> User guide</h3>
        <p>
            We created a tool for a flexible visualization of data on global terrorism. We want each user to understand
            how to use this tool and what requirements they need to fullfill for some actions on the web page.
            This section is about learning how the site works. There are instructions with images for each page
            of the application. This will help a newcomer understand how it works and what it does.

        </p>
        <section id="guide_login">
            <h4><span>5.1</span> Login</h4>
            <p>
                With an existant account you can login on the application. Enter your credentials and you can start useing the website,
                read about the idea, the project, the developers and learn a few things about the design.
                After login the <a href="#guide_start"> start</a> page will welcome you. Still, you have the possibility of cointinuing as a guest.
            </p>
            <p>
                Any invalid action (i.e. wrong/blank credentials)
                will trigger a message notification.
            </p>
            <img class="big-picture" src="../img/Arhitecture/Login_guide.PNG" alt="Login_page">
        </section>
        <section id="guide_register">

            <h4><span>5.2</span> Registration</h4>
            <p>
                Any user can choose not to create an account an enter as guest, but this limits their actions.
                Anyone can make an account just by entering a username and a password, but the username should be unique. Any new created account will be a normal
                user account. A normal user can see details about the database but it can not change,
                delete or add new information. One can only make use of GET methods of the API.
            </p>
            <p>
                Your account can be upgraded to an admin account by contacting one of the project developers and ask,
                mentioning the purpose and the other details. This is strictly for the safety
                of our database, we don't want anyone to be able to alter our data.
            </p>
            <p>
                If you already have an account you can go back to the <a href="#guide_login"> login</a> page and enter
                your credentials. This button was added so user won't get stuck here if miss-clicked the button in the login.
            </p>
            <p>
                Besides all of these, any invalid action will trigger a specific notification. If you try to register with a username
                that already exists, a blank username and/or password, a message will show up on that matter.
            </p>
            <img class="big-picture" src="../img/Arhitecture/Register_guide.PNG" alt="Register_page">
        </section>
        <section id="guide_start">
            <h4><span>5.3</span> Start</h4>
            <p>
                The start page is where you land on, after <a href="#guide_login"> login</a>.
                You can either go to a specific page: <a href="#guide_statistics">statistics</a>, <a href="#guide_resources">resources</a>
                or you can "Get started" and navigate to the home page.
            </p>
            <p>
                We designed this page in order to give sense and style to our website. Instead of going directly to a specific page,
                you as a user can choose what you want to explore. If you are here just for our api, statistics or design, you can
                navigate wherever you want.
            </p>
        </section>
        <section id="guide_homePage">
            <h4><span>5.4</span> Home Page</h4>
            <p>
                On the Home Page you can find useful informtion about the application, such as
                a short summary about Terrorism and our motivation in designing such a tool,
                who is the team, who are we and links to our personal pages.
            </p>
            <p>
                From here, much like on any website, you can go to any other page by using the navigation
                bar on the top of the page. This navigation bar is designed to always stay on the top of the website, so no matter
                how much you scroll down it will stay with you.
            </p>
            <p>
                On the footer of the homepage there are references to our personal pages, you can reach us through
                the social links. Some of us have more references you can acces, search as
                much as you like.
            </p>
        </section>
        <section id="guide_statistics">
            <h4><span>5.5</span> Statistics</h4>
            <p>
                Our goal was to create a flexible web data visualizer. This page is where the magic happens.
                Its design is as easy as we could think of. You have to go through a series of 3 steps, where you
                have to choose:
            </p>
            <ol>
                <li><span>1.</span> How to see the result</li>
                <li><span>2.</span> What dataset to see in the specified chart type</li>
                <li><span>3.</span> What restrictions/filters you want to add</li>
            </ol>
            <p>
                After these steps you will see the result.
                You have a lot of export alternatives, or you can simply go to other pages or start the process again.
            </p>
            <p>
                At each step you can go back to a previous one, go to another page or go further ahead, all by using the buttons
                at your disposal.
                For each type of chart, when you select what you want to see, you have an information modal which will display details about each dataset.
                All types of views work differently, we've dedicated a section for each one!
            </p>
            <section id="pie_chart">
                <h5><span>5.5.1</span> Pie Chart</h5>
                <p>
                    After choosing the pie chart you can select one (and just one) dataset you would like to see. This is mainly
                    for clarity purposes, a pie chart can't show more types of data.
                </p>
                <p>
                    If your request makes sense (i.e. your filters don't exclude one another), you will have your result displayed.
                </p>
            </section>
            <section id="map_chart">
                <h5><span>5.5.2</span> Map </h5>
                <p>
                    After choosing the map chart, you won't have an option as what you want to see. This view will always show you
                    the country and the total fatalities it had.
                </p>
                <p>
                    The filter page is where you can customize this result. Choose from year, country and many more.
                </p>
                <p>
                    When done with selecting everything you want to see, you can submit and see your result. If your request makes sense
                    (i.e. your filters don't exclude one another), you will have everything displayed.
                </p>
            </section>
            <section id="radius_chart">
                <h5><span>5.5.3</span> Radius Chart</h5>
                <p>
                    After choosing the radius chart, you can select a maximum of 2 elements that you want to see. You will be
                    notified if you try to select more.
                </p>
                <p>
                    The filter page is where you can select more precisesly what you want to see. You can choose from a variety of options.
                </p>
                <p>
                    When done with selecting you can finish and see your result. If your request makes sense
                    (i.e. your filters don't exclude one another), you will have everything displayed.
                </p>
            </section>
            <section id="bar_chart">
                <h5><span>5.5.4</span> Bar Chart</h5>
                <p>
                    The Bar chart offers you another choice. Beside choosing the dataset, you have to choose up
                    to 4 countries you want to compare. Because it's a columns chart, we decided that here you can compare
                    data from diffrent countries.
                </p>
                <p>
                    When done with selecting you can finish and see your result. If your request makes sense
                    (i.e. your filters don't exclude one another), you will have everything displayed.
                </p>
            </section>
        </section>
        <section id="guide_resources">
            <h4><span>5.6</span> Resources</h4>
            <p>
                The Resource page is the "manual" of the website. For all curious people, scientists and programmers, we created this page in order to help you.
                No matter your intentions with our applications: see data, use data, learn about the arhitecture, about the team, about our features,
                this pages is here to help.
            </p>
            <p>
                With so much information, we tried to keep it simple and useful by using a hierarchy model, with all the information
                displayed at the top of the page with clickable text that takes you to the desired subject. You can go to the top of the page
                anytime using the navigation bar, so don't worry about exploring!
            </p>
        </section>
    </section>

    <section id="acknowledgements">
        <h3><span>6.</span> Acknowledgements</h3>
        <p>
            Our team would like to thank
            <a href="https://developer.mozilla.org/en-US/" target="blank">MDN</a> for all the information and help
            it provides for new and old web developers, not only with guides and practices, but with a nice community
            that is there to stay for a long time.
            We learned a lot from the tutorials about HTML, CSS and much more.
        </p>
        <p>
            A special thanks to <a href="https://www.w3.org/" target="blank">W3C</a> which has great tool for verifying and
            correcting html and css code.
        </p>
        <p>
            We would also like to acknowledge <a role="doc-ref" href="https://w3c.github.io/" target="blank"> W3C github</a> for their <a href="https://w3c.github.io/scholarly-html/" target="blank">Scholarly HTML</a> model
            that helped us create the resource page.
        </p>
    </section>

    <section id="references">
        <h3><span>7.</span> References</h3>
        <dl>
            <dt id="HTML">HTML</dt>
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
        </dl>
    </section>
</body>

</html>