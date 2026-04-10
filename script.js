
$(".price-btn").click(() => {
    alert("Feature is not Available");
});

$("#p-btn-2").click( () => {
    $("#freePlan").html("<h2>$0<sub>/month</sub></h2>");
    $("#paidPlan").html("<h2>$249<sub>/month</sub></h2>");
})
$("#p-btn-1").click( () => {    
    $("#freePlan").html("<h2>$0<sub>/month</sub></h2>");
    $("#paidPlan").html("<h2>$29<sub>/month</sub></h2>");
})

$(".faq-container img").click(() => {
    alert("Feature is not Available");
})

const modal = document.getElementById("storyModal");
const btn = document.getElementById("readMoreBtn");
const closeBtn = document.querySelector(".close-btn");

btn.addEventListener("click", function() {
  modal.style.display = "flex"; 
});

closeBtn.addEventListener("click", function() {
  modal.style.display = "none";
});

window.addEventListener("click", function(event) {
  if (event.target === modal) {
    modal.style.display = "none";
  }
});