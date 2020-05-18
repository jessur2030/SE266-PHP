 <?php
        
        include __DIR__ . '/model/model_actors.php';
        include __DIR__ . '/functions.php';
       if (isPostRequest()) {
        $firstname = filter_input(INPUT_POST, 'firstname');
           $lastname = filter_input(INPUT_POST, 'lastname');
           $dob= filter_input(INPUT_POST, 'dob');
           $height= filter_input(INPUT_POST, 'height');
           $result = addActors ($firstname, $lastname, $dob, $height);
           
       }
    ?>
    

<html lang="en">
<head>
  <title>Add Movie Actors</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
   

    
<div class="container">
    
  <h2>Add Actors</h2>
  <form class="form-horizontal" action="addActors.php" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="actor name">First Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="firstname" placeholder="Enter first name" name="firstname">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Last Name:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="lastname" placeholder="Enter last name" name="lastname">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">DOB:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="dob" placeholder="Enter your DOB" name="dob">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Height:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="height" placeholder="Enter your height " name="height">
      </div>
    </div>
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Add Actors</button>
        <?php
            if (isPostRequest()) {
                echo "Actor added";
            }
        ?>
      </div>
    </div>
  </form>
  
  <div class="col-sm-offset-2 col-sm-10"><a href="./Lab2_View.php">View Actors</a></div>
</div>

</body>
</html>