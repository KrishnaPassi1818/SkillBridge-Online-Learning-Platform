
$(".price-btn").click(() => {
    var choice = confirm("Do you really want to get started?");
    if (choice) {
      window.location.href = "./html/pricing.html";
    }
});

$("#p-btn-2").click( () => {
    $("#freePlan").html("<h2>$0<sub>/month</sub></h2>");
    $("#paidPlan").html("<h2>$249<sub>/month</sub></h2>");
});
$("#p-btn-1").click( () => {    
    $("#freePlan").html("<h2>$0<sub>/month</sub></h2>");
    $("#paidPlan").html("<h2>$29<sub>/month</sub></h2>");
});

window.addEventListener("DOMContentLoaded", () => {
  const arrows = document.querySelectorAll(".aboutArrow");
  
  arrows.forEach((arrow) => {
    arrow.style.cursor = "pointer";
    arrow.addEventListener("click", () => {
      window.location.href = "/skillbridge/html/about.html";
    });
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



const readBtns = document.querySelectorAll(".readMoreBtn");
const closeBtns = document.querySelectorAll(".close-btn");

readBtns.forEach(function(btn){
    btn.addEventListener("click", function(){
        const modal = btn.nextElementSibling;
        modal.classList.add("show");
    });
});

closeBtns.forEach(function(btn){
    btn.addEventListener("click", function(){
        const modal = btn.closest(".modal-overlay");
        modal.classList.remove("show");
    });
});

window.addEventListener("click", function(e){
    if(event.target.classList.contains("modal-overlay")){
        e.target.classList.remove("show");
    }
});