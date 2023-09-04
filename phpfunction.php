<?php
/*function writeMsg() {
  echo "Hello world!";
}

writeMsg();*/ // call the function. you can use anyname to call your function, as long as the names are same.
?>

<?php
/*function familyName($fname) {
  echo "$fname Refsnes.<br>";
}

familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");*/
?>

<?php
/*function familytwo($firstname, $lastname, $surname){
    echo "$firstname  $lastname  $surname";
}
familytwo("john", "grace", "lucy",)*/
?>

<?php
/*function addNumbers(int $a, int $b) {
  return $a + $b;
}
echo addNumbers(5, 5 );*/
// since strict is NOT enabled "5 days" is changed to int(5), and it will return 10
?>

<?php
/*$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";*/
?>
<?php
/*$cars = array("Volvo", "BMW", "Toyota");
echo count($cars);*/
?>

<?php
/*$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++) {
  echo $cars[$x];
  echo "<br>";
}*/
?>

<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old.";
?>