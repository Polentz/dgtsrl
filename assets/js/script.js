gsap.registerPlugin(ScrollTrigger);

const documentHeight = () => {
  const doc = document.documentElement;
  doc.style.setProperty("--doc-height", `${window.innerHeight}px`);
};

const anchorTags = () => {
  const links = document.querySelectorAll("a");
  links.forEach(link => {
    const href = link.getAttribute("href");
    if (href.startsWith("#")) {
      link.addEventListener("click", (event) => {
        event.preventDefault();
        const target = document.querySelector(href);
        const offset = parseFloat(getComputedStyle(document.documentElement).fontSize) * 10;
        const top = target.getBoundingClientRect().top + window.scrollY - offset;
        window.scrollTo({ top, behavior: "smooth" });
      });
    } else {
      return;
    };
  });
};

const initScrollAnimations = () => {
  const elements = document.querySelectorAll(".section h1, .section h2, .section h3, .section p, .section a, .section img, .section button, .section li");
  if (!elements.length) return;

  document.querySelectorAll(".section:has(.section-col)").forEach((col) => {
    ScrollTrigger.create({
      trigger: col,
      start: "top 80%",
      toggleActions: "play none none none",
      onEnter: () => col.classList.add("is-visible"),
      onLeaveBack: () => col.classList.remove("is-visible"),
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
  anchorTags();
  initScrollAnimations();
});

window.addEventListener("resize", () => {
  documentHeight();
});