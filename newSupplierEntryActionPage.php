<?php

    $con = mysqli_connect('localhost', 'nesrin', 'p4@cis435', 'bookstore', '3306');

    $sid = "'";

    $sid .= $_POST['SID'];

    $sid .= "'";


    $name = "'";

    $name .= $_POST['name'];

    $name .= "'";

    $add = "'";

    $add .= $_POST['add'];

    $add .= "'";

    $phone = "'";

    $phone .= $_POST['phone'];

    $phone .= "'";


    $query = "INSERT INTO supplier (SupplierID, Name, Address, Phone_Num) VALUES ($sid, $name, $add, $phone)";


    $result = mysqli_query($con, $query);

    header("Location: Table_Supplier.php");

?>
