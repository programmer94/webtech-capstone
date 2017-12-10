<?php
  $con = mysqli_connect('localhost','nesrin','p4@cis435','bookstore','3306');
  
  $isbn = "'";
  $isbn .= $_POST['ISBN'];
  $isbn .= "'";
    
  $title = "'";
  $title .= $_POST['TITLE'];
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
?>
