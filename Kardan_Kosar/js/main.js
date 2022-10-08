let inputs = document.querySelectorAll(".interactive");
inputs.forEach( input => input.addEventListener("click", function() {
    input.nextElementSibling.classList.add("form-label-motion");
} ));
