<?php
session_start();

$ques_sum = $_SESSION['no_of_ques_pg1'] + $_SESSION['no_of_ques_pg2'];
$mark_sum = $_SESSION['page1_mark'] + $_SESSION['page2_mark'];
$message = '';

if ($mark_sum < 4) {
    $message = 'Về sắm xô xách vữa thôi học làm gì nữa!';
} else if ($mark_sum == 4 || $mark_sum == 5) {
    $message = 'Ahihi đồ ngốc!';
} else {
    $message = 'Bạn cần được bảo tồn và nhân giống!';
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
        <title>Result</title>
        <link rel="stylesheet" href="quiz.css">
    </head>
    <body>
        <header>
            Quiz Page
        </header>
        <div class="list">
            <h2>Result</h2>
            <h3>Your correct answers: <?= $mark_sum . "/" . $ques_sum; ?></h3>
            <?php
            if ($mark_sum < 4) {
                ?>
            <h3 id="bad"><?= $message;
            } else if ($mark_sum == 4 || $mark_sum == 5) { ?></h3>
            <h3 id="moderate"><?= $message;
            } else { ?></h3>
            <h3 id="good"><?= $message;
            }
            ?></h3>
        </div>
        <div>
        </div>
    </body>
</html>
