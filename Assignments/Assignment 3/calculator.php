<?php
class Calculator{
    public function calc($operator, $num1, $num2){
        $result = 0;
        try{
        if(is_numeric($num1) && is_numeric($num2) && !is_numeric($operator)){
            if($operator == "+"){
                $result = $num1 + $num2;
                echo "The calculation is " . $num1 . " + " . $num2
                . ". The answer is " . $result . ".<br>";
            }
            else if($operator == "-"){
                $result = $num1 - $num2;
                echo "The calculation is " . $num1 . " - " . $num2
                . ". The answer is " . $result . ".<br>";
            }
            else if($operator == "*"){
                $result = $num1 * $num2;
                echo "The calculation is " . $num1 . " * " . $num2
                . ". The answer is " . $result . ".<br>";
            }
            else if($operator == "/"){
                if($num2 == 0){
                echo "The calculation is " . $num1 . " / " . $num2
                . ". The answer is cannot divide a number by zero.<br>";
                }
                else{
                $result = $num1 / $num2;
                echo "The calculation is " . $num1 . " / " . $num2
                . ". The answer is " . $result . ".<br>";
                }
            }
            else{
                echo "Cannot perform operation. You must have three arguments. 
                A string for the operator (+,-,*,/) and two integers or floats for the numbers.";
            }
        }

        else{
            echo "Cannot perform operation. You must have three arguments. 
            A string for the operator (+,-,*,/) and two integers or floats for the numbers.";
        }
    }
    catch (ArgumentCountError $e){
        echo "Incorrect number of arguments passed. Three arguments are required: 
        the operator, the first number, and the second number.";
    }
}
}
?>