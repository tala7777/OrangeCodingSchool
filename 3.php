<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $string = "tala";
    echo strtoupper($string) . "<br>";
    echo strtolower($string) . "<br>";
    echo strtoupper($string[0]) . "<br>";

    $sentencecheck = "I am a full stack developer at orange coding school";
    $word = "developer";
    if (str_contains($sentencecheck, $word)) {
        echo "The word '$word' exists in the sentence.<br>";
    } else {
        echo "The word '$word' does not exist in the sentence.<br>";
    }

    $numericDate = "085119";
    $hour = substr($numericDate, 0, 2);
    $minute = substr($numericDate, 2, 2);
    $second = substr($numericDate, 4, 2);
    echo "$hour:$minute:$second<br>";


    $url = "www.orange.com/index.php";
    $filename = basename($url);
    echo $filename . "<br>";


    $email = "info@orange.com";
    $username = explode("@", $email)[0];
    echo $username . "<br>";

    $string = "info@orange.com";
    echo substr($string, -3) . "<br>";


    $chars = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
    $length = 10;
    $password = substr(str_shuffle($chars), 0, $length);
    echo $password . "<br>";


    $sentence = "That new trainee is so sweet.";
    $words = explode(" ", $sentence);
    $words[0] = "the";
    $newSentence = implode(" ", $words);
    echo $newSentence . "<br>";

    $string1 = "dragonball";
    $string2 = "dragonboll";
    for ($i = 0; $i < strlen($string1); $i++) {
        if ($string1[$i] !== $string2[$i]) {
            echo "First difference at position $i: $string1[$i] and $string2[$i]<br>";
            break;
        }
    }


    $string = "Hello ";
    $array = [$string];
    var_dump($array);
    echo "<br>";

    $char = 'a';
    echo ++$char . "<br>";

    $string = "The brown fox";
    $insert = "quick ";
    $position = 4;
    $newString = substr_replace($string, $insert, $position, 0);
    echo $newString . "<br>";


    $number = '0000657022.24';
    echo ltrim($number, '0') . "<br>";


    $string = 'The quick brown fox jumps over the lazy dog';
    echo str_replace('fox', '', $string) . "<br>";


    $string = 'The quick brown fox jumps over the lazy dog---';
    echo rtrim($string, '-') . "<br>";

    $string = '"\1+2/32:2-3/43';
    echo preg_replace('/[^0-9 ]/', ' ', $string) . "<br>";


    $string = 'The quick brown fox jumps over the lazy dog';
    $words = explode(' ', $string);
    echo implode(' ', array_slice($words, 0, 5)) . "<br>";


    $number = '2,543.12';
    echo str_replace(',', '', $number) . "<br>";


    for ($c = 'a'; $c <= 'z'; $c++) {
        echo $c . ' ';
        if ($c === 'z') {
            echo "<br>";
            break;
        }
    }

    ?>
</body>

</html>