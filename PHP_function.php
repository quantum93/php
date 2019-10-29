<?php declare(strict_types=1); // strict requirement

function addNumbers(int $a, int $b) {
  return $a + $b;
}
echo addNumbers(5, 5);
// since strict is enabled and "5 days" is not an integer, an error will be thrown

function setHeight(int $minheight =50) {
  echo "The height is : $minheight <br />";
}

setHeight(350);
setHeight();
setHeight(30);

function sum(int $x, int $y) {
  $z = $x + $y;
  return $z;
}

echo "5 + 10 = " .sum(5,10). "<br />";

function addFloats(float $a, float $b) : float {
  return $a + $b;
}

echo addFloats(1.2, 5.2);
echo "<br />";

function addInts(float $a, float $b) : int {
  return (int)($a + $b);
}
echo addInts(1.2, 5.2);

?>

<h1>My Second PHP page</h1>
<h2>This is test for strict requirement for function</h2>

<?php
echo "Hello there!"
?>

<h2>PHP associative arrays</h2>

<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}

$cars = array
(
array("Volvo",22,18),
array("BMW",15,13),
array("Saab",5,2),
array("Land Rover",17,15)
);

echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";

for ($row = 0; $row < 4; $row++) {
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 3; $col++) {
    echo "<li>".$cars[$row][$col]."</li>";
  }
  echo "</ul>";
}
?>

<?php
$mycars = array("Volvo", "BMW", "Toyota");
sort($mycars); // In php sort function itself didn't print out the result of sort. You need to make a loop for output.

$clength = count($mycars);
for($x = 0; $x < $clength; $x++) {
    echo $mycars[$x];
    echo "<br>";
}
?>
