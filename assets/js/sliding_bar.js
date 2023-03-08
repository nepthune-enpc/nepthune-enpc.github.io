
    const f = document.getElementById("sidebar-layout");
    const butt = document.getElementById("icon");
    document.addEventListener(
    "click",
    (ev) => {
        f.style.transform -= `translateY(${ev.clientY - 25}px)`;
        f.style.transform = `translateX(${ev.clientX - 25}px)`;
        butt.style.transform -= `translateY(${ev.clientY - 25}px)`;
        butt.style.transform = `translateX(${ev.clientX - 25}px)`;
        butt.setAttribute("class", "sidebar-collapser ri-arrow-right-s-line");
    },
    false
    );