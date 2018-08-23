<?php
	$key=array("A","C","B","D","A","C","D","B","C","D",
				"A","C","B","D","A","C","D","B","C","D",
				"A","C","B","D","A","C","D","B","C","D",
				"A","C","B","D","A","C","D","B","C","D",
				"A","C","B","D","A","C","D","B","C","D");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet"type="text/css" href="theme.css">
	<title>Quiz App - Final Result</title>
</head>
<body>
<p class="noti"><?php
$count = 0;
for($i=1;$i<51;$i++){
    $answer[$i]=$_GET["answerq".$i];
	if ($answer[$i]==$key[$i]) {
		$count++;
	}
}
if ($count < 5){
	echo 'You got'.$count.'of 50. You are so so so lazy';
}
if (5 <= $count && $count< 20){
	echo 'You got'.$count.'of 50. You need more revisions!';
}
if (20 <= $count && $count< 30){
	echo 'You got'.$count.'of 50. You get a medium result!';
}
if (30 <= $count && $count< 40){
	echo 'You got'.$count.'of 50. Rather good!';
}
if ($count >=40){
	echo 'You got '.$count.' of 50.Wow! Fantastic!';
}
?></p>
<br><a href="page1.php"><input type="button" class="btn" value="Try again?"></a>
</body>
</head>
</html>