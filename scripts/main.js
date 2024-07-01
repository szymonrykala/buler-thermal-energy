
function handleSideNav() {
    const sideNav = document.querySelector(".side-nav");
    const navOpenBtn = document.querySelector(".top-nav__menu-button");

    const linkClickHandler = () => {
        console.debug("link click")
        closeNav()
    }

    function openNav(){
        sideNav.classList.add("side-nav--open")
        navOpenBtn.classList.add("top-nav__menu-button--opened")
        sideNav.addEventListener("click", linkClickHandler)
    }

    function closeNav(){
        sideNav.classList.remove("side-nav--open")
        navOpenBtn.classList.remove("top-nav__menu-button--opened")
        sideNav.removeEventListener("click", linkClickHandler)
    }

    navOpenBtn.addEventListener("click", ()=>{
        if(sideNav.classList.contains("side-nav--open")){
            closeNav()
        }else{
            openNav()
        }
    })
}


function handleHarmonica() {

    const sections = document.querySelectorAll(".harmonic__section > .harmonic__title");

    function closeSelected(clickedElement) {
        sections.forEach(section => {
            if (section.classList.contains("harmonic__title--opened") && section != clickedElement) {
                section.classList.remove("harmonic__title--opened")
            }
        })
    }

    sections.forEach(section => section.addEventListener("click", (event) => {
        closeSelected(section);
        if (section.classList.contains("harmonic__title--opened")) {
            section.classList.remove("harmonic__title--opened");
        } else {
            section.classList.add("harmonic__title--opened");
        }
    }))
}


function main() {
    handleSideNav();
    handleHarmonica();
}

window.addEventListener("load", main);