<?php
if (isset($_POST['button'])) {
include 'function.php';
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Equation 1</title>
        <link rel="stylesheet" href="equation.css">
    </head>
    <body>
        <header>
            Equation App
        </header>
        <div class="equa">
            <form method="post">
                <label>
                    Number a:
                </label>
                <input name="number_a" type="text" placeholder="Enter a here"><br>
                <label>
                    Number b:
                </label>
                <input name="number_b" type="text" placeholder="Enter b here"><br>
                <button name="button" type="submit">Quất</button>
                <!--<input type="button" name="button" id="input_b" value="Quất"><br>-->
                <!--How to check isset of input type = button?-->
            </form>
            <div id="result">
                <?php
                if (isset($result)) {
                    echo $result;
                }
                ?>
            </div>
            <div id="error">
                <?php
                if (isset($error)) {
                    echo $error;
                }
                ?>
            </div>
        </div>
    </body>
</html>