<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title> TeVi - Map Page </title>

        <link rel="stylesheet" href="Styles/Maps.css">

        <meta name="terrorism" content="all">
        <meta name="author" content="Irina Calin and Victor-Ionut Platon">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A web global terrorism visualizer">
    </head>
    <body id="whole_body">        
        
        <header role="banner">
            <h1> Maps </h1>
        </header>
            <nav class="navigation">
                <ul>
                    <li><a class="active" href="HomePage.html">Home</a></li>
                    <li><a href="Stats.html">Statistics</a></li>
                    <li><a href="#Maps" id="hover">Maps</a></li>
                    <li><a href="Resources.html">Data Tables</a></li>
                </ul>
                <form>
                    <input type="search" name="q" placeholder="Search query">
                    <input type="submit" value="Go!">
                    </form>
            </nav>
            <main>

                <article>
                    <p>In our overview of terrorism, we try to understand how the number of terrorist acts varies around the world and how it has changed over time. To do this, we need a clear and consistent definition of what terrorism is, and how it’s different from any other form of violence. This is not straightforward.</p>
                    <p>Terrorism is defined in the Oxford Dictionary as “the unlawful use of violence and intimidation, especially against civilians, in the pursuit of political aims.” We quickly see that this definition is unspecific and subjective. The issue of subjectivity in this case means that there is no internationally recognised legal definition of terrorism. Despite considerable discussion, the formation of a comprehensive convention against international terrorism by the <abbr title="United Nations">UN</abbr> has always been impeded by the lack of consensus on a definition.</p>
                    <p> The key problem is that terrorism is difficult to distinguish from other forms of political violence and violent crime, such as state-based armed conflict, non-state conflict, one-sided violence, hate crime, and homicide. The lines between these different forms of violence are often blurry. Here, we take a look at standard criteria of what constitutes terrorism, as well as how it might be distinguished from other forms of violence.</p>
                </article>

                <form>
                    <fieldset>
                        <legend>Choose region:</legend>
                        
                        <input type="radio" id="europeMap" name="map">
                        <label for="europeMap">Europe</label><br/>
                        
                        <input type="radio" id="americaMap" name="map">
                        <label for="americaMap">America</label><br/>

                        <input type="radio" id="asiaMap" name="map">
                        <label for="asiaMap">Asia</label><br/>

                        <input type="radio" id="africaMap" name="map">
                        <label for="africaMap">Africa</label><br/>
                    </fieldset>
                </form>	

                <img class="fit-picture" src="Images/terrorism-percent-deaths2.png" height="500px" alt="a basic map">
                
            </main>
    </body>
</html>