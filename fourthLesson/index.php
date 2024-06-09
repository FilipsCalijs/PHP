// data types

// null 
$x = "Hello world!";
$x = null;
var_dump($x);


// change data
$x = 5;
var_dump($x);

$x = "Hello";
var_dump($x);

// do while 
$i = 1;

do {
  if ($i == 3) break;
  echo $i;
  $i++;
} while ($i < 6);

// while loop

$i = 0;
while ($i < 6) {
  $i++;
  if ($i == 3) continue;
  echo $i;
}

// comment: and where is diffrance? idk