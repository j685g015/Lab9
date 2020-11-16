<?php
$grade = 0;
if ($_POST["Question1"] == "Pina Colada")
{
  $grade = $grade + 1;
}
if ($_POST["Question2"] == "Spanish Meringue")
{
  $grade = $grade + 1;
}
if ($_POST["Question3"] == "Marshmallow")
{
  $grade = $grade + 1;
}
if ($_POST["Question4"] == "Kansas Style")
{
  $grade = $grade + 1;
}
if ($_POST["Question5"] == "Jelly")
{
  $grade = $grade + 1;
}

echo "Question 1: Which of the following is not a typical flavor of cake?<br>";
echo "&nbsp;&nbsp;&nbsp; You answered: ", $_POST["Question1"], "<br>";
echo "&nbsp;&nbsp;&nbsp; Correct answer: Pina Colada<br><br>";
echo "Question 2: Which of the following is not a style of buttercream?<br>";
echo "&nbsp;&nbsp;&nbsp; You answered: ", $_POST["Question2"], "<br>";
echo "&nbsp;&nbsp;&nbsp; Correct answer: Spanish Meringue<br><br>";
echo "Question 3: Which of the following is not a typical cake filling?<br>";
echo "&nbsp;&nbsp;&nbsp; You answered: ", $_POST["Question3"], "<br>";
echo "&nbsp;&nbsp;&nbsp; Correct answer: Marshmallow<br><br>";
echo "Question 4: Which of the following is not a way to style a wedding cake?<br>";
echo "&nbsp;&nbsp;&nbsp; You answered: ", $_POST["Question4"], "<br>";
echo "&nbsp;&nbsp;&nbsp; Correct answer: Kansas Style<br><br>";
echo "Question 5: Which of the following is not a type of frosting?<br>";
echo "&nbsp;&nbsp;&nbsp; You answered: ", $_POST["Question5"], "<br>";
echo "&nbsp;&nbsp;&nbsp; Correct answer: Jelly<br><br>";
echo "Your score is: ", $grade, " out of 5, which is ", (($grade/5)*100), "%"
?>
