<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function IsPrime($n)
    {
        // Loop through all numbers from 2 to n-1
        for ($x = 2; $x < $n; $x++) {
            // If n is divisible by any number other than 1 and itself,
            // it's not prime, so return 0
            if ($n % $x == 0) {
                echo $n . " This is not a Prime Number....." . "\n";

                return 0;
            }
        }
        if ($n == !0) {
            echo $n . " This is a Prime Number.." . "\n";
            // If no divisor found, n is prime, so return 1
            return 1;
        }

    }
    IsPrime(9);
    echo "<br>";
    function StrReverse($str): string
    {


        for ($x = strlen($str) - 1; $x >= 0; $x--) {

            echo $str[$x];

        }
        return $str[$x];

    }
    StrReverse("remove");
    echo "<br>";
    function LowerStr($str): string
    {

        if (ctype_lower($str)) {
            echo "Your String is Ok";
            return 1;

        } else {
            echo "Your string is not ok";
            return 0;
        }
    }

    LowerStr("Remove");
    echo "<br>";
    echo "<tab>";
    function Repalce($str1, $str2): string
    {
        echo $str2 . " " . $str1;
        return $str2 . $str1;

    }
    Repalce("x=12", "y=10");
    echo "<br>";
    function ArmCheck($number): mixed
    {

        $numArr = array_map('intval', str_split($number));
        for ($i = 0; $i < count($numArr); $i++) {
            $num = $numArr[$i] ^ ($i+1);

        }
        var_dump($num);





    }

    echo ArmCheck(234);



    ?>
</body>

</html>