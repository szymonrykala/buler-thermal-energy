


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

    function handler(selectedSection) {
        sections.forEach(section => {
            if (section != selectedSection) {
                section.classList.add("page--folded")
            } else {
                section.classList.remove("page--folded")
            }
        });
    }

    sections.forEach(section => {
        section.querySelector(".page__gradient.page__gradient--bottom").addEventListener("click", () => handler(section))
    });
}

function initializeRangeInput(id, prefix="") {
    const input = document.querySelector(`#${id}`);
    const value = document.querySelector(`label[for=${id}]`);
    value.textContent = prefix + input.value;
    input.addEventListener("input", (event) => value.textContent = prefix + event.target.value);
}



function initializeFormfields() {
    function getMonth(date) {
        month = date.getMonth() + 1
        if (month < 10) {
            month = `0${month}`
        }
        return new String(month)
    }
    const dateControls = document.querySelectorAll('input[type="date"]');
    const today = new Date()
    dateControls.forEach(control => {
        control.value = control.min = `${today.getFullYear()}-${getMonth(today)}-${today.getDate()}`;
    })


    // range inputs
    initializeRangeInput("garage_expected_temperature", prefix="Garaż: ")
    initializeRangeInput("room_expected_temperature", prefix="Pokoje: ")

}


function handleDynamiHeatPumpOfferForm() {
    const newBuildingRadio = document.querySelector("#new_buildling")
    const buildingExists = document.querySelector("#building_exists")
    const newBuildingDynamicSection = document.querySelector(".new_buildling_dynamic_section")

    const predefinedProject = document.querySelector("#predefined_project")
    const individualProject = document.querySelector("#individual_project")
    const predefinedProjectNameDynamicGroup = document.querySelector(".predefined_project_name_dynamic_group")
    const individualProjectFileDynamicGroup = document.querySelector(".individual_project_file_dynamic_group")

    function handler() {
        console.log("changed")
        if (newBuildingRadio.checked) {
            newBuildingDynamicSection.classList.add("new_buildling_dynamic_section--opened");
        } else {
            newBuildingDynamicSection.classList.remove("new_buildling_dynamic_section--opened");
        }

        if (predefinedProject.checked) {
            predefinedProjectNameDynamicGroup.classList.add("predefined_project_name_dynamic_group--opened")
        } else {
            predefinedProjectNameDynamicGroup.classList.remove("predefined_project_name_dynamic_group--opened")
        }

        if (individualProject.checked) {
            individualProjectFileDynamicGroup.classList.add("individual_project_file_dynamic_group--opened")
        } else {
            individualProjectFileDynamicGroup.classList.remove("individual_project_file_dynamic_group--opened")
        }
    }

    [newBuildingRadio, buildingExists, predefinedProject, individualProject].forEach(radio => radio.addEventListener("change", handler))
}



function main() {
    // handleSideNav();
    handleHarmonica();
    handleFoldedSection();
    initializeFormfields();
    handleDynamiHeatPumpOfferForm();

}

window.addEventListener("load", main);