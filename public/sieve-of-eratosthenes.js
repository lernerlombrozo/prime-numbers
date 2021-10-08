export const sieveOfEratosthenes = (end) => {
    end = Math.abs(end);
    const primes = new Set();
    if (end >= 2) {
        primes.add(2);
    }
    for (let i = 3; i <= end; i += 2) {
        primes.add(i);
    }
    for (let i = 3; i <= end; i += 2) {
        if (primes.has(i)) {
            for (let j = i * 2; j <= end; j += i) {
                primes.delete(j);
            }
        }
    }
    return [...primes];
};
