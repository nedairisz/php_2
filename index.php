<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vezérélsi szerkezetek</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Vezérélsi szerkezetek</h1>
    <?php
        echo "<h2>Véletlen számok</h2>";
        echo "Paraméter nélküli véletlen szám: ".rand()."<br>";
        echo "A véletlen szám maximuma: ".getrandmax()."<br>";
        echo "Zárt intervallumbeli véletlen szám: ".rand(10, 20)."<br>";

        echo "<h2>Globális változók</h2>";
        $x= 7;
        $y = 6;
        $k;    
        function myTest0() {
            $x=1;
            $y=2;
            //kezdőérték nélkül nem működik:
            $z = $x + $y;
            echo "A (lokális változók) $x és a $y összege: $z<br>";
            // működik:
            $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
            echo "A (globális változók) " .$GLOBALS['x']. " és a " .$GLOBALS['y']. " összege: ".$GLOBALS['z']."<br>";
        }
        myTest0();

        echo "<h2>Operátorok</h2>";
        $adat1=8/3;
        echo "8/3 eredménye: $adat1 <br>";
        echo "8/3 adattípusa: ".gettype($adat1)."<br>";

        echo "<h2>Elágazások</h2>";
        $logikai = (5==0);
        echo "5 egyenlő-e 0-val? <br>";
        echo ($logikai ? 'Ez igaz.' : 'Ez hamis. <br>');

        //ugyan ez a régi formulával
        if ($logikai){
            echo 'Ez igaz.';
        }else{
            echo ' Ez hamis. <br>';
        }
        
        $szam = rand(-1,1);
        echo "<br>A véletlen szám: $szam <br>";
        switch ($szam) {
            case -1:
                echo "A szám negatív";
                break;
            case 0:
                echo "A szám null";
                break;
            default:
                echo "A szám pozitív";
                break;
        }

        echo "<h2>Ciklusok</h2>";
        $tomb=array(1,3,4); //sima tömb
        foreach ($tomb as $ertek){
            echo $ertek.'<br>';
        }

        $asszTomb = array("Szandi" => 10, "István" => 20); //asszociatív tömb
        foreach ($asszTomb as $kulcs => $ertek){
            echo "$kulcs: $ertek <br>";
        }


        //1. Hozz létre egy 5 elemű tömböt véletlen számokkal (20 és 30 közötti zárt intervallumban), majd írasd ki az összegüket!
        $tomb = [];
        for ($index1 = 0; $index1 < 5; $index1++) {
            $szam = rand(20, 30);
            array_push($tomb, $szam);
        }
        echo "<br>A tömb elemei: ";
        print_r($tomb);

        $osszeg = 0;
        for ($index1 = 0; $index1 < count($tomb); $index1++) {
            $osszeg+=$tomb[$index1];
        }
        echo "<br>A tömb elemeinek összege: $osszeg";
      
        //4. Készítsd el egy sakktábla képét figurák nélkül (segítség: a kis “a” betűre így hivatkozhatsz: chr(97))!
        

    ?>
</body>
</html>