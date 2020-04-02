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
        <h2>HoofdMenu</h2>
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
                        <a href="../../H4/4.1/4.1.php">Opdracht 4.1</a>
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
                        <a href="../5.1/5.1.php">Opdracht 5.1</a>
                    </li>
                    <li>
                        <a href="../5.2/5.2.php">Opdracht 5.2</a>
                    </li>
                    <li>
                        <a href="hoofdstuk2/opdracht_2-2.php">Opdracht 5.3</a>
                    </li>
                    <li>
                        <a href="5.4.php">Opdracht 5.4</a>
                    </li>
                </ul>
            </li>
        </ul>
    </section>
</aside>
<main id="wrapper">
    <h2 id="uitwerking">Uitwerkingen</h2>

    <form action="5.4.php" method="post">
    <table>
        <tr>
            <td>
                <p>Komt er een ambulance aan?</p>
            </td>
            <td>
                <input type="radio" name="ambulanceComing" value="yes" >ja
                <input type="radio" name="ambulanceComing" value="no" >nee

            </td>
        </tr>
        <tr>
            <td> Kleur stoplicht </td>
            <td>
                <?php
                //Bestaat $_post["trafficLightColor"] ? ZO ja, voer de 2e if statement uit
                if($_SERVER["REQUEST_METHOD"] == "POST" )
                {
                    // Bepaal of de trafficLightColor geldige waardes heeft
                    if(isset($_POST["trafficLightColor"]) == false )
                    {
                        echo("<p style='color: red'> U heeft een ongeldige invoer gegeven </p>");
                    }
                }
                ?>
                <br>

                <input type="radio" name="trafficLightColor" value="green">groen
                <input type="radio" name="trafficLightColor" value="orange">oranje
                <input type="radio" name="trafficLightColor" value="red">rood
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="Versturen">
            </td>

        </tr>



    </table>
    </form>

    <?php
    if(isset($_POST["ambulanceComing"]) == true && isset($_POST["trafficLightColor"]) == true)
    {
        echo("<h1> wat is de situatie en wat moet ik doen?</h1>");
        echo("<table>");

        if($_POST["trafficLightColor"] == "green")
        {
            echo("<p>Het stoplicht staat op groen</p>");
        }
        elseif($_POST["trafficLightColor"] == "orange")
        {
            echo("<p>Het stoplicht staat op oranje</p>");
        }
        if($_POST["trafficLightColor"] == "red")
        {
            echo("<p>Het stoplicht staat op rood</p>");
        }

        //Tonen of er een ambulance aankomt
         echo("<p> En er komt een ambulance aan:" . $_POST["ambulanceComing"] . "</p>");

        //mag ik verder rijden?
        if($_POST["trafficLightColor"] == "green" && $_POST["ambulanceComing"] == "no")
        {
            echo("<p style='color: green'>Je mag doorrijden</p> ");
        }
        else
        {
            echo("<p style='color: red'>Je moet stoppen</p> ");
        }
            echo("</table>");


    }


    ?>
</main>
<footer>
    <?php

    include '../../includes/footer.php';
    ?>
</footer>
</body>
</html>
