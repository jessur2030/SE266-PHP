<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Php Website</title>
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        
    </head>
    <body>
             
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">JesusPhp</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="website.php">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="https://getbootstrap.com/">Bootstrap</a>
                    <a class="nav-item nav-link" href="https://www.php.net/manual/en/function.phpinfo.php">Php Info</a>
                    
                </div>
            </div>
        </nav>
                
        <div class="jumbotron jumbotron-fluid bg-info text-white text-center" style="background:#aaa;">
            <div class="container">
                <h3 class="display-1">PHP and MySQL - Jesus Rosario</h3>
            </div>
            
            <p class="lead"> Let's break the internet with Php</p>
        </div>
             
        <div class="container">
                   
            <div class="row">
                <div class="col-sm-6">
                    <div class="card text-white bg-dark mb-3" style="max-width: 34rem; height: 10rem; ">
                        <div class="card-header">Code</div>
                        <div class="card-body">
                            <h5 class="card-title">GitHub repository</h5>
                            <ul>
                                <li><a class="text-danger" href="https://github.com/jessur2020/se266_test.git">My GitHub Repo</a></li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card text-white bg-dark mb-3" style="max-width: 34rem;height: 10rem;  ">
                        <div class="card-header">Last update</div>
                        <div class="card-body">
                            
     <?php
    $file = "website.php";
    $mod_date=date('F d Y h:i:s: A', filemtime($file));
    
    echo "Last modified $mod_date";
      ?>
                            
                       </div>
                    </div>
                </div>
                
            </div>
            
            <div class="row">
                
                <div class="col-sm-12">
                                      
                    <div class="card border-dark mb-3" ;">
                        <div class="card-header">Php Assignments</div>
                        <div class="card-body text-dark">
                            <h5 class="card-title">Assignments Labs</h5>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Assignment Name</th>
                                        <th>Zipped Solution</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="Fizzbuzz.php" class="notyet">Fizz Buzz Example</a></td>
                                        <td><a href="Fizzbuzz.zip" class="notyet">Zip file FizzBuzz</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="HelloW.php" class="notyet">Hello World Example</a></td>
                                        <td><a href="HelloW.zip" class="notyet">Zip file Hello World</a></td>
                                    </tr>
                                    
                                     <tr>
                                         <td><a href="lab1.php" class="notyet">Credit Card Example</a></td>
                                         <td><a href="lab1.zip" class="notyet">Zip file Credit Card</a></td>
                                    </tr>
                                    
                                    <tr>
                                        <td><a href="../week2/Lab2_View.php" class="notyet">Lab 2 -Actors</a></td>
                                        <td><a href="../week2/week2.zip" class="notyet">Zip file Lab 2 -Actors</a></td>
                                    </tr>
                                   
                                    <tr>
                                        <td><a href="../week3/corporations/view.php" class="notyet">Lab 3 Corporations</a></td>
                                        <td><a href="../week3/week3.zip" class="notyet">Zip file Lab 3 Corporations</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="#" class="notyet">Solution Week 6</a></td>
                                        <td><a href="#" class="notyet">Zip file Week 6</a></td>
                                    </tr>
                                    <tr>
                                    
                                        <td><a href="#" class="notyet">Solution Week 7</a></td>
                                        <td><a href="#" class="notyet">Zip file Week 7</a></td>
                                    </tr>
                                        <tr>
                                            <td><a href="../Movies/Movie Review Proposal/Movie Review Proposal.pdf" class="notyet">Movie Review Proposal</a></td>
                                        <td><a href="#" class="notyet">Zip file WeeK</a></td>
                                    </tr>
                                          </tr>
                                        <tr>
                                      
                                            <td><a href="../Movies/Movie Review - Prototype/Movie Review - Prototype.pdf" class="notyet">Movie Review - Prototype</a></td>
                                          <td><a href="#" class="notyet">Zip file Week</a></td>
                                    </tr>
                                    <tr>
                                      
                                        <td><a href="../Movies/Movie Review - Technical Spec/Movie Review - Technical Spec.pdf" class="notyet">Movie Review Technical Spec </a></td>
                                          <td><a href="#" class="notyet">Zip file Week</a></td>
                                    </tr>
                                    
                                    <tr>
                                        <td><a href="#" class="notyet">Solution Week 8</a></td>
                                        <td><a href="#" class="notyet">Zip file Week 8</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="#" class="notyet">Solution Week 9</a></td>
                                        <td><a href="#" class="notyet">Zip file Week 9</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="#" class="notyet">Solution Week 10</a></td>
                                        <td><a href="#" class="notyet">Zip file Week 10</a></td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                            
                      </div>
                    </div>
                </div>
                        
            </div>
        </div>
        
        <div id="footer">
            <div class="container"> 
                <div class="text-muted pull-left">Copyright&copy; 2019 jesus Rosario All Rights Reserved. </a></div>
                
            </div>
        </div>
        
        
        
    </div>
    
  
</body>
</html>
