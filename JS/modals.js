$(document).ready(function(){
    $(".modal").modal();
    $("#contactModal").click(function(){
        console.log("hello");
       $("#contactForm").modal('open'); 
    });
});