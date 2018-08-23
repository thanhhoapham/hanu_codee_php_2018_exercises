<?php 
for($i=1;$i<=25;$i++){
        $answer[$i]=isset($_GET["answer".$i])?$_GET["answer".$i]:"";
}
?>
<!DOCTYPE html>
<html>
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
			background-color: #00CCFF;
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
		.next{
			font-size: 1em;
			height: 30px;
			width: 60px;
			background-color: lightyellow;
			 box-shadow: 2px 2px grey;
			 border-radius: 5px;
	
		}
		.next a{
			text-decoration: none;
		}

	</style>
	<h1 align="center">Quiz</h1>
	
</head>
<body>
	<form class="quiz" action="quiz_w2" method ="_POST">
	<h3 class="qus" >1. 5 con gà và 3 con chó. Hỏi có bao nhiêu cái chân? </h3>
<div>
<input class="chs" type="radio" name="question-1-answers" <?php if(isset($_GET['answerq1'])&&$_GET['answerq1'] == "A"){ echo "checked"; } ?> id="question-1-answers-A" value="A" />
<label class="key" for="question-1-answers-A">A) 16 </label>
</div>
<div>
<input class="chs" type="radio" name="question-1-answers" <?php if(isset($_GET['answerq1'])&&$_GET['answerq1'] == "A"){ echo "checked"; } ?> id="question-1-answers-B" value="B" />
<label class="key" for="question-1-answers-B">B) 18</label>
</div>
<div>
<input class="chs" type="radio" name="question-1-answers" <?php if(isset($_GET['answerq1'])&&$_GET['answerq1'] == "A"){ echo "checked"; } ?> id="question-1-answers-C" value="C" />
<label class="key" for="question-1-answers-C">C) 20</label>
</div>
<div>
<input class="chs" type="radio" name="question-1-answers" <?php if(isset($_GET['answerq1'])&&$_GET['answerq1'] == "A"){ echo "checked"; } ?> id="question-1-answers-D" value="D" />
<label class="key" for="question-1-answers-D">D) 22</label>
</div>
</li>
<h3 class="qus">2. WHO stands for? </h3>
<div>
<input class="chs" type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
<label  class="key" for="question-2-answers-A">A) World Health Organization </label>
</div>
<div>
<input class="chs" type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
<label class="key" for="question-2-answers-B">B) Wild Hourse Organic </label>
</div>
<div>
<input class="chs" type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
<label class="key" for="question-2-answers-C">C) WHO </label>
</div>
<div>
<input class="chs" type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
<label class="key" for="question-2-answers-D">D) Nothing</label>
</div>
</li>
<h3 class="qus">3. 5 con gà và 3 con chó. Hỏi có bao nhiêu cái tai? </h3>
<div>
<input class="chs" type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
<label class="key" for="question-3-answers-A">A) 16 </label>
</div>
<div>
<input class="chs" type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
<label class="key" for="question-3-answers-B">B) 18</label>
</div>
<div>
<input class="chs" type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
<label class="key"for="question-1-answers-C">C) 20</label>
</div>
<div>
<input class="chs" type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
<label class="key" for="question-3-answers-D">D) 22</label>
</div>
</li>
</form>
    <h3 align="center"><button class="next" ><a href="page2_w2.php">Next</a></button></h3>
</body>
</html>