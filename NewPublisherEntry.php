 <!DOCTYPE html>

<html lang="en">

    <head>

        <link rel="stylesheet" type="text/css" href="styles/normalize.css">

        <link rel="stylesheet" type="text/css" href="styles/main.css">

        <meta charset="utf-8">

        <title>New Publisher Entry</title>

        <script type="text/javascript">

            function returnToHomePage() {

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

        <form id="newAuthorEntry" action="actionpages/newPublisherEntryActionPage.php" method="post">

            <table class="submissionTable">
                <tr>
                    <td>Publisher ID&nbsp</td>
                    <td><input type="text" class="inputText" placeholder="XXXX" id="PID" name="PID" required pattern="^[0-9]{4}$"></td>
                </tr>
                <tr>
                    <td>Name&nbsp</td>
                    <td><input type="text" class="inputText" id="name" name="name" required></td>
                </tr>
                <tr>
                    <td>Contact&nbsp</td>
                    <td><input type="text" class="inputText" id="contact" name="contact"></td>
                </tr>
                <tr>
                    <td>Phone Number&nbsp</td>
                    <td><input type="text" class="inputText" id="phone" name="phone" placeholder="XXXXXXXXX" required pattern="^[0-9]{10}$"></td>
                </tr>
            </table>
            <input type="submit" value="Submit" name="info">
        </form>

    </body>

</html>
