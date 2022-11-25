<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Быстрая сортировка</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php
    function quick_sort($array)
    {
        if (count($array) < 2) {
            return $array;
        }
        $target = $array[0];
        $less = array();
        $equal = array($target);
        $greater = array();
        for ($i = 1; $i < count($array); $i++) {
            $elem = $array[$i];
            if ($elem > $target) {
                $greater[] = $elem;
            } elseif ($elem < $target) {
                $less[] = $elem;
            } else {
                $equal[] = $elem;
            }
        }
        $less = quick_sort($less);
        $greater = quick_sort($greater);
        return array_merge($less, $equal, $greater);
    }
    ?>
<?php
$str = "не определено";
$numbers = [];
if(isset($_POST["str"])){
    $str = $_POST["str"];
    $numbers = explode(',', $str);
    echo " Отсортированный массив:";
    echo implode(', ',quick_sort($numbers)). PHP_EOL;
}
?>
</body>
</html>