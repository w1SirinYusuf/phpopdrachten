

<?php
/**
 * User: Yusuf Sirin
 * Date: 5-03-2020
 * Time:  PM
 * File: 3.3 php
 */
?>

<html>
<head>
    <link href="../../Index/index.css" type="text/css" rel="stylesheet">
</head>
<body>
<?php
include '../../includes/header.php';
?>
<aside>
    <section>
        <h2>Menu</h2>
        <ul>
            <li>Hoofdstuk 2
                <ul>
                    <li>
                        <a href="../../H2/2.1/2.1.php">Opdracht 2.1</a>
                    </li>
                    <li>
                        <a href="../../H2/2.2/2.2.php">Opdracht 2.2</a>
                    </li>
                </ul>
            </li>
        </ul>
        <ul>
            <li>Hoofdstuk 3
                <ul>
                    <li>
                        <a href="../../H3/3.1/3.1.php">Opdracht 3.1</a>
                    </li>

                    <li>
                        <a href="../../H3/3.2.php">Opdracht 3.2</a>
                    </li>
                    <li>
                        <a href="../../H3/3.3.php">Opdracht 3.3</a>
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
    $evenement ="Elfstedentocht";
    $Fries= "Alvestêdetocht";
    $afstand= "200 KM";
    $soort = "schaatstocht";
    $omgeving = "natuurijs";
    $organisatie = "Koninklijke Vereniging De Friesche Elf Steden.";
    $plaats = "Friesland";
    $Beginplaats = "Leeuwarden";
    $aantal ="15 keer";
    $firsttime= "1909";
    $maximaal = "1 keer per winter";
    //De Elfstedentocht (Fries: Alvestêdetocht) is een 200 kilometer
    //lange schaatstocht over natuurijs die wordt georganiseerd door
    //de Koninklijke Vereniging De Friesche Elf Steden. Leeuwarden,
    //de hoofdstad van Friesland, is start- en aankomstplaats. De
    //Elfstedentocht is inmiddels 15 maal verreden en werd voor het
    //eerst in 1909 gereden en wordt maximaal 1 keer per winter
    //gehouden.
    $verhaal =  "De" . " " . $evenement . " " . "(Fries:" . " ". $Fries . " " . "is een" . $afstand . " ". "kilometer lange" .
        " " . $soort . " " . "over" . $omgeving . " ". "die wordt georganiseerd door" . " " .$organisatie . " " . $Beginplaats ."de " . "hoofdstad van " .
        $plaats . ", is start- en aankomstplaats."  . " " . "De" . " " . $evenement . " " . "is inmiddels " .  $aantal . "maal verreden en werd voor het eerst in" . " " .
        $firsttime . " " . "gereden en wordt maximaal " . " " . $maximaal . " " . "gehouden";

    echo "<p> $verhaal </p> ";

    $verhaal2 = "Er zat geen verschil tussen de manier hoe ik het deed en hoe hun het deden.";

    echo " <br> <p> $verhaal2 </p> ";
    ?>

    </p> <a href="../../Index/index.php">
        <p id="Hello">
            <?php
            echo "terug";

            ?>
    </a></p>



</main>
<footer>
    <?php

    include '../../includes/footer.php';
    ?>
</footer>
</body>
</html>
