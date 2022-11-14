let inputs = document.querySelectorAll(".interactive");
inputs.forEach( input => input.addEventListener("focus", function() {
    input.nextElementSibling.classList.add("form-label-motion");
} ));

inputs.forEach( input => input.addEventListener("blur", function() {
    if (input.value !== ""){
        input.nextElementSibling.classList.add("form-label-motion");
    }else{
        input.nextElementSibling.classList.remove("form-label-motion");
    }
    
} ));