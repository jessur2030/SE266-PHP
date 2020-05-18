<html lang="en">
<head>
  <title>View Corporations SQL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        
    <div class="col-sm-offset-2 col-sm-10">
        <h1>Corporations</h1>
    
    <?php
        
        include __DIR__ . '/model/model_corporations.php';
        include __DIR__ . '/functions/functions.php';
        if (isPostRequest()) {
            $id = filter_input(INPUT_POST, 'corpId');
            deleteCorps ($id);

        }
        $corps = getCorps ();
        
    ?>

        <?php
          
           include_once './functions/getdb.php';
           include_once './functions/dbData.php';
           $results = getAllCorpData();
           
           // hidden field with same name but different value in sortForm and searchForm
           $action = filter_input(INPUT_GET, 'action');
           
           if ( $action === 'sort' )
           {
               $column = filter_input(INPUT_GET, 'colum');
               $order = filter_input(INPUT_GET, 'order');
               
               $count = rowCount1($column, $order);
               
               if($count > 0){
                echo "ROW COUNT: {$count}";
              }
              else
              {
                  echo "NO RESULTS FOUND!!";
              }
               $results = getCorpSort($column, $order);
                           
           }
           
           else if ( $action === 'search' )
           {
               $colum = filter_input(INPUT_GET, 'colum');
               $keyword = filter_input(INPUT_GET, 'keyword');
               
              $count = rowCount2($colum, $keyword);
              
              if($count > 0){
                echo "ROW COUNT: {$count}";
              }
              else
              {
                  echo "NO RESULTS FOUND!!";
              }
               $results = getCorpSearch($colum, $keyword);
           }
           else if ($action === 'reset')
           {
               $results = getAllCorpData();
           }
           
             // include two forms 
            include './includes/searchForm.php';
            include './includes/sortForm.php';
        ?>  

        
    <table class="table table-striped">
            <thead>
                <tr>
                 
                    <th>Company Name</th>
                    <th>Date</th>
                    <th>Email</th>
                    <th>Zip code</th>
                    <th>Owner</th>
                    <th>Phone</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
           
            
            <?php foreach ($corps as $row): ?>
                <tr>
                    <td>
                        
                            <form action="view.php" method="post">
                            <input type="hidden" name="corpId" value="<?php echo $row['id']; ?>" />
                            <button class="btn glyphicon glyphicon-trash" type="submit"></button>
                            <?php echo $row['corp']; ?>
                        </form>
                   </td>
                    <td><?php echo $row['incorp_dt']; ?></td> 
                          <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['zipcode']; ?></td> 
                                      <td><?php echo $row['owner']; ?></td> 
                                            <td><?php echo $row['phone']; ?></td> 
                    <td><a href="editCorporations.php?action=update&corpId=<?php echo $row['id']; ?>">Edit</a></td> 
                    
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        
        <br />
        <a href="editCorporations.php?action=add">Add Corporation</a>
    </div>
    </div>
</body>
</html>