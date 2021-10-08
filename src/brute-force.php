<!DOCTYPE html>
<html>

<head>
    <title>Brute force</title>
</head>

<body>

    <?php
    $max = (int)$_POST['max'];

    function bruteForce($max)
    {
        $max = abs($max);
        $primes = array();
        if ($max >= 2) {
            array_push($primes, 2);
        }
        for ($i = 3; $i <= $max; $i += 2) {
            $isPrime = true;
            for ($j = 3; $j < $i; $j += 2) {
                if ($i % $j === 0) {
                    $isPrime = false;
                    break;
                }
            }
            if ($isPrime) {
                array_push($primes, $i);
            }
        }
        return $primes;
    }
    $startTime = microtime(true);
    $primes = bruteForce($max);
    $endTime = microtime(true);
    $timeDiff = $endTime - $startTime;

    $total_primes = count($primes);

    echo "</h1>Brute force</h1>";

    for ($i = 0; $i < $total_primes; $i++) {
        if ($primes[$i] > 0) {
            echo "<li>$primes[$i]</li>";
        }
    }
    echo "<p>function ran in $timeDiff seconds</p>";
    echo "<a href=\"javascript:history.go(-1)\">GO BACK</a>";
    ?>

</body>

</html>