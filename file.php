<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    <h1>Please Uplaod file</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
        <input type="file" name="file"><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    if(isset($_FILES['file'])){
        echo "File name: " . $_FILES['file']['name'] . "<br>";
        echo "File type: " . $_FILES['file']['type'] . "<br>";
        echo "Temp location: " . $_FILES['file']['tmp_name'] . "<br>";
        echo "File size: " . $_FILES['file']['size'] . " bytes<br>";
    }
    ?>
</body>
</html>