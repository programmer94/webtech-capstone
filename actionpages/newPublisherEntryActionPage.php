<?php

    $con = mysqli_connect('localhost', 'nesrin', 'p4@cis435', 'bookstore', '3306');

    $pid = "'";

    $pid .= $_POST['PID'];

    $pid .= "'";

    $name = "'";

    $name .= $_POST['name'];

    $name .= "'";

    $contact = "'";

    $contact .= $_POST['contact'];

    $contact .= "'";

    $phone = "'";

    $phone .= $_POST['phone'];

    $phone .= "'";

    $query = "INSERT INTO publisher (PublisherID, Name, Contact, PhoneNum) VALUES ($pid, $name, $contact, $phone)";

    $result = mysqli_query($con, $query);

    header("Location: ../tables/Table_Publisher.php");

?>