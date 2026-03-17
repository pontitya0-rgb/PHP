<?php
    // Using htmlspecialchars()
    // echo htmlspecialchars("<h1>Hello</h1>");

    // Using ENT_QUOTES in htmlspaecials()
    // $text = "I'm \"Kritta\"";
    // echo htmlspecialchars($text, ENT_QUOTES);

    // Using "UTF-8" Support emoji langlaud
    $hello="<សួស្តី😊>";
    echo htmlspecialchars( $hello, ENT_QUOTES,"UTF-8");

   
    // echo htmlspecialchars("Message<br>");  
    
    //Associative Array
    // $user=array(
    //     "name"=>"Jonh",
    //     "age"=>"45",
    //     "gender"=>"M"
    // );
    // echo $user["name"];
?>
