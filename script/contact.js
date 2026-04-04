
$("#contactForm").submit(function(e){
   e.preventDefault();

   let name = $("#name").val();
   let email = $("#email").val();

   alert("Name: " + name);
});