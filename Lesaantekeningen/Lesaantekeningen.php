<!Doctype html>
<html>

<head>

</head>

<body>
<?php
// -Variabelen
// -string
// -integer (number)
// -Double/Float/Decimal = 19.5;
// -Char (een Karakter) = "R";

$firstName = "Yusuf";
$lastName = "Sirin";
$fullName = $firstName . $lastName;

//integer
$yearOfBirth = 1987;
$currentYear =  date("Y");
$age = $currentYear - $yearOfBirth;

//boolean
$fromLeerdam = false;
$isMale = true;

if($fromLeerdam == true);
{
    if ($isMale ==true )
    {
        echo ("<p>Goeie</p>")
    }
    else
    {
        echo("<p>Goeie2</p>")
    }

}

//echo commando
echo("<p>Hallo</p>");

// echo commando als terminal manier
echo "<p> Dit is een echo </p>";
?>

<div>
    <?php
    echo ("<h1>Hallo " . $fullName . " " . "</h1>");
    echo ("<h2> Jouw leeftijd is") . $age . "</h2>")
?>
</div>

</body>
</html>

