// Add your custom JS here.
import Collapse from "bootstrap/js/dist/collapse";

AOS.init({
  easing: "ease-out",
  once: true,
  duration: 500,
});

// Close mobile nav when an in-page anchor link is clicked
document.addEventListener("DOMContentLoaded", () => {
  const navEl = document.getElementById("navbar");
  if (!navEl) return;

  navEl.querySelectorAll("a").forEach((link) => {
    link.addEventListener("click", () => {
      const href = link.getAttribute("href") || "";
      if (href.includes("#")) {
        Collapse.getOrCreateInstance(navEl).hide();
      }
    });
  });
});
