<?php
echo "<h1>Multiplication Table:</h1>";
echo "<table>";
for ($a = 0; $a <= 100; $a = $a + 1)
{
  echo "<tr>\n";
  for ($b = 0; $b <= 100; $b = $b + 1)
  {
    $c = $a*$b;
    if ($a == 0 && $b == 0)
    {
      echo "<td> </td>";
    }
    else if ($a != 0 && $b == 0)
    {
      echo "<td>$a</td>";
    }
    else if ($b != 0 && $a == 0)
    {
      echo "<td>$b</td>";
    }
    else
    {
      echo "<td>$c</td>\n";
    }
  }
  echo "</tr>";
}
echo "</table>";
?>
