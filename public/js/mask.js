/*$(document).ready(function() {

    $('.materialboxed').materialbox();
    $('.carousel').carousel();
    $('.fixed-action-btn').floatingActionButton();


});*/


function masktelefone(num) {
    if (num.value.length == 1) {
        num.value = "(" + num.value;
    }
    if (num.value.length == 3) {
        num.value = num.value + ")";
    }
    if (num.value.length == 8) {
        num.value = num.value + "-";
    }
}
function maskcelular(num) {
    if (num.value.length == 1) {
        num.value = "(" + num.value;
    }
    if (num.value.length == 4) {
        num.value = num.value + ") ";
    }
    if (num.value.length == 11) {
        num.value = num.value + "-";
    }
}

function maskdata(num) {
    if (num.value.length == 2) {
        num.value = num.value + "/";
    }
    if (num.value.length == 5) {
        num.value = num.value + "/";
    }
}

function maskhora(num) {
    if (num.value.length == 2) {
        num.value = num.value + ":";
    }
}

function maskcpf(num) {
    if (num.value.length == 3) {
        num.value = num.value + ".";
    }
    if (num.value.length == 7) {
        num.value = num.value + ".";
    }
    if (num.value.length == 11) {
        num.value = num.value + "-";
    }
}

function maskcnpj(num) {
    if (num.value.length == 2) {
        num.value = num.value + ".";
    }
    if (num.value.length == 6) {
        num.value = num.value + ".";
    }
    if (num.value.length == 10) {
        num.value = num.value + "/";
    }
    if (num.value.length == 15) {
        num.value = num.value + "-";
    }
}


