<?php

class Film 
{
    var $naslov;
    var $reziser;
    var $godinaIzdanja;
    function stampaj()
    {
        echo 
        "   <table>
                <tr>
                <td>Naslov filma : </td>
                <td>$this->naslov</td>
                </tr>
                <tr>
                <td>Ime rezisera : </td>
                <td>$this->reziser</td>
                </tr>
                <tr>
                <td>Godina izdanja : </td>
                <td>$this->godinaIzdanja</td>
                </tr>
            </table>
        ";
    }
}
$f1 = new Film();
$f1->naslov = "Lara Croft";
$f1->reziser = "Reziser 1";
$f1->godinaIzdanja = 2000;
$f1->stampaj();

$f2 = new Film();
$f2->naslov = "Spy Kids";
$f2->reziser = "Reziser 2";
$f2->godinaIzdanja = 2002;
$f2->stampaj();

$f3 = new Film();
$f3->naslov = "Avatar";
$f3->reziser = "Reziser 3";
$f3->godinaIzdanja = 1999;
$f3->stampaj();



?>