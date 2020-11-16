<?php
echo "<link rel='stylesheet' type='text/css' href='style.css'>";

$user = $_POST["user"];
$pass = $_POST["pass"];
$ship = $_POST["ship"];

$cake = $_POST["cake"];
$cookies = $_POST["cookies"];
$brownies = $_POST["brownies"];
$cheesecake = $_POST["cheesecake"];

$cakeCost = $cake*25;
$cookiesCost = $cookies*12;
$browniesCost = $brownies*15;
$cheesecakeCost = $cheesecake*30;
$shipCost = 0;

if($ship == "Free 7 day")
{
  $shipCost = 0;
}
else if($ship == "$50.00 over night")
{
  $shipCost = 50;
}
else if($ship == "$5.00 three day")
{
  $shipCost = 5;
}

$total = $shipCost+$cakeCost+$cookiesCost+$browniesCost+$cheesecakeCost;

echo "<h1>Hello, $user! Welcome to your account page/purchasing center! </h1>";
echo "<h2>The password you have chosen for your account is: $pass </h2>";

echo "<table>";

echo "<thead>";

echo "<tr>";
echo "<th></th>";
echo "<th>Amount of Treats:</th>";
echo "<th>Cost Per Treat:</th>";
echo "<th>Sub Total:</th>";
echo "</tr>";

echo "</thead>";

echo "<tbody>";

echo "<tr>";
echo "<td class='cake'>Layer Cake</td>";
echo "<td>$cake</td>";
echo "<td>$25</td>";
echo "<td>$$cakeCost</td>";
echo "</tr>";

echo "<tr>";
echo "<td class='cookies'>1 Dozen Cookies</td>";
echo "<td>$cookies</td>";
echo "<td>$12</td>";
echo "<td>$$cookiesCost</td>";
echo "</tr>";

echo "<tr>";
echo "<td class='brownies'>1 Dozen Brownies</td>";
echo "<td>$brownies</td>";
echo "<td>$15</td>";
echo "<td>$$browniesCost</td>";
echo "</tr>";

echo "<tr>";
echo "<td class='cheesecake'>Cheesecake</td>";
echo "<td>$cheesecake</td>";
echo "<td>$30</td>";
echo "<td>$$cheesecakeCost</td>";
echo "</tr>";

echo "<tr>";
echo "<td class='ship'>Shipping</td>";
echo "<td colspan='2'>$ship</td>";
echo "<td>$$shipCost</td>";
echo "</tr>";

echo "<tr>";
echo "<td class='total' colspan='3'>Total:</td>";
echo "<td class='total'>$$total</td>";
echo "</tr>";

echo "</tbody>";

echo "</table>";
?>
