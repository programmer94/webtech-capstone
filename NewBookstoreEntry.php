<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="styles/normalize.css">
        <link rel="stylesheet" type="text/css" href="styles/main.css">
        <meta charset="utf-8">
        <title>New Book Entry</title>
        <script type="text/javascript">
            function returnToHomePage() {
                window.location.replace("index.html");
            }

            function redirectToAuthorTable() {
                window.location.replace("Table_Author.php");
            }

            function redirectToPublisherTable() {
                window.location.replace("Table_Publisher.php");
            }

            function redirectToBookshelfTable() {
                window.location.replace("Table_Book_Shelf.php");
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
        <form id="newEntry" action="newEntryActionPage.php" method="post">
            <table>
                <tr>
                    <td>ISBN&nbsp</td>
                    <td><input type="text" class="inputText" id="ISBN" name="ISBN"></td>
                </tr>
                <tr>
                    <td>Title&nbsp</td>
                    <td><input type="text" class="inputText" id="Title" name="Title"></td>
                </tr>
                <tr>
                    <td>Publisher ID&nbsp</td>
                    <td><input type="text" class="inputText" id="PID" name="PID"></td>
                    <td>
                        <button type="button" id="searchPublishers" OnClick=redirectToPublisherTable()>Search or Add
                            Publishers
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>Author ID&nbsp</td>
                    <td><input type="text" class="inputText" id="AID" name="AID"></td>
                    <td>
                        <button type="button" id="searchAuthors" OnClick=redirectToAuthorTable()>Search or Add Authors
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>Bookshelf Number&nbsp</td>
                    <td><input type="text" class="inputText id=" BID" name="BID"></td>
                    <td>
                        <button type="button id=" searchBookshelves
                        " OnClick=redirectToBookshelfTable()>Search or Add Booksheves</button></td>
                </tr>
            </table>
            <input type="submit">
        </form>
    </body>
</html>
