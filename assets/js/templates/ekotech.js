const shutterEffect = () => {
    const mediaQuery = window.matchMedia("(max-width: 767px)");
    const container = document.querySelector(".shutter-container");
    const element = document.querySelector(".shutter-container-layer.--element");
    const ui = document.querySelector(".shutter-container-ui");
    let oldx = 0;
    let isDragging = false;

    if (!mediaQuery.matches) {
        // desktop
        container.addEventListener("mousemove", (event) => {
            if (isDragging) {
                let wW = container.clientWidth;
                const x = event.pageX / wW * 100;
                const xX = x.toFixed(2);
                element.style.width = `${xX + "%"}`;
                ui.style.left = `${xX + "%"}`;
                oldx = event.pageX;
            }
        });
        container.addEventListener("mousedown", () => {
            isDragging = true;
            ui.style.cursor = "grabbing";
            container.style.cursor = "grabbing";
        });
        container.addEventListener("mouseup", () => {
            isDragging = false;
            ui.style.cursor = "grab";
            container.style.cursor = "default";
        });
    } else {
        // mobile
        container.addEventListener("touchmove", (event) => {
            if (isDragging) {
                let wW = container.clientWidth;
                const x = event.touches[0].pageX / wW * 100;
                const xX = x.toFixed(2);
                element.style.width = `${xX + "%"}`;
                ui.style.left = `${xX + "%"}`;
                oldx = event.touches[0].pageX;
            }
        });
        container.addEventListener("touchstart", () => {
            isDragging = true;
        });
        container.addEventListener("touchend", () => {
            isDragging = false;
        });
    };
};
window.addEventListener("load", shutterEffect);
window.addEventListener("resize", shutterEffect);