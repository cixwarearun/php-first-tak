<?php
  $a = 10;
  $b=5;

  $sum= $a + $b ;
  $sub= $a - $b;
  $mul = $a * $b;
  $div = $a / $b;

  echo "let the two variable be a and b. Such that:\t";

  
  echo "a = 10  and b = 5";

  echo "<br>";
  

  echo "<br>";
  echo "<br>";

  //sum of two numbers
  echo "The addition of two number ($a + $b )  is\t";
  echo $sum;

  echo "<br>";
  echo "<br>";


  //subtraction of two numbers
  echo "The subtraction of two number($a - $b ) is\t";
  echo $sub;

  echo "<br>";
  echo "<br>";

  //multiplication of two numbers
  echo "The multiplication of two number($a * $b ) is\t";
  echo $mul;
  echo "<br>";
  echo "<br>";

  //division of two numbers
  echo "The division of two number($a / $b ) is\t";
  echo $div ;

  //calculate area
  echo "<br>";
  echo "<br>";
  const PI=3.14;
  $r = 5;
echo "............................................................................................................................................................";
echo "<br>";
  echo "PI = 3.14";
  echo "<br>";
  echo "r = 5";
  echo "<br>";

  $area = PI * $r**2;
  echo "......................................................................................................................................................";
  echo "<br>";

  echo "The area of circle  (PI * $r**2) is \t " ,$area;

  echo "<br>";
  echo "<br>";

  //circumference of a circe
  echo "........................................................................................................................";
  echo "<br>";
  $circumfereceOfCircle = 2 * PI * $r;
  echo "The circumference of a circle (2 * PI * $r) is \t  ", $circumfereceOfCircle;

  //Fahrenheit to Celsius

  echo "<br>";
  echo "<br>";
  echo "..........................................................................................................................................................";
  echo "<br>";
  $f= 100;
  $fahrenheitToCelsius = ($f - 32)* 5/9;
  echo "The result of 100f to celsius {($f - 32)* 5/9} is \t",$fahrenheitToCelsius;

  echo "<br>";
  echo "<br>";
  echo "..................................................................................................................................................................";
  echo "<br>";

  // Code to calculate the sum of 8 subjects and find percentage.

   $array = [1,2,5,6,7,33,3,5,22,10];  // declaring the value of eight subject
   $sumOfEightSubject= $array[0] + $array[1]+$array[2] + $array[3] + $array[4] + $array[5] + $array[6] + $array[7] + $array[8] + $array[9] ;
   echo "The sum of eight subject [1,2,5,6,7,33,3,5,22,10] is\t",$sumOfEightSubject;
   
   echo "<br>";
   echo "<br>";

   echo ".........................................................................................................................................................";
   echo "<br>";

   $percentage = $sumOfEightSubject/8;
   echo "The percentage of sum of eight subject (sumOfEightSubject/8) is\t", $percentage;
  
   echo "<br>";
   
   echo "..........................................................................................................................................................";
   // Finding simple interest
   echo "<br>";
   $P= 10;
   $T= 5;
   $R = 2;

   echo "Let the value of Principle(p) = RS.10 ,  Time(T) = 5 years and Rate (R) = 2% ";
   echo "<br>";
   echo "<br>";
   

   $simpleInterest = ($P *$T * $R) / 100 ;
   echo "The simple interest (P * T * R) / 100 is \t", $simpleInterest;

?>