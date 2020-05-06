<?php

// script used in order to check the number of fields of the original dataset

$row = 0;

if (($handle = fopen("globalterrorismdb_0718dist.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
        $num = count($data);

        echo "<p> $num fields in line $row: <br /></p>\n";
        $row++;

        // if($row > 2) {
        
        //     // for ($c=0; $c < $num; $c++) {
        //     //     echo $data[$c] . "<br />\n";
        //     // }
        // }
    }
    fclose($handle);
}
?>