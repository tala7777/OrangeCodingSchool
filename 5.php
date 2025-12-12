<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $string = "1 2 3 4 5 6 7 8 9 10";
    $arrayStr = explode(' ', $string);
    $allNumbers = $arrayStr == array_filter($arrayStr, 'is_numeric');
    $allNumbers = true;
    foreach ($arrayStr as $item) {
        if ($item == $arrayStr[count($arrayStr) - 1]) {
            echo $item;

        } else {
            echo $item . "-";
        }

    }
    $total = 0;

    for ($i = 0; $i <= 30; $i++) {

        $total += $i;
    }
    echo '<br>';
    echo $total;
    echo "<br>";

    $char = ['a', 'b', 'c', 'd', 'e'];
    for ($i = 0; $i < 5; $i++) {
        for ($j = 0; $j < 5; $j++) {
            if ($j < 4 - $i) {
                echo $char[0] . " ";
            } else {

                echo $char[$i] . " ";
            }

        }
        echo "<br>";
    }
    echo "<br>";


    $number = [1, 2, 3, 4, 5];
    for ($i = 0; $i < 5; $i++) {
        for ($j = 0; $j < 5; $j++) {
            if ($j < 4 - $i) {
                echo $number[0] . " ";
            } else {

                echo $number[$i] . " ";
            }

        }
        echo "<br>";
    }
    echo "<br>";
    for ($row = 1; $row < 6; $row++) {
        for ($i = 1; $i < 6; $i++) {
            if ($row == $i) {
                echo $row . " ";
            } else {
                echo "0" . " ";
            }

        }
        echo "<br>";
    }
    echo "<br>";
    $facRan = 1;

    for ($i = 1; $i <= 5; $i++) {
        $facRan *= $i;
    }
    echo $facRan;
    echo "<br>";
    $fib = array();
    for ($i = 0; $i <= 7; $i++) {
        if ($i === 0) {
            array_push($fib, (0));
        } else if ($i === 1) {
            array_push($fib, (1));
        } else {
            $total = $fib[$i - 2] + $fib[$i - 1];
            array_push($fib, ($total));

        }


    }
    echo "<br>";

    print_r($fib);
    echo "<br>";
    $check = "orange coding academy";
    $c = 0;
    for ($i = 0; $i < strlen($check); $i++) {
        $con = $check[$i];
        if ($con === "c") {
            $c += 1;
        }
    }
    echo $c;
    $mult = [1, 2, 3, 4, 5, 6];
    echo '<table>';
    for ($i = 0; $i < count($mult); $i++) {
        echo '<tr>';
        for ($j = 1; $j <= 5; $j++) {
            $res = $mult[$i] * $j;
            echo '<td style="padding: 10px;">' . $mult[$i] . '*' . $j . '=' . $res . "</td>";
        }
        echo '</tr>';
    }
    echo '</table>';
    echo '<br>';
    for ($i = 1; $i <= 50; $i++) {
        if ($i % 3 === 0 && $i % 5 === 0) {
            echo "FizzBuzz ";
        } else if ($i % 3 === 0) {
            echo "Fizz ";
        } else if ($i % 5 === 0) {
            echo "Buzz ";
        } else {
            echo $i . ' ';
        }


    }
    echo '<br>';









    ?>
</body>

</html>