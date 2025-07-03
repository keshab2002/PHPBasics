<html>
    <head>
        <title>
            PHP Datatypes
        </title>
    </head>
    <body>
        <center>
            <?php
                // int
                $a = 10;
                echo "Value of a: ".$a."<br>";
                // float
                $b = 12.13;
                echo "Value of b: ".$b."<br>";
                // String
                $str = "Hello";
                echo "Value of str: ".$str."<br>";
                //boolean
                $boo = FALSE;
                echo "Value of boo: ".$boo."<br>";
                //array
                $arr = array("apple", "banana", 12, TRUE);
                print_r($arr);
                //Object
                class Temp{

                }
                $obj = new Temp();
                
            ?>
        </center>
    </body>
</html>