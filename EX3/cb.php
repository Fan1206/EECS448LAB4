<?php
    echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"style.css\" />";
$I1 = $_POST["a"];
if($I1=="") $I1=0;
$P1 = $I1 * 6;
$I2 = $_POST["s"];
if($I2=="") $I2=0;
$P2 = $I2 * 8;
$I3 = $_POST["b"];
if($I3=="") $I3=0;
$P3 = $I3 * 10;
$ship = $_POST["shipping"];
$username = $_POST["username"];
$password = $_POST["password"];
$total =$P1 + $P2 + $P3;
    
    
echo "You choose <br>$I1 pound apple,<br> $I2 pound strawberry,<br> $I3 pound banana.<br><br>";
    if ($ship == 1)
    {
        echo "You choose Free 7 day shipping.<br><br>";
    }
    if ($ship == 2)
    {
        echo "You choose $50.00 over night shipping.<br><br>";
        $total += 50;
    }
    if ($ship == 3)
    {
        echo "You choose $5.00 three day shipping.<br><br>";
        $total += 5;
    }
echo "Your username :<br> $username<br>";
echo "Your password : <pre class='pw'> $password<br><br></pre>";
echo "<br>Here is your table receipt:";
echo '<table border = "2">';
echo "<tr class='name'>";
echo "<td> &nbsp </td>";
echo "<td> Quantity </td>";
echo "<td> Cost Per Item </td>";
echo "<td> Sub Total </td>";
echo "</tr>";
echo "<tr>";
echo "<td class='name'> Apple </td>";
echo "<td class='item'> $I1 </td>";
echo "<td class='item'> $6.00 </td>";
echo "<td class='item'> $$P1 </td>";
echo "</tr>";
echo "<tr>";
echo "<td class='name'> Strawberry </td>";
echo "<td class='item'> $I2 </td>";
echo "<td class='item'> $8.00 </td>";
echo "<td class='item'> $$P2 </td>";
echo "</tr>";
echo "<tr>";
echo "<td class='name'> Banana </td>";
echo "<td class='item'> $I3 </td>";
echo "<td class='item'> $10.00 </td>";
echo "<td class='item'> $$P3 </td>";
echo "</tr>";
echo "<tr>";
echo "<td class='name'> Shipping </td>";
if ($ship == 1)
{
    echo "<td colspan = 2 class='item'> 7 days </td>";
    echo "<td class='item'> $0 </td>";
}
if ($ship == 2)
{
    echo "<td colspan = 2 class='item'> Over Night </td>";
    echo "<td class='item'> $50 </td>";
}
if ($ship == 3)
{
    echo "<td colspan = 2 class='item'> 3 Days </td>";
    echo "<td class='item'> $5 </td>";
}
echo "</tr>";
echo "<tr class='total  '>";
echo "<td colspan = 3> Total Cost </td>";
echo "<td> $$total</td>";
echo "</tr>";
echo "</table>";
