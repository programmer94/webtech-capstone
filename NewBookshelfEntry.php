 
<!DOCTYPE html>

<html lang="en">

    <head>

        <link rel="stylesheet" type="text/css" href="styles/normalize.css">

        <link rel="stylesheet" type="text/css" href="styles/main.css">

        <meta charset="utf-8">

        <title>New Bookshelf Entry</title>

        <script type="text/javascript">

            function returnToHomePage()

            {

                window.location.replace("index.html");

            }

        </script>

    </head>

    <body>

        <div id="nav">

			<ul>

				<li><a href="index.html"><b>Book Store</b></a></li>

				<li><a href="index.html"><b>Home</b></a></li>

				<li class="active"><a href="NewBookstoreEntry.php">Add Book</a></li>

				<li><a href="indexToTestTableCall.php">Book List</a></li>

			</ul> 

		</div>

        <form id="newAuthorEntry" action="newBookshelfEntryActionPage.php" method="post">

            <table>

                <tr>

                    <td>Bookshelf Number&nbsp </td>

                    <td><input type="text" class="inputText" id="BSID" name="BSID"></td>

                </tr>

                <tr>

                    <td>Category&nbsp </td>

                    <td><input type="text" class="inputText" id="cat" name="cat"></td>

                </tr>
			
            </table>

        </form>

    </body>

</html>
