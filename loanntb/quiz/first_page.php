<?php
session_start();

$list = array(
    array("Q1: This is question's content", "A. This is A", "B. This is B", "C. This is", "D. This is D", "C"),
    array("Q2", "A", "B", "C", "D", "B"),
    array("Q3", "A", "B", "C", "D", "A")
);

$order = 0;
$no_of_ques = count($list);
$no_of_element = count($list[0]);

if (isset($_POST['cont'])) {
    include 'count_answer.php';
    $_SESSION['page1_mark'] = $mark;
    $_SESSION['no_of_ques_pg1'] = $no_of_ques;
    header("Location: http://localhost/codee/week3/quiz/second_page.php");
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Quiz Page 1</title>
        <link rel="stylesheet" href="quiz.css">
    </head>
    <body>
        <header>
            Quiz App
        </header>
        <div class="list">
            <h3><mark>Page 1</mark></h3>
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
                                    <td><input type="radio" name="option<?= $order; ?>" value="<?= $value[$i]; ?>">
                                        <?php
                                        echo $value[$i];
                                    }
                                }
                            }
                            ?>
                        </td>
                    </tr>
                </table>
                <button type="submit" name="cont">Continue</button>
            </form>
        </div>
    </body>
</html>
