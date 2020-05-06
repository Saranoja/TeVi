<html>
    <head>
        <title> Populating db </title>
    </head>
    <body>
        <h2> Repopulating.. </h3>
        <p>
            <?php
            include 'Database.php';

            /*
            *    Script used in order to populate our database with the elements from the Kaggle .csv
            */

            $db = Database::getInstance();
            $mysqli = $db->getConnection();
            
            $row = 1;

            echo "Connected. Populating the database... Inserted rows: ";

            if (($handle = fopen("globalterrorismdb_0718dist.csv", "r")) !== FALSE) {
                while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) { // for each row or the file
                    $num = count($data); // number of fields should be equal to 135
                    $row++;

                    // do not include the header of the csv
                    // in php.ini: change max_execution_time to 600 or more
                    if($row > 2) {
                        
                        /*
                            $data[0] - event_id                 $data[1] - year                 $data[2] - month
                            $data[3] - day                      $data[4] - approximate_date     $data[5] - duration
                            $data[7] - country_code             $data[8] - country              $data[9] - region           
                            $data[11] - provence                $data[12] - city                $data[13] - latitude
                            $data[14] - longitude               $data[17] - location            $data[18] - summary
                            $data[26] - success                 $data[27] - suicide             $data[29] - attack_type
                            $data[35] - target_type             $data[37] - target_subtype      $data[38] - corp
                            $data[39] - target                  $data[41] - target_nationality  $data[58] - group_name
                            $data[59] - group_subname           $data[64] - motive              $data[65] - gun_certain
                            $data[71] - claimed                 $data[73] - claim_mode          $data[82] - weapon_type
                            $data[84] - wepaon_subtype          $data[97] - weapon_details      $data[98] - total_fatalites
                            $data[99] - us_citizens_who_died    $data[100] - terrorists_number
                        */
                        
                        $sql_query = "insert into data(event_id, year, month, day, approximate_date, duration,
                        country_code, country, region, provence, city, latitude, longitude, location, summary,
                        success, suicide, attack_type, target_type, target_subtype, corp, target, target_nationality, group_name,
                        group_subname, motive, gun_certain, claim, claim_mode, weapon_type, weapon_subtype, weapon_details,
                        total_fatalities, us_citizens_who_died, terrorists_number) 
                        values
                        (\"$data[0]\",\"$data[1]\",\"$data[2]\",\"$data[3]\",\"$data[4]\",\"$data[5]\",\"$data[7]\",\"$data[8]\",\"$data[9]\",
                        \"$data[11]\",\"$data[12]\",\"$data[13]\",\"$data[14]\",\"$data[17]\",\"$data[18]\",\"$data[26]\",\"$data[27]\",\"$data[29]\",
                        \"$data[35]\",\"$data[37]\",\"$data[38]\",\"$data[39]\",\"$data[41]\",\"$data[58]\",\"$data[59]\",\"$data[64]\",\"$data[65]\",
                        \"$data[71]\",\"$data[73]\",\"$data[82]\",\"$data[84]\",\"$data[97]\",\"$data[98]\",\"$data[99]\",\"$data[100]\")";
                    
                        echo $row . " <br />\n";

                        if(!($result = $mysqli->query($sql_query))) { // error handling (did not use DIE because I wanted insertion to continue)
                            echo "Error occured during insert query: " . $mysqli->error . " on row " . $row;
                        }
                    }
            
                }
                fclose($handle);
            }
            echo "Success";
            ?>
        </p>
</body>
</html>
