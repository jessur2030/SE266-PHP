<?php

  include __DIR__ . '/model/model_DisneyVotes.php';
     include __DIR__ . '/functions.php';
  //filter input  DisneyCharacterId
// in insertDisneyVote



$DisneyCharacterId = filter_input(INPUT_POST, "DisneyCharacterId", FILTER_SANITIZE_NUMBER_INT);
insertDisneyVote ($DisneyCharacterId);
 echo "whatever";

?>
