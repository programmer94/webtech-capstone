
<?php

  $con = mysqli_connect('localhost','nesrin','p4@cis435','bookstore','3306');

  $StoreID = "'";

  $StoreID .= $_POST['StoreID'];

  $StoreID .= "'";

  $loc = "'";
  
  $loc .= $_POST['loc'];
  
  $loc .= "'";
  
  $phone = "'";
  
  $phone .= $_POST['phone'];
  
  $phone .= "'";


  $query = "INSERT INTO book_store (Store_Num, Location, Phone_Num) VALUES ($StoreID, $loc, $phone)";


  $result = mysqli_query($con, $query);

  header("Location: Table_Book_Store.php");

?>