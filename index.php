<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align:center"> Touseef Ahmed PHP</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>
    <center>
<?php
echo"welcome to touseef <br>";
echo"hello Touseef <br>";
echo"hello Taimoor <br>";

$text="hello dear <br>";
echo $text;
$x=5;
$y=10;
$z=$x+$y;
echo $z;

$t="touseef ahmed abbasi <br> ";
echo $t;

echo "Touseef $text"; 
echo "<h2>Mirza sb</h2>";
echo " mirza sb ";
echo "Hello world!<br>";
echo "I'm about to learn PHP!<br>";
echo "This ", "string ", "was ", "made ", "with multiple parameters.<br>";

echo"<b>string exampl</b>";
$cpu="centrel processing unit <br>";
$ALU="Arthimatic logic unit <br>";
echo $cpu;
echo $ALU;

echo"<b>integer</b></br>";
$h=514;
var_dump ($h);

echo"<b>integer</b></br>";
$h=514.12;
var_dump ($h);

$cars = array("Volvo","BMW","Toyota");
var_dump($cars);

$toyota=array("engine","box","oil");
var_dump($toyota);

echo"<b>string<b><br>";

Define("Touseef","Touseef is a brannd <br>");
echo Touseef;

define("car",["Alfa Romeo",
"BMW",
"Toyota"]);
echo car[2];
echo "<br>";

define("Hamza",["Taimoor","Touseef","Asfar","Hammad","Gufran "]);
echo Hamza[1];
echo"<br>";
echo"If statement <br>";
$t=date("H");
if($t<"20"){
   echo "have a good day";

   $t = date("H");

if ($t > "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}
}

$favcolor = "red";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}


$x = 1;

while($x <= 5) {
  echo "The number is: $x <br>";
  $x++;
}

$m=2;
while($m<=20){
    echo "Touseef ahmed is:$m<br>";
    $m++;
}


$x = 0;

while($x <= 100) {
  echo "The number is: $x <br>";
  $x+=10;
}


function writeMsg() {
    echo "Hello world!";
  }
  
  writeMsg();

  echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];





if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_REQUEST['fname'];
    if (empty($name)) {
      echo "Name is empty";
    } else {
      echo $name;
    }
  }
?>




</center>
</body>
</html>
