<!DOCTYPE html>
<html>
<body>

  <h1>My first PHP page</h1>

  <?php
  echo "My first PHP script!<br>";
  echo "A PHP file normally contains HTML tags, and some PHP scripting code.<br>";
  ECHO "Hello World!<br>";
  echo "Hello World!<br>";
  EcHo "Hello World!<br>";
  ?>

  <?php
  echo "This should be new line...<br>";
  // This is a single-line comment

  # This is also a single-line comment

  /*
  This is a multiple-lines comment block
  that spans over multiple
  lines
  */

  // You can also use comments to leave out parts of a code line
  $x = 5 /* + 15 */ + 5;
  echo "The value of x is " .$x. "<br>";
  ?>

  <?php
  echo "In PHP, NO keywords (e.g. if, else, while, echo, etc.), classes, functions, and user-defined functions are case-sensitive. However; all variable names are case-sensitive! <br>";
  ?>

  <?php
  $txt = "W3Schools.com";
  echo "I love $txt!<br />";
  ?>

  <?php
  $color = "red";
  echo "My color is " .$color. "<br>"
  ?>

  <?php
  $x = 5;

  function myTest() {
    //using x inside this function will generate an error.
    // It actually doesn't print out anything.
    global $x; // with global keyword, we can use global variable inside of function
    echo "<p> Variable x inside function is: $x </p>";
  }
  myTest();

  echo "<p>Variable x outside function is: $x</p>";
  ?>

  <?php
  function myTest2() {
    $x = 5;
    echo "<p>
      variable x inside function is: $x
    </p>";
  }
  myTest2();
  ?>

  <?php
  $x = 5;
  $y = 10;
  function myTest3() {
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
  }
  myTest3();
  echo $y. "<br>";
  ?>

  <?php
  echo "Normally, when a function is completed/executed, all of its variables are deleted. However, sometimes we want a local variable NOT to be deleted. We need it for a further job.
  To do this, use the static keyword when you first declare the variable: <br />";

  function myTest4() {
    static $x = 0;
    echo $x. "<br />";
    $x++;
  }
  myTest4();
  myTest4();
  myTest4();
  myTest4();
  ?>

  <?php
  echo "The differences are small: echo has no return value while print has a return value of 1 so it can be used in expressions. echo can take multiple parameters (although such usage is rare) while print can take one argument. echo is marginally faster than print. <br />";
  ?>

  <?php
  print "<h2>PHP is Fun!</h2>";
  print "Hello world!<br>";
  print "I'm about to learn PHP!<br />";
  ?>

  <?php
  $x = "Hello world!";
  $y = 'Hello world!';

  echo $x;
  echo "<br>";
  echo $y. "<br />";
  ?>

  <?php
  $x = 5684;
  $cars = array("volvo", "BMW", "Toyota");
  echo var_dump($x). "<br />";
  echo var_dump($cars). "<br /> ";
  ?>

  <?php
  class Car {
    function Car() {
      $this->model = "VW";
    }
  }

  // create an object
  $herbie = new Car();
  // show object properties
  echo $herbie->model. "<br />";
  ?>

  <?php
  echo strlen("Hello world!"). "<br />";
  echo str_word_count("Hello world!"). "<br  />";
  echo strrev("Hello world!"). "<br />";
  echo strpos("Hello world!", "world"). "<br />";
  echo str_replace("world", "Dolly", "Hello world!"). "<br />";
  $oldtxt = "Hello World!";
  $newtxt = str_replace("World", "Dolly", $oldtxt). "<br />";
  echo $newtxt. "<br />";
  ?>

  <h2>PHP numbers</h2>
  <?php
  echo "One thing to notice about PHP is that it provides automatic data type conversion.

  So, if you assign an integer value to a variable, the type of that variable will automatically be an integer. Then, if you assign a string to the same variable, the type will change to a string.

  This automatic conversion can sometimes break your code.<br />";
  ?>

  <?php
  $x = 5985;
  echo var_dump(is_int($x)). "<br />";

  $x = 59.85;
  echo var_dump(is_int($x)). "<br />";

  $x = 10.365;
  echo var_dump(is_float($x)). "<br />";

  $x = 1.9e411;
  echo var_dump($x). "<br />";

  $x = acos(8);
  echo var_dump($x). "<br />";

  $x = 5985;
  var_dump(is_numeric($x));

  $x = "5985";
  var_dump(is_numeric($x));

  $x = "59.85" + 100;
  var_dump(is_numeric($x));
  echo $x. "<br />";

  $x = "Hello";
  var_dump(is_numeric($x));

  // Cast float to int
  $x = 23465.768;
  $int_cast = (int)$x;
  echo $int_cast;

  echo "<br>";

  // Cast string to int
  $x = "23465.768";
  $int_cast = (int)$x;
  echo $int_cast;
  ?>

  <h2>PHP Constant</h2>
  <?php
  echo "A constant is an identifier (name) for a simple value. The value cannot be changed during the script. A valid constant name starts with a letter or underscore (no $ sign before the constant name). Note: Unlike variables, constants are automatically global across the entire script. To create a constant, use the define() function.<br />";

  /* To create a constant, use the define() function.
  define(name, value, case-insensitive) */
  define("GREETING", "Welcome to W3Schools.com!");
  echo GREETING;

  //Create a constant with a case-sensitive name:
  define("GREETING", "Welcome to W3Schools.com!", true);
  echo greeting. "<br />";

  //Create an Array constant:
  define("cars", ["Alfa Romeo", "BMW", "Toyota"]);
  echo cars[0]. "<br />";
  ?>

  <?php
  define("GREETING", "Welcome to W3Schools.com!");

  function myTest5() {
    echo GREETING;
  }

  myTest5();
  ?>

  <h2>PHP Operators</h2>
  <?php
  echo "===	Identical	$x === $y	Returns true if $x is equal to $y, and they are of the same type. <br />";
  echo "!==	Not identical	$x !== $y	Returns true if $x is not equal to $y, or they are not of the same type. <br />";
  echo "<=>	Spaceship	$x <=> $y	Returns an integer less than, equal to, or greater than zero, depending on if $x is less than, equal to, or greater than $y. Introduced in PHP 7.<br />";

  $x = 5;
  $y = 10;

  echo ($x <=> $y); // returns -1 because $x is less than $y
  echo "<br>";

  $x = 10;
  $y = 10;

  echo ($x <=> $y); // returns 0 because values are equal
  echo "<br>";

  $x = 15;
  $y = 10;

  echo ($x <=> $y); // returns +1 because $x is greater than $y
  ?>

  <?php
  $txt1 = "Hello";
  $txt2 = " world!";
  $txt1 .= $txt2; // Concatenation assignment	$txt1 .= $txt2	Appends $txt2 to $txt1
  echo $txt1;
  ?>

  <?php
  echo "?:	Ternary	$x = expr1 ? expr2 : expr3	Returns the value of $x.
  The value of $x is expr2 if expr1 = TRUE.
  The value of $x is expr3 if expr1 = FALSE<br />";
  ?>

  <h2>PHP switch</h2>
  <?php
  echo "switch (n) {
    case label1:
    code to be executed if n=label1;
    break;
    case label2:
    code to be executed if n=label2;
    break;
    case label3:
    code to be executed if n=label3;
    break;
    ...
    default:
    code to be executed if n is different from all labels;
  } <br />" //The default with : not ;
  ?>

  <h2>PHP function</h2>
  <?php
  function writeMsg() {
    echo "Hello world";
  }

  writeMsg();
  echo "<br />";

  function familyName($fname, $year) {
    echo "$fname Refsnes. Born in $year. <br />";
  }

  familyName("Jani", "1975");
  familyName("Hege", "1985");
  familyName("Stale", "2000");
  familyName("Kai Jim", "2010");
  familyName("Borge", "1983");

  echo "PHP is a Loosely Typed Language
In the example above, notice that we did not have to tell PHP which data type the variable is.

PHP automatically associates a data type to the variable, depending on its value. Since the data types are not set in a strict sense, you can do things like adding a string to an integer without causing an error.

In PHP 7, type declarations were added. This gives us an option to specify the data type expected when declaring a function, and by enabling the strict requirement, it will throw a \"Fatal Error\" on a type mismatch. In the following example we try to add a number and a string without the strict requirement:<br />";

function addNumbers(int $a, int $b) {
    return $a + $b;
}
echo addNumbers(5, "5 days");
// since strict is NOT enabled "5 days" is changed to int(5), and it will return 10
  ?>
</body>
</html>
