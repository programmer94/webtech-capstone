<?php

    $con = mysqli_connect('localhost', 'nesrin', 'p4@cis435', 'bookstore', '3306');

    $BillID = "'";

    $BillID .= $_POST['BillID'];

    $BillID .= "'";

    $date = "'";

    $date .= $_POST['date'];

    $date .= "'";

    $price = "'";

    $price .= $_POST['price'];

    $price .= "'";

    $qty = "'";

    $qty .= $_POST['qty'];

    $qty .= "'";

    $ISBN = "'";

    $ISBN .= $_POST['ISBN'];

    $ISBN .= "'";


    $query = "INSERT INTO billing (Invoice_Num, Date, Price, Quantity, ISBN) VALUES ($BillID, $date, $price, $qty, $ISBN)";

    $result = mysqli_query($con, $query);

    header("Location: ../tables/Table_Billing.php");

?>
