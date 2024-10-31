<?php 
    session_start();
?>

<!DOCTYPE html>
<html>
    <body>
        <?php 
            $favcolor = isset($_SESSION["favcolor"]) ? $_SESSION["favcolor"] : "tidak ditentukan";
            $favanimal = isset($_SESSION["favanimal"]) ? $_SESSION["favanimal"] : "tidak ditentukan";

            echo "Favorite color is " . $favcolor . ".<br>";
            echo "Favorite animal is " . $favanimal . ".";
        ?>
    </body>
</html>
