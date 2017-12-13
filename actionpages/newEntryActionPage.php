<?php
    $con = mysqli_connect('localhost', 'nesrin', 'p4@cis435', 'bookstore', '3306');

    $isbn = "'";
    $isbn .= $_POST['ISBN'];
    $isbn .= "'";

    $title = "'";
    $title .= $_POST['Title'];
    $title .= "'";

    $pid = "'";
    $pid .= $_POST['PID'];
    $pid .= "'";

    $aid = "'";
    $aid .= $_POST['AID'];
    $aid .= "'";

    $bid = "'";
    $bid .= $_POST['BID'];
    $bid .= "'";

    $query = "INSERT INTO book (ISBN, Bookshelf_Num, PublisherID, Title, AuthorID) VALUES ($isbn, $bid, $pid, $title, $aid)";

    $result = mysqli_query($con, $query);

    header("Location: ../tables/Table_Book.php");
?>
