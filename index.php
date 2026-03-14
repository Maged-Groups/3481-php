<?php
////                Logical operators                         //// 
// Logical operators = combine conditional statements.
// if(conditiona1 && consition2 ).

// && = True if both conditions are true .  
// || = True if at least one codition is true. 
//  ! = True if false. False if true .


$age = 18;
$citizen = false; // null != False 

if ($age >= 18 && $citizen == true) { // use "==" (Used with if statement to comparision)  
    //                                     Don't use "=" (Used to assign) 
    echo "you can vote";
} elseif ($age <= 18 || $citizen == false) {
    echo "you can't vote";
} else {
    echo "Get out of here :)";
}
