<?php

function isEven($start,$end,$step){

    // for loop statement

    echo "For loop ".PHP_EOL;

    for($i=$start;$i<=$end;$i+=$step){
       
        echo "Even Numbers : $i".PHP_EOL;

        }

    
 // while loop statement
    $i=$start;

    echo "While loop ".PHP_EOL;

    while($i<=$end){
        
        echo "Even Numbers : $i".PHP_EOL;        
        $i+=$step; 

    }

// do-while loop statement

    echo "Do-While loop ".PHP_EOL;

    $i=$start;
    do{
        
        echo "Even Numbers : $i".PHP_EOL;        
        $i+=$step;
        
    }while($i<=$end);
}

isEven(2,20,2);