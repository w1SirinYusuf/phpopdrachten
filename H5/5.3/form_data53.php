<h2>Vraag antwoord</h2>
<hr>
<table>
    <?php

    if(empty($_POST) == false) //emppty =het controleerd of de variabele leeg is ofniet,false geeftie terug als het dus vol is
    {
        $userName = $_POST["name"];
        echo("<tr><td style='font-style: italic'>Voornaam:</td><td>" . $userName . "</td></tr>");

        $age = $_POST["age"];
        echo("<tr><td style='font-style: italic'>wat is je leeftijd::</td><td>" . $age . "</td></tr>");

        $Township = $_POST["Township"];
        echo("<tr><td style='font-style: italic'>Gemeente</td><td>" . $Township . "</td></tr>");


        $inhabitants = $_POST["citizens"];
        echo("<tr><td style='font-style: italic'>Aantal inwoners per gemeente:</td><td>" . $inhabitants . "</td></tr>");

        if (isset($_POST["infected"]) == true && $_POST["infected"] == "Ja") { //isset kijkt of een variabele bestaat en datie niet leeg is
            echo("<tr><td style='font-style: italic'>Ken je mensen die besmet zijn in je woonplaats</td><td>ja</td>");
        }
        else {
            echo("<tr><td style='font-style: italic'>Ken je mensen die besmet zijn in je woonplaats</td><td>nee</td>");
        }

        $value = $_POST["value"];
        echo("<tr><td style='font-style: italic'>Aantal mensen besmet in je gemeente?</td><td>" . $value . "</td></tr>");

        include "../5.3/functions.php";

        echo ("<tr><td> kans op besmet:</td><td>" . 0.8 ."</td></tr");

        echo ("<tr><td> besmettelijke mensen in je buurt</td><td>" . "5" ."</td></tr>");
    }
    ?>
</table>
