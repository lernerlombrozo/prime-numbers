import { bruteForce } from "./brute-force.js";
import { sieveOfEratosthenes } from "./sieve-of-eratosthenes.js";

const frontendButton = document.getElementById('frontend');
const backendButton = document.getElementById('backend');
const bruteForceButton = document.getElementById('brute');
const sieveOfEratosthenesButton = document.getElementById('eratosthenes');

sieveOfEratosthenesButton.addEventListener('click', () => {
    console.log('here');
    runInFrontend(sieveOfEratosthenes);
});

bruteForceButton.addEventListener('click', () => {
    runInFrontend(bruteForce);
});

let selected = 'eratosthenes';
let primesUntil = 0;

const toggleSelected = () => {
    selected = selected === 'eratosthenes' ? 'brute' : 'eratosthenes';
};
const runInFrontend = (method) => {
    method(primesUntil);
};
