<?php
    echo "<table><thead><th>Order NO</th><th>Name</th><th> Email</th><th>Phone</th><th>Address</th><th>Rice choice</th><th>Curry choice</th>";
    echo "<th>Appetizer choice</th><th>Dessert choice</th><th>Special choice</th><th>Drink choice</th><th>Total price</th></thead>";
    echo "<tbody>";
    session_start();
    for($i=0;$i<$_SESSION["norders"];$i+=1) {
        echo "<tr>";
        $order = $_SESSION["orders"][$i];
        echo "<td>".($i+1)."</td>";
        echo "<td>".$order["name"]."</td>";
        echo "<td>".$order["email"]."</td>";
        echo "<td>".$order["phone"]."</td>";
        echo "<td>".$order["address"]."</td>";
        echo "<td>".$order["rice"]."</td>";
        echo "<td>".$order["curry"]."</td>";
        echo "<td>".$order["appetizer"]."</td>";
        echo "<td>".$order["dessert"]."</td>";
        echo "<td>".$order["special"]."</td>";
        echo "<td>".$order["drinks"]."</td>";
        echo "<td>".$order["total"]."</td></tr>";
    }
    echo "</tbody></table>";
?>
<a align = "right" href = "index.html">Home</a>
 <p><a href = "reset.php">Reset Session</a><p>