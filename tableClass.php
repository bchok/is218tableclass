<?php

    class tableGenerate {

        //columnTitles indicates Column headers, data indicates data to populate table
        public function createTable($columnTitles, $data){

            $t .= '<table border="3">';
            $t .= '<tr>';
            foreach( $columnTitles as $columnTitle){
                $t .= '<th>' . $columnTitle . '</th>';
            }
            $t .= '</tr>';
            foreach ($data as $info){
                $t .= '<tr>';
                foreach($info as $key){
                    $t .= '<td>' . $key .'</td>';
                }
                $t .= '</tr>';
            }
            $t .= '</table>';
            return $t;
        }
    }

    $obj = new tableGenerate;

    $categories = array("Name", "Age", "Team", "Country");
    $players = array(
        array('Wayne Gretzky', '50', 'Oilers', 'Canada'),
        array('Chris Drury', '40', 'Rangers', 'United States'),
        array('Petr Nedved', '44', 'Rangers', 'Czech Republic')
    );

    echo $obj -> createTable($categories, $players);

    //print_r($obj);



?>