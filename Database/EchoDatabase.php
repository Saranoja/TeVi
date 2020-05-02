<?php
$row = 1;
$line = array();

if (($handle = fopen("globalterrorismdb_0718dist.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        array_push($line, $data);

        // if($num > 134) {
        //     for ($col = 0; $col <= 134; $col++) {
                
        //     }



        //     unset($line);
        //     $line = array();
        // }

        echo "<p> $num fields in line $row: <br /></p>\n";
        $row++;
        // for ($c=0; $c < $num; $c++) {
        //     echo $data[$c] . "<br />\n";
        // }

    }
    fclose($handle);
}
?>