<!DOCTYPE html>

<html lang="en">

    <head>

        <link rel="stylesheet" type="text/css" href="styles/normalize.css">

        <link rel="stylesheet" type="text/css" href="styles/main.css">

        <meta charset="utf-8">

        <title>New Store Entry</title>

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

        <form id="newAuthorEntry" action="actionpages/newStoreEntryActionPage.php" method="post">

            <table>

                <tr>

                    <td>Store Num&nbsp</td>

                    <td><input type="text" class="inputText" id="StoreID" name="StoreID" required pattern="^[0-9]{4}$"></td>

                </tr>

                <tr>

                    <td>Location&nbsp</td>

                    <td><input type="text" class="inputText" id="loc" name="loc" required></td>

                </tr>

                <tr>

                    <td>Phone Number&nbsp</td>

                    <td><input type="text" class="inputText" id="phone" name="phone" placeholder="XXXXXXXXX" required pattern="^[0-9]{10}$"></td>
                </tr>
            </table>

            <input type="submit">
        </form>

    </body>

</html>
