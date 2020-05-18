
<?php 

if (isset ($_FILES['file1'])) {
    echo "File uploaded";
    header('Location: search.php');
}
?>



</form>
        
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style type="text/css">
        #mainDiv {margin-left: 100px; margin-top: 100px;}
        .col1 {width: 100px; float: left;}
        .col2 {float: left;}
        .rowContainer {clear: left; height: 40px;}
        .error {margin-left: 100px; clear: left; height: 40px; color: red;}
    </style>
<title>Schools Upload</title>
</head>
    <body>
        
        <div id="mainDiv">
            <h2>Upload File</h2>
            <p>
                Please specify a file to upload and then be patient as the upload may take a while.
            </p>
            
            <form action="upload.php" method="post" enctype="multipart/form-data">
                <input type="file" name="file1">
                <input type="submit" value="Upload">

            </form>
                         <?php
//include (__DIR__ . '/logout.php');

session_start();
session_destroy();
echo '<a href="login.php"><input type="submit" name="logout" value="Logout" class="btn btn-danger"></a>'
              
?>
        </div>
    

         
    </body>
</html>