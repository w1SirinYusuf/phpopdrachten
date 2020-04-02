<?php
//controller de fullName uit de $_Post op ongeldige waardes
function checkFullname()
{
    if(count($_POST["fullName"]) < 3)
    {
        echo ("<p> style= 'red'> Te weinig karakters</p> ");
    }
    if(strpos($_POST["fullName"],  "") ==-1)
    {
        echo("<p> style= 'red'> Geen spatie gebruikt ");
    }
}