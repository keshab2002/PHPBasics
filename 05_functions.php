<html>
    <head>
        <title>Functions in PHP</title>
    </head>
    <body>
        <center>
            <?php

                // Addition of variable number of argumets
                function add(...$a){
                    $sum = 0;
                    foreach($a as $val){
                        $sum += $val;
                    }
                    return $sum;
                }

                // calling function add
                $a = 2;
                $b = 5;
                $res = add($a, $b);
                echo "Addition of ".$a." and "."$b"." is: ".$res;
                echo "<br>";
                $a = 2;
                $b = 5;
                $c = 7;
                $res = add($a, $b, $c);
                echo "Addition of ".$a." , "."$b"." and ".$c." is: ".$res;
                echo "<br>";

                // Calcualting factorial
                function factorial($n){
                    if ($n <= 1 )
                        return 1;
                    else 
                        return ($n*factorial($n-1));
                }
                $n = 9;
                echo "Factorial of ".$n." is: ".factorial($n);
                echo "<br>";
                // Arguments passing by references
                function swap(&$a, &$b){
                    $temp = $a;
                    $a = $b;
                    $b = $temp;
                }

                $a = 2;
                $b = 5;
                echo "Before Swapping: a=".$a." and b="."$b"."<br>";
                swap($a, $b);
                echo "After Swapping: a=".$a." and b="."$b"."<br>";

            ?>

        </center>
    </body>
</html>