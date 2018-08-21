<?php
$a = isset($_GET['a'])?$_GET['a']:"";
$b = isset($_GET['b'])?$_GET['b']:"";
$result= "";
if ($a != ''  && $b != '' && is_numeric($a) && is_numeric($b)) {
	if ($a == 0){
		$result="There is no root ";
		if($b == 0){
		$result="True for all x ";
		}
	}else{
		$x = -$b / $a;
		$result="There is one root which is ".$x;
		}
}else{
	$result="Please enter all the constances";
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Equation Solution App</title>
	<link rel="stylesheet" type="text/css" href="theme.css">
</head>
<body>
	<form action="equation1.php" method="GET">
    	<h2>Enter the values of a and b in the equation ax+b=0?</h2>
		<div align= "center">
			<input class="const" type="number" name="a" value="<?php echo $a ?>"> x+
			<input class="const" type="number" name="b" value="<?php echo $b ?>"> =0
			<br></br>
			<br><input class="btn" type="submit" name="btn_submit" value="Solve it!"></br>
		</div>
	</form>
<br><?php echo "<script>alert('$result')</script>"; ?></br>
</body>
</html>