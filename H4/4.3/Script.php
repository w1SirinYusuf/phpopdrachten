<?php
//while loop1

$task2 ="Lancering in:  " ; //stap1 variabele waarde geven
            // !!opdracht zegt geen echo maar ik heb het wel overal
$counter1 = 20;
while($counter1 >= 0) {
    $task2 = $task2 ."$counter1, ";      //  alles moet op deze manier gaan eigenlijk
    $counter1 = $counter1 -1;
}
//for loop 1
$task3= "Lancering in: ";
echo "<br> $task3";     // !!
for($counter2 = 20; $counter2 >= 0; $counter2 = $counter2 -1)
{
echo " $counter2, ";     // !!
}

//while loop 2
$task4 = " ";
$counter3 = 1;
while($counter3 <= 6)
{
   // echo "<h$counter3> <br> Dit is de $counter3 e iteratie.</h$task4> ";  // moet steeds kleiener worden met h1 etc
    $counter3 ++;


}
//for loop 2
echo "<br>";
$task5 = "";
for($counter4 = 1; $counter4 <= 10; $counter4 = $counter4 +1)
{
    echo " <br><td> Dit is de $counter4 e iteratie </td>";
}

//while loop 3
$task6 = "";
$task7 = " en werd ik een ";
$counter5 = 2020;

while($counter5 >= 2002) {
    if ($counter5 >= 2003 && $counter5 <= 2019) {
        $aftrekken = $counter5 - 2002;
        echo "<p> in $counter5 was ik $aftrekken jaar oud";
        $counter5 = $counter5 - 1;
        if ($aftrekken <= 0 && $aftrekken >= 0)
        {
            echo "$task7 Baby </p>  ";
        }
        elseif ($aftrekken >= 2 && $aftrekken <= 2)
        {
            echo "$task7 peuter </p>";}
        elseif ($aftrekken >= 4 && $aftrekken <= 4)
        {
            echo "$task7 kleuter </p>";
        }
        elseif ($aftrekken >= 8 && $aftrekken <= 8)
        {
            echo "$task7 tiener </p>";
        }elseif ($aftrekken >= 12 && $aftrekken <= 12)
        {
            echo "$task7 adolescent </p>";
        }

    } elseif ($counter5 == 2020) {
        $aftrekken = $counter5 - 2002;
        echo "<p> in $counter5 word ik $aftrekken jaar oud  ";
        $counter5 = $counter5 - 1;

    } else {
        $aftrekken = $counter5 - 2002;
        echo "<p> in $counter5 ben ik geboren";
        $counter5 = $counter5 - 1;
        if ($aftrekken <= 0 && $aftrekken >= 0)
        {
            echo "$task7 Baby </p>  ";
        }
    }

}

//Vragen aan de docent!!!
// 1.hoe moet je via 4.3 php pushen ik heb het op deze manier gedaan maar het hoorde dat je echo via 4.3.php moest doen
// 2. de laatste stap met het leven fases kon zeker makkelijker ben ik van mening maar hoe zou dat dan moeten?
// als u kan antwoorden I am thankfull :)

//antwoord bij 1 doe je i.pv echo doe je dan (naamvariabele) = (naamvariabele) . "wat je erbij wilt zetten
//In dit geval dus bv bij task2 doe je dan    $task2 = $task2 ."$counter1, ";

//antwoord bij 2 zo is het ook wel goed
?>