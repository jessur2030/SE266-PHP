
<head>
    <title>Schools Search</title>
</head>

<body>

    <?php
    session_start();

    if (!isset($_SESSION['userName'])) {
        header('Location: login.php');
    }

    include __DIR__ . '/models/model_schools.php';
    include __DIR__ . '/functions.php';

    $school = filter_input(INPUT_POST, 'schoolName');
    $city = filter_input(INPUT_POST, 'schoolCity');
    $state = filter_input(INPUT_POST, 'schoolState');

    $getSchools = getSchools($school, $city, $state);
    ?>

    <h1>Schools Search</h1>

    <form method="post"  name="search" action = "search.php">

        <div class="form-element">
            <label>School Name: </label>
            <input type="text" name="schoolName" value="">
        </div>
        <br>
        <div class="form-element">
            <label>City: </label>
            <input type="text" name="city" value="">
        </div>
        <br>
        <div class="form-element">
            <label>State: </label>
            <input type="text" name="state" value="">
        </div>
        <br>
        <button type="submit" name="search" value="Search">Search</button>
    </form>
  <?php
//include (__DIR__ . '/logout.php');

session_start();
session_destroy();
echo '<a href="login.php"><input type="submit" name="logout" value="Logout" class="btn btn-danger"></a>'
              
?>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>School</th>
                <th>City</th>
                <th>State</th>
            </tr>
        </thead>
        <tbody>

            <?php foreach ($getSchools as $row): ?>
                <tr>
                    <td><?php echo $row['schoolName']; ?></td>
                    <td><?php echo $row['schoolCity']; ?></td>
                    <td><?php echo $row['schoolState']; ?></td>
                </tr>
            <?php endforeach; ?>

        </tbody>
    </table>

</body>