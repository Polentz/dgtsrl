gsap.registerPlugin(ScrollTrigger);

const documentHeight = () => {
  const doc = document.documentElement;
  doc.style.setProperty("--doc-height", `${window.innerHeight}px`);
};

const anchorTags = () => {
  const links = document.querySelectorAll("a");

  const animateFooterElements = () => {
    const contactItems = document.querySelectorAll(".contact-item");
    contactItems.forEach(item => {
      gsap.set(item, { opacity: 0, y: 10 });
      gsap.to(item, {
        opacity: 1,
        y: 0,
        duration: 0.8,
        ease: "power2.out",
        delay: 0.2,
      });
    });
  };

  const animateButtons = () => {
    const buttons = document.querySelectorAll(".button");
    buttons.forEach(button => {
      gsap.set(button, { opacity: 0, y: 10, backgroundColor: "var(--secondary-color)" });
      const tl = gsap.timeline();
      tl.to(button, {
        opacity: 1,
        y: 0,
        duration: 0.8,
        ease: "power2.out",
        delay: 0.2,
      });
      tl.to(button, {
        backgroundColor: "transparent",
        duration: 0.5,
        ease: "power2.out",
      });
    });
  };

  links.forEach(link => {
    const href = link.getAttribute("href");
    if (href.startsWith("#")) {
      link.addEventListener("click", (event) => {
        event.preventDefault();
        const target = document.querySelector(href);
        const offset = parseFloat(getComputedStyle(document.documentElement).fontSize) * 10;
        const top = target.getBoundingClientRect().top + window.scrollY - offset;
        window.scrollTo({ top, behavior: "smooth" });
        if (target.id === "contatti") {
          animateFooterElements();
        };
        if (target.id === "catalogo") {
          animateButtons();
        };
      });
    };
  });
};

const initScrollAnimations = () => {
  const sectionsWithCols = document.querySelectorAll(".section:has(.section-col)");
  const elements = document.querySelectorAll(".section h1, .section h2, .section h3, .section p, .section figure, .section img, .section button, .section li");
  if (!sectionsWithCols.length) return;
  if (!elements.length) return;

  sectionsWithCols.forEach((col) => {
    ScrollTrigger.create({
      trigger: col,
      start: "top 75%",
      toggleActions: "play none none none",
      onEnter: () => col.classList.add("is-visible"),
      onLeaveBack: () => col.classList.remove("is-visible"),
    });
  });

  elements.forEach((el) => {
    gsap.to(el, {
      opacity: 1,
      y: 0,
      duration: 0.8,
      ease: "power2.out",
      delay: 0.2,
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