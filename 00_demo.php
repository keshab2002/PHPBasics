<html>
    <head>
        <title>Practice PHP</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f6f8fa;
                margin: 0;
                padding: 0;
                color:rgba(173, 67, 86, 0.93);
                background-color:rgba(245, 239, 181, 0.93);

            }

            h1 , h2{
                color:rgb(179, 12, 43);
            }

            h1 {
                margin-top: 30px;
                font-size: 28px;
            }

            h2 {
                margin-top: 40px;
                font-size: 22px;
                padding-bottom: 5px;
                border-bottom-style : dashed ;
                display: block;
                width: 30%;
            }
        </style>
    </head>
    <body>
        <center>
            <h1>This is for Practice PHP</h1>
            <h2>PHP Introduction</h2>
            <?php
                echo "Hello World<br>";
                $a = 10;
                $b = 90;
                print("Sum of ".$a." and ".$b." is: ".$a+$b."<br>");
            ?>

            <h2>DataTypes in PHP</h2>
            <?php
                $a = 12;
                echo "Value of a(integer) is: ".$a."<br>";
                $a = 3.1415;
                echo "Value of a(float) is: ".$a."<br>";
                $a = FALSE;
                echo "Value of a(boolean) is: ".$a."<br>";
                $a = "Keshab";
                echo "Value of a(String) is: ".$a."<br>";
                $a = array("Chicken", "Banana",45, TRUE );
                echo "Value of a(array) is: ";
                foreach($a as $val){
                    echo $val." ";
                }
                echo "<br>Or a(array) can also be printed as: ";
                print_r($a);
            ?>

            <h2>Constant in PHP</h2>
            <?php
                define('PI', 3.1415);
                // global('PI', 3.14); -- error
                echo "PI is a constant valiable with value: ".PI."<br>";
            ?>

            <h2>Operator in PHP</h2>
            <?php
                echo "SKIPPED!<br>"
            ?>

            <h2>Functions in PHP</h2>
            <?php
                // Addition of varable number of arguments
                function add(...$a){
                    $sum = 0;
                    foreach ($a as $val) {
                        $sum += $val;
                    }
                    return $sum;
                }

                $a = 10;
                $b = 20;
                $c = 25;
                echo "Summation of ".$a.", ".$b." and ".$c." is: ".add($a, $b, $c)."<br>";

                // Factorial Calculations: 
                function factotial($n){
                    if($n < 1)
                        return 1;
                    else
                        return ($n * factotial($n-1));
                }

                $a = 9;
                echo "Factorial of ".$a." is: ".factotial($a)."<br>";

                // Passing values by references
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

            <h2>Strings in PHP</h2>

            <?php
                $str = "My name is keshab Dey!";

                // calculating no of characters in a string
                $len = strlen($str);
                echo "Number of characters in \"".$str."\" is: ".$len;
                echo "<br>";

                // Calculate number of words in a string
                $no_of_words = str_word_count($str);
                echo "Number of words in \"".$str."\" is: ".$no_of_words;
                echo "<br>";

                // add '.' after each two character
                $new_str = chunk_split($str, 2, ".");
                echo "After adding '.' after each two characters: ".$new_str;
                echo "<br>";

                //  split each 4 character into array of strings
                $new_arr = "abcdabcdabcdabcdabcd";
                $arr = str_split($new_arr, 4);
                print_r($arr);
                echo "<br>";

                // Convert to upper / lower
                $lower = strtolower($str);
                $upper = strtoupper($str);
                echo "To Upper: ".$upper." To lower: ".$lower;
                echo "<br>";

                // count frequrncy of substring in a string
                $str = "Java is my facourite, python is ok, but php is !@@@## ";
                $substr = "is";
                $count = substr_count($str, $substr,6);
                echo "\"".$substr."\" appears ".$count." times in string \"".$str."\" after index 6";
                echo "<br>";

                // CVapitalize a sentence
                $str = "i am keshab, i am a java developer, but i do ml in python!";
                $str = ucwords($str);
                echo "After Capitalizing: ".$str;
                echo "<br>";

                // CVapitalize a sentence (only first character)
                $str = "I am keshab, I am a java developer, but I do ml in python!";
                $str = ucfirst($str);
                echo "After Capitalizing only first character: ".$str;
                echo "<br>";

                // Compare Strings
                $str1 = "Keshab";
                $str2 = "Keshab";
                if(strcmp($str1, $str2) === 0)
                    echo "\"".$str1."\" and \"".$str2."\" are same!<br>";
                else
                    echo "\"".$str1."\" and \"".$str2."\" are not same!<br>";

                // Compare Strings Case Insencetive
                $str1 = "KESHAB";
                $str2 = "Keshab";
                if(strcasecmp($str1, $str2) === 0)
                    echo "\"".$str1."\" and \"".$str2."\" are same!<br>";
                else
                    echo "\"".$str1."\" and \"".$str2."\" are not same!<br>";
            ?>
        </center>
    </body>
</html>