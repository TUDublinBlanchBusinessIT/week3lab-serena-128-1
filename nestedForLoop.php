<?php
#phpForLoop 
#Serena Emedeke 4/10/2023
#put your name and the date here
#put a descripition of what the code does here - 
#this program uses a loop to count up to 10 and puts the value of the loop counter out to the screen on each iteration
echo "<TABLE border='1'>";
for ($i=1;$i<=15;$i++) {
    
    echo "<TR>";
    
    for ($j=1; $j<6; $j++){
        echo "<TD> row$i, col$j</TD>";
        
    }
    echo "</TR>";
    
}
echo "</TABLE>";

?>

