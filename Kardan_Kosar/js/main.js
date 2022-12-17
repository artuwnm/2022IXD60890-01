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




// function disableScroll() {

//     // Get the current page scroll position
//     scrollTop = window.pageYOffset || document.documentElement.scrollTop;
//     scrollLeft = window.pageXOffset || document.documentElement.scrollLeft,
//       console.log(scrollTop);
//       console.log(scrollLeft);
//         // if any scroll is attempted, set this to the previous value
//         window.onscroll = function() {
//             window.scrollTo(scrollLeft, scrollTop);
//         };
// }
  
// function enableScroll() {
//     window.onscroll = function() {};
// }



burger.addEventListener("click", _showMenu);
function _showMenu (e){

    burger.style.display = "none";
    close.style.display = "block";
    navList.classList.add('active');
    navListBurger.style.display = "flex";

    setTimeout(function () {navListBurger.classList.add("slide");},10);
    setTimeout(function () {logoImg.src='img/whiteLogo.svg';},50);
    //document.body.style.overflow = "hidden";
    // document.body.classList.add('disableScroll');
    //disableScroll();

    document.body.classList.add(`is-menu-open`);
    document.getElementsByTagName( 'html' )[0].classList.add(`is-menu-open`);
}


close.addEventListener("click", _hideMenu);
function _hideMenu (){

    burger.style.display = "block";
    close.style.display = "none";

    close.classList.remove('active');
    navList.classList.remove('active');
    navListBurger.classList.remove("slide");
    

    setTimeout(function () {logoImg.src='img/Logo.svg';}, 50);
    setTimeout(function () {navListBurger.style.display = "none";}, 300);

    document.body.classList.remove(`is-menu-open`);
    document.getElementsByTagName( 'html' )[0].classList.remove(`is-menu-open`);
    //document.body.style.overflow = "auto";
    // document.body.classList.remove('disableScroll');
    //enableScroll();
}


function stopScrollingWhenMenuOpen() {
    if (!navigator.userAgent.match(/iPhone|iPad|iPod/i)) {
        return false;
    }

    document.addEventListener('touchmove', e => {
        const hasMenuOpenClass = document.body.classList.contains(`is-menu-open`);

        if (hasMenuOpenClass) {
            e.preventDefault();
        }
    });
}

stopScrollingWhenMenuOpen();


