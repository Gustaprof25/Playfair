$(".button-collapse").sideNav(), $(document).ready(function () {
    $(".materialboxed").materialbox()
}), $(document).ready(function () {
    $(".slider").slider()
}), $(document).ready(function () {
    $(".tooltipped").tooltip({delay: 50})
}), $(document).ready(function () {
    $("select").material_select()
}), $(document).ready(function () {
    $("select[required]").css({display: "inline", height: 0, padding: 0, width: 0})
}), $(".datepicker").pickadate({
    selectMonths: !0,
    selectYears: 160,
    format: "dd-mm-yyyy"
}), $(document).ready(function () {
    Materialize.updateTextFields()
});
var input_selector = "input[type=text], input[type=password], input[type=email], input[type=url], input[type=tel], input[type=number], input[type=search], textarea";
$(document).ready(function () {
    $(input_selector).each(function (a, b) {
        $(b).val().length > 0 && $(this).siblings("label, i").addClass("active")
    })
}), $(".dropdown-button").dropdown();
var $doc = $("html, body");
$("#ancora").click(function () {
    return $doc.animate({scrollTop: $($.attr(this, "href")).offset().top - 80}, 1e3), !1
}), $(function () {
    $("#all-checkbox").click(function () {
        $(".item-checkbox").prop("checked", this.checked)
    })
});

if (typeof lightbox !== "undefined"){
    lightbox.option({resizeDuration: 200, wrapAround: !0})
};

function maskfixocelular_sem_ddd(num) {
    if (num.value.length == 4) {
        num.value = num.value + "-";
    }
    if (num.value.length == 9) {
        num.value = num.value.substr(0, 4) + num.value.substr(5, 1) + "-" + num.value.substr(6);
    }
}

function maskfixocelular(num) {
    if (num.value.length == 1) {
        num.value = "(" + num.value;
    }
    if (num.value.length == 3) {
        num.value = num.value + ")";
    }
    if (num.value.length == 8) {
        num.value = num.value + "-";
    }
    if (num.value.length == 13) {
        num.value = num.value.substr(0, 8) + num.value.substr(9, 1) + "-" + num.value.substr(10);
    }
}