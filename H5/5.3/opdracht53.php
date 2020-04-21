


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
                        <a href="../../H5/5.1/5.1.php">Opdracht 5.1</a>
                    </li>
                    <li>
                        <a href="../../H5/5.2/5.2.php">Opdracht 5.2</a>
                    </li>
                    <li>
                        <a href="../../H5/5.3/opdracht53.php">Opdracht 5.3</a>
                    </li>
                    <li>
                        <a href="../5.4/5.4.php">Opdracht 5.4</a>
                    </li>
                </ul>
            </li>
        </ul>
    </section>
</aside>
<main id="wrapper">
    <h2 id="uitwerking">Uitwerkingen</h2>
    <h1>Corona enquete:</h1>
    <hr>
    <form action="form_data53.php" method="Post">
        <table>
            <tr>
                <td>Wat is je naam:</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>wat is je leeftijd:</td>
                <td><input type="number" name="age"></td>
            </tr>
            <tr>
                <td>Gemeente</td>
                <td> <select name="Township">
                        <option value="DenBosch">DenBosch</option>
                        <option value="Leerdam">Leerdam</option>
                        <option value="Gorinchem">Gorinchem</option>
                        <option value="Eindhoven">Eindhoven</option>
                    </select></td>
            </tr>
            <tr>
                <td>Aantal inwoners per gemeente:</td>
                <td><input type="number" name="citizens"></td>
            </tr>
            <tr>
                <td>Ken je mensen die besmet zijn in je woonplaats></td>
                <td>
                    <input type="radio" name="infected" value="yes"> Ja<br>
                    <input type="radio" name="infected" value="no"> Nee<br>

                </td>
            </tr>
            <tr>
                <td>Aantal mensen besmet in je gemeente?</td>
                <td><input type="number" name="value"></td>
            </tr>
        </table>
        <input type="submit" value="Versturen">
    </form>

</main>
<footer>
    <?php

    include '../../includes/footer.php';
    ?>
</footer>
</body>
</html>
