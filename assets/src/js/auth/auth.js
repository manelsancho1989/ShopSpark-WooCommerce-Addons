const authTabs = document.querySelectorAll(".shopspark-auth__tabs h2");
const authForms = document.querySelectorAll("[data-target]");
const createAccount = document.querySelector("#create-account");

authTabs.forEach((tab) => {
  tab.addEventListener("click", () => {
    const target = tab.id;

    // Remove active from tabs
    authTabs.forEach((item) => {
      item.classList.remove("active");
    });

    // Remove active from forms
    authForms.forEach((form) => {
      form.classList.remove("active");
    });

    // Active current tab
    tab.classList.add("active");

    // Active corresponding form
    const targetForm = document.querySelector(`[data-target="${target}"]`);

    if (targetForm) {
      targetForm.classList.add("active");
    }
  });
});

// Create account click
/*
if (createAccount) {
  createAccount.addEventListener("click", () => {
    activateAuthTab("form-register");
  });
}
*/
