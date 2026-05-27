const shutterEffect = () => {
    const container = document.querySelector(".shutter-container");
    if (!container) return;

    const element = document.querySelector(".shutter-container-layer.--element");
    const ui = document.querySelector(".shutter-container-ui");
    let isDragging = false;

    const setPosition = (x) => {
        const wW = container.clientWidth;
        const pct = Math.min(Math.max((x / wW) * 100, 0), 100).toFixed(2);
        element.style.clipPath = `inset(0 ${(100 - pct).toFixed(2)}% 0 0)`;
        ui.style.left = `${pct}%`;
    };

    // Desktop
    container.addEventListener("mousemove", (event) => {
        if (!isDragging) return;
        const rect = container.getBoundingClientRect();
        setPosition(event.clientX - rect.left);
    });
    container.addEventListener("mousedown", () => {
        isDragging = true;
        ui.style.cursor = "grabbing";
        container.style.cursor = "grabbing";
    });
    document.addEventListener("mouseup", () => {
        isDragging = false;
        ui.style.cursor = "grab";
        container.style.cursor = "default";
    });

    // Mobile
    container.addEventListener("touchmove", (event) => {
        if (!isDragging) return;
        event.preventDefault();
        const rect = container.getBoundingClientRect();
        setPosition(event.touches[0].clientX - rect.left);
    }, { passive: false });
    container.addEventListener("touchstart", () => { isDragging = true; });
    container.addEventListener("touchend", () => { isDragging = false; });
};

window.addEventListener("load", shutterEffect);