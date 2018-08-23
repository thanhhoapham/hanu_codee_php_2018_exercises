<?php
$error = $msg = null;

/**
 * validates $param (null, empty, numeric) and
 * returns whether valid or not
 */
function validate($a, $b, $c, &$error) {
    if (isset($_GET['a'] && $_GET['b'] && $_GET['c'])){
        $a = $_GET['a'];
        $b = $_GET['b'];
        $c = $_GET['c'];
    }
	else if (is_null($a) && is_null($b) && is_null($c)) {
        $error = 'Invalid numbers';
        return $error;
    }  else if (empty($a) && empty($b) && empty($c)) {
		$error = 'Invalid numbers';
		return $error;
	} else if (is_numeric($a) && is_numeric($b) && is_numeric($c)){
		$error = 'valid numbers';
		return $error;
	}
	}
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
	$validate = validate($a, $b, $c, $error);
	return $validate;
	
        if($a != 0){
           $root = -$b / $a;
           $msg = 'root x = '.$root;
           return $msg;
       }else{
        if($b != 0){
            $error = 'This equation can not be solved.';
            return $error;
        }
        else{
            $root = 'This equation is true with all value of x.';
            return $root;
        }
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
// java pass by reference vs pass by value
function equation2($a, $b, $c, &$error) {
	$validate = validate($a, $b, $c, $error);
	return $validate;
        	if($a == 0){

    		if($b == 0){

    			if($c == 0){
    				$error = 'This equation is true with all value of x.';
    			}
    			else{
    				$error = 'This equation can not be solved.';
    			}
    		}
    		else {
    			if ($c != 0){
    				$root = -$c/$b;
    				$msg = 'This equation has only one root x='. $root;
    			}
    			else {
    				$msg = 'This equation is true with all value of x';
    			}
    		}

 		}
    	else {
    		if ($b == 0) {
    			if ( $c == 0){
    			$msg = 'This equation has only one root x = 0 ';
    			}
    			else {
    				if ($c > 0){
    				$error = 'This equation has no root';
    				}
    				else{
    				$root1 = -sqrt(-$c/$a);
    				$root2 =  sqrt(-$c/$a);
    				$msg = 'This equation has two root x1='.$root1.'and'.$root2;
    			}
    		}
    		}
    		else {
   					if ( $c != 0 ){
   						$delta = $b*$b - 4*$a*$c;    		
    					if ($delta == 0){
    					$root = -$b/(2*$a);
    					$msg = 'This equation has one root x='.$root;
    					}
    					else if ($delta > 0){
			    			$root1 = (-$b-sqrt($delta))/2*$a;
			    			$root2 = (-$b+sqrt($delta))/2*$a;
			    			$msg = 'This equation has 2 different root is'.$root1.'and'.$root2;
    					}
    					else{
    					$msg = 'This equation has no root';
    					}
   					}
   					else {
   					$root = -$b/$a;
    				$msg = 'This equation has two root x1 = 0 and x2 = '.$root;	
   					}
   					
    			}
    		}
    }



