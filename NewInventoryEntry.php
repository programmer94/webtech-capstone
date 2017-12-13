<!DOCTYPE html>

<html lang="en">

    <head>

        <link rel="stylesheet" type="text/css" href="styles/normalize.css">

        <link rel="stylesheet" type="text/css" href="styles/main.css">

        <meta charset="utf-8">

        <title>New Inventory Entry</title>

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

        <form id="newInventoryEntry" action="actionpages/newInventoryEntryActionPage.php" method="post">

            <table class="submissionTable">

                <tr>

                    <td>ISBN&nbsp</td>

                    <td><input type="text" class="inputText" id="ISBN" name="ISBN" required pattern="^[0-9]{10}$"></td>

                </tr>

                <tr>

                    <td>Quantity&nbsp</td>

                    <td><input type="text" class="inputText" id="qty" name="qty" required pattern="^[0-9]{0,5}$"></td>

                </tr>

            </table>
            <input type="submit">
        </form>

    </body>

</html>
