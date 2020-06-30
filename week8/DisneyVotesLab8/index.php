<html>
    <head>
        <title>Vote for your favorite Disney Character</title>
        <style type="text/css">
            /*            .main {margin-left: 100px; margin-top: 100px;}
                        .character {float: left; margin-right: 10px; border: 10px solid black; padding: 0px 10px 0px 0px; width: 300px;}
                        .results {float: left; margin-right: 10px; border: 1px solid black; width: 400px; margin-top: 100px;}
                        .button-div {margin: 10px 0px 10px 30px; }*/


            .button-size {width: 200px; height: 50px; }
            h2, h3 {margin-left: 50px;}
            .card {
                margin: 1em !important; 
            }

            .card {
                position: relative;
                display: -ms-flexbox;
                display: flex !important;
                -ms-flex-direction: column;
                flex-direction: column;
                min-width: 0;
                word-wrap: break-word;
                background-color: #fff;
                background-clip: border-box;
                border: 1px solid rgba(0,0,0,0.125);
                border-radius: .25rem;
            }

            .card {
                font-weight: 400;
                border: 0;
                -webkit-box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16), 0 2px 10px 0 rgba(0,0,0,0.12);
                box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16), 0 2px 10px 0 rgba(0,0,0,0.12);
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            }

            .card-body {
                -ms-flex: 1 1 auto;
                flex: 1 1 auto;
                min-height: 1px;
                padding: 1.25rem;
            }

            .card-body {
                padding-top: 1.5rem;
                padding-bottom: 1.5rem;
                border-radius: 0 !important;
            }

        </style>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>

    </head>
    <body>
        
        <?php
        include __DIR__ . '/model/model_DisneyVotes.php';
        include __DIR__ . '/functions.php';

        $getCharacters = getCharacters();
        ?>
        <div class="container text-center mt-5"><h1>Vote for your favorite Disney Character</h1>

            <div  class="" id="DisneyCharacterId" >
                <?php foreach ($getCharacters as $row): ?>
                    <tr>
                    <div class="row justify-content-center">
                        <div class="card  mt-5">
                            <div class="card-body">
                                <h1><td><?php echo $row['DisneyCharacterName']; ?></td></h1>    

                                <?php echo "<td><img src='images/" . $row['DisneyCharacterImage'] . "'</td>";
                                echo "</br>"
                                ?>
                                <td><input type="button" 
                                           class="btn btn-success button-size my-2"  data-idx ="<?php echo $row['DisneyCharacterId']; ?>" value="Vote for <?php echo $row['DisneyCharacterName']; ?>"></td>
                            </div>
                        </div>
<?php endforeach; ?>
                </div>
            </div>   
        </div>
    </div>

    <div class="card col-md-6 justify-content-center mt-5">
        <div class="card-body">

            <h2>Voting Results</h2>
            <canvas id="myChart" ></canvas>
        </div>
    </div>
    
    <script>        
        function displayChart () {
        $.get ("vote.php", function (data) {
        votes = JSON.parse (data);
        console.log (votes);
        new Chart(document.getElementById("myChart"), {
        type: 'bar',
        data: {
        labels: votes[0],
        datasets: [
        {
        label: "Number of Votes",
        backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f"],
        data: votes[1],
        borderWidth: 10
        }
        ]
        },
        options: {
        legend: { display: false },
        title: {
        display: false,
        text: 'Number of Votes By Disney Character'
        },
        scales: {
        yAxes: [{
        ticks: {
        beginAtZero:true
        }
        }]
        }
        }
        });
        })
        }
        $(document).ready (function (e) {
        displayChart ();
        $(":button").click (function (e) {
        var idx = $(this).data("idx");

        $.post ("insertvote.php", {DisneyCharacterId:idx}, function (data) {
        console.log(data);
        displayChart ();
        });
        });

        });



    </script>
</body>
</html>