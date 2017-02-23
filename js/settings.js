"use strict";
! function() {
    var e = document.querySelector(".settings .form__action .mdl-checkbox__input"),
        c = document.querySelector(".settings .form__action .mdl-button");
    c && e && (c.disabled = !e.checked, e.addEventListener("change", function() {
        c.disabled = !e.checked
    }))
}();
