<?php
 
echo "<h3>1. Area & Perimeter of Rectangle</h3>";
$length = 10;
$width = 5;
 
$area = $length * $width;
$perimeter = 2 * ($length + $width);
 
echo "Area = $area<br>";
echo "Perimeter = $perimeter<br><hr>";
 
 
echo "<h3>2. VAT Calculation (15%)</h3>";
$amount = 1000;
$vat = 0.15 * $amount;
 
echo "VAT = $vat<br>";
echo "Total Amount = " . ($amount + $vat) . "<br><hr>";
 
 
echo "<h3>3. Odd or Even Number</h3>";
$num = 7;
 
if ($num % 2 == 0) {
    echo "$num is Even";
} else {
    echo "$num is Odd";
}
echo "<br><hr>";
 
 
echo "<h3>4. Largest of Three Numbers</h3>";
$a = 10;
$b = 25;
$c = 15;
 
if ($a >= $b && $a >= $c) {
    echo "Largest = $a";
} elseif ($b >= $a && $b >= $c) {
    echo "Largest = $b";
} else {
    echo "Largest = $c";
}
echo "<br><hr>";
 
 
echo "<h3>5. Odd Numbers Between 10 to 100</h3>";
for ($i = 10; $i <= 100; $i++) {
    if ($i % 2 != 0) {
        echo $i . " ";
    }
}
echo "<br><hr>";
 
 
echo "<h3>6. Search Element in Array</h3>";
$arr = [10, 20, 30, 40, 50];
$search = 30;
$found = false;
 
foreach ($arr as $value) {
    if ($value == $search) {
        $found = true;
        break;
    }
}
 
if ($found) {
    echo "Element found";
} else {
    echo "Element not found";
}
echo "<br><hr>";
 
 
echo "<h3>7(a). Star Pattern</h3>";
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}
echo "<hr>";
 
 
echo "<h3>7(b). Number Pattern</h3>";
for ($i = 3; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j . " ";
    }
    echo "<br>";
}
echo "<hr>";
 
 
echo "<h3>7(c). Alphabet Pattern</h3>";
$ch = 'A';
 
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $ch . " ";
        $ch++;
    }
    echo "<br>";
}
 
?>