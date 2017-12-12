<!DOCTYPE html>

<html lang="en">

    <head>

        <link rel="stylesheet" type="text/css" href="styles/normalize.css">

        <link rel="stylesheet" type="text/css" href="styles/main.css">

        <meta charset="utf-8">

        <title>New Order Entry</title>

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

        <form id="newOrderEntry" action="newOrderEntryActionPage.php" method="post">

            <table>

                <tr>

                    <td>Order ID&nbsp</td>

                    <td><input type="text" class="inputText" id="OID" name="OID"></td>

                </tr>

                <tr>

                    <td>Order Date&nbsp</td>

                    <td><input type="text" class="inputText" id="oDate" name="oDate"></td>

                </tr>

                <tr>

                    <td>Order Time&nbsp</td>

                    <td><input type="text" class="inputText" id="oTime" name="oTime"></td>

                </tr>

                <tr>

                    <td>Supplier ID&nbsp</td>

                    <td><input type="text" class="inputText" id="SID" name="SID"></td>

                </tr>

                <tr>

                    <td>Employee ID&nbsp</td>

                    <td><input type="text" class="inputText" id="EID" name="EID"></td>

                </tr>
            </table>
            <input type="submit">
        </form>

    </body>

</html>
