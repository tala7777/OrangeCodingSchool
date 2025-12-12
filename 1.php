<?php
// Start the session
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    function build_table($array)
    {
        $html = "<table border='1' style='border-collapse: collapse; width: 200px; text-align: center;'>";

        foreach ($array as $row) {

            $html .= "<tr>";

            $colIndex = 0; // tracks column number
    
            foreach ($row as $value) {

                // If it's the first column, make it blue
                if ($colIndex === 0) {
                    $html .= "<td style='color: blue'>" . htmlspecialchars($value) . "</td>";
                } else {
                    $html .= "<td>" . htmlspecialchars($value) . "</td>";
                }

                $colIndex++;
            }

            $html .= "</tr>";
        }

        $html .= "</table>";

        return $html;
    }

    $arr0 = array(
        $arr1 = array("Salary of Mr. A is", "1000$"),
        $arr2 = array("Salary of Mr. B is", "1200$"),
        $arr3 = array("Salary of Mr. C is", "1400$")
    );

    echo build_table($arr0);
    ;
    echo "Last modified: " . date("F d Y H:i:s") . "<br>";

    // Source - https://stackoverflow.com/a
// Posted by Dominic Rodger, modified by community. See post 'Timeline' for change history
// Retrieved 2025-12-10, License - CC BY-SA 2.5
    
    $file = "file.txt";
    $linecount = 0;
    $handle = fopen($file, "r");
    while (!feof($handle)) {
        $line = fgets($handle);
        $linecount++;
    }

    fclose($handle);

    echo $linecount;

    foreach ($_SESSION as $key => $value) {
        echo "Key: " . $key . ", Value: " . $value . "<br>";
    }
    ?>
</body>

</html>