FORM_API_URL = "http://macbook-air.home/handlers"


function handleSideNav() {
    const sideNav = document.querySelector(".side-nav");
    const navOpenBtn = document.querySelector(".top-nav__menu-button");

    const linkClickHandler = () => {
        console.debug("link click")
        closeNav()
    }

    function openNav() {
        sideNav.classList.add("side-nav--open")
        navOpenBtn.classList.add("top-nav__menu-button--opened")
        sideNav.addEventListener("click", linkClickHandler)
    }

    function closeNav() {
        sideNav.classList.remove("side-nav--open")
        navOpenBtn.classList.remove("top-nav__menu-button--opened")
        sideNav.removeEventListener("click", linkClickHandler)
    }

    navOpenBtn?.addEventListener("click", () => {
        if (sideNav.classList.contains("side-nav--open")) {
            closeNav()
        } else {
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


function handleForm(formSelector, apiUrl) {
    const form = document.querySelector(formSelector);

    async function handle(event) {
        event.preventDefault();

        const formData = new FormData(form);
        console.debug("Form data:", Object.fromEntries(formData));

        const resp = await fetch(apiUrl, {
            method: "POST",
            body: JSON.stringify(Object.fromEntries(formData)),
            mode: "same-origin",
            credentials: "same-origin",
            timeout: 180,
            headers: new Headers({
                "Content-Type": "application/json",
            })
        });

        try {
            const body = await resp.json();
            console.debug(resp)
            switch (resp.status) {
                case 200:
                    window.alert(body.message);
                    return;
                default:
                    window.alert("Coś nie zadziałało, przepraszamy i zachęcamy do skorzystania z numeru telefonu :)");
            }
        } catch (error) {
            console.error(error)
        }
    }

    form?.addEventListener("submit", handle);
}


function handleSpecsViewer(mainSpecSelector) {
    const specWindow = document.querySelector(mainSpecSelector);

    const display = specWindow?.querySelector(".spec__display");
    const items = specWindow?.querySelectorAll(".spec__item > input");
    const item_views = specWindow?.querySelectorAll(".spec__view");

    console.debug(display, items, item_views);

    function itemClickHandler(e) {
        console.debug("item clicked", e, e.target.id);
        const view = specWindow.querySelector(`.spec__view-${e.target.id}`);
        display.innerHTML = view.innerHTML

        selectView(view);
    }

    function selectView(selectedView) {
        item_views.forEach(view => {
            if (view == selectedView) {
                view.classList.remove("d-none");
            } else {
                view.classList.add("d-none");
            }
        });
    }

    items.forEach(item => item.addEventListener("click", itemClickHandler));
    (specWindow.querySelector(".spec__item--default > input") || items[0])?.click();
}


function main() {
    console.debug("start")
    handleSideNav();
    handleHarmonica();
    
    handleSpecsViewer(".spec-0");
    handleSpecsViewer(".spec-1");
    handleSpecsViewer(".spec-2");

    handleForm("#contact-form", FORM_API_URL.concat("/contact-form.php"));

    document.querySelector("button[type=submit]")?.addEventListener("click", (e) => {
        e.preventDefault();
        window.alert("Formularz nie zadziałał\nNapisz do mnie na biuro@bulerenergy.pl")
    })
}

window.addEventListener("load", main);