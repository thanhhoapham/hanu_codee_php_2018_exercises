<?php
$a = isset($_GET['a'])?$_GET['a']:"";
$b = isset($_GET['b'])?$_GET['b']:"";
$c = isset($_GET['c'])?$_GET['c']:"";
$result="";
    if ( ($a != '') && ($b != '') && ($c != '') && (is_numeric($a)) && (is_numeric($b)) && (is_numeric($c)) ){
		if ($a == 0){
			if($b == 0){
				if ($c == 0){		
				$result = "The equation has many roots";
				}else{
				$result = "The equation has no root";
				}
			}
		}else{
			$delta = $b * $b - 4 * $a * $c;
			if ($delta == 0){
				$x = -$b / (2*$a);
				$result = "The equation has one root which is".$x;
			}
			if ($delta < 0){
				$result = "The equation has no root";
			}
			if ($delta > 0){
				$x1 = (-$b+sqrt($delta))/(2*$a);
				$x2 = (-$b-sqrt($delta))/(2*$a);
				$result = "The equation has two roots ".$x1." and ".$x2;
			}
		}
	}else{
		$result = "Note: a, b, c must be numeric and fully filled in";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="theme.css">
	<title>Quadratic Equation Solution App</title>
</head>
<body>
<form action="" method="get">
  <h3>Enter the values of a, b and c in the equation ax<sup>2</sup> + bx + c = 0 ?</h3>
		<div align="center">
        	<input class="const" type="number" name="a" value="<?php echo $a;?>">x<sup>2</sup>+
            <input class="const" type="number" name="b" value="<?php echo $b;?>">x+
            <input class="const" type="number" name="c" value="<?php echo $c;?>">=0
			<br></br>
            <br><input class = "btn" type="submit" name="submit" value="Solve it!"></br>
		</div>
</form>
    <?php echo "<script>alert('$result')</script>"; ?>
</body>
</html>
<!-- code organization
if: endif
value >
