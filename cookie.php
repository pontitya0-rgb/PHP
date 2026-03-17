<?php

if(isset($_POST['ingredient'])){
    setcookie("favorite", $_POST['ingredient'], time() + 86400);//use time()+86400 is limit storing data 1 day ,if data excess from 1 day browser will delete data auto
    echo "✅ Your favorite ingredient is saved!<br>";
}

if(isset($_COOKIE['favorite'])){
    echo "🍳 Your favorite ingredient is: " . htmlspecialchars($_COOKIE['favorite']) . "<br>";
}
?>

<form method="post">
    <label>Enter your favorite ingredient: 
        <input type="text" name="ingredient" required>
    </label>
    <input type="submit" value="Save">
</form>