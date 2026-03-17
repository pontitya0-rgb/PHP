<!-- Superglobal Get -->
<?php
    $java= htmlspecialchars( $_GET["java"]);
    $phython= htmlspecialchars($_GET["python"]) ;
    $php=htmlspecialchars($_GET["php"]);
    $total=($java+$phython+$php)/3;

    if($total<90 && $total>80){
        // echo htmlspecialchars("Congratulation<br>");
        echo "Congratulation"."<br>";
        echo "A"."\t"."pass";
    }
    else if($total<80 && $total>70){
        echo "Congratulation"."<br>";
        echo "B"."\t"."pass";
    }
    else if($total<70 && $total>60){
        echo "Congratulation"."<br>";
        echo "C"."\t"."pass";
    }
    else{
        echo"Fail";
    }
?>