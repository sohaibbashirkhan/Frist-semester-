<?php

echo  "My first PHP script!";
echo "<br>";
$name ="Sohaib";
$age = 18;

echo $name . $age;

echo "<br>";
$addtion =55;
$add =35;

echo $addtion + $add;


echo "<br>";


$subtraction =65;
$sub =15;

echo $subtraction - $sub;


echo "<br>";


$multiply =5;
$mul =2;

echo $multiply * $mul;

echo "<br>";

$division =18;
$div =3;

echo $division / $div;

$num1 = 10;
$num2 = 5;

echo "<br>";
echo  $num1 + $num2;
echo $num1 % $num2;
echo "<br>";
echo (abs(-6.5));
echo "<br>";
echo (sqrt(200));
echo "<br>";
echo (round(2.4));
echo "<br>";
echo (rand(10 , 100));

echo "<br>";

echo strlen("Hello World");

echo "<br>";
echo str_word_count("Hello World!");

echo "<br>";
echo strrev("Helo World");

echo "<br>";

echo str_replace("World" , "sohaib" ,"Hello world!");
echo "<br>";
echo strpos("Hello world " ,"ld");

echo "<br>";
echo pi();

echo "<br>";

echo (max(100,800,500,200,20));

echo "<br>";

echo (min(50,10,45,9,6,80));

echo "<br>";

$t =date("H");

if($t < "10"){
    echo "Have a good moring";}
    
elseif($t < "20"){
    echo "Have a good Day";}
else{
    echo "Have a good night";}

    echo "<br>";
$S = 10;
if(10 >= 9){
    echo "You are right";
}
else{
    echo " you are wrong";
}
echo "<br>";
$S = 10;
if(10 <= 9){
    echo "You are right";
}
else{
    echo " you are wrong";
}

$S = 10;
if($S >= 9 && $S <= 5 ){
    echo "You are right";
}
else{
    echo " you are wrong";
}
echo "<br>";

// $frist1 =10;
// $second2 =20;

// $third =30;
// $fourth =40;

// if($frist1 > $second2){
//     echo "frist number is less than second";
//    if($third >$fourth){
//     echo "it is false the number";
//    }


// }

for($x = 0; $x <=100 ; $x++){
    echo "this number is : $x <br>";
}

echo "<br>";

for($x = 100; $x > 0 ; $x--){
    echo "this number is get : $x <br> ";
}
$x = 0;
while($x <= 50){
    echo "this number is : $x <br>";
    $x++;
    
}
$x = 0;
do{
    echo "this number is : $x <br>";
    $x+=10;
}while($x <= 100);

echo "<br>";

// $car =array("BMW", "Volvo" ,"Markx" );

// echo count($car);

// function sum(int $x, int $y){
//     $z = $x + $y;
//     return $z;
// }
// echo "5  + 10  = ". sum(5,10) . "<br>";
// echo "7  + 13  = ". sum(7,13) . "<br>";
// echo "5  + 10  = ". sum(2,4) . "<br>";

// sum();

// function writing(){
//     echo "Hello World";
// }
// writing();

// function familyname($fname ,$age){
//     echo " $fname This name is <br> and age is $age";

// }
// familyname("Umer" , "12" );
// familyname("abdul rehman" , "19");
// familyname("sami" , "19");
// familyname("kashan" , "20");
// familyname("Sohaib khan" , "18");

    


?>