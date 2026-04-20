<?php
//Manually Set Environment Variable
putenv("APP_VERSION=1.0");

echo getenv("APP_VERSION");
//Using getenv() (Recommended)
putenv("APP_VERSION=1.0");

echo getenv("APP_VERSION");
//Store Config Securely
putenv("DB_PASSWORD=123456");

function connectDB() {
    $password = getenv("DB_PASSWORD");
    echo "Password is: " . $password;
}

connectDB();
?>