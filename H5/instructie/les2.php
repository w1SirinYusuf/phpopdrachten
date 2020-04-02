<html>
<head>
    <title>H5 les 2</title>
</head>
<body>
<form action="les2result.php" method="post"> //ctrl spatie opent opties en met action stuur je het waar je wil
                                              //post is voor grotere bestanden/formulieren //get formulier is voor kleine voorkleine formuliertjes
<h1> Wachterij Groenteboer Sirin</h1>
<p>Naam: </p>
<input type="text" name="fullname">
<p> Man /Vrouw</p>
<input type="radio" name="gender" value= "male"> Man
<input type="radio" name="gender" value="female"> Vroouw
<input type="radio" name="gender" value="unknown"> Onbekend

    <p>Gemeente</p>
   <select name="Township">
    <option value="Leerdam">Leerdam</option>
    <option value="Den Bosch">Den Bosch</option>
    <option value="Gorinchem">Gorinchem</option>


   </select>

    <input type="submit">
</form>




</body>

</html>