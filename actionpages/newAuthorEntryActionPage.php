<?php

    $con = mysqli_connect('localhost', 'nesrin', 'p4@cis435', 'bookstore', '3306');

    $fName = "'";

    $fName .= $_POST['fName'];

    $FName .= "'";


    $aid = "'";

    $aid .= $_POST['AID'];

    $aid .= "'";


    $lName = "'";

    $lName .= $_POST['lName'];

    $lName .= "'";


    $query = "INSERT INTO author (AuthorID, firstName, lastName) VALUES ($aid, $fName, $lName)";


    $result = mysqli_query($con, $query);

    header("Location: ../tables/Table_Author.php");

?>
