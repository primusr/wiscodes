<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Echo</h1>

    <?php
        echo "Blah blah";
        echo "<p> Hello <strong>World</strong> </p>";

    ?>

    <h1>Variables</h1>

    <?php
        $lastName="Bonifacio";
        $firstName='Lanie';

        $age=21;
        $single=true;

        // true = single
        // false = taken
        
        echo  "I am"  . $firstName ." " .$LastName . $age . " years old and " .$single ;
        echo ($single==true)? " single":" taken";    

        if ($single == true) {
            echo "single";
        } else {
            echo "taken";
        }

    ?>



</body>
</html>