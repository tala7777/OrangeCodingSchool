<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $colors = array("red", "green", "white");
    $separator = '<br> •';
    $joinedString = $separator . implode($separator, $colors);
    echo "The memory of that scene for me is like a frame of film forever frozen at the moment: the $colors[0] carpet, the $colors[1] lawn, the $colors[2] house, the leaden sky. the new president and his first lady.- Richerd M. Nixon";
    echo "<ul>$joinedString<ul>";
    $cities = array(
        "Italy" => "Rome",
        "Luxembourg" => "Luxembourg",
        "Belgium" => "Brussels",
        "Denmark" => "Copenhagen",
        "Finland" => "Helsinki",
        "France" => "Paris",
        "Slovakia" => "Bratislava",
        "Slovenia" => "Ljubljana",
        "Germany" => "Berlin",
        "Greece" => "Athens",
        "Ireland" => "Dublin",
        "Netherlands" => "Amsterdam",
        "Portugal" => "Lisbon",
        "Spain" => "Madrid"
    );
    foreach ($cities as $countries => $city) {

        echo "the capital of $countries is $city" . '<br>';
    }
    ;
    $color = array(4 => 'white', 6 => 'green', 11 => 'red');
    echo $color[4] . '<br>';
    $insertNum = array('1', '2', '3', '4', '5');
    $replacements = array(3 => '$');
    $mergeRep = array_replace($insertNum, $replacements);
    print_r(value: $mergeRep);
    echo "<br>";
    $fruits = array(
        "d" => "lemon",
        "a" => "orange",
        "b" => "banana",
        "c" => "apple"
    );
    ksort($fruits);
    var_dump(value: $fruits);
    echo "<br>";
    $temp = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
    $average = array_sum($temp) / count($temp);

    echo $average . '<br>';

    rsort($temp);
    $max = array_slice($temp, 0, 7);
    $min = array_slice($temp, offset: -7);
    var_dump(value: $max);
    echo '<br>';
    var_dump(value: $min);
    echo '<br>';
    $array1 = array("color" => "red", 2, 4);
    $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
    $result = array_merge($array1, $array2);
    print_r($result);
    $colors45 = array("red", "blue", "white", "yellow");
    $upper = array_map('strtoupper', $colors45);
    $lower = array_map('strtolower', $colors45);
    echo '<br>';
    var_dump(value: $upper);
    echo '<br>';
    var_dump(value: $lower);
    echo '<br>';
    $numRange = range(200, 250);
    foreach ($numRange as $key => $value) {
        if ($value % 4 === 0) {
            echo $value . '<br>';
        }
    }
    echo '<br>';
    $words = array("abcd", "abc", "de", "hjjj", "g", "wer");
    $maxLen = max(array_map('strlen', $words));
    $minLen = min(array_map('strlen', $words));
    echo $maxLen;
    echo '<br>';
    echo $minLen;
    echo '<br>';

    $used = [];
    $i = 0;

    while ($i < 10) {
        $num = rand(11, 20);


        if (in_array($num, $used)) {

        } else {
            echo $num . "\n";
            $used[] = $num;
            $i++;
        }
    }
    ;
    echo "<br>";
    $arr23 = [2, 0, 10, 12, 6];
    $s = min(array_diff($arr23, [0]));
    echo $s;
    echo "<br>";













    ?>
</body>

</html>