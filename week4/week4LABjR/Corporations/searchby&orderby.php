<div>

    <form action="view.php" method="get">
        Sort Column: <select name="sort">
            <option value="id">ID</option>
            <option value="corp">Corporation Name</option>
            <option value="incorp_dt">Date</option>
            <option value="email">Email</option>
            <option value="zipcode">Zip Code</option>
            <option value="owner">Owner</option>
            <option value="phone">Phone</option>
        </select>
        Ascending: <input type="radio" name="dir" value="ASC">
        Descending: <input type="radio" name="dir" value="DESC">
        <input type="submit" name="action" value="Sort">
        <input type="reset">
    </form>
	
    <form action="view.php.php" method="get">
        Search Column: <select name="search">
            <option value="id">ID</option>
            <option value="corp">Corporation Name</option>
            <option value="incorp_dt">Date</option>
            <option value="email">Email</option>
            <option value="zipcode">Zip Code</option>
            <option value="owner">Owner</option>
            <option value="phone">Phone</option>
        </select>

        Term: <input type="text" name="term" id="term" value="">
        <input type="submit" name="action" value="Search">
        <input type="button" value="Reset">

    </form>
</div>


	
<center>
<h1> Corporations App </h1>
<form action="view.php" method="get">
        <?php
//displaying all my corporations
    foreach($corp as $corporation) 
	{
        ?>

        <tr><br>
            <td>
                <?php
                    echo $corporation["corp"];
                ?>
            </td>
            <td><a href="?action=Read&id=<?php echo $corps['id'] ?>">Read</a></td>
            <td><a href="?action=Update&id=<?php echo $corps['id'] ?>">Update</a></td>
            <td><a href="?action=Delete&id=<?php echo $corps['id'] ?>">Delete</a></td>
        </tr>
        <?php
    }
    ?>
        <br />
</center>
		<center>
        <a href="?action=Add2">create</a>
        </center>



</form>