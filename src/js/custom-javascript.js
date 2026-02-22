// Add your custom JS here.

AOS.init({
  easing: "ease-out",
  once: true,
  duration: 500,
});

// Close mobile nav when an in-page anchor link is clicked
document.querySelectorAll('#navbar a[href^="#"]').forEach((link) => {
  link.addEventListener("click", () => {
    console.log("here");
    const navEl = document.getElementById("navbar");
    const bsCollapse = bootstrap.Collapse.getInstance(navEl);
    if (bsCollapse) {
      bsCollapse.hide();
    }
  });
});
