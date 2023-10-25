<html>
    <head>
        <title>crud with image</title>
    </head>
    <body>
        <form action="insert.php" method="POST" enctype="multipart/form-data">
            <label>Name</label><br />
            <input type="text" name="namet" required/><br />
            <label>Upload file</label><br />
            <input type="file" name="file" value="upload"/><br />
            <input type="submit" name="insert"/>
        </form>
        <a href="select.php" target="_blank">display data</a>
    </body>
</html>