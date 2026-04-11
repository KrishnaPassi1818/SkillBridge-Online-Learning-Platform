
$(".price-btn").click(() => {
    var choice = confirm(" Do you really want to get started?");
    if (choice == 1) {
      window.location.href = "/html/pricing.html"
    }
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