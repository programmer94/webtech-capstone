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
	
	$storeNum = "'";

    $storeNum .= $_POST['storeNum'];

    $storeNum .= "'";


    $query = "INSERT INTO billing (InvoiceNumb, BillingDate, Price, Quantity, ISBN, StoreNum) VALUES ($BillID, $date, $price, $qty, $ISBN, $storeNum)";

    $result = mysqli_query($con, $query);

    header("Location: ../tables/Table_Billing.php");

?>
