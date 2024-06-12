


function handleSideNav() {
    const sideNav = document.getElementById("side-nav")
    const sideNavOpenBtn = document.getElementById("side-nav-open-btn")
    const sideNavCloseBtn = document.getElementById("side-nav-close-btn")

    toggleNavOpen = () => sideNav.classList.toggle("--open")

    sideNavOpenBtn.addEventListener("click", toggleNavOpen)
    sideNavCloseBtn.addEventListener("click", toggleNavOpen)
}


function handleHarmonica() {

    const sections = document.querySelectorAll(".harmonic__section > .harmonic__title");
    console.log(sections)

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


function handleCardClass() {
    const cards = document.querySelectorAll(".card")
    cards.forEach(card => {
        card.querySelector(".card__link").addEventListener("click", () => card.classList.toggle("card--opened"))
    })
}

function main() {
    // handleSideNav();
    handleHarmonica();
    handleCardClass();
}

window.addEventListener("load", main);