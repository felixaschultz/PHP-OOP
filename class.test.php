<?php
    require_once("Intastellar/classes/Intastellar.class.php");
    $IntastellarAccount = new \Intastellar\Accounts;
    $IntastellarAccount->dbusername = "root";
    $IntastellarAccount->dbpassword = "";
    $IntastellarAccount->dbname = "intastellar";
    $IntastellarAccount->dbhost = "localhost";

    $parent = get_parent_class($IntastellarAccount);
    $methods = get_class_methods($parent);
    $properties = get_class_vars($parent);
    $child = get_class($IntastellarAccount);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intastellar Class Test</title>
</head>
<body>
    <?php
        echo "<h1>Methods</h1>";
        foreach($methods as $method){
            echo "<p>$method</p>";
        }
        echo "<h1>Properties</h1>";
        foreach($properties as $property){
            echo "<p>$property</p>";
        }
    ?>
</body>
</html>