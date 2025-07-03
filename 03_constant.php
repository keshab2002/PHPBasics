<html>
    <head>
        <title>Constant Vs Variable</title>
    </head>
    <body>
        <center>
            <?php
            define('PI',3.1415);
            // difine('PI', 3.14); ERROR
            $r = 4.5;
            echo "Area: ".PI*$r*$r;
            echo "<br>";
            echo "Circumference: ".(2*PI*$r);
            ?>
        </center>
    </body>
</html>