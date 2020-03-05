<?php
?>
<!doctype HTML>
<html>
<head>

</head>
<body>
<?php
//instructie 1 H4

//vertellen dat ons script de tijdzones van Hong KOng moet aanhouden.
date_default_timezone_set( "Asia/Hong_Kong");

// Toon de tijd in HH:mm formaat
 $currentTime = date( "D Y:m:d H:i:s");
echo ("<p> Huidijge tijd: " . $currentTime . "</p>");

// instructie 2 :Switch
    $currentHour = date("D");
    switch ($currentHour) {
        case "Mon":
            echo("Het is vandaag maandag.");
            break;
        case "Tue":
            echo "Het is dinsdag";
            break;
        case "wed":
            echo "woensdag slaapdag";
            break;
        case "thu":
            echo "donderdag";
            break;


    }



?>
</body>
</html>

