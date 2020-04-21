<?php
//php Session voorbeeld

//Sessie Starten
session_start();
//tonen van gegevens
echo ("<p>Gebruikte username is:" . $_SESSION["username"]);
?>