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
    
    }
));

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


// Berger Menu
let logoImg = document.getElementById('logoImg');
let burger = document.getElementById('burger');
let close = document.getElementById('close');
let navList = document.getElementById('navList');
let navListBurger = document.getElementById('navListBurger');




burger.addEventListener("click", _showMenu);
function _showMenu (){
    burger.style.display = "none";
    close.style.display = "block";
    navList.classList.add('active');
    navListBurger.style.display = "flex";
    setTimeout(function () {navListBurger.classList.add("slide");},10);
    setTimeout(function () {logoImg.src='img/whiteLogo.svg';},50);
}


close.addEventListener("click", _hideMenu);
function _hideMenu (){
    burger.style.display = "block";
    close.style.display = "none";

    close.classList.remove('active');
    navList.classList.remove('active');
    navListBurger.classList.remove("slide");
    document.body.classList.remove('fix');

    setTimeout(function () {logoImg.src='img/Logo.svg';}, 50);
    setTimeout(function () {navListBurger.style.display = "none";}, 300);

}

