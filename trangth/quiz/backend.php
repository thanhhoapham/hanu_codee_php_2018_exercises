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
	<title>page manage</title>
	<style type="text/css">
		
	</style>
<h1 align="center"> Question Table </h1>
<style type="text/css">
	table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 50%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: center;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
	.add{
		height: 70px;
		width: 220px;
		font-size: 0.8em;
			color: black;
			background-color: yellow;
			 color: white;
			 box-shadow: 5px 5px grey;

}
.add a{
				 text-decoration: none;
}
</style>
</head>
<body>
 <form class="qustable" action="backend.php" method ="_POST">
<h2 align="center"><button class="add"><a href="add_w2.php">Add more questions</a></button></h2>
 	<table align="center" border="1px" cellspacing="0px" width="50%">
    <tr>
        <th rowspan="2">Question</th>
        <th rowspan="2">Content of question</th>
        <th  rowspan="2">Answer</th>
        <th  rowspan="2" >Modify</th>
    </tr>
    <?php foreach($question as $key=>$value){ ?>
        </tr>
        <tr>
            <td> <?php echo $key?></td>
            <td><?php echo $value['content'] ?></td>
            <td><?php echo $value['correct'] ?></td>
            <td><div action="" method="GET"><input type="button" value="Delete"></div>
                <div action="" method="GET"><input type="button" value="Reset"></div>
            </td>

        </tr>
           <?php } ?>

 	</table>
</body>
</html>