
<footer id="Footer">
    <?php
    include 'variabelen.php';
    //4.1
    date_default_timezone_set("Europe/Amsterdam");
    $uur= date( "H");
    if ($uur >= 0 && $uur <= 5 )
    {
        echo "Goedennacht bezoeker";
    }
    elseif ($uur > 5 && $uur < 12)
    {
        echo "Goedenochtend bezoeker";
    }
    elseif ($uur >= 12 && $uur <= 17  )
    {
        echo "Goedenmiddag bezoeker";
    }
     elseif( $uur > 17 && $uur < 24)
         echo"Goedenavond bezoeker";


    //H3.3
    echo  ", &copy $name &nbsp $year ";




    ?>


</footer>
