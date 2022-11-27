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

const makeNav = (classes = "") => {
    const links = ["Home","Store","About"];
    let ran = Math.floor(Math.random()*links.length); 

    document.write(`

        <div>
            <nav class="${classes}">
                <ul>
                ${links.reduce((r,o,i) => {
                    return r+`<li class="${ran==i?'active':''}"><a href="#">${o}</a></li>`;
                },"")}
                </ul>
            </nav>
        </div>

    `);
}

$("#navigations a").on("click", function(e){
    e.preventDefault();
    $(this).closest("li").addClass("active")
    .siblings().removeClass("active");
})
