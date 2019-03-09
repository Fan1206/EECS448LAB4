<?php
$I1 = $_POST["input1"];
$P1 = $I1 * 6;
$I2 = $_POST["input2"];
$P2 = $I2 * 8;
$I3 = $_POST["input3"];
$P3 = $I3 * 10;
$ship = $_POST["shipping"];
$username = $_POST["username"];
$password = $_POST["password"];
$total =$P1 + $P2 + $P3;

echo "You choose <br>$I1 iphone,<br> $I2 ipad,<br> $I3 airpod.<br><br>";
echo "Your account number is $username<br> Password is => $password<br><br>";
if ($ship == 1)
{
    echo "You choose Free 7 day shipping.<br>";
}
if ($ship == 2)
{
    echo "You choose $50.00 over night shipping.<br>";
    $total += 50;
}
if ($ship == 3)
{
    echo "You choose $5.00 three day shipping.<br>";
    $sotal += 5;
}
echo "<br>Here is your table receipt:";
echo '<table border = "2">';
echo "<tr style=background-color:#99ffd6>";
echo "<td> &nbsp </td>";
echo "<td> Quantity </td>";
echo "<td> Cost Per Item </td>";
echo "<td> Sub Total </td>";
echo "</tr>";
echo "<tr>";
echo "<td style=background-color:#99ffd6> iphone </td>";
echo "<td style=background-color:#d9b3ff> $I1 </td>";
echo "<td style=background-color:#d9b3ff> $799.00 </td>";
echo "<td style=background-color:#d9b3ff> $$P1 </td>";
echo "</tr>";
echo "<tr>";
echo "<td style=background-color:#99ffd6> ipad </td>";
echo "<td style=background-color:#d9b3ff> $I2 </td>";
echo "<td style=background-color:#d9b3ff> $429.00 </td>";
echo "<td style=background-color:#d9b3ff> $$P2 </td>";
echo "</tr>";
echo "<tr>";
echo "<td style=background-color:#99ffd6> Airpod </td>";
echo "<td style=background-color:#d9b3ff> $I3 </td>";
echo "<td style=background-color:#d9b3ff> $159.00 </td>";
echo "<td style=background-color:#d9b3ff> $$P3 </td>";
echo "</tr>";
echo "<tr>";
echo "<td style=background-color:#99ffd6> Shipping </td>";
if ($ship == 1)
{
    echo "<td colspan = 2 style=background-color:#d9b3ff> 7 days </td>";
    echo "<td style=background-color:#d9b3ff> $0 </td>";
}
if ($ship == 2)
{
    echo "<td colspan = 2 style=background-color:#d9b3ff> Over Night </td>";
    echo "<td style=background-color:#d9b3ff> $50 </td>";
}
if ($ship == 3)
{
    echo "<td colspan = 2 style=background-color:#d9b3ff> 3 Days </td>";
    echo "<td style=background-color:#d9b3ff> $5 </td>";
}
echo "</tr>";
echo "<tr style=background-color:#99ffd6>";
echo "<td colspan = 3> Total Cost </td>";
echo "<td> $$total</td>";
echo "</tr>";
echo "</table>";