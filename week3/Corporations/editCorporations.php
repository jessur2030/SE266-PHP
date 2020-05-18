 <?php
        
        include __DIR__ . '/model/model_corporations.php';
        include __DIR__ . '/functions.php';
        
        
        // let's figure out if we're doing update or add
        if (isset($_GET['action'])) {
            $action = filter_input(INPUT_GET, 'action');
            $id = filter_input(INPUT_GET, 'corpId');
            if ($action == "update") {
                $row = getCorp($id);
                
                $corp = $row['corp'];
                $incorp_dt = $row['incorp_dt'];
                $email = $row['email'];
                $zipcode = $row['zipcode'];
                $owner = $row['owner'];
                $phone = $row['phone'];
            } else {
                $corp = "";
                $incorp_dt = "";
                $email = "";
                $zipcode = "";
                $owner = "";
                $phone = "";
            }
            
            
        } elseif (isset($_POST['action'])) {
            $action = filter_input(INPUT_POST, 'action');
            $id = filter_input(INPUT_POST, 'corpId');
            $corp = filter_input(INPUT_POST, 'corp');
            $incorp_dt = filter_input(INPUT_POST, 'incorp_dt');
            $email = filter_input(INPUT_POST, 'email');
            $zipcode = filter_input(INPUT_POST, 'zipcode');
            $owner = filter_input(INPUT_POST, 'owner');
            $phone = filter_input(INPUT_POST, 'phone');
        } 
            
       
       if (isPostRequest() && $action == "add") {
       
           $result = addCorp ($corp, $incorp_dt, $email, $zipcode, $owner, $phone);
           header('Location: view.php');
           
       } elseif (isPostRequest() && $action == "update") {
           $result = updateCorp ($id, $corp, $incorp_dt, $email, $zipcode, $owner, $phone);
           header('Location: view.php');
           
       }
    ?>
    

<html lang="en">
<head>
  <title>Add Corporations</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
   

    
<div class="container">
    
  <h2>Add Corporations</h2>
  <form class="form-horizontal" action="editCorporations.php" method="post">
      <input type="hidden" name="action" value="<?php echo $action; ?>">
      <input type="hidden" name="corpId" value="<?php echo $id; ?>">
      
    <div class="form-group">
      <label class="control-label col-sm-2" for="team name">Corporation Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="corp" placeholder="Enter company name" name="corp" value="<?php echo $corp; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Date:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="incorp_dt" placeholder="Enter date" name="incorp_dt" value="<?php echo $incorp_dt; ?>">
      </div>
    </div>
         <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Email:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo $email; ?>">
      </div>
    </div>
               <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Zip Code:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="zipcode" placeholder="Enter zip code" name="zipcode" value="<?php echo $zipcode; ?>">
      </div>
    </div>
               <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Owner:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="owner" placeholder="Enter owner" name="owner" value="<?php echo $owner; ?>">
      </div>
    </div>
               <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Phone:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="phone" placeholder="Enter phone number" name="phone" value="<?php echo $phone; ?>">
      </div>
    </div>
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default"><?php echo $action; ?> Corporations</button>
       
      </div>
    </div>
  </form>
  
  <div class="col-sm-offset-2 col-sm-10"><a href="./view.php">View Corporations</a></div>
</div>

</body>
</html>