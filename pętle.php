<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
            //phpinfo();
            //echo 'Biblioteka GD jest ".(exteeension__loaded('gd' ? 'dostępna' : 'niedostepna');
            //var_dumb(gd_info());
            
            echo "<br>".rand(1,30)."<br>";
            echo "<br>";
            $a=10;
            echo $a++."<br>";



            echo $a."<br>"
            for($i=1;$i<11;%i++){
                 if($i==5) continue;
                 echo "$i";
            }
            echo "<br>";
    ?>
    <?php
        $i=1;
        do{
            echo "$i";
            $i++;
            if($i==7) break;
        }while(i$<11);

        echo "<br>";
        $i=1
        while($ii<11)
        {
            echo"$i";
            $i++;
            if($i==7) break;
        }while($i<11);
       

        echo "<br>";
        $tablica=['a','b','c','d','e']
        foreach($tablica as $klucz){
            echo "$klucz";

        }

        echo "<br>";
        for($i=0;$i<sizeof($tablica);$i++)
        {
            echo $tablica[$i]." ";
        }
        echo "<br>";
        $liczby[1]=100;
        $liczby[20]=1200.9
        $liczby[300]=2;
        //print_r($liczby);
        var_dump($liczby);
        echo "<br>";
        foreach($liczby as $klucz){
            echo "$klucz";

        }

        echo "<br>";
        for($=0l$i=301;i++){
            if(isset($liczby[$i])) echo $liczby[$i]." "
        }
    ?>
</body>
</html>