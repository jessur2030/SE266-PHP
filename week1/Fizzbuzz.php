<?php
echo '<h1>Jesus Rosario</h1>';

$arry = Array();

        
        for($i=1; $i<100; $i++){
            
            if ($i% 6 == 0) {
            echo 'fizzbuzz '; }
            else if ($i% 3 == 0) {
            echo 'fizz '; }
            
            else if  ($i%2 == 0 ) {
                echo 'buzz ';
            }
            
            else {
                echo $i ;
            }
            
            echo '<br>';
            
           
        }