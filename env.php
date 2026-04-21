<?php
// Simulate environment config
putenv("APP_ENV=development");
putenv("APP_VERSION=1.0");

// Display values
echo "Environment: " . getenv("APP_ENV") . "<br>";
echo "Version: " . getenv("APP_VERSION");

?>