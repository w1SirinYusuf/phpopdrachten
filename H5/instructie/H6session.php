<?php
//php Session voorbeeld

//Sessie Starten
session_start();
//Session vullen met data
if(isset($_GET["txtUsername"])==true)
{
    $_SESSION["username"] = $_GET["txtUsername"];
}

?>

<html>
<head>



</head>
<body>
    <form method="get " action="H6sessionshow.php"></form>

</body>

</html>
