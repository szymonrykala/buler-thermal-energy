
function initializeRangeInput(id, prefix = "") {
    const input = document.querySelector(`#${id}`);
    const value = document.querySelector(`label[for=${id}]`);
    value.textContent = prefix + input.value;
    input.addEventListener("input", (event) => value.textContent = prefix + event.target.value);
}


function initializeFormfields() {
    function getMonth(date) {
        let month = date.getMonth() + 1
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
    initializeRangeInput("garage-expected-temperature", "Garaż: ")
    initializeRangeInput("room-expected-temperature", "Pokoje: ")
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
            elementToShow.disabled = false;
        } else {
            elementToShow.classList.add(cssClass);
            elementToShow.disabled = true;
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
    setInputValueTrigger("#current-heat-source", "inne", "#another-current-heat-source-detail");

    setInputValueTrigger("#building-drawings-no", null, "#building-drawings-file-upload-input", "#building-project-drawings-input-group");
    setInputValueTrigger("#another-type", null, "#another-building-type-detail-section", "#building-type-fieldset");

    setInputValueTrigger("#new-buildling", null, "#new-buildling-dynamic-section", "#new-or-existing-building-fieldset");
    setInputValueTrigger("#building-exists", null, "#existing-buildling-dynamic-section", "#new-or-existing-building-fieldset");

    setInputValueTrigger("#individual-project", null, "#individual-project-file-dynamic-group", "#building-project-type-fieldset");
    setInputValueTrigger("#predefined-project", null, "#predefined-project-name-dynamic-group", "#building-project-type-fieldset");

    setInputValueTrigger("#material-changes", null, "#material-changes-elaborate-textfield", "#building-materials-fieldset");
}

window.addEventListener("load", main);