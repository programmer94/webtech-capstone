<?php

    $con = mysqli_connect('localhost', 'nesrin', 'p4@cis435', 'bookstore', '3306');

    $OID = "'";

    $OID .= $_POST['OID'];

    $OID .= "'";

    $oDate = "'";

    $oDate .= $_POST['oDate'];

    $oDate .= "'";

    $oTime = "'";

    $oTime .= $_POST['oTime'];

    $oTime .= "'";

    $SID = "'";

    $SID .= $_POST['SID'];

    $SID .= "'";

    $EID = "'";

    $EID .= $_POST['EID'];

    $EID .= "'";


    $query = "INSERT INTO orders (OrderID, OrderDate, OrderTime, SupplierID, EmployeeID) VALUES ($OID, $oDate, $oTime, $SID, $EID)";

    $result = mysqli_query($con, $query);

    header("Location: ../tables/Table_Order.php");

?>
