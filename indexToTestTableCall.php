<!--
CIS 435-F17
Final Project
Index to test call of tables
-->

<!DOCTYPE html>
<html lang="en">
   <head>
        <meta charset = "utf-8">
        <title>Book Store</title>
        <style type = "text/css">
            p       { margin: 0px; }
            .error  { color: red }
            p.head  { font-weight: bold; margin-top: 10px; }
            label   { width: 5em; float: left; }
            h1      { color: black; text-align: center; }
        </style>
	<script type = "text/javascript">
            document.writeln("<h1>Welcome to The Book Store Page!</h1>");
	</script>
   </head>
   <body>
    <?php     
	print("<p><a href = 'Table_Author.php'>Click here to view database for table author.</a></p>");
        print("<p><a href = 'Table_Billing.php'>Click here to view database for table billing.</a></p>");
        print("<p><a href = 'Table_Book.php'>Click here to view database for table book.</a></p>");
        print("<p><a href = 'Table_Book_Store.php'>Click here to view database for table book store.</a></p>");
        print("<p><a href = 'Table_Employee.php'>Click here to view database employee.</a></p>");
        print("<p><a href = 'Table_Inventory.php'>Click here to view database for inventory.</a></p>");
        print("<p><a href = 'Table_Order.php'>Click here to view database for order.</a></p>");
        print("<p><a href = 'Table_Publisher.php'>Click here to view database for publisher.</a></p>");
        print("<p><a href = 'Table_Supplier.php'>Click here to view database for supplier.</a></p>");
        print("<p><a href = 'Table_book_shelf.php'>Click here to view database for book shelf.</a></p>");
        
    ?>
   </body>
</html>