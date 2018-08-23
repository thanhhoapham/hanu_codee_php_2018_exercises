<?php
/**
* @input 2 real numbers a, b
* @return the root(s) of 1st degree equation ax + b = 0
*/
$result = "";
$error = "";

/**
* solves 1st degree equation,
* returns string root
* @modifies $error
* @effects
*  validate $a, $b
*  if error 
*      modify $errors & returns null
*  else 
*      if $a eq 0 /\ $b eq 0
*          returns 'many roots'
*      elseif $a eq 0 /\ $b neq 0
*          returns 'no root'
*      else 
*          returns '1 root x=-b/a'
*/
function equation1($a, $b, &$error) {
    // $a = $_POST['number_a'];
    // $b = $_POST['number_b'];
    global $result;
    $eq = $a . "x" . " + " . $b . " = 0";
    
    if (!validate($a) || !validate($b)) {
        $error = "a and b need to be numberic!";
        return $error;
    } else {
        
        // // if (!is_numeric($a)) {
            // //     $error = "The value of a is invalid, enter a real number!";
            // // } else if (!is_numeric($b)) {
                // //     $error = "The value of b is invalid, enter a real number!";
                // } else {
                    if ($a == 0) {
                        if ($b == 0) {
                            $result = "The equation " . $eq . " has many roots";
                            return msg;
                        } else {
                            $result = "The equation " . $eq . " has no root";
                            return $result;
                        }
                    } else {
                        if ($b == 0) {
                            $result = "The equation " . $eq . " has one root x = 0";
                            return $result;
                        } else {
                            $root = -$b / $a;
                            $result = "The equation " . $eq . " has one root x = " . $root;
                            return $result;
                        }
                    }
                }
            }

/**
 * validates $param (null, empty, numeric) and
 * returns whether valid or not
 */
            function validate($x) {
                if (is_numeric($x)) {
                    return true;
                } else {
                    return false;
                }
            }
/**
 * solves 2nd degree equation,
 * returns string root
 * @modifies $error
 * @effects
 *  validate $a, $b
 *  if error 
 *      modify $errors & returns null
 *  else 
 *      if a eq 0
 *          invokes #equation1($b, $c, $error) & returns 
 *      else
 *          delta=...            
 *      
 */
function equation2($a, $b, $c, &$error) {
    global $result;
    $eq = $a . "x^2 + " . $b . "x + " . $c . " = 0";


    if (!validate($a) || !validate($b) || !validate($c)) {
        $error = "a, b and c need to be numeric!";
        return $error;
    } else {
        if ($a == 0) {
            equation1($b, $c, $error);
        } else {
            $delta = pow($b, 2) - 4 * $a * $c;

            if ($delta < 0) {
                $error = "The equation " . $eq . " has no root";
                return $error;
            } else if ($delta == 0) {
                $root = -$b / 2 * $a;
                $result = "The equation " . $eq . " has one root x = " . $root;
                return $result;
            } else if ($delta > 0) {
                $root1 = (-$b + sqrt($delta)) / 2 * $a;
                $root2 = (-$b - sqrt($delta)) / 2 * $a;
                $result = "The equation " . $eq . " has two roots x1 = " . $root1 . " and x2 = " . $root2;
                return $result;
            }
        }
    }
}
 ?>
            