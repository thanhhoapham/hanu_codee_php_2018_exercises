<?php include 'funct.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Week1 Ex1</title>
</head>
<style>
fieldset{
    margin-top: 100px;
    margin-left: 530px;
    width: 30%;
    padding-bottom: 100px;
    text-align: center;
    /*padding: 50% 50%;*/
}
p{
    text-align: center;
}
legend{
    font-family: arial;
    font-size: 200%;
    font-weight: bold;
    color: lightblue;
}
.error {
    color: red;
    display: block;
    min-height: 50px;
    background: white;
}
.info {
    color: blue;
}
div.header{
    padding-bottom: -100px;
    height: 100px;
    background-color: #ccc;
    text-align: center;
    font-weight: bold;
    font-size: 25px;
    font-family: Arial;
}
div.footer{
    height: 100px;
    background-color: #ccc;
    text-align: center;
    font-weight: bold;
    font-size: 25px;
    margin-top: 95px;
    font-family: Arial;
}
.font{
    height: 23px;
    font-size: 24px;
}
.button{
    font-size: 20px;
}

</style>

<body> 
    <div class="header"> Equation App </div>
       <form action="" method="GET">
        <fieldset>
            <legend>ax + b = 0 equation</legend>
            <?php if ($error): // 0/[]/null/'' ?>
            <p class="error"><?= $error ?></p>
            <?php endif; ?>
            <p>   
                <label class="font" for="a">a: </label>
                <input class="font" autofocus="true" type="text" id="a" name="a" value="<?php echo isset($_GET['a'])?$_GET['a']:''; ?>">
                <!--'dk ? a : b'-->
            </p>
            <br>
            <p>
                <label class="font" for="b">b: </label>
                <input class="font" type="text" name="b" id="b" name ="b" value="<?php echo isset($_GET['b'])?$_GET['b']:''; ?>">
            </p>
            <input class="button" type="submit" name="exe" value="Execute">
            <?php if($msg): ?>
            <p class="info"><?= $msg ?></p>
            <?php endif; ?>
        </fieldset>
        <br>
    </form>
    <div class="footer"> </div>
    </div> 
 </body>
</html>
<!--Use method 'POST' and input type 'file' for sending file
use "multiple" attribute to send multi files-->