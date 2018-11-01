<?php
$num1=100;
$num2=100;
if (($num1 == $num2) and ($num1 == $num2)) {
    echo "the numbers are equal <br>";
}
//else if ($num1>$num2)
//{
//  echo " num1 is greater but <br> ";
//}
else {
    echo "they are not equal at all <br>";
}

$name=array("peter"=>20, "john"=>30, "alex"=>30, "simon"=>20);
"<br>";
echo "the age of john is " . $name["john"], "<br>";
//print_r($name)."<br>";
/*
 students
Name  Age Weight
Peter  20  20
John   20  20
Tom    14  56
*/
$students=array(array("name"=>"peter","age"=> 20,"weight"=> 20),
                array("name"=>"john","age"=>30, "weight"=>30),
                array("name"=>"alex", "age"=> 10, "weight"=>10));
echo $students[0]["name"]; echo $students [0 ]["age" ]; echo $students [0]["weight"]."<br>";
echo $students[1]["name"]; echo $students [1 ]["age" ]; echo $students [1]["weight"]."<br>";
echo $students[2]["name"]; echo $students [2 ]["age" ]; echo $students [2]["weight"]."<br>";


/**
 * Created by PhpStorm.
 * User: User
 * Date: 31/10/2018
 * Time: 16:45
 */