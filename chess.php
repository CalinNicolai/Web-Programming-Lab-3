<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chessboard</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 0 auto;
        }

        td {
            width: 50px;
            height: 50px;
            text-align: center;
        }

        .white {
            background-color: #fff;
        }

        .black {
            background-color: #000;
            color: #fff;
        }

        .border {
            background-color: #666;
            border: 2px black solid;
            color: #fff;
        }
    </style>
</head>
<body>
<table>

    <?php
    $width = 10;
    $letters = [' ','A','B','C','D','E','F','G','I'];
    $numbers = [' ','1','2','3','4','5','6','7','8'];


    for ($i = 0; $i < $width; $i++) {
        echo "<tr>";

        for ($j = 0; $j < $width; $j++) {
            $class = "";
            $contains = "";
            if ($i == 0) {
                $class = "border";
                $contains = $letters[$j];
            } elseif ($j == 0) {
                $class = "border";
                $contains = $numbers[$i];
            } elseif ($j == $width - 1) {
                $class = "border";
                $contains = $numbers[$width - $i - 1];
            } elseif ($i == $width - 1) {
                $class = "border";
                $contains = $letters[$width - $j - 1];
            } elseif (($i + $j) % 2 === 0) {
                $class = "white";
            } else {
                $class = "black";
            }

            echo "<td class='$class'>$contains</td>";
        }

        echo "</tr>";
    }
    ?>
</table>
</body>
</html>
