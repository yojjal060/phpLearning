<?php
    $name = "Yojjal";
    $age = 21;
    $email = "yojjal878@gmail.com";
    $food = "pizza";

    $quantity = 9;
    $gpa = 2.5;
    $price = 4.99;

    $employed = true;
    $online = false;
    $for_sale = true;
    $total = null;
    
    echo $name;
    echo "<br>";
    echo "{$age}";
    echo "<br>";
    echo "Hello, My name is {$name} <br> I am {$age} years old";
    echo "<br>";
    echo "My email is {$email}";
    echo "<br>";
    echo "You would like to buy {$quantity} items";

    if($gpa<0){
        echo"<br>";
        echo"It is lesser than 0";
    }
    else{
        echo"<br>";
        echo "It is greater than 0";
    }

    echo"Your pizza is \${$price}";
    echo"<br>";
    echo "Online status : {$online}";
    echo"<br>";
    echo "You have ordered {$quantity}{$food}s<br>";
    $total = $quantity * $price;
    echo "Your total is: \${$total}";
?>