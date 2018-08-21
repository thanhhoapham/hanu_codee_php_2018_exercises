<?php

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
    if (validate($a, $error) && validate($b, $error)) {
        return null;
    }
    
    return 'Root here';
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
// java pass by reference vs pass by value
function equation2($a, $b, $c, &$error) {
    $error = 'message';

    return 'Root here';
}

/**
 * validates $param (null, empty, numeric) and
 * returns whether valid or not
 */
function validate($param, &$error) {
    return false;
}

