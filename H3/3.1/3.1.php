<?php
/**
 * User: Yusuf Sirin
 * Date: 5-03-2020
 * Time:  PM
 * File: 3.1 php
 */
?>
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

        ?>.
</a></p>

