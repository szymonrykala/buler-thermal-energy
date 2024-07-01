
function initializeRangeInput(id, prefix = "") {
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
    initializeRangeInput("garage_expected_temperature", prefix = "Garaż: ")
    initializeRangeInput("room_expected_temperature", prefix = "Pokoje: ")

}


function setInputValueTrigger(triggerSelector, value, elementToShowSelector, radioGroupSelector = null) {
    const trigger = document.querySelector(triggerSelector);
    const elementToShow = document.querySelector(elementToShowSelector);

    const cssClass = "d-none";


    function isConditionMet() {
        switch (trigger.type) {
            case "radio":
                return trigger.checked;

            default:
                return trigger.value == value;
        }
    }

    function handler() {
        console.debug(`${triggerSelector} changed to value: '${trigger.value}'`)

        if (elementToShow && isConditionMet()) {
            elementToShow.classList.remove(cssClass);
        } else {
            elementToShow.classList.add(cssClass);
        }
    }
    handler();

    if (radioGroupSelector) {
        document.querySelector(radioGroupSelector).addEventListener("click", handler)
    } else {
        trigger.addEventListener("change", handler)
    }
}

function main() {
    initializeFormfields();

    setInputValueTrigger("#building-material", "inne", "#another-building-material-detail");
    setInputValueTrigger("#isolation-material", "inne", "#another-isolation-material-detail");

    setInputValueTrigger("#building-drawings-no", null, "#building-drawings-file-upload-input", "#building-project-drawings-input-group");
    setInputValueTrigger("#current-heating-source-inne", null, "#another_current-heating-source_detail-input-wrapper", "#current-heat-source-fieldset");
    setInputValueTrigger("#another-type", null, "#another-building-type-detail-section", "#building-type-fieldset");

    setInputValueTrigger("#new_buildling", null, "#new-buildling-dynamic-section", "#new-or-existing-building-fieldset");
    setInputValueTrigger("#building_exists", null, "#existing-buildling-dynamic-section", "#new-or-existing-building-fieldset");

    setInputValueTrigger("#individual-project", null, "#individual-project-file-dynamic-group", "#building-project-type-fieldset");
    setInputValueTrigger("#predefined-project", null, "#predefined-project-name-dynamic-group", "#building-project-type-fieldset");

    setInputValueTrigger("#material_changes", null, "#material-changes-elaborate-textfield", "#building-materials-fieldset");
}

window.addEventListener("load", main);