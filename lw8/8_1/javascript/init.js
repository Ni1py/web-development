function checkPrimeNumber(n) {
    let isPrime = true;
    for (let j = 2; j < n; j++) {
        if (n % j == 0) {
            isPrime = false
            break
        }
    }
    if (isPrime) {
        return console.log(n + ' is prime number.');
    }
    else {
        return console.log(n + ' is not prime number.');
    }
}   


function checkPrimeNumberOrError(n) {
    if (typeof n === 'number' || Array.isArray(n)) {
        if (typeof n === 'number') {
            return checkPrimeNumber(n);
        }
        if (Array.isArray(n)) {
            for (let i = 0; i < n.length; i++) {
                if (typeof n[i] === 'number') {
                    checkPrimeNumber(n[i]);
                }
                else {
                    console.log('Mistake. The passed parameter is not a number or an array.');
                }
            }
        }
    }
    else {
        console.log('Mistake. The passed parameter is not a number or an array.');
    }
}


