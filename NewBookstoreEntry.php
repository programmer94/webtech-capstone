

<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="styles/normalize.css">
        <link rel="stylesheet" type="text/css" href="styles/main.css">
        <meta charset="utf-8">
        <title>New Book Entry</title>
        <script type="text/javascript">
            function returnToHomePage()
            {
                window.location.replace("index.html");
            }
        </script>
    </head>
    <body>
        <h1>New Book Entry</h1>
        <button type="button" id="returnToHomePage" OnClick="returnToHomePage()">Return to Home Page</button>
        <form id="newEntry" action="newEntryActionPage.php" method="post">
            <table>
                <tr>
                    <td>ISBN&nbsp </td>
                    <td><input type="text" class="inputText" id="ISBN" name="ISBN"></td>
                </tr>
                <tr>
                    <td>Title&nbsp </td>
                    <td><input type="text" class="inputText" id="Title" name="Title"></td>
                </tr>
                <tr>
                    <td>Publisher ID&nbsp </td>
                    <td><input type="text" class="inputText" id="PID" name="PID"></td>
                    <td>
                        <button type="button" id="searchPublishers">Search or Add Publishers</button>
                    </td>
                </tr>
                <tr>
                    <td>Author ID&nbsp </td>
                    <td><input type="text" class="inputText" id="AID" name="AID"></td>
                    <td>
                        <button type="button" id="searchAuthors">Search or Add Authors</button>
                    </td>
                </tr>
                <tr>
                    <td>Bookshelf Number&nbsp </td>
                    <td><input type="text" class="inputText id="BID" name="BID"></td>
                    <td><button type="button id="searchBookshelves">Search or Add Booksheves</button></td>
            </tr>
            </table>
        </form>
    </body>
</html>
