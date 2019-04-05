<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table>
    <form method="post">
        <h1>Simple Calculator</h1>
        First Operand <input type="text" name="first"/>
        Operand
        <select name="calculator">
            <option value="addition">Addition</option>
            <option value="subtraction">Subtraction</option>
            <option value="multiplication">Multiplication</option>
            <option value="division">Division</option>
        </select>
        Second Operand <input type="text" name="second"/>
        <input type="submit" value="Calculate"/>
        <h1>Result:</h1>
    </form>
</table>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $firstOperand = $_POST["first"];
    $secondOperand = $_POST["second"];
    $final = $_POST["calculator"];

    if ($final == "addition"){
        $final = $firstOperand + $secondOperand;
        echo $final;
    }
    if ($final == "subtraction"){
        $final = $firstOperand - $secondOperand;
        echo $final;
    }
    if ($final == "multiplication"){
        $final = $firstOperand * $secondOperand;
        echo $final;
    }
    if ($final == "division"){
        $final = $firstOperand / $secondOperand;
        echo $final;
    }
}
?>
</body>
</html>
