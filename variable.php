<?php
$color = "red";
echo "My car is " . $color . "<br>";
echo "My house is " . $COLOR . "<br>";
echo "My boat is " . $coLOR . "<br>";
?>

<?php
// You can also use comments to leave out parts of a code line
$x = 5 /* + 15 */ + 5;
echo $x;
?>

<?php
$txt = "Hello world!";
$x = 5;
$y = 10.5;
echo "$txt";
echo "$x";
echo "$y";
?>

<?php
/*$x = 5; // Globa Scope

function myTest() {
      // using x inside this function will generate an error
  echo "<p>Variable x inside function is: $x</p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>";*/
?>

<?php
/*function myTest() {
  $x = 5; // local scope
  echo "<p>Variable x inside function is: $x</p>";
}
myTest();

// using x outside the function will generate an error
echo "<p>Variable x outside function is: $x</p>";*/
?>

<?php
$x = 5;
$y = 10;
function myTest() {
    global $x, $y;
    $y = $x + $y;
}

myTest();
echo $y; //output 15
?>



<?php
//PHP ECHO/PRINT STATEMENT
print "<h2>PHP is Fun!</h2>";
print "Hello world!<br>";
print "I'm about to learn PHP!";
?>

<?php
$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";
$x = 5;
$y = 4;

print "<h2>" . $txt1 . "</h2>";
print "Study PHP at " . $txt2 . "<br>";
print $x + $y;
?>

<?php
//PHP Integer
$x = "5985";
var_dump($x);
?> <br>

<?php
//PHP Object 
class foo 
{
    function do_foo()
    {
        echo "doing foo.";
    }
}

$bar = new foo;
$bar->do_foo();
?> <br> <br>

 
