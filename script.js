
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
