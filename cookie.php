<?php
// Create cookie
setcookie("user", "Student", time() + 3600);

// Check and display
if (isset($_COOKIE["user"])) {
    echo "Welcome " . $_COOKIE["user"];
} else {
    echo "Hello Guest";
}
?>