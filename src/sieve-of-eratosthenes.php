<!DOCTYPE html>
<html>

<head>
    <title>Sieve of Eratosthenes</title>
</head>

<body>

    <?php
    $max = (int)$_POST['max'];

    function sieveOfEratosthenes($max)
    {
        $max = abs($max);
        $primes = array();
        if ($max >= 2) {
            array_push($primes, 2);
        }
        for ($i = 3; $i <= $max; $i += 2) {
            $primes[$i] = $i;
        }
        for ($i = 3; $i <= $max; $i += 2) {
            if ($primes[$i] > 0) {
                for ($j = $i * 2; $j <= $max; $j += $i) {
                    $primes[$j] = 0;
                }
            }
        }
        return $primes;
    }
    $startTime = microtime(true);
    $primes = sieveOfEratosthenes($max);
    $endTime = microtime(true);
    $timeDiff = $endTime - $startTime;

    $total_primes = count($primes);

    echo "</h1>Sieve of Eratosthenes</h1>";

    for ($i = 0; $i < $total_primes; $i++) {
        if ($primes[$i] > 0) {
            echo "<li>$primes[$i]</li>";
        }
    }
    echo "<p> function ran in $timeDiff seconds</p>";
    echo "<a href=\"javascript:history.go(-1)\">GO BACK</a>";
    ?>

</body>

</html>