<?php 

function pintar(int $numero): void{
    echo "<div background-color:#f0f0f0; border:2px solid #333; padding:20px; margin:20px auto; text-align:center;'>";
    echo "<table border='1' align='center'>";
    for($i = 0 ; $i < 10; $i++){
        echo "<tr>";
        echo "<td>$numero</td>";
        echo "<td>X</td>";
        echo "<td>$i</td>";
        echo "<td>=</td>";
        echo "<td>".$numero *$i ."</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "</div>";
    echo "<br>";
    echo "<hr>";
}

pintar(5);

pintar(6);