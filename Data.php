<?php
    
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $name = $_REQUEST['fname'];
        $tel = $_REQUEST['tel'];
        $country = $_REQUEST['country'];
            echo "Name: " . $name . "<br>";
            echo "Contact: ". $tel . "<br>";
            echo "Country: ". $country . "<br>";
    }

    ?>