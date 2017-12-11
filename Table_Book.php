<!DOCTYPE html>
<!-- CIS435.F17: Final Project -->
<!-- BookStore_DB.Book_Table -->
<html>
   <head>
		<meta charset = "utf-8">
		<title>Book Store</title>
		<style type = "text/css">
		     table  { background-color: lightblue;
		              border: 1px solid gray;
		              border-collapse: collapse; }
		     th, td { padding: 5px; border: 1px solid gray; }
		     tr:nth-child(even) { background-color: white; }
		     tr:first-child { background-color: lightgreen; }
		</style>
		<link rel="stylesheet" type="text/css" href="styles/normalize.css">
		<link rel="stylesheet" type="text/css" href="styles/main.css">
   </head>
   <body>
		<div id="nav">
			<ul>
				<li><a href="index.html"><b>Book Store</b></a></li>
				<li><a href="index.html"><b>Home</b></a></li>
				<li><a href="NewBookstoreEntry.php">Add Book</a></li>
				<li class="active"><a href="indexToTestTableCall.php">Book List</a></li>
			</ul> 
		</div>
      <?php
         // build SELECT query
         $query = "SELECT * FROM book";

         // Connect to MySQL
         if ( !( $database = mysqli_connect('localhost','nesrin','p4@cis435','bookstore','3306') ) )
            die( "<p>Could not connect to database</p></body></html>" );

         // open database
         if ( !mysqli_select_db( $database, "bookstore" ) )
            die( "<p>Could not open bookstore database</p>
               </body></html>" );

         // query database
         if ( !( $result = mysqli_query( $database, $query ) ) )
         {
            print( "<p>Could not execute query!</p>" );
            die( mysqli_error() . "</body></html>" );
         } // end if
      ?><!-- end PHP script -->

      <h1>Book DB</h1>
      <table>
         <tr>
            <th>ISBN</th>
            <th>Book Shelf Number</th>
            <th>Puplisher ID</th>
            <th>Title</th>
            <th>Author ID</th>	
         </tr>
         <?php
         //php 7
            // fetch each record in result set
            for ( $counter = 0; $row = mysqli_fetch_row( $result ); ++$counter )
            {
               // build table to display results
               print( "<tr>" );

               foreach ( $row as $key => $value )
                  print( "<td>$value</td>" );

               print( "</tr>" );
            } // end for

            mysqli_close( $database );
         ?><!-- end PHP script -->
      </table>
   </body>
</html>
