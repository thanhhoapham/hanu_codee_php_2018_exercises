<?php
    for($i=1;$i<=25;$i++){
        $answer[$i]=isset($_GET["answerq".$i])?$_GET["answerq".$i]:"";
    }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="theme.css">
    <title> Quiz App - part 1</title>
</head>
<body>
	<h1> Welcome to Online Quiz App! </h1>
<form action="/page2.php" method="get">

<section id='q01'>Question 1:
What is your favorite food?<br>
   <input name='answerq1' type='radio' id='a01' value='A'><label for='Apple'>A. Apple</label></br>
   <input name='answerq1' type='radio' id='b01' value='B'><label for='Bread'>B. Bread</label></br>
   <input name='answerq1' type='radio' id='c01' value='C'><label for='Cheese'>C. Cheese</label></br>
   <input name='answerq1' type='radio' id='d01' value='D'><label for='Pizza'>D. Pizza</label></br>
</section>
<br></br>

<section id='q02'>Question 2:
What is your favorite food?<br>
   <input name='answerq2' type='radio' id='a02' value='A'><label for='Apple'>A. Apple</label></br>
   <input name='answerq2' type='radio' id='b02' value='B'><label for='Bread'>B. Bread</label></br>
   <input name='answerq2' type='radio' id='c02' value='C'><label for='Cheese'>C. Cheese</label></br>
   <input name='answerq2' type='radio' id='d02' value='D'><label for='Pizza'>D. Pizza</label></br>
</section>
<br></br>

<section id='q03'>Question 3:
What is your favorite food?<br>
   <input name='answerq3' type='radio' id='a03' value='A'><label for='Apple'>A. Apple</label></br>
   <input name='answerq3' type='radio' id='b03' value='B'><label for='Bread'>B. Bread</label></br>
   <input name='answerq3' type='radio' id='c03' value='C'><label for='Cheese'>C. Cheese</label></br>
   <input name='answerq3' type='radio' id='d03' value='D'><label for='Pizza'>D. Pizza</label></br>
</section>
<br></br>

<section id='q04'>Question 4:
What is your favorite food?<br>
   <input name='answerq4' type='radio' id='a04' value='A'><label for='Apple'>A. Apple</label></br>
   <input name='answerq4' type='radio' id='b04' value='B'><label for='Bread'>B. Bread</label></br>
   <input name='answerq4' type='radio' id='c04' value='C'><label for='Cheese'>C. Cheese</label></br>
   <input name='answerq4' type='radio' id='d04' value='D'><label for='Pizza'>D. Pizza</label></br>
</section>
<br></br>

<section id='q05'>Question 5:
What is your favorite food?<br>
   <input name='answerq5' type='radio' id='a05' value='A'><label for='Apple'>A. Apple</label></br>
   <input name='answerq5' type='radio' id='b05' value='B'><label for='Bread'>B. Bread</label></br>
   <input name='answerq5' type='radio' id='c05' value='C'><label for='Cheese'>C. Cheese</label></br>
   <input name='answerq5' type='radio' id='d05' value='D'><label for='Pizza'>D. Pizza</label></br>
</section>
<br></br>

<section id='q06'>Question 6:
What is your favorite food?<br>
   <input name='answerq6' type='radio' id='a06' value='A'><label for='Apple'>A. Apple</label></br>
   <input name='answerq6' type='radio' id='b06' value='B'><label for='Bread'>B. Bread</label></br>
   <input name='answerq6' type='radio' id='c06' value='C'><label for='Cheese'>C. Cheese</label></br>
   <input name='answerq6' type='radio' id='d06' value='D'><label for='Pizza'>D. Pizza</label></br>
</section>
<br></br>

<section id='q07'>Question 7:
What is your favorite food?<br>
   <input name='answerq7' type='radio' id='a07' value='A'><label for='Apple'>A. Apple</label></br>
   <input name='answerq7' type='radio' id='b07' value='B'><label for='Bread'>B. Bread</label></br>
   <input name='answerq7' type='radio' id='c07' value='C'><label for='Cheese'>C. Cheese</label></br>
   <input name='answerq7' type='radio' id='d07' value='D'><label for='Pizza'>D. Pizza</label></br>
</section>
<br></br>

<section id='q08'>Question 8:
What is your favorite food?<br>
   <input name='answerq8' type='radio' id='a08' value='A'><label for='Apple'>A. Apple</label></br>
   <input name='answerq8' type='radio' id='b08' value='B'><label for='Bread'>B. Bread</label></br>
   <input name='answerq8' type='radio' id='c08' value='C'><label for='Cheese'>C. Cheese</label></br>
   <input name='answerq8' type='radio' id='d08' value='D'><label for='Pizza'>D. Pizza</label></br>
</section>
<br></br>

<section id='q09'>Question 9:
What is your favorite food?<br>
   <input name='answerq9' type='radio' id='a09' value='A'><label for='Apple'>A. Apple</label></br>
   <input name='answerq9' type='radio' id='b09' value='B'><label for='Bread'>B. Bread</label></br>
   <input name='answerq9' type='radio' id='c09' value='C'><label for='Cheese'>C. Cheese</label></br>
   <input name='answerq9' type='radio' id='d09' value='D'><label for='Pizza'>D. Pizza</label></br>
</section>
<br></br>

<section id='q10'>Question 10:
What is your favorite food?<br>
   <input name='answerq10' type='radio' id='a10' value='A'><label for='Apple'>A. Apple</label></br>
   <input name='answerq10' type='radio' id='b10' value='B'><label for='Bread'>B. Bread</label></br>
   <input name='answerq10' type='radio' id='c10' value='C'><label for='Cheese'>C. Cheese</label></br>
   <input name='answerq10' type='radio' id='d10' value='D'><label for='Pizza'>D. Pizza</label></br>
</section>
<br></br>

<section id='q11'>Question 11:
What is your favorite food?<br>
   <input name='answerq11' type='radio' id='a11' value='A'><label for='Apple'>A. Apple</label></br>
   <input name='answerq11' type='radio' id='b11' value='B'><label for='Bread'>B. Bread</label></br>
   <input name='answerq11' type='radio' id='c11' value='C'><label for='Cheese'>C. Cheese</label></br>
   <input name='answerq11' type='radio' id='d11' value='D'><label for='Pizza'>D. Pizza</label></br>
</section>
<br></br>

<section id='q12'>Question 12:
What is your favorite food?<br>
   <input name='answerq12' type='radio' id='a12' value='A'><label for='Apple'>A. Apple</label></br>
   <input name='answerq12' type='radio' id='b12' value='B'><label for='Bread'>B. Bread</label></br>
   <input name='answerq12' type='radio' id='c12' value='C'><label for='Cheese'>C. Cheese</label></br>
   <input name='answerq12' type='radio' id='d12' value='D'><label for='Pizza'>D. Pizza</label></br>
</section>
<br></br>

<section id='q13'>Question 13:
What is your favorite food?<br>
   <input name='answerq13' type='radio' id='a13' value='A'><label for='Apple'>A. Apple</label></br>
   <input name='answerq13' type='radio' id='b13' value='B'><label for='Bread'>B. Bread</label></br>
   <input name='answerq13' type='radio' id='c13' value='C'><label for='Cheese'>C. Cheese</label></br>
   <input name='answerq13' type='radio' id='d13' value='D'><label for='Pizza'>D. Pizza</label></br>
</section>
<br></br>

<section id='q14'>Question 14:
What is your favorite food?<br>
   <input name='answerq14' type='radio' id='a14' value='A'><label for='Apple'>A. Apple</label></br>
   <input name='answerq14' type='radio' id='b14' value='B'><label for='Bread'>B. Bread</label></br>
   <input name='answerq14' type='radio' id='c14' value='C'><label for='Cheese'>C. Cheese</label></br>
   <input name='answerq14' type='radio' id='d14' value='D'><label for='Pizza'>D. Pizza</label></br>
</section>
<br></br>

<section id='q15'>Question 15:
What is your favorite food?<br>
   <input name='answerq15' type='radio' id='a15' value='A'><label for='Apple'>A. Apple</label></br>
   <input name='answerq15' type='radio' id='b15' value='B'><label for='Bread'>B. Bread</label></br>
   <input name='answerq15' type='radio' id='c15' value='C'><label for='Cheese'>C. Cheese</label></br>
   <input name='answerq15' type='radio' id='d15' value='D'><label for='Pizza'>D. Pizza</label></br>
</section>
<br></br>

<section id='q16'>Question 16:
What is your favorite food?<br>
   <input name='answerq16' type='radio' id='a16' value='A'><label for='Apple'>A. Apple</label></br>
   <input name='answerq16' type='radio' id='b16' value='B'><label for='Bread'>B. Bread</label></br>
   <input name='answerq16' type='radio' id='c16' value='C'><label for='Cheese'>C. Cheese</label></br>
   <input name='answerq16' type='radio' id='d16' value='D'><label for='Pizza'>D. Pizza</label></br>
</section>
<br></br>

<section id='q17'>Question 17:
What is your favorite food?<br>
   <input name='answerq17' type='radio' id='a17' value='A'><label for='Apple'>A. Apple</label></br>
   <input name='answerq17' type='radio' id='b17' value='B'><label for='Bread'>B. Bread</label></br>
   <input name='answerq17' type='radio' id='c17' value='C'><label for='Cheese'>C. Cheese</label></br>
   <input name='answerq17' type='radio' id='d17' value='D'><label for='Pizza'>D. Pizza</label></br>
</section>
<br></br>

<section id='q18'>Question 18:
What is your favorite food?<br>
   <input name='answerq18' type='radio' id='a18' value='A'><label for='Apple'>A. Apple</label></br>
   <input name='answerq18' type='radio' id='b18' value='B'><label for='Bread'>B. Bread</label></br>
   <input name='answerq18' type='radio' id='c18' value='C'><label for='Cheese'>C. Cheese</label></br>
   <input name='answerq18' type='radio' id='d18' value='D'><label for='Pizza'>D. Pizza</label></br>
</section>
<br></br>

<section id='q19'>Question 19:
What is your favorite food?<br>
   <input name='answerq19' type='radio' id='a19' value='A'><label for='Apple'>A. Apple</label></br>
   <input name='answerq19' type='radio' id='b19' value='B'><label for='Bread'>B. Bread</label></br>
   <input name='answerq19' type='radio' id='c19' value='C'><label for='Cheese'>C. Cheese</label></br>
   <input name='answerq19' type='radio' id='d19' value='D'><label for='Pizza'>D. Pizza</label></br>
</section>
<br></br>

<section id='q20'>Question 20:
What is your favorite food?<br>
   <input name='answerq20' type='radio' id='a20' value='A'><label for='Apple'>A. Apple</label></br>
   <input name='answerq20' type='radio' id='b20' value='B'><label for='Bread'>B. Bread</label></br>
   <input name='answerq20' type='radio' id='c20' value='C'><label for='Cheese'>C. Cheese</label></br>
   <input name='answerq20' type='radio' id='d20' value='D'><label for='Pizza'>D. Pizza</label></br>
</section>
<br></br>

<section id='q21'>Question 21:
What is your favorite food?<br>
   <input name='answerq21' type='radio' id='a21' value='A'><label for='Apple'>A. Apple</label></br>
   <input name='answerq21' type='radio' id='b21' value='B'><label for='Bread'>B. Bread</label></br>
   <input name='answerq21' type='radio' id='c21' value='C'><label for='Cheese'>C. Cheese</label></br>
   <input name='answerq21' type='radio' id='d21' value='D'><label for='Pizza'>D. Pizza</label></br>
</section>
<br></br>

<section id='q22'>Question 22:
What is your favorite food?<br>
   <input name='answerq22' type='radio' id='a22' value='A'><label for='Apple'>A. Apple</label></br>
   <input name='answerq22' type='radio' id='b22' value='B'><label for='Bread'>B. Bread</label></br>
   <input name='answerq22' type='radio' id='c22' value='C'><label for='Cheese'>C. Cheese</label></br>
   <input name='answerq22' type='radio' id='d22' value='D'><label for='Pizza'>D. Pizza</label></br>
</section>
<br></br>

<section id='q23'>Question 23:
What is your favorite food?<br>
   <input name='answerq23' type='radio' id='a23' value='A'><label for='Apple'>A. Apple</label></br>
   <input name='answerq23' type='radio' id='b23' value='B'><label for='Bread'>B. Bread</label></br>
   <input name='answerq23' type='radio' id='c23' value='C'><label for='Cheese'>C. Cheese</label></br>
   <input name='answerq23' type='radio' id='d23' value='D'><label for='Pizza'>D. Pizza</label></br>
</section>
<br></br>

<section id='q24'>Question 24:
What is your favorite food?<br>
   <input name='answerq24' type='radio' id='a24' value='A'><label for='Apple'>A. Apple</label></br>
   <input name='answerq24' type='radio' id='b24' value='B'><label for='Bread'>B. Bread</label></br>
   <input name='answerq24' type='radio' id='c24' value='C'><label for='Cheese'>C. Cheese</label></br>
   <input name='answerq24' type='radio' id='d24' value='D'><label for='Pizza'>D. Pizza</label></br>
</section>
<br></br>

<section id='q25'>Question 25:
What is your favorite food?<br>
   <input name='answerq25' type='radio' id='a25' value='A'><label for='Apple'>A. Apple</label></br>
   <input name='answerq25' type='radio' id='b25' value='B'><label for='Bread'>B. Bread</label></br>
   <input name='answerq25' type='radio' id='c25' value='C'><label for='Cheese'>C. Cheese</label></br>
   <input name='answerq25' type='radio' id='d25' value='D'><label for='Pizza'>D. Pizza</label></br>
</section>
<br></br>

<br><input  class="btn" align="middle" type="submit" name="next" value="Next >>"></br>
</form>
</body>
</html>