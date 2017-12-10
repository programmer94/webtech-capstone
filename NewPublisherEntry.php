
<!DOCTYPE html>

<html lang="en">

    <head>

        <link rel="stylesheet" type="text/css" href="styles/normalize.css">

        <link rel="stylesheet" type="text/css" href="styles/main.css">

        <meta charset="utf-8">

        <title>New Publisher Entry</title>

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

        <form id="newAuthorEntry" action="newPublisherEntryActionPage.php" method="post">

            <table>

                <tr>

                    <td>Publisher ID&nbsp </td>

                    <td><input type="text" class="inputText" id="PID" name="PID"></td>

                </tr>

                <tr>

                    <td>Name&nbsp </td>

                    <td><input type="text" class="inputText" id="name" name="name"></td>

                </tr>
				
                <tr>

                    <td>Contact&nbsp </td>

                    <td><input type="text" class="inputText" id="contact" name="contact"></td>

                </tr>
				
                <tr>

                    <td>Phone Number&nbsp </td>

                    <td><input type="text" class="inputText" id="phone" name="phone"></td>

                </tr>
				
            </table>

        </form>

    </body>

</html>