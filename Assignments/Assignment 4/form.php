<?php
if(count($_POST) > 0){
 require_once 'addNameProc.php';
 $addName = new AddNamesProc();
 $output = $addName->addClearNames();
}
?>

<!doctype html>
<html>
<head>
    <title>Assignment 4</title>
</head>
<body>
    <h1>Add Names</h1>
    <form action="submit.php" method="post">
        <input type="submit" value="Add Name">
        <input type="submit" value="Clear Names"><br><br>
        <label for="name">Enter Name</label><br>
        <input type="text" id="name" name="name" required><br><br>
        <label>List of Names</label><br>
        <textarea style="height: 500px; width: 500px" class="form-control"
id="namelist" name="namelist"><?php echo $output ?></textarea>
    </form>
</body>
</html>