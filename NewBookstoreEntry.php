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
                window.location.replace("tables/Table_Author.php");
            }

            function redirectToPublisherTable() {
                window.location.replace("tables/Table_Publisher.php");
            }

            function redirectToBookshelfTable() {
                window.location.replace("tables/Table_Book_Shelf.php");
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
        <form id="newEntry" action="actionpages/newEntryActionPage.php" method="post">
            <table class="submissionTable">
                <tr>
                    <td>ISBN&nbsp</td>
                    <td><input type="text" class="inputText" id="ISBN" name="ISBN" required pattern="^(97(8|9))?\d{9}(\d|X)$" placeholder="ISBN-10"></td>
                </tr>
                <tr>
                    <td>Title&nbsp</td>
                    <td><input type="text" class="inputText" id="Title" name="Title" required></td>
                </tr>
                <tr>
                    <td>Publisher ID&nbsp</td>
                    <td><input type="text" class="inputText" id="PID" required name="PID" pattern="^[0-9]{0,10}$"></td>
                    <td>
                        <button type="button" id="searchPublishers" OnClick=redirectToPublisherTable()>Search or Add
                            Publishers
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>Author ID&nbsp</td>
                    <td><input type="text" class="inputText" placeholder="XXXX" name="AID" required pattern="^[0-9]{4}$"></td>
                    <td>
                        <button type="button" id="searchAuthors" OnClick=redirectToAuthorTable()>Search or Add Authors
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>Bookshelf Number&nbsp</td>
                    <td><input type="text" class="inputText" id="BID" placeholder="XXXX" name="BID" required pattern="^[0-9]{4}$"></td>
                    <td>
                        <button type="button" id="searchBookshelves" OnClick=redirectToBookshelfTable()>Search or Add Bookshelves</button></td>
                </tr>
            </table>
            <div style="text-align:center;">
            	<input type="submit">
            </div> 
        </form>
    </body>
</html>
