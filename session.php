
<?php
    // //using session_unset()
    // session_start(); //it is start session()
    // $_SESSION["a"] = 10;// it is save data or input data
    
    // session_unset();// delete veribles
    // if(isset($_SESSION["a"])){
    //     echo $_SESSION["a"];
    // }
    // else{
    //     echo "Deleted!";
    // }


    //using session_destroy
    session_start();
    $_SESSION["a"] = 10;
    $_SESSION["b"] = 20;

    unset($_SESSION["a"]);//delete verible 1 is delete a=10
    // session_destroy();//delete all session in server
    if(isset($_SESSION["a"])){
        echo $_SESSION["a"];
    }
    else if(isset($_SESSION["b"])){
        echo $_SESSION["b"];
    }
    else{
        echo "Deleted!";
    }
?>
