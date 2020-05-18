<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Credit Card App</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <style type="text/css">
            .line {clear: left; height: 40px;}
            .col1 {width:150px; float: left; font-weight: bold;}
            .col2 {float: left;}
            input[type=text] {  width: 50px;}
        </style>
    </head>
    <body>


        <div class="col-sm-offset-2 col-sm-10">
            <h2>Credit card interest rate calculator</h2>
        </div>
        <div style="margin-left:40px;">
            <form name="creditCard" method="post">
                <div class="line">
                    <div class="col1">Amount Owed:</div>
                    <div class="col2"><input type="text" value="1000" name="owed"></div>

                </div>
                <div class="line">
                    <div class="col1">Interest Rate:</div>
                    <div class="col2"><input type="text" value="15.99" name="interestrate"></div>

                </div>
                <div class="line">
                    <div class="col1">Monthly Payment:</div>
                    <div class="col2"><input type="text" value="100" name="monthly"></div>

                </div>
                <div class="line">
                    <div class="col1">&nbsp;</div>
                    <div class="col2"><input type="submit" value="Show Me The Damage" name="showDamage"></div>

                </div>



            </form>

            <table class="table table-striped" style="width:50%">
                <tr>
                    <th>Month</th>
                    <th>Interest Paid</th>
                    <th>Owed</th>

                </tr>

                <?php
                if (isset($_POST['showDamage'])) {
                    $owing = $_POST['owed'];
                    $month = $_POST['monthly'];
                    $hold = ($owing / $month);
                    $totalPaid = 0;
                    $bal = "";
                    $interest = $_POST['interestrate'];
                    $owingp = $_POST['owed'];


                    for ($i = 1; $owing > 0; $i++) {
                        $interespaid = ($owing * $interest) / 100 / 12;
                        $totalPaid += $interespaid;
                        $owing = $owing + $interespaid - $month;
                        if ($owing < $interespaid) {
                            $owing = "";
                        }
                        print "<tr>";
                        print "<td>" . $i . "</td>";
                        print "<td>" . number_format($interespaid, 2) . "</td>";
                        print "<td>" . number_format((float) $owing, 2) . "</td>";
                        print "</tr>";
                    }
                    $totalPaid += $owingp;
                    print "</table>";
                    print "<b>" . "Total Amount Paid (Principal and Interest) is: " . "</b>" . number_format($totalPaid, 2);
                }
                ?>


            </table>


        </div>  

    </body>
</html>
