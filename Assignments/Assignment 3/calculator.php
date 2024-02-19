<?php
class Calculator{
    public function calc($operator, $num1, $num2){
        $result = 0
        if($operator == "+"){
            $result = $num1 + $num2;
            echo "The calculation is " + $num1 + " " + $operator + " " + $num2
            + ". The answer is " + $result + ".";
        }
        else if($operator == "-"){
            $result = $num1 - $num2;
            echo "The calculation is " + $num1 + " " + $operator + " " + $num2
            + ". The answer is " + $result + ".";
        }
        else if($operator == "*"){
            $result = $num1 * $num2;
            echo "The calculation is " + $num1 + " " + $operator + " " + $num2
            + ". The answer is " + $result + ".";
        }
        else if($operator == "/"){
            $result = $num1 / $num2;
            echo "The calculation is " + $num1 + " " + $operator + " " + $num2
            + ". The answer is " + $result + ".";
        }
        else{
            echo "Cannot perform operation. You must have three arguments. 
            A string for the operator (+,-,*,/) and two integers or floats for the numbers."
        }
    }
}
?>