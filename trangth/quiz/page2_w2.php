<?php
$question = array(
'1' => array('content'=>'Rose or blossom cherry or cherry or camilla', 'a'=>'Rose', 'b'=>'Blossom cherry', 'c'=>'Cherry', 'd'=>'Camilla','correct'=>'Blossom Cherry'),
'2' => array('content'=>'Content of question 2', 'a'=>'Answer A', 'b'=>'Answer B', 'c'=>'Answer C', 'd'=>'Answer D','correct'=>'B'),
'3' => array('content'=>'Content of question 3', 'a'=>'Answer A', 'b'=>'Answer B', 'c'=>'Answer C', 'd'=>'Answer D','correct'=>'A'),
'4' => array('content'=>'Content of question 4', 'a'=>'Answer A', 'b'=>'Answer B', 'c'=>'Answer C', 'd'=>'Answer D','correct'=>'D'),
'5' => array('content'=>'Content of question5', 'a'=>'Answer A', 'b'=>'Answer B', 'c'=>'Answer C', 'd'=>'Answer D','correct'=>'B'),
'6' => array('content'=>'Content of question 6', 'a'=>'Answer A', 'b'=>'Answer B', 'c'=>'Answer C', 'd'=>'Answer D','correct'=>'C'),
'7' => array('content'=>'Content of question 7', 'a'=>'Answer A', 'b'=>'Answer B', 'c'=>'Answer C', 'd'=>'Answer D','correct'=>'B'),
'8' => array('content'=>'Content of question 8', 'a'=>'Answer A', 'b'=>'Answer B', 'c'=>'Answer C', 'd'=>'Answer D','correct'=>'B'),
'9' => array('content'=>'Content of question 9', 'a'=>'Answer A', 'b'=>'Answer B', 'c'=>'Answer C', 'd'=>'Answer D','correct'=>'B'),
'10' => array('content'=>'Content of question 10', 'a'=>'Answer A', 'b'=>'Answer B', 'c'=>'Answer C', 'd'=>'Answer D','correct'=>'B'),
'11' => array('content'=>'Content of question 11', 'a'=>'Answer A', 'b'=>'Answer B', 'c'=>'Answer C', 'd'=>'Answer D','correct'=>'B'),
'12' => array('content'=>'Content of question 12', 'a'=>'Answer A', 'b'=>'Answer B', 'c'=>'Answer C', 'd'=>'Answer D','correct'=>'B'),
'13' => array('content'=>'Content of question 13', 'a'=>'Answer A', 'b'=>'Answer B', 'c'=>'Answer C', 'd'=>'Answer D','correct'=>'B'),
'14' => array('content'=>'Content of question 14', 'a'=>'Answer A', 'b'=>'Answer B', 'c'=>'Answer C', 'd'=>'Answer D','correct'=>'B'),
'15' => array('content'=>'Content of question 15', 'a'=>'Answer A', 'b'=>'Answer B', 'c'=>'Answer C', 'd'=>'Answer D','correct'=>'B'),
 )
?>
<!DOCTYPE html>
<html>
<head>
	<head>
	<title>quiz app</title>
	<style type="text/css">
		.quiz{
			width: 700px;
			margin-left:400px;
			padding: 15px;
			border: 2px solid grey;
			border-radius: 10px;
        }
		.qus{
			text-align: left;
			margin-left: 130px;
			background-color: #669966;
			color: white;
			width: 500px;
			border-radius: 2px;
		
		}
		.key{
			text-align: center;
			font-size: 1.1em;
			border-radius: 2px;
			background-color: #CCCCFF;
			width: 200px;
		}
		.chs{
			margin-left: 170px;
		}
		.pre{
			font-size: 1em;
			height: 40px;
			width: 130px;
			background-color: lightyellow;
			 box-shadow: 2px 2px grey;
			 border-radius: 5px;
			margin-left: 150px;
		}
		.pre a{
			text-decoration: none;
		}
		.submit{
			font-size: 1em;
			height: 40px;
			width: 130px;
			background-color: lightyellow;
			 box-shadow: 2px 2px grey;
			 border-radius: 5px;
	
		}
		.submit a{
			text-decoration: none;
		}

	</style>
	<h1 align="center">Quiz</h1>
</head>
<body>
<form class="quiz" action="quiz1.php" method="_GET">
		<?php foreach ($question as $key => $value){ ?>
		
		<h3 class="qus">Question: <?php echo $value['content'] ?></h3> 
			<p>
				<input class="chs" type="radio" name="q1" id="q1a"><?php echo $value['a'] ?><br>
				<input class="chs" type="radio" name="q1" id="q1b"><?php echo $value['b'] ?><br>
				<input class="chs" type="radio" name="q1" id="q1c"><?php echo $value['c'] ?><br>
				<input class="chs" type="radio" name="q1" id="q1d"><?php echo $value['d'] ?><br>
				
			</p>
		<?php } ?>
<button class="pre"><a href="page1.php">Previous Page</a></button>
<button class="submit"><a href="page3_w2.php">Submit</a></button>
	</form>
</body>
</html>