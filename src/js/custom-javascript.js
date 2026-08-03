// Add your custom JS here.
import Collapse from "bootstrap/js/dist/collapse";

AOS.init({
  easing: "ease-out",
  once: true,
  duration: 500,
});

/**
 * Google Analytics event tracking for CTAs and form submissions.
 */
(function () {
  function trackEvent(eventName, params) {
    if (typeof window.gtag !== "function") {
      return;
    }
    window.gtag("event", eventName, params);
  }

  function labelFor(el) {
    return (
      el.getAttribute("aria-label") || el.textContent.trim().replace(/\s+/g, " ")
    );
  }

  document.addEventListener("click", function (event) {
    const el = event.target.closest("a, button");
    if (!el) {
      return;
    }

    const href = el.getAttribute("href") || "";

    if (href.startsWith("tel:")) {
      trackEvent("phone_click", {
        button_name: labelFor(el),
        link_url: href,
      });
      return;
    }

    if (href.startsWith("mailto:")) {
      trackEvent("email_click", {
        button_name: labelFor(el),
        link_url: href,
      });
      return;
    }

    if (href.includes("wa.me") || href.includes("api.whatsapp.com")) {
      trackEvent("whatsapp_click", {
        button_name: labelFor(el),
        link_url: href,
      });
      return;
    }

    if (el.classList.contains("button")) {
      trackEvent("button_click", {
        button_name: labelFor(el),
        link_url: href,
      });
    }
  });

  document.addEventListener("wpcf7mailsent", function (event) {
    const form = event.target;
    trackEvent("form_submission", {
      form_name:
        form.querySelector(".wpcf7-form-control[name='form_name']")?.value ||
        form.getAttribute("id") ||
        "contact_form",
      form_id: event.detail?.contactFormId || "",
    });
  });
})();
