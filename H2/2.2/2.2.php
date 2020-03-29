<?php
/**
 * User: Yusuf Sirin
 * Date: 16-02-2020
 * Time: 12:06 PM
 * File: 2.2.php
 */
?>

</a></p>
<!Doctype html>
<html>
<head>
    <link href="../../Index/index.css" type="text/css" rel="stylesheet">
</head>
<body>
<header>
    <h1><?php echo "Uitwerking van PHP-opdrachten"; ?></h1>
</header>

<aside>
    <section>
        <h2>Menu</h2>
        <ul>
            <li>Hoofdstuk 2
                <ul>
                    <li>
                        <a href="../2.1/2.1.php">Opdracht 2.1</a>
                    </li>
                    <li>
                        <a href="../2.2/2.2.php">Opdracht 2.2</a>
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
                        <a href=../H4/4.1/4.1.php">Opdracht 4.1</a>
                    </li>
                    <li>
                        <a href="../../H4/4.2/4.2.php">Opdracht 4.2</a>
                    </li>
                    <li>
                        <a href="../../H4/4.3/4.3.php">Opdracht 4.3</a>
                    </li>
                    <li>
                        <a href="../../H4/4.4/4.4.php">Opdracht 4.4</a>
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
    $text1 =  "Hallo";
    $text2 =  "een makkelijke taal";
    $text3 =  "toch zo'n makkelijke taal";
    $text4 =  "wat is ";
    $text5 =  "PHP";
    $text6 =  "Nooit gedacht dat";
    $text7 =  "De installatie is best ingewikkeld";
    $text8 =  "Fijn";
    $text9 =  "?";
    $text10 =  ".";
    $text11 =  ",";
    $text12 =  "<br>";
    $text13 =  "is";
    $text14 =  "Vind je niet?";
    $text15 =  "toch";


    echo ("<p>$text1" . $text11 . " " . $text4 . " " .$text5 . " " . $text15 . "  " . $text2 . "<br>"
        . $text7 . " " . $text8 . " " . $text15 . $text9 . "<br>"
        . $text6 . " " .$text5 . " " . $text3 . " " . $text13 . $text10 . "</p>")

    ?>

    <?php
    echo ("<p> $text1" . $text11 . "<br>"
        . " " . $text8 . " ". $text15 . " ". "dat" ." " . $text5 . " " . $text2 . " " . $text13 . $text10 . "<br>" .
        $text7 . " " . $text14)

    ?>

    </p>

</main>


<a href="../../Index/index.php">
    <p id="Hello">
        <?php
        echo "terug";

        ?>
</a></p>
</body>
</html>

