<h2>PHP Global Variables - superglobals</h2>

<?php
echo "PHP Global Variables - Superglobals
Some predefined variables in PHP are \"superglobals\", which means that they are always accessible, regardless of scope - and you can access them from any function, class or file without having to do anything special.

The PHP superglobal variables are:

\$GLOBALS
\$_SERVER
\$_REQUEST
\$_POST
\$_GET
\$_FILES
\$_ENV
\$_COOKIE
\$_SESSION
<br />";
?>

<?php
echo "Here is some examples";
echo "<br>";
echo "<br>";
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
 ?>

 <html>
 <body>

 <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
   Name: <input type="text" name="fname">
   <input type="submit">
 </form>

 <?php
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

<h2>The $_GET global variables</h2>

<a href="test_get.php?subject=PHP&web=W3schools.com">Test $GET</a>

<?php
echo "Study " . $_GET['subject'] . " at " . $_GET['web'];
?>

 </body>
 </html>
