<?php
    
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $name = $_REQUEST['fname'];
        $tel = $_REQUEST['tel'];
        $country = $_REQUEST['country'];
            echo "Name: " . $name;
            echo "Contact: ". $tel;
            echo "Country: ". $country;
    }

    ?>