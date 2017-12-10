<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="styles/main.css">
        <meta charset="utf-8">
        <title>New Book Entry</title>
    </head>
    <body>
        <h1>New Book Entry</h1>
        <form id="newEntry" action="newEntryActionPage.php" method="post">
            <TABLE>
                <TR>
                    <TD>ISBN&nbsp</TD>
                    <TD><input type="text" class="inputText" id="ISBN" name="ISBN"></TD>
                </TR>
                <TR>
                    <TD>Title&nbsp</TD>
                    <TD><input type="text" class="inputText" id="Title" name="Title"></TD>
                </TR>
                <TR>
                    <TD>Publisher ID&nbsp</TD>
                    <TD><input type="text" class="inputText" id="PID" name="PID"></TD>
                    <TD>
                        <button type="button" id="searchPublishers">Search or Add Publishers
                    </TD>
                </TR>
                <TR>
                    <TD>Author ID&nbsp</TD>
                    <TD><input type="text" class="inputText" id="AID" name="AID"></TD>
                    <TD>
                        <button type="button" id="searchAuthors">Search or Add Authors
                    </TD>
                </TR>
            </TABLE>
        </form>
    </body>
</html>