<html>
    <head>
        <title>This is my first php code</title>
    </head>
    <body>
        <center>
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
                $str = "I am keshab, I am a java developer, but I do ml in python!";
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