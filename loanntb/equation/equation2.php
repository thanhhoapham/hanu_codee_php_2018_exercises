<?php
include ('function.php');

$result = "";
$error = "";

if (isset($_POST['number_a']) && isset($_POST['number_b']) && isset($_POST['number_c'])) {
    $a = $_POST['number_a'];
    $b = $_POST['number_b'];
    $c = $_POST['number_c'];

    equation2($a, $b, $c, $error);
}
//}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Equation 2</title>
        <link rel="stylesheet" href="equation.css">
    </head>
    <style>
    </style>
    <body>
        <header>Equation App</header>
        <div class="equa">
            <form method="post">
                <label>
                    Number a:
                </label> 
                <input name="number_a" type="text" placeholder="Enter a"><br>
                <label>
                    Number b:
                </label>
                <input name="number_b" type="text" placeholder="Enter b"><br>
                <label>
                    Number c:
                </label>
                <input name="number_c" type="text" placeholder="Enter c"><br>
                <button name="button" type="submit">Quất</button>
            </form>
            <div id="result">
                <?php
                    echo $result;
                ?>
            </div>
            <div id="error">
                <?php
                    echo $error;
                ?>
            </div>
        </div>
    </body>
</html>