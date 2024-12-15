


<?php
$name = "Ali";
$age = 25;
$price = 19.99;
?>




<?php
echo "Hello, World!";
?>




<?php
$age = 25;
if ($age >= 18) {
    echo "You are an adult.";
}
?>



<?php
$age = 15;
if ($age >= 18) {
    echo "You are an adult.";
} else {
    echo "You are a minor.";
}
?>




<?php
for ($i = 0; $i < 10; $i++) {
    echo "Number: $i\n";
}
?>




<?php
$day = "Monday";
switch ($day) {
    case "Monday":
        echo "It's Monday!";
        break;
    case "Tuesday":
        echo "It's Tuesday!";
        break;
    default:
        echo "It's not Monday or Tuesday!";
}
?>




<?php
$i = 0;
while ($i < 5) {
    echo "Number: $i\n";
    $i++;
}
?>




<?php
$i = 0;
do {
    echo "Number: $i\n";
    $i++;
} while ($i < 5);
?>


<?php
$a = 5;
$b = 10;
if ($a < $b) {
    echo "$a is less than $b";
}
?>




<?php
$a = 10;
$b = 5;
$sum = $a + $b;
$difference = $a - $b;
$product = $a * $b;
$quotient = $a / $b;
echo "Sum: $sum\n";
echo "Difference: $difference\n";
echo "Product: $product\n";
echo "Quotient: $quotient\n";
?>
