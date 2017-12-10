
<?php

  $con = mysqli_connect('localhost','nesrin','p4@cis435','bookstore','3306');

  $bsid = "'";

  $bsid .= $_POST['BSID'];

  $bsid .= "'";

  $cat = "'";
  
  $cat .= $_POST['cat'];
  
  $cat .= "'";

  $query = "INSERT INTO book_shelf (Bookshelf_Num, Category) VALUES ($bsid, $cat)";

  $result = mysqli_query($con, $query);

  header("Location: Table_Book_Store.php");

?>