<?php
include('inc/functions.php');

// validate isset
if (isset ($_GET['a']) && $_GET['b']) {
    equation1($a, $b, $error);
}