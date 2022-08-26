var counterVal = 0;

function aumentar() {
    updateDisplay(++counterVal);
}

function disminuir() {
    updateDisplay(--counterVal);
}

function updateDisplay(val) {
    document.getElementById("counter-label").innerHTML = val;
}