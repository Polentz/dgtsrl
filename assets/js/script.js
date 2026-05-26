gsap.registerPlugin(ScrollTrigger);

const documentHeight = () => {
  const doc = document.documentElement;
  doc.style.setProperty("--doc-height", `${window.innerHeight}px`);
};

const initScrollAnimations = () => {
  const elements = document.querySelectorAll(".section h1, .section h2, .section h3, .section p, .section img, .section button");
  if (!elements.length) return;

  document.querySelectorAll(".section-col--left").forEach((col) => {
    ScrollTrigger.create({
      trigger: col,
      start: "top 80%",
      toggleActions: "play none none none",
      onEnter: () => col.classList.add("is-visible"),
    });
  });

  elements.forEach((el) => {

    const fromVars = { opacity: 0, duration: 0.8, ease: "power2.out", delay: 0.2 };
    fromVars.y = 100;

    gsap.from(el, {
      ...fromVars,
      scrollTrigger: {
        trigger: el,
        start: "top 95%",
        toggleActions: "play none none none",
      },
    });
  });
};

window.addEventListener("load", () => {
  documentHeight();
  initScrollAnimations();
});

window.addEventListener("resize", () => {
  documentHeight();
});