import './bootstrap';
import './offer-form';
import '../css/app.scss';
import '../css/bootstrap-grid.css';

import "./bootstrap/bootstrap.js"


function handleSideNav() {
    const sideNav = document.querySelector(".side-nav");
    const navOpenBtn = document.querySelector(".navbar__menu-button");

    const linkClickHandler = () => {
        console.debug("link click")
        closeNav()
    }

    function openNav() {
        sideNav.classList.add("side-nav--open")
        navOpenBtn.classList.add("navbar__menu-button--opened")
        sideNav.addEventListener("click", linkClickHandler)
    }

    function closeNav() {
        sideNav.classList.remove("side-nav--open")
        navOpenBtn.classList.remove("navbar__menu-button--opened")
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

function trigger_onshow_animation(target_selector, trigger_css_class) {

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.toggle(trigger_css_class, entry.isIntersecting);
            }
        });
    }, {
        "threshold": 0,
        "rootMargin": "0% 0% -18% 0%"
    });

    const elements = document.querySelectorAll(target_selector);
    elements.forEach(e => observer.observe(e));
}


function handleForm(formSelector) {
    const form = document.querySelector(formSelector);

    async function handle(event) {
        event.preventDefault();

        const formData = new FormData(form);
        const resp = await fetch(form.action, {
            method: "POST",
            body: formData,
            mode: "same-origin",
            credentials: "same-origin",
            timeout: 10
        });

        try {
            console.debug(resp)
            switch (resp.status) {
                case 200:
                    window.alert("Wiadomość wysłana, dziękujemy!");
                    return;
                default:
                    console.warn(await resp.json());
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

    if (!(display && items && item_views)) return;

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

    items?.forEach(item => item.addEventListener("click", itemClickHandler));
    (specWindow?.querySelector(".spec__item--default > input") || items.shift())?.click();
}

function init_background_dynamic_scrolling_image() {
    const factor = 0.5;
    const target = document.querySelector(".background-logo");

    function handler() {
        target.style.top = 50 - (document.scrollingElement.scrollTop / 20 * factor) + "vh";
    }
    handler();
    document.body.onscroll = handler;
}


function main() {
    handleSideNav();
    trigger_onshow_animation(".on-show-animation", "slide-up");

    handleSpecsViewer(".spec-0");
    handleSpecsViewer(".spec-1");
    handleSpecsViewer(".spec-2");

    handleForm("#contact-form");
    handleForm("#heatpump-offer-form");

    init_background_dynamic_scrolling_image()



    const myCarouselElement = document.querySelector('#heatpumpsCarousel')
    const carousel = new bootstrap.Carousel(myCarouselElement, {
        interval: 5000,
        touch: true,
        pause: false,
    })

}

window.addEventListener("load", main);