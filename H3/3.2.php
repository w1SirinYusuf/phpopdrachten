<?php
/**
 * User: Yusuf Sirin
 * Date: 5-03-2020
 * Time:  PM
 * File: 3.2 php
 */

?>

<html>
<head>
    <link href="../Index/index.css" type="text/css" rel="stylesheet">
</head>
<body>
<?php
$trafficLightColor = "Groen";
$ambulanceComing= false;

if ($trafficLightColor == "Groen" && $ambulanceComing == false) {
echo " <span id='door' > U mag doorrijden  </span>";
}
else {
    echo "<p id='stoppen'> U moet stoppen </p>";
}


?>
<br>
<?php
/**
$countryName = "";
$currentAge  = "17";

echo "Je woont in  $countryName  en bent  $currentAge jaar oud";

if ($currentAge >= 18 )
{
    echo "Je mag hier sterke alcohol drinken";
}
else if ($currentAge <= 18);
{
  echo "Je mag hier zwakke alcohol drinken";
}
if ($currentAge = 17);
{
   echo  "je mag hier zowel zwak als sterk alcohol consumeren";
}
*/
?>

<br>
<?php

$countryName = ". ";
$currentAge  = "18";

//echo "Je woont in  $countryName  en bent  $currentAge jaar oud";

if ($currentAge >= 18  && $countryName == "Bulgarije" or  $countryName ="Nederland" )
{
    echo  "Je mag hier zowel zwak als sterk alcohol consumeren";
}
else
{
    echo "Je mag geen alcohol consumeren";
}



?>
</body>
</html>
