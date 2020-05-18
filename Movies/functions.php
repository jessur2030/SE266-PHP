
<?php
  include_once __DIR__ . "/../model/model_movie.php";
    
    function isPostRequest() {
        return ( filter_input(INPUT_SERVER, 'REQUEST_METHOD') === 'POST' );
    }
     
 ?>