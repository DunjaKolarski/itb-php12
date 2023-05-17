<?php
    $broj = 30;
    if ($broj <= 10)
    {
        echo "<p>Broj prve desetice</p>"; 
    }
    elseif ($broj <= 20)// na elseif se prelazi samo ako je  ovaj prvi if netacan!!!
    {
        echo "<p>Broj druge desetice</p>";
    }
    else 
    {
        echo "<p>Broj veci od 20</p>";
    }

    //alternativno 
    if ($broj > 20)
    {
        echo "<p>Broj je veci od 20</p>";
    }
    elseif ($broj > 10)
    {
        echo "<p>Broj druge desetice</p>";
    }
    else 
    {
        echo "<p>Broj prve desetice</p>";
    }
?>