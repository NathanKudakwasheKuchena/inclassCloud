<?php

    $writer = $_POST['Author'];
    $book = $_POST['Title'];
    $number = $_POST['Quantity'];
    
    $books = Array("Do you hate computers", "Computers will kill us all soon", $book);

    echo "Available books are! \n";
    
    foreach ($books as $value) {
   echo "$value<br />\n";
}

?>