<html>
    <head>
        <title> Populating db </title>
    </head>
    <body>
        <h2> Repopulating.. </h3>
        <p>
            <?php
            include 'Database.php';

            $db = Database::getInstance();
            $mysqli = $db->getConnection(); 

            $sql_query = 'insert into data(year, country) values(\'1999\',\'Iraq\')';
            if(!($result = $mysqli->query($sql_query))) {
                die("Error occured during insert query: " . $mysqli->error);
            }

            echo "Success";
            ?>
        </p>
</body>
</html>
