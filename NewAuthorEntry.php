<!DOCTYPE html>

<html lang="en">

    <head>

        <link rel="stylesheet" type="text/css" href="styles/normalize.css">

        <link rel="stylesheet" type="text/css" href="styles/main.css">

        <meta charset="utf-8">

        <title>New Author Entry</title>

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

        <form id="newAuthorEntry" action="actionpages/newAuthorEntryActionPage.php" method="post">

            <table>

                <tr>

                    <td>AuthorID&nbsp</td>

                    <td><input type="text" class="inputText" id="AID" name="AID" required pattern="^[0-9]{0,10}$"></td>

                </tr>

                <tr>

                    <td>First Name&nbsp</td>

                    <td><input type="text" class="inputText" id="fName" name="fName" required pattern="^[A-Z][a-z]$"></td>

                </tr>

                <tr>

                    <td>Last Name&nbsp</td>

                    <td><input type="text" class="inputText" id="lName" name="lName" required pattern="^[A-Z][a-z]$"></td>

                </tr>
            </table>
            <input type="submit">
        </form>

    </body>

</html>
