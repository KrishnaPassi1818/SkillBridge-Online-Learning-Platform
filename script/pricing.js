$("#btn3").click( () => {
    $("#freePlan").html("<h2>$0<sub>/month</sub></h2>");
    $("#paidPlan").html("<h2>$29<sub>/month</sub></h2>");
    $('#btn3').css({
        'color': '#ffffff',
        'background': '#FF9500'
    });
    $('#btn4').css({
        'color': '#454545',
        'background': '#ffffff'
    });
});

$("#btn4").click( () => {
    $("#freePlan").html("<h2>$0<sub>/month</sub></h2>");
    $("#paidPlan").html("<h2>$249<sub>/month</sub></h2>");
    $('#btn4').css({
        'color': '#ffffff',
        'background': '#FF9500'
    });
    $('#btn3').css({
        'color': '#454545',
        'background': '#ffffff'
    });
});

const faqBtns = document.querySelectorAll(".faq-container img");
const faqCloseBtns = document.querySelectorAll(".faqCloseBtn");

faqBtns.forEach(btn => {
  btn.addEventListener("click", () => {
    const faqModal = btn.nextElementSibling;
    faqModal.classList.add("show");
  });
});

faqCloseBtns.forEach(btn => {
  btn.addEventListener("click", () => {
    const faqModal = btn.closest(".faqans");
    faqModal.classList.remove("show");
  });
});

window.addEventListener("click", (e) => {
  if (e.target.classList.contains("faqans")) {
    e.target.classList.remove("show");
  }
});