


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


function handleFoldedSection() {
    const sections = document.querySelectorAll(".page.page--folded")
    console.log(sections)

    sections.forEach(section => {
        console.log(section)
        section.querySelector(".page__gradient.page__gradient--bottom").addEventListener("click", () => {
            section.classList.add("page--unfolded")
            section.classList.remove("page--folded")
        })
    })
}

function main() {
    // handleSideNav();
    handleHarmonica();
    handleFoldedSection();
}

window.addEventListener("load", main);