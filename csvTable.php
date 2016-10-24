<?php

    class csvTABLE {
        
        public function readCSV($file, $headings=false){
            $file = fopen($file, "r");
            $t .= '<table border="2">';
            if ($headings){
                $text = fgetcsv($file);
                $t .= '<tr>';
                foreach ($text as $headers){
                    $t .=  "<th> $headers </th>";
                }
                $t .=  '</tr>';
         
            }
            while ($csvtext = fgetcsv($file)){
                $t .=  '<tr>';
                foreach($csvtext as $cell){
                    $t .=  "<td> $cell </td>";
                }
                $t .=  '</tr>';
            }          
        $t .= '</table>';
        fclose($file);
        return $t;
        }
    }

    $obj = new csvTable;
    echo $obj -> readCSV("test.csv", true);
?>