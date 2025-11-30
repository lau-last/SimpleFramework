class NavbarState {


    constructor() {
        NavbarState.init();
    }

    static init() {
        document.addEventListener("DOMContentLoaded", () => {
            NavbarState.initScrollHeight();
            NavbarState.initCollapse();
        });
    }


    static initScrollHeight() {
        const aside = document.getElementById("aside");
        if (!aside) return;
        aside.scrollTop = Number(localStorage.getItem('scrolled-aside') || 0);
        NavbarState.watchScrollHeight(aside);
    }

    static watchScrollHeight(aside) {
        aside.addEventListener("scroll", function () {
            localStorage.setItem('scrolled-aside', String(this.scrollTop));
        });
    }

    static initCollapse() {
        document.querySelectorAll('[data-js="collapse"]').forEach(collapseBtn => {
            const targetSelector = collapseBtn.dataset.target;
            const target = document.querySelector(targetSelector);
            if (!target) return;
            const id = target.id;
            const saved = localStorage.getItem(`collapse-${id}`);
            if (saved !== null) {
                target.classList.remove("show");
                collapseBtn.setAttribute("aria-expanded", "false");
            }
            NavbarState.watchCollapse(collapseBtn, id);
        });
    }

    static watchCollapse(collapseBtn, id) {
        collapseBtn.addEventListener("click", () => {
            const isOpen = collapseBtn.getAttribute("aria-expanded") === "true";
            const newState = !isOpen;
            console.log(newState)
            if (!newState) {
                localStorage.setItem(`collapse-${id}`, "close");
            } else {
                localStorage.removeItem(`collapse-${id}`);
            }
        });
    }

}

new NavbarState();

