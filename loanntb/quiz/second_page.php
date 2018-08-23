<?php
session_start();

$list = array(
    array("Q4: This is question's content", "A. This is A", "B. This is B", "C. This is C", "D. This is D", "B"),
    array("Q5", "A", "B", "C", "D", "B"),
    array("Q6", "A", "B", "C", "D", "A"),
    array("Q7", "A", "B", "C", "D", "D"),
    array("Q8", "A", "B", "C", "D", "C")
);

$order = 0;
$no_of_ques = count($list);
$no_of_element = count($list[0]);

if (isset($_POST['submit'])) {
    include 'count_answer.php';
    $_SESSION['page2_mark'] = $mark;
    $_SESSION['no_of_ques_pg2'] = $no_of_ques;
    header("Location: http://localhost/codee/week3/quiz/submit.php");
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Quiz Page 2</title>
        <link rel="stylesheet" href="quiz.css">
    </head>
    <body>
        <header>
            Quiz App
        </header>
        <div class="list">
            <h3><mark>Page 2</mark></h3>
            <form name="ques1" method="post">
                <table style="width: 100%">
                    <?php
                    foreach ($list as $value) {
                        $order++;
                        ?>
                        <tr>
                            <?php
                            for ($i = 0; $i < $no_of_element; $i++) {
                                if ($i == 0) {
                                    ?>
                                    <th colspan="4">
                                        <?php
                                        echo $value[$i];
                                    }
                                }
                                ?>
                            </th>
                        </tr>
                        <tr>
                            <?php
                            for ($i = 0; $i < $no_of_element; $i++) {
                                if ($i > 0 && $i < $no_of_element - 1) {
                                    ?>
                                    <td><input type="radio" name="option<?= $order;?>" value="<?= $value[$i]; ?>">
                                        <?php
                                        echo $value[$i];
                                    }
                                }
                            }
                            ?>
                        </td>
                    </tr>
                </table>
                <button type="submit" name="return">Page 1</button>
                <button type="submit" name="submit">Submit</button>
            </form>
        </div>
    </body>
</html>
