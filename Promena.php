<?php
$ondřejŠplíchal1=1;
$ondřejŠplíchal2=5;
if ($ondřejŠplíchal1 < $ondřejŠplíchal2) {
    echo "Ondřej Šplíchal";
}
echo "<br>";
if ($ondřejŠplíchal1 > "$ondřejŠplíchal2") {
    echo "Ondřej";
} else  {
    echo "Šplíchal";
}
echo"<br>";
if ($ondřejŠplíchal1 < 1) {

    if ($ondřejŠplíchal2 < 6) {
        echo "Ondřej";
    }
} else {
    echo "Šplíchal";
}
echo"<br>";
switch ($ondřejŠplíchal1) {
    case 1:
        echo "1";
        break;
    case 2:
        echo "2";
        break;
    case 3:
        echo "3";
        break;
    case 4:
        echo "4";
        break;
    case 5:
        echo "5";
        break;
    case 6:
        echo "6";
        break;
    default:
        echo "Nic";
}
echo"<br>";
$zelenina = array(1=>"meloun","okurka","rajče","ředkev","dýňe","batát","celer","kyseláokurka","brambora","mrkev");
var_dump($zelenina);
echo "<br>";
$auto["auta"]["htp"] ["benzin"] ["sportovni"]["8 válec"] = "BMV";
$auto["auta"]["htp"] ["nafta"] ["na cesty"] ["5 válec"] = "Volvo";
$auto["kamiony"]["tdi"] ["nafat"] ["přeprava zboží"]["10 válec"] = "Man";
$auto["kamiony"]["htp"] ["nafta"] ["přeprava zboží"]["12 válec"] = "Renault";
$auto["auta"]["tdi"] ["benzin"] ["osobní"] ["9 válec"]= "Škoda";
var_dump($auto);