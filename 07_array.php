<html>
    <head>
        <title>Array in PHP</title>
        <style>
            body{
                background-color:rgba(245, 239, 181, 0.65);
            }
        </style>
    </head>
    <body>
        <center>
            <h1>Arrays in PHP</h1>

            <h2>Simle Array</h2>

            <p>Array default index: 0, 1, 2 ...</p>

            <?php
            $arr = array("chicken", "banana", "meow");

            // Printing an array using print_r() function:
            echo "Printing an array using print_r() function:<br>";
            print_r ($arr);
            
            // Printing array using for loop
            echo "<br>Printing array using for loop: <br>";
            for ($i = 0; $i < count($arr); $i++)
            echo $arr[$i]."    ";
            
            
            // Printing array using foreach loop
            echo "<br>Printing array using foreach loop: <br>";
            foreach($arr as $val)
                echo $val."    ";

            // Printing array using negative indexing
            echo "<br>Printing array using negative indexing: <br>";
            $i = count($arr) -1;
            while($i >= 0){
                echo $arr[$i]." ";
                $i--;
            }
            
            ?>

            <h2>Associative Array</h2>
            <p>We can customiza array indexing</p>

            <?php
                $arr = ["a" => "chicken", "b" => "banana", "c" => "meaw"];

                // Printing associative array using print_r() function:
                echo "Printing an array using print_r() function:<br>";
                print_r ($arr);

            ?>


            <h2>Array Mathods</h2>

            <?php
                $array1 = array("Mon","Tue","Wed","Sat");
                $array2=array("Mon","Wed","Thus","Feb","Tue");
                $array3 = array("Mon","Wed", "Fri", "Jan", "Sat");
                echo "<br>Array1: ";
                print_r($array1);
                echo "<br>Array2: ";
                print_r($array2);
                echo "<br>Array3: ";
                print_r($array3);
            ?>
            <h3>Intersection</h3>
            <?php
                echo "Intersection Between Array1 and Array2: ";
                $new_arr = array_intersect($array1, $array2);
                print_r($new_arr);
                echo "<br>Intersection Between Array1, Array2 and Array3: ";
                $new_arr = array_intersect($array1, $array2, $array3);
                print_r($new_arr);
            ?>
            <h3>Difference (Minus)</h3>
            <?php
                echo "Array1 - Array2: ";
                $new_arr = array_diff($array1, $array2);
                print_r($new_arr);
                echo "<br>Value present in Array1 but not in array2 and array3 => Array1 - (Array2 + Array3): ";
                $new_arr = array_diff($array1, $array2, $array3);
                print_r($new_arr);
            ?>

            <h3>Get Unique Values</h3>
            <?php
                $arr = array("BCA", "BTech", "BCA", "BBA", "BTech");
                echo "Original Array: ";
                print_r($arr);
                $new_arr = array_unique($arr);
                echo "<br>Unique Element Array: ";
                print_r($new_arr);

            ?>

            <h3>Map: Apply funcitons to each element in array</h3>
            <?php
                function isPrime($n){
                    if($n <= 1)
                        return -1;
                    for ($i = 2; $i < $n /2; $i++){
                        if($n % $i == 0)
                            return -1;
                    }
                    return $n;
                }
                $arr = array(97, 11, 45, 457, 1259, 456,31, 17);
                echo "Original Array: ";
                print_r($arr);
                $new_arr =array_map('isPrime', $arr);
                echo "<br>Prime Numebr Array: ";
                print_r($new_arr);
            ?>

            <h3>Range Function</h3>
            <?php
                $arr = range(1,10, 2);
                print_r($arr);
            ?>
        </center>
    </body>
</html>