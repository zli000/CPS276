<!doctype html>
<html>
<head>
    <title>Assignment 5</title>
</head>
<body>
    <h1>File and Directory Assignment</h1>
    <text>Enter a folder name and the contents of a file.
        Folder names should contain alpha numeric characters only.</text><br><br>
    <form action="submit.php" method="post">
        <label for="folder">Folder Name</label><br>
        <input type="text" id="folder" name="folder" style="height: 100px; width: 800px" required><br><br>
        <label>File Content</label><br>
        <textarea style="height: 200px; width: 800px" class="form-control"
id="namelist" name="namelist"></textarea><br><br>
<input type="submit" value="Submit">
    </form>
</body>
</html>