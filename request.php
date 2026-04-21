<!-- Superglobal Request -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" >
        <label>Username:</label>
        <input type="text" name="username" placeholder="username..."><br>
        <label>Password:</label><br>
        <input type="text" name="password" placeholder="Password..."><br>
        <input type="submit" value="Submit">
    </form>
    <?php
        $username=$_REQUEST["username"];
        $password=$_REQUEST["password"];

        if($username== "admin" && $password== 123){   
            // echo htmlspecialchars("Username:$username"."<br>"."Password:$password",ENT_QUOTES,"UTF-8") ;
             echo"Username:$username"."<br>"."Password:$password";
        }
        else{
            echo"Wrong Username and Password"."<br>"."Please Input Again";
        }
       
    ?>
</body>
</html>