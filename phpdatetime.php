<?php
//DATE
echo "Today is" . date("Y/m/d") ."<br>";
echo "Today is" . date("Y.m.d") ."<br>";
echo "Today is" . date("Y-m-d") ."<br>";
echo "Today is" . date("I");

?>


&copy; 2010-<?php echo date("Y"); /*PHP Tip - Automatic Copyright Year
Use the date() function to automatically update the copyright year on your website:*/ ?>


<?php
/*Get a Time
Here are some characters that are commonly used for times:

H - 24-hour format of an hour (00 to 23)
h - 12-hour format of an hour with leading zeros (01 to 12)
i - Minutes with leading zeros (00 to 59)
s - Seconds with leading zeros (00 to 59)
a - Lowercase Ante meridiem and Post meridiem (am or pm)*/
echo "The time is " . date("h:i:sa");
?>

<?php
/*Get Your Time Zone
If the time you got back from the code is not correct, it's probably because your server is in another country or set up for a different timezone.

So, if you need the time to be correct according to a specific location, you can set the timezone you want to use.

The example below sets the timezone to "America/New_York", then outputs the current time in the specified format:*/
date_default_timezone_set("America/New_York");
echo "The time is " . date("h:i:sa");
?>