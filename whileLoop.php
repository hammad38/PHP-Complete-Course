<!-- loop is divided in 3 parts -->
<?php
$a = 0;                             //initilization//

echo "<ul>";
while ($a <= 10) {                   //condition
    echo "<li>" . $a . ") Hello World </li>";  //statement
    $a = $a + 2;                           //increment
}
echo "</ul";
