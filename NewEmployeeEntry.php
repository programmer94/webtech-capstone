<!DOCTYPE html>

<html lang="en">

    <head>

        <link rel="stylesheet" type="text/css" href="styles/normalize.css">

        <link rel="stylesheet" type="text/css" href="styles/main.css">

        <meta charset="utf-8">

        <title>New Employee Entry</title>

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

        <form id="newAuthorEntry" action="actionpages/newEmployeeEntryActionPage.php" method="post">

            <table>

                <tr>

                    <td>Employee ID&nbsp</td>

                    <td><input type="text" class="inputText" id="EID" name="EID"></td>

                </tr>

                <tr>

                    <td>Name&nbsp</td>

                    <td><input type="text" class="inputText" id="name" name="name"></td>

                </tr>

                <tr>

                    <td>Address&nbsp</td>

                    <td><input type="text" class="inputText" id="add" name="add"></td>

                </tr>

                <tr>

                    <td>Phone Number&nbsp</td>

                    <td><input type="text" class="inputText" id="phone" name="phone"></td>

                </tr>

                <tr>

                    <td>Hired Date&nbsp</td>

                    <td><input type="text" class="inputText" id="hDate" name="hDate"></td>

                </tr>

                <tr>

                    <td>Pay Rate&nbsp</td>

                    <td><input type="text" class="inputText" id="pRate" name="pRate"></td>

                </tr>

                <tr>

                    <td>Position&nbsp</td>

                    <td><input type="text" class="inputText" id="pos" name="pos"></td>

                </tr>

            </table>
            <input type="submit">
        </form>

    </body>

</html>
