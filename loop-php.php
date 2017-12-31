<?php 

$fruits = ['apple', 'orange', 'banana'];

// using general for loop;
for ($i = 0; $i < count($fruits); $i++) {
  echo $fruits[$i] . "\t";
}

echo "<br>";
// while loop 
$i = 0;
while ($i < count($fruits)) {
  echo $fruits[$i] . "\t";
  $i++;
}

echo "<br>";

// foreach loop
foreach($fruits as $fruit) {
  echo $fruit . "\t";
}