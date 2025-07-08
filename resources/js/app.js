import "./bootstrap";

const userIcon = document.getElementById("registreIcon");
const menu = document.getElementById("list");
let isIconInside = false;
let isMenuInside = false;
//account menu  logic
function updateVisibility() {
    if (isIconInside || isMenuInside) {
        menu.classList.remove("hidden");
    } else {
        menu.classList.add("hidden");
    }
}

userIcon.addEventListener("mouseenter", () => {
    isIconInside = true;
    updateVisibility();
});

userIcon.addEventListener("mouseleave", () => {
    isIconInside = false;
    setTimeout(() => {
        updateVisibility();
    }, 200);
});

menu.addEventListener("mouseenter", () => {
    isMenuInside = true;
    updateVisibility();
});
menu.addEventListener("mouseleave", () => {
    isMenuInside = false;
    updateVisibility();
});

//nav phone  logic
const nav = document.getElementById("nav");
const close = document.getElementById("closeIcon");
const menuIcon = document.getElementById("menu");

window.addEventListener("resize", () => {
    if (window.innerWidth >= 768) {
        document.body.classList.remove("bg-[#1f293780]");
        nav.classList.add("translate-x-full");
        nav.classList.remove("right-0");
    }
});

menuIcon.addEventListener("click", () => {
    nav.classList.remove("translate-x-full");
    nav.classList.add("right-0");
    document.body.classList.add("bg-[#1f293780]");
});

close.addEventListener("click", () => {
    nav.classList.add("translate-x-full");
    document.body.classList.remove("bg-[#1f293780]");
});
