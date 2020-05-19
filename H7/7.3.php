
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
     <link href="../Index/index.css" type="text/css" rel="stylesheet">
</head>
<body>
<?php
include '../includes/header.php';
?>
<aside>
     <section>
          <h2>HoofdMenu</h2>
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
                              <a href="../H4/4.2/4.2.php">Opdracht 4.2</a>
                         </li>
                         <li>
                              <a href="../H4/4.3/4.3.php">Opdracht 4.3</a>
                         </li>
                         <li>
                              <a href="../H4/4.4/4.4.php">Opdracht 4.4</a>
                         </li>
                    </ul>
               </li>
          </ul>
          <ul>
               <li>Hoofdstuk 5
                    <ul>
                         <li>
                              <a href="../H5/5.1/5.1.php">Opdracht 5.1</a>
                         </li>
                         <li>
                              <a href="../H5/5.2/5.2.php">Opdracht 5.2</a>
                         </li>
                         <li>
                              <a href="../H5/5.3/opdracht53.php">Opdracht 5.3</a>
                         </li>
                         <li>
                              <a href="../H5/5.4/5.4.php">Opdracht 5.4</a>
                         </li>
                    </ul>
               </li>
          </ul>
          <li>Hoofdstuk 6
               <ul>
                    <li>
                         <a href="../H6/6.1/6.1.php">Opdracht 6.1</a>
                    </li>
                    <li>
                         <a href="../H6/6.2/6.2.php">Opdracht 6.2</a>
                    </li>
               </ul>
          </li>
          <li>Hoofdstuk 7
               <ul>
                    <li>
                         <a href="../H7/7.1%20&%207.2.php">Opdracht 7.1 & 7.2</a>
                    </li>
                    <li>
                         <a href="../H7/7.3.php">Opdracht7.3</a>
                    </li>
               </ul>
          </li>
          </ul>
          </ul>
     </section>
</aside>
<main id="wrapper">
     <h2 id="uitwerking">Uitwerkingen</h2>
<?php

// Inladen functies bestand
include("functions.php");

// Starten van een database connectie
startConnection();

// Executeren van een SQL query
$query = "SELECT * FROM joke";
if( isset($_GET["zoekterm"]) == true )
{
    // Er is (via het formulier) een zoekterm opgegeven. Verander nu dus de $query
    $query = "SELECT * FROM joke WHERE joketext LIKE '%". $_GET["zoekterm"] ."%'";
}

$jokes = executeQuery($query);

echo "<p> $query </p>";

echo("<form action='7.3.php' method='GET'>");
echo("<input type='text' name='zoekterm'>");
echo("<input type='submit' value='zoeken'>");
echo("</form>");
?>
<style>
table, th, td {
  border: 1px solid black;
}
</style>
<?php


echo("<table id='table'>");
echo("    <tr>");
echo("      <th>ID</th>");
echo("      <th>Joketext</th>");
echo("      <th>Jokeclou</th>");
echo("      <th>Jokedate</th>");
echo("    </tr>");

// Resultaten rij voor rij ophalen
while($row = $jokes->fetch(PDO::FETCH_ASSOC) )
{

     echo("<tr>");
     echo("    <td>");
     echo( $row["id"]);
     echo("    </td>");
     echo("    <td>");
     echo( $row["joketext"]);
     echo("    </td>");
     echo("    <td>");
     echo($row["jokeclou"]);
     echo("    </td>");
     echo("    <td>");
     echo($row["jokedate"]);
     echo("    </td>");
     echo("</tr>");

}
echo("</table>");

?>

</main>
<footer>
     <?php

     include '../includes/footer.php';
     ?>.
</footer>
</body>
</html>

