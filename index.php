<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie</title>
</head>
<body>
    <?php
        $plik = fopen("liczby.txt", "r");

        $array = [];

        while (!feof($plik))
        {
            $n = fgets($plik);
            if(is_numeric($n))
            {
                array_push($array, $n);
            }
        }

        for($i = 0; $i < sizeof($array); $i++)
        {
            echo $array[$i];
        }

        echo "<br>";
        echo "Najmniejsza liczba: ".min($array)."<br>";
        echo "Najwieksza liczba: ".max($array)."<br>";
        echo "Suma liczb: ".sum_array($array)."<br>";
        echo "Srednia liczb: ".avg_array($array)."<br>";
        echo "Ilosc liczb: ".sizeof($array)."<br>";

        function sum_array( $array )
        {
            $sum = 0;
            for($i = 0; $i < sizeof($array); $i++)
            {
                $sum += $array[$i];
            }
            return $sum;
        }


        function avg_array( $array )
        {
            $sum = sum_array($array);
            $avg = $sum / sizeof($array);
            return $avg;
        }
    ?>
</body>
</html>