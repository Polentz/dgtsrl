gsap.registerPlugin(ScrollTrigger);

const documentHeight = () => {
  const doc = document.documentElement;
  doc.style.setProperty("--doc-height", `${window.innerHeight}px`);
};

const headerOffset = () => parseFloat(getComputedStyle(document.documentElement).fontSize) * 10;

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
  const buttons = document.querySelectorAll(".banner .button");
  buttons.forEach(button => {
    gsap.set(button, { opacity: 0, y: 10, backgroundColor: "var(--secondary-color)", color: "var(--primary-color)" });
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
      color: "inherit",
      duration: 0.5,
      ease: "power2.out",
      onComplete: () => {
        gsap.set(button, { clearProps: "backgroundColor,color" });
      }
    });
  });
};

const scrollToTarget = (target, smooth = true) => {
  const top = target.getBoundingClientRect().top + window.scrollY - headerOffset();
  window.scrollTo({ top, behavior: smooth ? "smooth" : "auto" });
  if (target.id === "contatti") {
    animateFooterElements();
  };
  if (target.id === "catalogo") {
    animateButtons();
  };
};

const anchorTags = () => {
  const links = document.querySelectorAll("a");
  links.forEach(link => {
    const href = link.getAttribute("href");
    if (href.startsWith("#")) {
      link.addEventListener("click", (event) => {
        event.preventDefault();
        const target = document.querySelector(href);
        if (target) scrollToTarget(target);
      });
    };
  });
};

// Cross-page anchors (e.g. /alumframe#symbio): the browser's native jump fires
// before lazy images and entry animations settle, so it lands at the wrong spot.
// Recompute the offset-aware position once layout is stable.
const handleInitialHash = () => {
  if (!window.location.hash) return;
  let target;
  try {
    target = document.querySelector(window.location.hash);
  } catch {
    return; // ignore malformed hashes
  }
  if (!target) return;
  ScrollTrigger.refresh();
  requestAnimationFrame(() => scrollToTarget(target, false));
};

const initGalleryHover = () => {
  const galleryItems = document.querySelectorAll(".gallery-item:has(> a)");
  galleryItems.forEach((item) => {
    const img = item.querySelector("a > img");
    if (!img) return;
    item.addEventListener("mouseenter", () => {
      gsap.to(img, { scale: 1.08, duration: 0.8, ease: "power2.out" });
    });
    item.addEventListener("mouseleave", () => {
      gsap.to(img, { scale: 1, duration: 0.8, ease: "power2.out" });
    });
  });
};

const initScrollAnimations = () => {
  const sectionsWithCols = document.querySelectorAll(".section:has(.section-col)");
  const elements = document.querySelectorAll(".section h1, .section h2, .section h3, .section p, .section figure, .section img, .section .button, .section li");
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
        start: "top 98%",
        toggleActions: "play none none none",
      },
    });
  });
};

const initMobileMenu = () => {
  const toggle = document.querySelector(".menu-toggle");
  const nav = document.querySelector(".nav");
  if (!toggle || !nav) return;

  const close = () => {
    nav.classList.remove("is-open");
    toggle.classList.remove("is-active");
    toggle.setAttribute("aria-expanded", "false");
  };

  toggle.addEventListener("click", () => {
    const isOpen = nav.classList.toggle("is-open");
    toggle.classList.toggle("is-active", isOpen);
    toggle.setAttribute("aria-expanded", String(isOpen));
  });

  nav.querySelectorAll("a").forEach(link => link.addEventListener("click", close));

  document.addEventListener("keydown", (e) => { if (e.key === "Escape") close(); });

  window.addEventListener("resize", () => { if (window.innerWidth > 900) close(); });
};

window.addEventListener("load", () => {
  documentHeight();
  anchorTags();
  initGalleryHover();
  initScrollAnimations();
  initMobileMenu();
  handleInitialHash();
});

window.addEventListener("resize", () => {
  documentHeight();
});