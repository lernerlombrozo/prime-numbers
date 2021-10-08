<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="X-Content-Type-Options=nosniff" />
    <title>Prime numbers</title>
    <script type="module" src="public/index.js"></script>
</head>

<body>
    <button id="eratosthenes">Sieve of eratosthenes</button>
    <button id="brute">Brute force</button>
    <button id="frontend">Front end</button>
    <button id="backend">Back end</button>
    <form action="src/sieve-of-eratosthenes.php" method="post">
        <p>Max: <input type="number" name="max" /></p>
        <p><input type="submit" /></p>
    </form>
    <form action="src/brute-force.php" method="post">
        <p>Max: <input type="number" name="max" /></p>
        <p><input type="submit" /></p>
    </form>
</body>

</html>