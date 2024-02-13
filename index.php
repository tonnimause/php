<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $sample = "4 * X = 36";
    $arr = explode(" ", $sample);
    $first = $arr[0];
    $second = $arr[2];
    $result = $arr[4];
    switch ($arr[1]) {
        case "+":
            $output_x = $result - $first;
            break;
        case "-":
            $output_x = $first - $result;
            break;
        case "/":
            $output_x = $first / $result;
            break;
        case "*":
            $output_x = $result / $first;
            break;
        default:
            $output_x = NAN;
    }
    echo "$output_x";
    ?>
</body>

</html>