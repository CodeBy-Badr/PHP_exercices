<?php
// variables
$name = "Badr"
$age = "15"
$experience = 7
$num = 10
$num2 = 15
$num1 = 5

// conditions
if ($name == "anas" || $age < 18) {
    var_dump("You are not old");
} elseif ($age > 18 && $experience == 7) {
    var_dump("You are older")
} else {
    var_dump("You can't login!")
};

// function
function condition($n1, $n2) {
    return $n1 + $n2;
};
condition($num1 + $num2);

// for loop
for($i = 0; $i < 10; $i++) {
    echo $i;
};

?>