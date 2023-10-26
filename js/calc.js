
let xInput = document.getElementById('calcX');
let calcActionSelect = document.getElementById('calc_action');
let yInput = document.getElementById('calcY');

function module () {
    document.getElementById("mask").style.display = "block";
}

function closeModule () {
    document.getElementById("mask").style.display = "none";
}

function calculate() {

    let x = Number(xInput.value);
    let y = Number(yInput.value);
    let calcAction = calcActionSelect.value;

    let z;

    if (calcAction == 'sum') {
        z = x + y;

    } else if (calcAction == 'diff') {
        z = x - y;
    } else if (calcAction == 'multi') {
        z = x * y;
    } else if (calcAction == 'diff') {
        z = x - y;
    } else if (calcAction == 'division') {
        z = x / y;
    }

    console.log(z);

    module();

    document.getElementById('result').innerHTML = ("Результат: " + (z));
}


