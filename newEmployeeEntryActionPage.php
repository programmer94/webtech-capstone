<?php

    $con = mysqli_connect('localhost', 'nesrin', 'p4@cis435', 'bookstore', '3306');

    $eid = "'";

    $eid .= $_POST['EID'];

    $eid .= "'";

    $name = "'";

    $name .= $_POST['name'];

    $name .= "'";

    $add = "'";

    $add .= $_POST['add'];

    $add .= "'";

    $phone = "'";

    $phone .= $_POST['phone'];

    $phone .= "'";

    $hDate = "'";

    $hDate .= $_POST['hDate'];

    $hDate .= "'";

    $pRate = "'";

    $pRate .= $_POST['pRate'];

    $pRate .= "'";

    $pos = "'";

    $pos .= $_POST['pos'];

    $pos .= "'";

    $query = "INSERT INTO employee (EmployeeID, Name, Address, PhoneNum, HiredDate, Pay_Rate, Position) VALUES ($eid, $name, $add, $phone, $hDate, $pRate, $pos)";

    $result = mysqli_query($con, $query);

    header("Location: Table_Employee.php");

?>