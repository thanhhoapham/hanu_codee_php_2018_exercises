			<!-- ax+b=0 SOLUTION FUNCTION -->
<?php
$msg = $error = null;
$a=$b='';

if(isset($_GET['a']) && $_GET['b']){
    $a = $_GET['a'];
    $b = $_GET['b'];
    if(is_numeric($a) && is_numeric($b)){

        if($a != 0){
           $root = -$b / $a;
           $msg = 'root x = '.$root;
       }else{
        if($b != 0){
            $error = 'This equation can not be solved.';
        }
        else{
            $root = 'This equation is true with all value of x.';
        }
    } 
}
else{
 $error = 'This equation is true with all value of x.';
}
}
else{
    $error = 'a and b are required.';
}
?>
			
			<!-- ax^2+bx+c=0 SOLUTION FOR QUARDRATIC EQUATION FUNCTION -->
<?php
$msg = $error = null;
$a=$b=$c='';

		/*Users input a, b, c*/
if(isset($_GET['a']) && $_GET['b'] && $_GET['c']){
    $a = $_GET['a'];
    $b = $_GET['b'];
    $c = $_GET['c'];

    if(is_numeric($a) && is_numeric($b) && is_numeric($c)){    	
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
    }

    	/*No a, b, c are token*/
    else {
    		$error = 'a, b, c  are required.';
    	}

?>