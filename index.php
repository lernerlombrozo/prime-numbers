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
    <h2 id="method"></h2>
    <button id="eratosthenes">Sieve of eratosthenes</button>
    <button id="brute">Brute force</button>
    <form id="form" action="src/sieve-of-eratosthenes.php" method="post">
        <p>Max: <input type="number" name="max" id="max-input" /></p>
        <button type="button" id="frontend">Run in front end (JS)</button>
        <button type="submit">Run in backend (PHP)</button>
    </form>
    <ul id="primes"></ul>
    <h2 id="time-count"></h2>
</body>

</html>