<!DOCTYPE html>

<html lang="en">

    <head>

        <link rel="stylesheet" type="text/css" href="styles/normalize.css">

        <link rel="stylesheet" type="text/css" href="styles/main.css">

        <meta charset="utf-8">

        <title>New Billing Entry</title>

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

        <form id="newBillingEntry" action="actionpages/newBillingEntryActionPage.php" method="post">

            <table class="submissionTable">

                <tr>

                    <td>Invoice Number&nbsp</td>

                    <td><input type="text" class="inputText" placeholder="XXXXXXXXX" id="BillID" name="BillID" required pattern="^[0-9]{0,9}$"></td>

                </tr>

                <tr>

                    <td>Date&nbsp</td>

                    <td><input type="text" class="inputText" id="date" name="date" placeholder="YYYY-MM-DD" required pattern="^\d{4}\-(0?[1-9]|1[012])\-(0?[1-9]|[12][0-9]|3[01])$"></td>

                </tr>

                <tr>

                    <td>Price&nbsp</td>

                    <td><input type="text" class="inputText" id="price" name="price" required pattern="^[0-9 .]{0,10}$"></td>

                </tr>

                <tr>

                    <td>Quantity&nbsp</td>

                    <td><input type="text" class="inputText" id="qty" name="qty" required pattern="^[0-9]{0,10}$"></td>

                </tr>

                <tr>

                    <td>ISBN&nbsp</td>

                    <td><input type="text" class="inputText" id="ISBN" name="ISBN" required pattern="^[0-9]{0,10}$"></td>

                </tr>
                <tr>

                    <td>Store Number</td>

                    <td><input type="text" class="inputText" id="storeNum" placeholder="XXXX" name="storeNum" required pattern="^[0-9]{4}$"></td>

                </tr>
            </table>
            <input type="submit">
        </form>

    </body>

</html>
