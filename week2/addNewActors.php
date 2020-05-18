 <?php
        
        include __DIR__ . '/model/model_actors.php';
        include __DIR__ . '/functions.php';
     
        if (isPostRequest()) {
           $firstname = filter_input(INPUT_POST, 'firstname');
           $lastname = filter_input(INPUT_POST, 'lastname');
           $dob= filter_input(INPUT_POST, 'dob');
           $height= filter_input(INPUT_POST, 'height');
           $result = addActors ($firstname, $lastname, $dob, $height);
           echo $result;
           
       }
    ?>
    

<html lang="en">
<head>
  <title>Add Actors</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
    <h1>Add New Actors</h1>
    
    <form action="addNewActors.php" method="post">
        <label>First Name</label>    <input type="text" name="firstname"><br />
        <label>Last Name</label>    <input type="text" name="lastname"><br />
        <label>DOB</label>    <input type="text" name="dob"><br />
        <label>Height</label>    <input type="text" name="height"><br />
        <input type="submit" name="addActors">
    </form>
</body>
</html>