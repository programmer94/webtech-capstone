<?php

    $con = mysqli_connect('localhost', 'nesrin', 'p4@cis435', 'bookstore', '3306');

    $ISBN = "'";

    $ISBN .= $_POST['ISBN'];

    $ISBN .= "'";

    $qty = "'";

    $qty .= $_POST['qty'];

    $qty .= "'";


    $query = "INSERT INTO inventory (ISBN, Quantity) VALUES ($ISBN, $qty)";

    $result = mysqli_query($con, $query);

    header("Location: ../tables/Table_Inventory.php");

?>
