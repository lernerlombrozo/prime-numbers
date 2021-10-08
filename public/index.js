import { bruteForce } from "./brute-force.js";
import { sieveOfEratosthenes } from "./sieve-of-eratosthenes.js";

const formRef = document.getElementById('form');
const frontendButtonRef = document.getElementById('frontend');
const bruteForceButtonRef = document.getElementById('brute');
const sieveOfEratosthenesButtonRef = document.getElementById('eratosthenes');
const primesListRef = document.getElementById('primes');
const timeCountRef = document.getElementById('time-count');
const selectedMethodRef = document.getElementById('method');
const maxInputRef = document.getElementById('max-input');

let currentAction = 'sieve-of-eratosthenes';

sieveOfEratosthenesButtonRef.addEventListener('click', () => {
    setAction('sieve-of-eratosthenes');
});

bruteForceButtonRef.addEventListener('click', () => {
    setAction('brute-force');
});

frontendButtonRef.addEventListener('click', () => {
    const method = currentAction === 'brute-force' ? bruteForce : sieveOfEratosthenes;
    runActionAndRenderList(method, +maxInputRef.value)
});

const runActionAndRenderList = (method, maxPrime) => {
    const start = Date.now();
    const primes = method(maxPrime);
    const end = Date.now()
    deleteList();
    renderList(primes);
    renderTime(end - start);
}

const setAction = (primeNumbersMethod) => {
    currentAction = primeNumbersMethod;
    renderMethod(currentAction);
    formRef.action = `src/${primeNumbersMethod}.php`;
};

const deleteList = () => {
    primesListRef.innerHTML = null;
}

const renderList = (list) => {
    list.forEach((primeNumber)=>{
        const primeNumberRef = document.createElement('li');
        primeNumberRef.innerHTML = primeNumber;
        primesListRef.append(primeNumberRef);
    })
}

const renderTime = (time) => {
    timeCountRef.innerHTML = `${time} ms`;
}

const renderMethod = (selectedMethod) => {
    selectedMethodRef.innerHTML = selectedMethod;
}

setAction(currentAction);
maxInputRef.value = 10000;
