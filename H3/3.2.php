
<html>
<head>
    <link href="../Index/index.css" type="text/css" rel="stylesheet">
</head>
<body>
<?php
include '../includes/header.php';
?>
<aside>
    <section>
        <h2>Menu</h2>
        <ul>
            <li>Hoofdstuk 2
                <ul>
                    <li>
                        <a href="../H2/2.1/2.1.php">Opdracht 2.1</a>
                    </li>
                    <li>
                        <a href="../H2/2.2/2.2.php">Opdracht 2.2</a>
                    </li>
                </ul>
            </li>
        </ul>
        <ul>
            <li>Hoofdstuk 3
                <ul>
                    <li>
                        <a href="../H3/3.1/3.1.php">Opdracht 3.1</a>
                    </li>

                    <li>
                        <a href="../H3/3.2.php">Opdracht 3.2</a>
                    </li>
                    <li>
                        <a href="../H3/3.3.php">Opdracht 3.3</a>
                    </li>
                </ul>
            </li>
        </ul>
        <ul>
            <li>Hoofdstuk 4
                <ul>
                    <li>
                        <a href="../H4/4.1/4.1.php">Opdracht 4.1</a>
                    </li>
                    <li>
                        <a href="hoofdstuk2/opdracht_2-2.php">Opdracht 4.2</a>
                    </li>
                    <li>
                        <a href="hoofdstuk2/opdracht_2-2.php">Opdracht 4.3</a>
                    </li>
                    <li>
                        <a href="hoofdstuk2/opdracht_2-2.php">Opdracht 4.4</a>
                    </li>
                </ul>
            </li>
        </ul>
        <ul>
            <li>Hoofdstuk 5
                <ul>
                    <li>
                        <a href="hoofdstuk2/opdracht_2-1.php">Opdracht 5.1</a>
                    </li>
                    <li>
                        <a href="hoofdstuk2/opdracht_2-2.php">Opdracht 5.2</a>
                    </li>
                    <li>
                        <a href="hoofdstuk2/opdracht_2-2.php">Opdracht 5.3</a>
                    </li>
                    <li>
                        <a href="hoofdstuk2/opdracht_2-2.php">Opdracht 5.4</a>
                    </li>
                </ul>
            </li>
        </ul>
    </section>
</aside>
<main id="wrapper">
    <h2 id="uitwerking">Uitwerkingen</h2>

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

    $countryName = "Bulgarije";
    $currentAge  = "18";

    //echo "Je woont in  $countryName  en bent  $currentAge jaar oud";

    if ($currentAge >= 18  && $countryName == "Bulgarije" ||  $countryName =="Nederland" )
    {
        echo  "Je mag hier zowel zwak als sterk alcohol consumeren";
    }
    else if ($countryName =="Cyprus" && $currentAge >= 17)
    {
        echo  "Je mag hier zowel zwak als sterk alcohol consumeren";
    }
    else if($countryName == "Belgie" && $currentAge >= 16 && $currentAge<= 18)
    {
        echo "Je mag hier zwak alcohol consumeren";
    }
    else if($countryName == "Belgie" && $currentAge >= 18)
    {
        echo "Je mag hier zowel zwak als sterk alcohol consumeren";
    }
    else if ($countryName == "Zweden" && $currentAge >= 18 && $currentAge <= 20)
    {
        echo "Je mag zwak alcohol consumeren";
    }
    else if($countryName == "Zweden" && $currentAge >= 20)
    {
        echo "Je mag hier zowel zwak als sterk alcohol consumeren";
    }
    else
    {
        echo "Je mag geen alcohol consumeren";
    }



    ?>





</main>
<footer>
    <?php

    include '../includes/footer.php';
    ?>
    <a href="../Index/index.php">

        <?php
        echo "|Terug";

        ?>
</footer>
</body>
</html>
