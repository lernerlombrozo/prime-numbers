export const bruteForce = (end) => {
    end = Math.abs(end);
    const primes = [];
    if (end >= 2) {
        primes.push(2);
    }
    for (let i = 3; i <= end; i += 2) {
        let isPrime = true;
        for (let j = 3; j < i; j += 2) {
            if (i % j === 0) {
                isPrime = false;
                break;
            }
        }
        if (isPrime) {
            primes.push(i);
        }
    }
    return primes;
};