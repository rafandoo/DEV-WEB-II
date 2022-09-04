function menosBar() {
    bar = document.getElementById('bar');
    if (bar.value == 0) {
        alert("Não é possível diminuir mais");
    } else {
        bar.value -= 10;
    }
}

function maisBar() {
    bar = document.getElementById('bar');
    if (bar.value == 100) {
        alert("Não é possível aumentar mais");
    } else {
        bar.value += 10;
    }
}

function menosLinha() {
    texto = document.getElementById('texto');
    if (texto.rows == 1) {
        alert("Não é possível diminuir mais");
    } else {
        texto.rows -= 1;
    }
}

function maisLinha() {
    texto = document.getElementById('texto');
    if (texto.rows == 15) {
        alert("Não é possível aumentar mais");
    } else {
        texto.rows += 1;
    }
}

function menosColuna() {
    texto = document.getElementById('texto');
    if (texto.cols == 1) {
        alert("Não é possível diminuir mais");
    } else {
        texto.cols -= 1;
    }
}

function maisColuna() {
    texto = document.getElementById('texto');
    if (texto.cols == 30) {
        alert("Não é possível aumentar mais");
    } else {
        texto.cols += 1;
    }
}