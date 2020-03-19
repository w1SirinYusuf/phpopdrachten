<?php
/**
 * User: Yusuf Sirin
 * Date: 5-03-2020
 * Time:  PM
 * File: 3.3 php
 */
?>
<?php
// Voorbeeld 1: While loop
$counter = 15;
while($counter >= 0)
{
    echo("<p>Nog " . $counter . " keer je handen wassen</p>");
    $counter--;
}

// Voorbeeld 2: for loop
for($eggsAmount = 0; $eggsAmount <= 37; $eggsAmount++)
{
    echo("<p>Aantal eieren : " . $eggsAmount .  "</p>");

    if($eggsAmount >= 5 && $eggsAmount <= 10)
    {
        echo("<p style='color: orange'>MANDJE VOL</p>");
    }
    else if($eggsAmount >= 11 && $eggsAmount < 20)
    {
        echo("<p style='color: red'>Je laat een spoor achter</p>");
    }
}

//vootbeeld 3:strtotime
$example1= strtotime( "+days +1 hour")
    $date1 = date ("d-m-Y h:i" , $example1);
echo($date1);
?>




