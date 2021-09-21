
<?php
echo "<h1 style='font-family:Bahnschrift;'>Multiplication Table</h1>";
echo "<table border='1' width='300' cellspacing='3'>";
for ($X = 0; $X <= 10; $X++) {
    echo "<tr>";
    for ($Y = 0; $Y <= 10; $Y++) {
        if (($Y + $X) % 2 == 0)
            echo "<td bgcolor=yellow style='font-family:Bahnschrift' style='text-alignment:center;'>" . $Y * $X . "</td>";
        else {
            echo "<td bgcolor=red style='font-family:Bahnschrift' style='text-alignment:center;'>" . $Y * $X . "</td>";
        }
    }
}
