<?php
    
    function importCSV($csvfile){
        $file = fopen($csvfile, "r" );
            while(!feof($file)){
                print_r(fgetcsv($file));
            }
        fclose($file);
    }

importCSV("test.csv");
?>